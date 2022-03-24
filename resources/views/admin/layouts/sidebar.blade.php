<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <img style="width: 45px;" src="{{ asset('images/logo.png') }}" alt="logo">
        <span class="app-brand-text fs-6 fw-bold menu-text ms-2">Masjid Jami Al-Ma'mur</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="{{ route('admin_dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Layouts -->
      {{-- <li class="menu-item active open"> --}}
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-info-circle"></i>
          <div data-i18n="Layouts">Informasi Kontak</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('layanan_list') }}" class="menu-link">
              <div data-i18n="Without menu">Layanan</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('social_media') }}" class="menu-link">
              <div data-i18n="Without navbar">Informasi Social Media</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Updates</span>
      </li>
      <li class="menu-item">
        <a href="{{ route('infaq_list') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-bank"></i>
          <div data-i18n="Analytics">Laporan Infaq</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-edit"></i>
          <div data-i18n="Authentications">Artikel</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('artikel_tambah') }}" class="menu-link">
              <div data-i18n="Basic">Tambah Artikel</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('artikel_list') }}" class="menu-link">
              <div data-i18n="Basic">List Artikel</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="{{ route('agenda_list') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-calendar-check"></i>
          <div data-i18n="Analytics">Agenda Jum'at</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('gallery_list') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-image-add"></i>
          <div data-i18n="Analytics">Gallery</div>
        </a>
      </li>
      <!-- Components -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Extenal</span></li>
      <!-- User interface -->
      <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-user-pin"></i>
          <div data-i18n="User interface">Pengurus Masjid</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('pengurus_tambah') }}" class="menu-link">
              <div data-i18n="Accordion">Tambah Pengurus</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('pengurus_list') }}" class="menu-link">
              <div data-i18n="Accordion">List Pengurus</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Extended components -->

      <li class="menu-item">
        <a href="{{ route('slider') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-copy"></i>
          <div data-i18n="Boxicons">Slider Foto</div>
        </a>
      </li>

      <!-- Forms & Tables -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Konfigurasi</span></li>
      <!-- Forms -->
      <li class="menu-item">
        <a href="{{ route('users_list') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user-plus"></i>
          <div data-i18n="Analytics">User Account</div>
        </a>
      </li>
    </ul>
  </aside>
  <!-- / Menu -->
