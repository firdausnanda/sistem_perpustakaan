  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center @auth bg-danger @endauth">
      <div class="container-fluid d-flex align-items-center justify-content-between">

          <a href="#" class="logo d-flex align-items-center me-auto me-xl-0">
              <img src="{{ asset('img/logo.png') }}" alt="">
              {{-- <img id="hitam" class="d-none" style="min-width: auto; min-height: 90px;" src="{{ asset('img/title-hitam.png') }}" alt=""> --}}
              <h5 id="judul" class="text-white fw-bold">
                  SIEMPUS
                  <span>.</span><br>
                  <span id="description" class="text-white d-block" style="font-size: 12px; font-weight: 400">Sistem Informasi
                      Perpustakaan</span>
              </h5>
          </a>

          @auth
              <!-- Nav Menu -->
              <nav id="navmenu" class="navmenu">
                  <ul>
                      <li><a href="{{ route('user.index') }}">Menu</a></li>
                      <li><a href="{{ route('user.ebook.index') }}">E-Book</a></li>
                      <li><a href="{{ route('user.jurnal.index') }}">E-Jurnal</a></li>
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
                      <li><a href="index.html">Fasilitas</a></li>
                      <li><a href="index.html">Contact</a></li>
                      <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeIJ9ssG3mzsJpMmw4KJ9xBsS2E_dcRSOqQS5FsbZ5oBysz7g/viewform" target="_blank">Usul Buku</a></li>
                  </ul>

                  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
              </nav><!-- End Nav Menu -->

              <a class="btn-getstarted fw-bold" href="{{ route('login') }}">Login</a>
          @endguest

      </div>
  </header><!-- End Header -->
