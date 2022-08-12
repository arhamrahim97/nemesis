<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\TraitUuid;

class LokasiPerencanaanKeong extends Model
{
    use HasFactory, TraitUuid;

    protected $table = 'lokasi_perencanaan_keong';
    protected $guarded = ['id'];

    public function lokasi_keong()
    {
        return $this->belongsTo(LokasiKeong::class, 'lokasi_keong_id');
    }
}
