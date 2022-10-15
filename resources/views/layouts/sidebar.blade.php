   <nav class="sidebar">
       <div class="text text-center">
           <img src="../image/uin.png" alt="" class="main-logo">
           <div class="sidebar-title text-center">
               <h3 class="fw-bold mt-3 ">ARSIP DIGITAL </h3>
               <h3 class="fw-bold mb-3 ">SEKOLAH</h3>
           </div>

       </div>
       <ul>
           <li class="  {{ request()->is('home') ? 'active' : '' }}"><a href="{{ url('home') }}">Home</a></li>
           <li class=" {{ request()->is('guru') ? 'active' : '' }}"><a href="{{ url('guru') }}">Guru</a></li>
           <li class=" {{ request()->is('pegawai') ? 'active' : '' }}"><a href="{{ url('pegawai') }}">Pegawai</a>
           </li>
           <li class=" {{ request()->is('murid') ? 'active' : '' }}"><a href="{{ url('murid') }}">Murid</a></li>
           <li>
               <a href="#" class="feat-btn">Data Lainnya
                   <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                   <li class=" {{ request()->is('ekstrakulikuler') ? 'active' : '' }}"><a
                           href="{{ url('ekstrakulikuler') }}">Ekstrakulikuler</a></li>
                   <li class=" {{ request()->is('organisasi') ? 'active' : '' }}"><a
                           href="{{ url('organisasi') }}">Organisasi</a></li>
                   <li class=" {{ request()->is('kelas') ? 'active' : '' }}"><a href="{{ url('kelas') }}">Kelas</a>
                   </li>
                   <li class=" {{ request()->is('spp') ? 'active' : '' }}"><a href="{{ url('spp') }}">SPP</a>
                   </li>
                   <li class=" {{ request()->is('mapel') ? 'active' : '' }}"><a href="{{ url('mapel') }}">Mata
                           Pelajaran</a></li>
                   <li class="{{ request()->is('kartu-perpustakaan') ? 'active' : '' }}"><a
                           href="{{ url('kartu-perpustakaan') }}">Kartu Perpustakaan</a></li>
               </ul>
           </li>
           <li><a href="{{ url('logout') }}">Log out</a></li>
       </ul>
   </nav>
