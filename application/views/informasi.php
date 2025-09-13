<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/dist/aos.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
  <title>Informasi</title>
</head>

<body>
  <!-- Navbar -->
  <?= require 'includes/navbar.php'; ?>

  <section id="informasi" class=" text-gray-800 mb-[50px] relative overflow-hidden">


    <div class="container mx-auto px-6 lg:px-8 max-w-7xl relative">

      <!-- Story -->
      <div id="story"
        class="grid md:grid-cols-2 gap-12 items-start mb-20 mt-[100px] animate__animated animate__zoomIn ">
        <!-- Gambar -->
        <div class="relative">
          <img src="<?= base_url('assets/img/' . $story->photo1) ?>" alt="Story Candu Kupi"
            class="rounded-2xl shadow-lg">
          <span
            class="absolute -top-4 -left-4 bg-[#6b4226] text-white px-4 py-2 rounded-lg text-sm font-semibold font-poppins shadow-md">
            <?= $this->lang->line('cerita'); ?>
          </span>
        </div>
        <!-- Text -->
        <div>
          <h2 class="text-3xl md:text-4xl font-bold mb-6 font-poppins"> <?= field_lang($story, 'judul') ?>
          </h2>
          <p class="text-lg/8 text-justify font-poppins text-gray-700 leading-relaxed">
            <?= field_lang($story, 'deskripsi_lengkap') ?>
          </p>

          <blockquote class="italic text-[#6b4226] font-normal font-poppins mt-3">
            “<?= field_lang($story, 'deskripsi_singkat'); ?>”
          </blockquote>
        </div>
      </div>


      <!-- Coffee Education Section -->
      <div id="edukasi" class=" my-5">
        <div class="text-center mb-20">
          <div data-aos="fade-up"
            class="inline-block bg-coffee-200 px-6 py-2 rounded-full text-coffee-700 font-semibold text-sm uppercase tracking-wider mb-6">
            <?= $this->lang->line('edukasi_badge'); ?>
          </div>
          <h2 data-aos="fade-up" class="text-2xl md:text-3xl font-bold mb-6 gradient-text">
            <?= $this->lang->line('edukasi_title'); ?>
          </h2>
          <p data-aos="fade-up" class="text-xl text-gray-600 max-w-2xl mx-auto">
            <?= $this->lang->line('edukasi_title'); ?>
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <?php foreach ($edukasi as $edu): ?>
          <div data-aos="zoom-in-up" class="group card-hover bg-white rounded-3xl shadow-lg overflow-hidden">
            <div class="h-48 bg-gradient-to-br from-coffee-400 to-coffee-500 relative overflow-hidden">
              <div class="absolute inset-0  bg-cover bg-center opacity-80">
                <img src="<?= base_url('assets/img/'  . $edu->hero_image) ?>" alt="" class="object-cover w-full">
              </div>
              <div class="absolute inset-0 bg-[#6b4226]/20"></div>

            </div>
            <div class="p-8">
              <h3 class="text-2xl font-bold mb-4 text-coffee-800">
                <?= field_lang($edu, 'judul') ?>
              </h3>
              <p class="text-gray-600 leading-relaxed font-poppins text-sm text-justify mb-6">
                <?= field_lang($edu, 'deskripsi_lengkap') ?>
              </p>
              <div
                class="flex items-center text-coffee-600 font-semibold group-hover:text-coffee-700 transition-colors">
                <span><?= $this->lang->line('learn_more'); ?></span>
                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-2 transition-transform" fill="currentColor"
                  viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
            </div>
          </div>
          <?php endforeach  ?>
        </div>
      </div>

      <!-- Experience Section -->
      <div id="experience" class="py-16 ">
        <div class="max-w-6xl mx-auto px-6 text-center">
          <!-- Hero Title -->
          <h2 data-aos="fade-up" class="text-2xl md:text-3xl font-bold font-poppins text-[#6b4226] mb-4">Experience
            <?= $this->lang->line('exp_title') ?>
          </h2>
          <p data-aos="fade-up" class="text-lg font-poppins text-gray-600 mb-12 text-center my-4">
            <?= $this->lang->line('exp_desc') ?>
          </p>

          <!-- Grid Content -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($experience as $exp): ?>
            <!-- Card 1 -->
            <div data-aos="zoom-in-up"
              class="p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition hover:translate-y-3">
              <div class="text-4xl mb-4 text-center mx-auto"><img src="<?= base_url('assets/img/' . $exp->logo) ?>"
                  alt="" class="rounded-2xl object-cover h-[100px] mx-auto"></div>
              <h3 class="text-2xl font-poppins font-bold text-gray-800 mb-2"><?= field_lang($exp, 'judul') ?></h3>
              <p class="text-gray-600 text-sm font-poppins">
                <?= field_lang($exp, 'deskripsi_singkat') ?>
              </p>
            </div>
            <?php endforeach; ?>



          </div>
        </div>
      </div>
    </div>
  </section>




  <?php require 'includes/footer.php'; ?>

  <script src="<?= base_url('assets/dist/aos.js'); ?>"></script>
  <script>
  AOS.init({
      duration: 1000
    }

  );
  </script>
</body>

</html>
