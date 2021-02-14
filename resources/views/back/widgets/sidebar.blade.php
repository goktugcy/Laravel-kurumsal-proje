<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{ route('admin.dashboard') }}">
            <!--<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">-->
            <h5 class="logo-text">Admin Panel</h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse"
            data-target="#user-dropdown">
            <div class="avatar"><img class="mr-3 side-user-img" src="{{ Auth::user()->avatar }}" alt="user avatar">
            </div>
            <div class="media-body">
                <h6 class="side-user-name">{{ Auth::user()->name }}</h6>
            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">
                <li><a href="{{ route('admin.settings.profile') }}"><i class="icon-settings"></i>
                        Ayarlar </a></li>
                <li><a href="{{ route('admin.logout') }}"><i class="icon-power"></i> Çıkış Yap </a>
                </li>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu">
        <li class="sidebar-header">Admin Menü</li>


        <li>
            <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                <i class="fa fa-home"></i> <span>Anasayfa</span>
            </a>
        </li>

        <li class="sidebar-header">İçerik İşlemleri</li>

        <li>
            <a href="{{ route('admin.about') }}" class="waves-effect">
                <i class="zmdi zmdi-calendar-check"></i> <span>Hakkımızda</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.doctors.index') }}" class="waves-effect">
                <i class="fa fa-stethoscope"></i> <span>Hekimler</span>
            </a>
        </li>

        <li class="sidebar-header">Site İşlemleri</li>

        <li>
            <a href="{{ route('admin.settings.index') }}" class="waves-effect">
                <i class="fa fa-cog"></i> <span>Ayarlar</span>
            </a>
        </li>

        <li>
            <a href="{{ route('admin.contact.index') }}" class="waves-effect">
                <i class="fa fa-envelope-o"></i> <span>Gelen Kutusu</span>
            </a>
        </li>

</div>
<!--End sidebar-wrapper-->
