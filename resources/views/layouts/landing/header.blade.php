  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center @auth bg-danger @endauth">
      <div class="container-fluid d-flex align-items-center justify-content-between">

          <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
              <h1 class="text-white">SIEMPUS</h1>
              <span>.</span>
          </a>

          @auth
              <!-- Nav Menu -->
              <nav id="navmenu" class="navmenu">
                  <ul>
                      <li><a href="{{ route('user.ebook.index') }}" class="text-white">E-Book</a></li>
                      <li><a href="#" class="text-white">E-Jurnal</a></li>
                  </ul>

                  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
              </nav><!-- End Nav Menu -->

              <a class="btn-getstarted fw-bold" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>

          @endauth

          @guest
              <!-- Nav Menu -->
              <nav id="navmenu" class="navmenu">
                  <ul>
                      <!-- <li><a href="index.html#about">Profile</a></li> -->
                      <li class="dropdown has-dropdown">
                          <a href="#"><span>Profile</span>
                              <i class="bi bi-chevron-down"></i>
                          </a>
                          <ul class="dd-box-shadow">
                              <li><a href="#">Sejarah</a></li>
                              <li><a href="#">Visi dan Misi</a></li>
                              <li><a href="#">Tugas dan Fungsi</a></li>
                          </ul>
                      </li>
                      <li class="dropdown has-dropdown">
                          <a href="#"><span>Jaminan Mutu</span>
                              <i class="bi bi-chevron-down"></i>
                          </a>
                          <ul class="dd-box-shadow">
                              <li><a href="#">Rencana Operasional</a></li>
                          </ul>
                      </li>
                      <li class="dropdown has-dropdown">
                          <a href="#"><span>Layanan</span>
                              <i class="bi bi-chevron-down"></i>
                          </a>
                          <ul class="dd-box-shadow">
                              <li><a href="#">Katalog</a></li>
                              <li><a href="#">Bookshelf</a></li>
                              <li><a href="#">Repository</a></li>
                          </ul>
                      </li>
                      <li class="dropdown has-dropdown">
                          <a href="#"><span>Informasi</span>
                              <i class="bi bi-chevron-down"></i>
                          </a>
                          <ul class="dd-box-shadow">
                              <li><a href="#">Peraturan Perpustakaan</a></li>
                              <li><a href="#">Format Pengumpulan Tugas Akhir</a></li>
                              <li><a href="#">Tata Cara Peminjaman dan Pengembalian</a></li>
                          </ul>
                      </li>
                      <li><a href="index.html#services">Fasilitas</a></li>
                      <li><a href="index.html#contact">Contact</a></li>
                      <li><a href="index.html#contact">Usul Buku</a></li>
                  </ul>

                  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
              </nav><!-- End Nav Menu -->

              <a class="btn-getstarted fw-bold" href="{{ route('login') }}">Login</a>
          @endguest

      </div>
  </header><!-- End Header -->
