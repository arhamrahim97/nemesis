 <!-- Navbar Header -->
 <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
     <div class="container-fluid">
         <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
             <li class="nav-item dropdown hidden-caret">
                 <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-bell"></i>
                     <span class="notification">4</span>
                 </a>
                 <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                     <li>
                         <div class="dropdown-title">You have 4 new notification</div>
                     </li>
                     <li>
                         <div class="notif-scroll scrollbar-outer">
                             <div class="notif-center">
                                 <a href="#">
                                     <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i>
                                     </div>
                                     <div class="notif-content">
                                         <span class="block">
                                             New user registered
                                         </span>
                                         <span class="time">5 minutes ago</span>
                                     </div>
                                 </a>
                                 <a href="#">
                                     <div class="notif-icon notif-success"> <i class="fa fa-comment"></i>
                                     </div>
                                     <div class="notif-content">
                                         <span class="block">
                                             Rahmad commented on Admin
                                         </span>
                                         <span class="time">12 minutes ago</span>
                                     </div>
                                 </a>
                                 <a href="#">
                                     <div class="notif-img">
                                         <img src="{{ asset('assets/dashboard') }}/img/user.png" alt="Img Profile">
                                     </div>
                                     <div class="notif-content">
                                         <span class="block">
                                             Reza send messages to you
                                         </span>
                                         <span class="time">12 minutes ago</span>
                                     </div>
                                 </a>
                                 <a href="#">
                                     <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i>
                                     </div>
                                     <div class="notif-content">
                                         <span class="block">
                                             Farrah liked Admin
                                         </span>
                                         <span class="time">17 minutes ago</span>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     </li>
                     <li>
                         <a class="see-all" href="javascript:void(0);">See all notifications<i
                                 class="fa fa-angle-right"></i> </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item dropdown hidden-caret">
                 <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                     <i class="fa fa-th"></i>
                 </a>
                 <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                     <div class="quick-actions-header">
                         <span class="title mb-1">Quick Actions</span>
                         <span class="subtitle op-8">Shortcuts</span>
                     </div>
                     <div class="quick-actions-scroll scrollbar-outer">
                         <div class="quick-actions-items">
                             <div class="row m-0">
                                 <a class="col-6 col-md-4 p-0" href="#">
                                     <div class="quick-actions-item">
                                         <div class="avatar-item bg-danger rounded-circle">
                                             <i class="far fa-calendar-alt"></i>
                                         </div>
                                         <span class="text">Calendar</span>
                                     </div>
                                 </a>
                                 <a class="col-6 col-md-4 p-0" href="#">
                                     <div class="quick-actions-item">
                                         <div class="avatar-item bg-warning rounded-circle">
                                             <i class="fas fa-map"></i>
                                         </div>
                                         <span class="text">Maps</span>
                                     </div>
                                 </a>
                                 <a class="col-6 col-md-4 p-0" href="#">
                                     <div class="quick-actions-item">
                                         <div class="avatar-item bg-info rounded-circle">
                                             <i class="fas fa-file-excel"></i>
                                         </div>
                                         <span class="text">Reports</span>
                                     </div>
                                 </a>
                                 <a class="col-6 col-md-4 p-0" href="#">
                                     <div class="quick-actions-item">
                                         <div class="avatar-item bg-success rounded-circle">
                                             <i class="fas fa-envelope"></i>
                                         </div>
                                         <span class="text">Emails</span>
                                     </div>
                                 </a>
                                 <a class="col-6 col-md-4 p-0" href="#">
                                     <div class="quick-actions-item">
                                         <div class="avatar-item bg-primary rounded-circle">
                                             <i class="fas fa-file-invoice-dollar"></i>
                                         </div>
                                         <span class="text">Invoice</span>
                                     </div>
                                 </a>
                                 <a class="col-6 col-md-4 p-0" href="#">
                                     <div class="quick-actions-item">
                                         <div class="avatar-item bg-secondary rounded-circle">
                                             <i class="fas fa-credit-card"></i>
                                         </div>
                                         <span class="text">Payments</span>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </li>
             <li class="text-white font-weight-bold mr-2">
                 {{ Auth::user()->role == 'Admin' || Auth::user()->role == 'Pimpinan' ? Auth::user()->nama : Auth::user()->opd->nama }}
             </li>
             <li class="nav-item dropdown hidden-caret">
                 <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                     <div class="avatar-sm">
                         <img src="{{ asset('assets/dashboard') }}/img/user.png" alt="..."
                             class="avatar-img rounded-circle">
                     </div>
                 </a>
                 <ul class="dropdown-menu dropdown-user animated fadeIn">
                     <div class="dropdown-user-scroll scrollbar-outer">
                         <li>
                             <div class="user-box">
                                 <div class="avatar-lg"><img src="{{ asset('assets/dashboard') }}/img/user.png"
                                         alt="image profile" class="avatar-img rounded"></div>
                                 <div class="u-text">
                                     <h4>{{ Auth::user()->role == 'Admin' || Auth::user()->role == 'Pimpinan' ? Auth::user()->nama : Auth::user()->opd->nama }}
                                     </h4>

                                     <p class="text-muted">{{ Auth::user()->role }}</p>
                                     {{-- <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a> --}}
                                 </div>
                             </div>
                         </li>
                         <li>
                             <div class="dropdown-divider"></div>
                             {{-- <a class="dropdown-item" href="#">My Profile</a>
                             <a class="dropdown-item" href="#">My Balance</a>
                             <a class="dropdown-item" href="#">Inbox</a>
                             <div class="dropdown-divider"></div> --}}
                             <a class="dropdown-item" href="{{ url('pengaturan-akun') }}">Pengaturan Akun</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="{{ url('/logout') }}">Keluar</a>
                         </li>
                     </div>
                 </ul>
             </li>
         </ul>
     </div>
 </nav>
 <!-- End Navbar -->
