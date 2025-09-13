<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Media</title>
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>" />

  <link rel="stylesheet" href="<?= base_url('assets/dist/aos.css'); ?>" />



</head>

<body>
  <!-- Navbar -->
  <?= require 'includes/navbar.php'; ?>

  <section class="bg-white/20 backdrop-blur-4xl py-16">

    <div class="flex justify-center space-x-8 w-full overflow-hidden  ">
      <!-- kolom 1 -->
      <div class="flex flex-col space-y-5 -mt-[100px]">
        <div class="w-[147px] h-[187px] bg-black/20 backdrop-blur-2xl rounded-2xl "></div>
        <div class="w-[147px] h-[187px] bg-orange-300 rounded-2xl animate__animated animate__pulse animate__infinite">
          <img src="<?= base_url('assets/img/' . $gallery->photo1); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->photo2); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
      </div>
      <!-- kolom 2 -->
      <div class="flex flex-col space-y-5 -mt-[150px]">
        <div class="w-[147px] h-[187px] bg-black/20 backdrop-blur-2xl  rounded-2xl "></div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->photo3); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->photo4); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
      </div>
      <!-- kolom 3 -->
      <div class="flex flex-col space-y-5 -mt-[58px]">
        <div class="w-[147px] h-[187px] bg-black/20 backdrop-blur-2xl rounded-2xl "></div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->photo5); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
      </div>
      <!-- kolom 4 -->
      <div class="flex flex-col space-y-5 -mt-[150px]">
        <div class="w-[147px] h-[187px] bg-black/20 backdrop-blur-2xl  rounded-2xl "></div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->logo); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
      </div>
      <!-- kolom 5 -->
      <div class="flex flex-col space-y-5 -mt-[58px]">
        <div class="w-[147px] h-[187px] bg-black/20 backdrop-blur-2xl  rounded-2xl "></div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->hero_image); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
      </div>
      <div class="flex flex-col space-y-5 -mt-[150px]">
        <div class="w-[147px] h-[187px] bg-black/20 backdrop-blur-2xl rounded-2xl "></div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->photo1); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->photo2); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
      </div>
      <div class="flex flex-col space-y-5 -mt-[100px]">
        <div class="w-[147px] h-[187px] bg-black/20 backdrop-blur-2xl  rounded-2xl "></div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->photo3); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
        <div class="w-[147px] h-[187px] bg-orange-300 animate__animated animate__pulse animate__infinite rounded-2xl ">
          <img src="<?= base_url('assets/img/' . $gallery->photo4); ?>" alt="" srcset=""
            class="object-cover w-full h-full rounded-2xl shadow-2xl">
        </div>
      </div>
    </div>

    <!-- Teks di bawah -->
    <div class="text-center -mt-[150px] animate__animated animate__fadeInUp ">
      <span class="bg-[#442010] text-white text-2xl px-6 py-2 rounded-xl font-display font-semibold">
        <?= $this->lang->line('nav_gallery') ?>
      </span>
      <h2 class="text-2xl md:text-3xl font-bold text-[#442010] font-poppins mt-4">
        <?= $this->lang->line('trusted_title'); ?>
      </h2>
      <p class="mt-4 text-[#442010] font-poppins font-normal max-w-xl mx-auto">
        <?= $this->lang->line('trusted_desc'); ?>
      </p>

    </div>
  </section>

  <section id="testimoni" class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-6">
      <h2 data-aos="fade-up" class="text-3xl font-bold text-center mb-10">
        <?= $this->lang->line('testimonial_title'); ?>
      </h2>


      <div class="grid md:grid-cols-3 gap-8">
        <!-- Testimoni Card -->
        <?php foreach ($testimoni as $t): ?>
        <div data-aos="flip-up" class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition">
          <div class="flex items-center mb-4">
            <img src="<?= base_url('assets/img/' . $t->logo); ?>" class="w-14 h-14 rounded-full object-cover mr-4"
              alt="">
            <div>
              <h4 class="font-semibold text-lg"><?= field_lang($t, 'judul') ?></h4>
            </div>
          </div>
          <p class="text-gray-700 italic">“<?= field_lang($t, 'deskripsi_lengkap') ?>”
          </p>
        </div>
        <?php endforeach ?>

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
