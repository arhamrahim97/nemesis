@extends('dashboard.layouts.main')

@section('title')
    Perencanaan Intervensi Keong
@endsection

@section('titlePanelHeader')
    {{ $rencana_intervensi_keong->opd->nama }}
@endsection

@section('subTitlePanelHeader')
    {{ $rencana_intervensi_keong->sub_indikator }}
@endsection

@section('buttonPanelHeader')
    <a href="{{ url()->previous() }}" class="btn btn-secondary btn-round"><i class="fas fa-arrow-left mr-1"></i>
        Kembali</a>
@endsection

@push('styles')
    <style>
        #peta {
            height: 600px;
            margin-top: 0px;
        }
    </style>
@endpush

@section('contents')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Info Detail</div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-bordered">
                        <li class="list-group-item d-flex justify-content-between align-items-center">Tanggal Pengajuan:
                            <span
                                class="font-weight-bold">{{ Carbon\Carbon::parse($rencana_intervensi_keong->created_at)->translatedFormat('j F Y') }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Sub Indikator:<span
                                class="font-weight-bold">{{ $rencana_intervensi_keong->sub_indikator }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">OPD:<span
                                class="font-weight-bold">{{ $rencana_intervensi_keong->opd->nama }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Lokasi
                            ({{ $rencana_intervensi_keong->lokasi_perencanaan_keong->count() }}):<span
                                class="font-weight-bold">
                                <ul>
                                    @foreach ($rencana_intervensi_keong->lokasi_perencanaan_keong as $item)
                                        <li class="d-flex justify-content-end align-items-end">
                                            {{ $item->lokasi_keong->nama . ' ' }}
                                            (<span>{{ $item->lokasi_keong->desa->nama }}</span>)
                                        </li>
                                    @endforeach
                                </ul>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Status:
                            @if ($rencana_intervensi_keong->status == 1)
                                <span class="font-weight-bold badge badge-success">Disetujui</span>
                            @elseif($rencana_intervensi_keong->status == 2)
                                <span class="font-weight-bold badge badge-danger">Ditolak</span>
                            @else
                                <span class="font-weight-bold badge badge-warning">Menunggu Konfirmasi</span>
                            @endif
                        </li>
                        @if ($rencana_intervensi_keong->status == 2)
                            <li class="list-group-item d-flex justify-content-between align-items-center">Alasan Ditolak:
                                <span
                                    class="font-weight-bold text-danger">{{ $rencana_intervensi_keong->alasan_ditolak }}</span>
                            </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">List Dokumen Perencanaan</div>

                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-bordered">
                        @forelse ($rencana_intervensi_keong->dokumen_perencanaan_keong as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $item->nama }}
                                <a href="{{ Storage::url('uploads/dokumen/perencanaan/keong/' . $item->file) }}"
                                    target="_blank" class="badge badge-primary" data-toggle="tooltip" data-placement="top"
                                    title="Download">
                                    <i class="fas fa-download"></i>

                                </a>
                            </li>
                        @empty
                            <h5 class="text-center">Tidak Ada Dokumen</h5>
                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Titik Koordinat Lokasi Perencanaan Intervensi Keong</div>

                    </div>
                </div>
                <div class="card-body">
                    <div id="peta"></div>
                </div>
            </div>
        </div>
        @if ($rencana_intervensi_keong->status == 0)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Konfirmasi Perencanaan</div>

                        </div>
                    </div>
                    <div class="card-body pt-0">
                        @component('dashboard.components.forms.confirm',
                            [
                                'action' => url('rencana-intervensi-keong/konfirmasi/' . $rencana_intervensi_keong->id),
                            ])
                        @endcomponent
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        $('#nav-perencanaan').addClass('active');
        $('#nav-perencanaan .collapse').addClass('show');
        $('#nav-perencanaan .collapse #li-keong').addClass('active');

        $(document).ready(function() {
            initializeMap();
        })

        var map = null;

        function initializeMap() {
            if (map != undefined || map != null) {
                map.remove();
            }

            var center = [-1.3618072, 120.1619337];

            map = L.map("peta", {
                maxBounds: [
                    [-1.511127, 119.9637063],
                    [-1.21458, 120.2912363]
                ]
            }).setView(center, 11);
            map.addControl(new L.Control.Fullscreen());

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18,
                minZoom: 11
            }).addTo(map);

            var pin = L.Icon.extend({
                options: {
                    iconSize: [50, 50],
                    iconAnchor: [22, 94],
                    shadowAnchor: [4, 62],
                    popupAnchor: [-3, -76],
                },
            });

            var pinIcon = new pin({
                iconUrl: "{{ asset('assets/dashboard/img/pin/pin_red_x.png') }}",
                iconSize: [40, 40],
                iconAnchor: [25, 20],
                popupAnchor: [-4, -20]
            });

            map.invalidateSize();

            $.ajax({
                url: "{{ url('/map/desa') }}",
                type: "GET",
                success: function(response) {
                    if (response.status == 'success') {
                        for (var i = 0; i < response.data.length; i++) {
                            L.polygon(response.data[i].koordinatPolygon, {
                                    color: response.data[i].warna_polygon,
                                    weight: 1,
                                    opacity: 1,
                                    fillOpacity: 0.5
                                })
                                .bindTooltip(response.data[i].nama, {
                                    permanent: true,
                                    direction: "center",
                                    className: 'labelPolygon'
                                })
                                .addTo(map);
                        }
                    }
                },
            })

            $.ajax({
                url: "{{ url('rencana-intervensi-keong/map/' . $rencana_intervensi_keong->id) }}",
                type: "GET",
                success: function(response) {
                    if (response.status == 'success') {
                        for (var i = 0; i < response.data.length; i++) {
                            icon = pinIcon;
                            L.marker([response.data[i].latitude, response.data[i].longitude], {
                                    icon: icon
                                })
                                .bindPopup(
                                    "<p class='fw-bold my-0 text-center'>" + response.data[i].nama +
                                    "</p><hr>" +
                                    "<p class='my-0'>Desa : " + response.data[i].desa
                                    .nama + "</p>"
                                )
                                // .on('click', L.bind(petaKlik, null, data[0][i].id))
                                .addTo(map);
                        }
                    }
                },
            })
        }
    </script>
@endpush
