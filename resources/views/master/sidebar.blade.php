<nav class="sidebar">
      <div class="sidebar-header">
        @if (Auth::user()->role == 'admin')
            <a href="{{route('admin.dashboard')}}" class="sidebar-brand">
            Kasir Online
            </a>
        @else
            <a href="{{route('user.dashboard')}}" class="sidebar-brand">
            Kasir Online
            </a>
        @endif
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            @if (Auth::user()->role == 'admin')
              <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
              </a>
            @else
              <a href="{{route('user.dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>

            @endif
          </li>
          <li class="nav-item">
            <a href="{{route('admin.customer')}}" class="nav-link">
              <i class="link-icon mdi mdi-contacts" ></i>
              <span class="link-title">Kontak pelanggan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon mdi mdi-inbox"></i>
              <span class="link-title">Daftar</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('admin.produk')}}" class="nav-link">Produk</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.index_supplier')}}" class="nav-link">Supplier</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('admin.index_jenbar')}}" class="nav-link">Jenis Barang</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.pembelian')}}" class="nav-link">
              <i class="link-icon mdi mdi-arrow-down-bold-circle"></i>
              <span class="link-title">Pembelian </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.penjualan')}}" class="nav-link">
              <i class="link-icon mdi mdi-arrow-up-bold-circle"></i>
              <span class="link-title">Penjualan </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="link-icon" data-feather="book-open"></i>
              <span class="link-title">Laporan</span>
            </a>
          </li>
          @if (Auth::user()->role == 'admin')
            <li class="nav-item">
            <a href="{{route('admin.user')}}" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">User</span>
            </a>
          </li>
          @endif
          
        </ul>
      </div>
    </nav>