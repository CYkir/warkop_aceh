  <header>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  </header>


  <nav class=" fixed top-0 left-0 w-full bg-white shadow-lg z-50 ">
    <div class=" w-full px-10 mx-auto flex items-center justify-between   py-3">
      <div class="flex"><a href="<?= site_url('home'); ?>">

          <img src="<?= base_url('assets/img/' . $home->logo) ?>" alt="Candu Kupi" class="h-10 ">
        </a>

      </div>

      <ul
        class="hidden md:flex items-center  space-x-8 font-poppins text-sm font-semibold text-black uppercase tracking-wide">
        <li>
          <a href="<?= base_url('home'); ?>"
            class="hover:text-[#493628] transition py-2 px-3 hover:bg-[#F4F0F1] rounded-2xl">
            <?= $this->lang->line('nav_home'); ?></a>
        </li>
        <li>
          <a href="<?= site_url('home/#tentang'); ?>" class="hover:bg-[#F4F0F1] rounded-2xl py-2 px-3  transition">
            <?= $this->lang->line('nav_about'); ?>
          </a>
        </li>
        <li>
          <a href="<?= site_url('home/#kontak'); ?>" class="hover:bg-[#F4F0F1] rounded-2xl py-2 px-3 transition">
            <?= $this->lang->line('nav_contact'); ?>
          </a>
        </li>
        <li>
          <a href="<?= site_url('menu'); ?>" class="hover:bg-[#F4F0F1] rounded-2xl py-2 px-3 transition">
            <?= $this->lang->line('nav_menu'); ?>
          </a>
        </li>

        <!-- Media Dropdown -->
        <li class="relative group">
          <a href="<?= site_url('media'); ?>" class="hover:bg-[#F4F0F1] rounded-2xl py-2 px-3 transition">
            <?= $this->lang->line('nav_media'); ?> ▾
          </a>
          <ul class="absolute hidden group-hover:block bg-white text-black my-2 rounded-2xl shadow-lg">
            <li>
              <a href="<?= site_url('media'); ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
                <?= $this->lang->line('nav_gallery'); ?>
              </a>
            </li>
            <li>
              <a href="<?= site_url('media/#testimoni') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
                <?= $this->lang->line('nav_testimoni'); ?>
              </a>
            </li>
          </ul>
        </li>

        <!-- Informasi Dropdown -->
        <li class="relative group">
          <a href="<?= base_url('informasi') ?>" class="hover:bg-[#F4F0F1] rounded-2xl py-2 px-3 transition">
            <?= $this->lang->line('nav_informasi'); ?> ▾
          </a>
          <ul class="absolute hidden group-hover:block bg-white text-black my-2 rounded-2xl shadow-lg">
            <li>
              <a href="<?= base_url('informasi/#story') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
                <?= $this->lang->line('nav_story'); ?>
              </a>
            </li>
            <li>
              <a href="<?= base_url('informasi/#edukasi') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
                <?= $this->lang->line('nav_edukasi'); ?>
              </a>
            </li>
            <li>
              <a href="<?= base_url('informasi/#experience') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
                <?= $this->lang->line('nav_experience'); ?>
              </a>
            </li>
          </ul>
        </li>

        <!-- Switch Language -->
        <li class="flex items-center space-x-3">
          <a href="<?= site_url('language/switch/id'); ?>"
            class="px-2 py-1 text-sm rounded bg-gray-100 hover:bg-gray-200">
            ID
          </a>
          <a href="<?= site_url('language/switch/en'); ?>"
            class="px-2 py-1 text-sm rounded bg-gray-100 hover:bg-gray-200">
            EN
          </a>
        </li>

      </ul>


      <!-- hamburger btn (mobile only) -->
      <div class="md:hidden flex justify-start space-x-3 items-center">
        <li class="flex items-center space-x-3">
          <a href="<?= site_url('language/switch/id'); ?>"
            class="px-2 py-1 text-sm rounded bg-gray-100 hover:bg-gray-200">
            ID
          </a>
          <a href="<?= site_url('language/switch/en'); ?>"
            class="px-2 py-1 text-sm rounded bg-gray-100 hover:bg-gray-200">
            EN
          </a>
        </li>
        <div>
          <button id="menu-btn" class=" flex flex-col space-y-1 focus:outline-none cursor-pointer">
            <span class="block w-6 h-0.5 bg-[#442010]"></span>
            <span class="block w-6 h-0.5 bg-[#442010]"></span>
            <span class="block w-6 h-0.5 bg-[#442010]"></span>
          </button>

        </div>

      </div>

    </div>

  </nav>
  <!-- mobile fullscreen nav -->
  <!-- mobile menu -->
  <div id="mobile-menu" class="hidden fixed inset-0 bg-white/20 backdrop-blur-lg z-40 flex-col justify-center items-center space-y-6 
         font-poppins text-lg font-bold text-[#442010] uppercase">

    <ul class="space-y-4 text-center">
      <li>
        <a href="<?= site_url('home') ?>" class="block py-2 px-4 rounded-2xl  hover:text-[#493628] transition">
          <?= $this->lang->line('nav_home'); ?>
        </a>
      </li>
      <li>
        <a href="<?= site_url('home/#tentang') ?>" class="block py-2 px-4 rounded-2xl hover:bg-[#F4F0F1] transition">
          <?= $this->lang->line('nav_about'); ?>
        </a>
      </li>
      <li>
        <a href="<?= site_url('home/#kontak') ?>" class="block py-2 px-4 rounded-2xl hover:bg-[#F4F0F1] transition">
          <?= $this->lang->line('nav_contact'); ?>
        </a>
      </li>
      <li>
        <a href="<?= site_url('menu'); ?>" class="block py-2 px-4 rounded-2xl hover:bg-[#F4F0F1] transition">
          <?= $this->lang->line('nav_menu'); ?>
        </a>
      </li>
      <li>
        <a href="<?= base_url('media') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
          <?= $this->lang->line('nav_gallery'); ?>
        </a>
        </a>
      </li>
      <li>
        <a href="<?= base_url('media/#testimoni') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
          <?= $this->lang->line('nav_testimoni'); ?>
        </a>
      </li>
      <li>
        <a href="<?= base_url('informasi/#story') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
          <?= $this->lang->line('nav_story'); ?>
        </a>
      </li>
      <li>
        <a href="<?= base_url('informasi/#edukasi') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
          <?= $this->lang->line('nav_edukasi'); ?>
        </a>
      </li>
      <li>
        <a href="<?= base_url('informasi/#experience') ?>" class="block px-4 py-2 hover:bg-[#F4F0F1] rounded-2xl">
          <?= $this->lang->line('nav_experience'); ?>
        </a>
      </li>


      <!-- Tombol Close -->
      <button id="close-btn" class="absolute top-6 right-6 text-3xl font-bold">&times; aku</button>
  </div>

  <script>
$(document).ready(function() {
  $("#menu-btn").on("click", function() {
    if ($("#mobile-menu").hasClass("hidden")) {
      // kalau hidden → tampilkan
      $("#mobile-menu").removeClass("hidden").addClass("flex").hide().fadeIn();
    } else {
      // kalau sudah tampil → sembunyikan
      $("#mobile-menu").fadeOut(function() {
        $(this).removeClass("flex").addClass("hidden");
      });
    }
  });

  // klik tombol close atau link menu
  $("#close-btn, #mobile-menu a").on("click", function() {
    $("#mobile-menu").fadeOut(function() {
      $(this).removeClass("flex").addClass("hidden");
    });
  });
});
  </script>