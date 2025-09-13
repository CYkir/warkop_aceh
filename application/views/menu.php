<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/dist/aos.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  <title>E- Menu</title>
</head>

<body>
  <?php require 'includes/navbar.php'; ?>

  <section class="relative min-h-screen bg-white/20 backdrop-blur-xl">
    <div data-aos="fade-down" class="text-center mt-[100px]">
      <h2 id="tentang" class="font-display text-2xl 	 font-semibold text-[#442010]">
        <?= $this->lang->line('menu'); ?>
      </h2>
    </div>
    <div data-aos="fade-down" class="mx-auto  my-3">
      <img data-aos="fade-down" src="<?= base_url('assets/img/' . $about->logo) ?>" alt="" class="mx-auto w-50">
    </div>

    <div class="flex flex-wrap justify-center items-stretch gap-6 mt-10 w-full md:w-10/12 mx-auto">
      <?php foreach ($emenu as $menu): ?>
      <div data-aos="fade-up" class="flex flex-col bg-white rounded-xl shadow-2xl w-[150px]">
        <!-- Gambar -->
        <div class="p-2">
          <img src="<?= base_url('assets/img/' . $menu->logo) ?>" class="object-cover w-[150px] h-[100px] rounded-xl"
            alt="">
        </div>

        <!-- Konten -->
        <div class="p-3 flex flex-col flex-1 justify-between">
          <div>
            <h2 class="font-poppins font-bold text-sm">
              <?= $menu->judul ?>
            </h2>
            <p class="mt-3 font-poppins text-[8pt] font-normal text-gray-400">
              <?= field_lang($menu, 'deskripsi_singkat') ?>
            </p>
          </div>

          <!-- Harga & Tombol -->
          <div class="flex justify-between items-center mt-5">
            <h2 class="font-poppins text-[8pt] font-bold">Rp <?= number_format($menu->harga, 0, ',', '.'); ?></h2>
            <a href="" class="px-3 py-1 bg-[#442010] hover:bg-[#CC7B43] text-[9pt] text-white rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
                <path fill="#ffff"
                  d="M2.787 2.28a.75.75 0 0 1 .932.507l.55 1.863h14.655c1.84 0 3.245 1.717 2.715 3.51l-1.655 5.6c-.352 1.193-1.471 1.99-2.715 1.99H8.113c-1.244 0-2.362-.797-2.715-1.99L2.281 3.212a.75.75 0 0 1 .506-.931M6.25 19.5a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0m8 0a2.25 2.25 0 1 1 4.5 0a2.25 2.25 0 0 1-4.5 0" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>



  </section>

  <?php require 'includes/footer.php'; ?>

  <script src=" <?= base_url('assets/dist/aos.js'); ?>"></script>
  <script>
  AOS.init({
      duration: 1000
    }

  );
  </script>

</body>

</html>
