  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('admin.index') ? '' : 'collapsed' }}"
                  href="{{ route('admin.index') }}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('admin.ebook.*') ? '' : 'collapsed' }}"
                  href="{{ route('admin.ebook.index') }}">
                  <i class="fa-solid fa-book"></i>
                  <span>E Book</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('admin.jurnal.*') ? '' : 'collapsed' }}"
                  href="{{ route('admin.jurnal.index') }}">
                  <i class="fa-solid fa-book-journal-whills"></i>
                  <span>Jurnal</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('admin.kategori.*') ? '' : 'collapsed' }}"
                  href="{{ route('admin.kategori.index') }}">
                  <i class="fa-solid fa-table-list"></i>
                  <span>Kategori</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('admin.menu.*') ? '' : 'collapsed' }}"
                  href="{{ route('admin.menu.index') }}">
                  <i class="fa-solid fa-bars"></i>
                  <span>Menu</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('admin.ip.*') ? '' : 'collapsed' }}"
                  href="{{ route('admin.ip.index') }}">
                  <i class="fa-solid fa-network-wired"></i>
                  <span>IP Local</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="fa-solid fa-users"></i>
                  <span>Pengguna</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-heading">Monitoring</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="fa-solid fa-list-check"></i>
                  <span>Riwayat Aktivitas</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="fa-solid fa-database"></i>
                  <span>Backup Database</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="#">
                  <i class="fa-solid fa-bug"></i>
                  <span>Error Log</span>
              </a>
          </li><!-- End Dashboard Nav -->
      </ul>

  </aside><!-- End Sidebar-->
