<footer class="bg-[#2c1c12] text-white pt-16 pb-8 px-6 md:px-20 mt-10">
  <!-- Bagian atas -->
  <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12">
    <!-- About -->
    <div>
      <h3 class="text-xl font-bold mb-4 font-poppins"><?= $this->lang->line('tentang') ?></h3>
      <p class="text-gray-300 leading-relaxed mb-4">
        <?= field_lang($about, 'deskripsi_singkat'); ?>
      </p>
      <div class="space-y-3 text-gray-300">
        <div class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#d6a97c]" fill="currentColor"
            viewBox="0 0 24 24">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
          </svg>
          <span>Jl. Kopi Nusantara No. 17, Banda Aceh</span>
        </div>
        <div class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#d6a97c]" fill="currentColor"
            viewBox="0 0 24 24">
            <path
              d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.07 21 3 13.93 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.24 1.01l-2.21 2.2z" />
          </svg>
          <span>+62 812 3456 7890</span>
        </div>
        <div class="flex items-center gap-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#d6a97c]" fill="currentColor"
            viewBox="0 0 24 24">
            <path d="M20 4H4a2 2 0 0 0-2 2v1.5l10 5.5l10-5.5V6a2 2 0 0 0-2-2z" />
            <path d="M22 8.5l-10 5.5l-10-5.5V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2z" />
          </svg>
          <span>info@canduwarkop.com</span>
        </div>
      </div>
    </div>

    <!-- Useful Links -->
    <div>
      <h3 class="text-xl font-bold mb-4 font-poppins"><?= $this->lang->line('navi_menu') ?></h3>
      <ul class="space-y-3 text-gray-300">
        <li><a href="<?= site_url('home') ?>"
            class="hover:text-[#d6a97c] transition font-poppins text-normal "><?= $this->lang->line('nav_home') ?></a>
        </li>
        <li><a href="<?= site_url('media') ?>" class="hover:text-[#d6a97c] transition font-poppins text-normal">
            <?= $this->lang->line('nav_gallery') ?>
          </a>
        </li>
        <li><a href="<?= site_url('media/#testimoni') ?>"
            class="hover:text-[#d6a97c] transition font-poppins text-normal">
            <?= $this->lang->line('nav_testimoni') ?>
          </a>
        </li>
        <li><a href="<?= site_url('menu') ?>" class="hover:text-[#d6a97c] transition font-poppins text-normal">
            <?= $this->lang->line('nav_menu') ?>
          </a>
        </li>
        <li>
          <a href="<?= site_url('home/#contact') ?>" class="hover:text-[#d6a97c] transition font-poppins text-normal">
            <?= $this->lang->line('nav_contact') ?>
          </a>
        </li>
        <li>
          <a href="<?= site_url('home/#tentang') ?>" class="hover:text-[#d6a97c] transition font-poppins text-normal">
            <?= $this->lang->line('nav_tentang') ?>

          </a>
        </li>
      </ul>
    </div>

    <!-- Opening Hours -->
    <div>
      <h3 class="text-xl font-bold mb-4 font-poppins">
        <?= $this->lang->line('opening_hours'); ?>
      </h3>
      <p class="text-gray-300 mb-2 font-poppins">
        <?= $this->lang->line('opening_desc'); ?>
      </p>
      <p class="text-[#d6a97c] font-semibold font-poppins">
        <?= $this->lang->line('opening_weekdays'); ?>
      </p>
      <p class="mb-4 font-poppins">
        <?= $this->lang->line('opening_weekdays_time'); ?>
      </p>
      <p class="text-[#d6a97c] font-semibold font-poppins">
        <?= $this->lang->line('opening_weekend'); ?>
      </p>
      <p class="font-poppins">
        <?= $this->lang->line('opening_weekend_time'); ?>
      </p>
    </div>

  </div>

  <!-- Bagian bawah -->
  <div
    class="border-t border-gray-700 mt-12 pt-6 flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm">
    <p class="font-poppins">
      <?= $this->lang->line('footer_rights'); ?>
    </p>
    <div class="flex gap-6 mt-4 md:mt-0">
      <a href="#" class="hover:text-[#d6a97c] transition font-poppins">
        <?= $this->lang->line('footer_privacy'); ?>
      </a>
      <a href="#" class="hover:text-[#d6a97c] transition font-poppins">
        <?= $this->lang->line('footer_support'); ?>
      </a>
      <a href="#" class="hover:text-[#d6a97c] transition font-poppins">
        <?= $this->lang->line('footer_terms'); ?>
      </a>
    </div>
  </div>

</footer>
