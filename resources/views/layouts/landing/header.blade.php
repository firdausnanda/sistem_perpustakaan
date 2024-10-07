  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">

          <a href="{{ route('landing.index') }}" class="logo d-flex align-items-center me-auto">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSKY1yTVmGdIKZdNwxCKzbMJFLxrSpOnjDTg&s"
                  alt="">
              <h1 class="sitename" style="line-height: 20px;margin-top: 4px;">Perpustakaan Digital<br> <span
                      style="font-size: 16px;font-weight: 400;">ITSK RS dr. Soepraoen</span></h1>
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                  <li class="dropdown"><a href="#"><span>Profile</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="{{ route('landing.sejarah') }}">Sejarah</a></li>
                          <li><a href="{{ route('landing.visimisi') }}">Visi dan Misi</a></li>
                          <li><a href="{{ route('landing.tugas') }}">Tugas dan Fungsi</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Jaminan Mutu</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="#">Rencana Operasional</a></li>
                          <li><a href="#">Pedoman Perpustakaan</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Informasi</span> <i
                              class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="#">Peraturan Perpustakaan</a></li>
                          <li><a href="#">Format Pengumpulan Tugas Akhir</a></li>
                          <li><a href="#">Tata Cara Peminjaman dan Pengembalian</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Fasilitas</a></li>
                  <li><a href="#">Kontak</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <a class="btn-getstarted"
              href="https://docs.google.com/forms/d/e/1FAIpQLSeIJ9ssG3mzsJpMmw4KJ9xBsS2E_dcRSOqQS5FsbZ5oBysz7g/viewform"
              target="_blank">Usul Buku</a>

      </div>
  </header>
