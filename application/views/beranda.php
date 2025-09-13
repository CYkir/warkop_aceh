<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>" />css" />
  <link rel="stylesheet" href="<?= base_url('assets/dist/aos.css'); ?>" />



</head>

<body>
  <!-- Navbar -->
  <?= require 'includes/navbar.php'; ?>
  <!-- Hero Section desktop -->
  <section id="beranda" class="relative h-screen hidden md:block">
    <!-- bg image di bawah -->
    <div class="absolute bottom-0 left-0 w-full">
      <img src="<?= base_url('assets/img/' . $home->photo1) ?>" alt="background bawah"
        class="w-full object-cover h-[300px]" />
    </div>

    <div class=" relative z-10  flex justify-between items-center h-full text-white px-6">
      <div class="flex flex-col  w-6/12 ms-10 animate__animated animate__fadeIn animate__slower">
        <h2 class="text-2xl text-[#442010] md:text-6xl font-display font-black uppercase mb-4">
          <?= field_lang($home, 'judul'); ?>
        </h2>
        <p class="max-w-2xl text-md md:text-xl font-poppins text-[#442010] uppercase font-normal my-3">

          <?= field_lang($home, 'deskripsi_singkat'); ?>
        </p>
        <a href="<?= site_url('menu'); ?>"
          class="mt-6 inline-block   font-display font-bold px-3 py-4 rounded-2xl w-50  text-center text-xl text-white bg-[#442010] hover:bg-[#670C0C] transition">
          <?= $this->lang->line('selengkapnya'); ?>
        </a>
        <div class="flex space-x-5 mt-10 items-center">
          <div class="align-middle">
            <p class="font-display text-[#442010] uppercase font-bold text-xl">
              <?= $this->lang->line('follow'); ?>!</p>
          </div>
          <div class="mx-5">
            <ul class="flex space-x-4 ">
              <li><a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <g fill="none">
                      <rect width="17" height="17" x="3.5" y="3.5" stroke="#442010" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1.5" rx="5.5" />
                      <circle cx="12" cy="12" r="3.606" stroke="#442010" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5" />
                      <circle cx="16.894" cy="7.106" r="1.03" fill="#442010" />
                    </g>
                  </svg>
                </a></li>
              <li><a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <g fill="none" fill-rule="evenodd">
                      <path
                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                      <path fill="#442010"
                        d="M4 12a8 8 0 1 1 9 7.938V14h2a1 1 0 1 0 0-2h-2v-2a1 1 0 0 1 1-1h.5a1 1 0 1 0 0-2H14a3 3 0 0 0-3 3v2H9a1 1 0 1 0 0 2h2v5.938A8 8 0 0 1 4 12m8 10c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10" />
                    </g>
                  </svg>
                </a></li>
              <li><a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <g fill="none" stroke="#442010" stroke-width="1.5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="m7 17l4.194-4.193M17 7l-4.193 4.194m0 0L9.777 7H7l4.194 5.807m1.612-1.614L17 17h-2.778l-3.028-4.193" />
                      <path d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10Z" />
                    </g>
                  </svg>
                </a></li>
              <li><a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512 512">
                    <path fill="#442010" fill-rule="evenodd"
                      d="M414.73 97.1A222.14 222.14 0 0 0 256.94 32C134 32 33.92 131.58 33.87 254a220.6 220.6 0 0 0 29.78 111L32 480l118.25-30.87a223.6 223.6 0 0 0 106.6 27h.09c122.93 0 223-99.59 223.06-222A220.18 220.18 0 0 0 414.73 97.1M256.94 438.66h-.08a185.75 185.75 0 0 1-94.36-25.72l-6.77-4l-70.17 18.32l18.73-68.09l-4.41-7A183.46 183.46 0 0 1 71.53 254c0-101.73 83.21-184.5 185.48-184.5a185 185 0 0 1 185.33 184.64c-.04 101.74-83.21 184.52-185.4 184.52m101.69-138.19c-5.57-2.78-33-16.2-38.08-18.05s-8.83-2.78-12.54 2.78s-14.4 18-17.65 21.75s-6.5 4.16-12.07 1.38s-23.54-8.63-44.83-27.53c-16.57-14.71-27.75-32.87-31-38.42s-.35-8.56 2.44-11.32c2.51-2.49 5.57-6.48 8.36-9.72s3.72-5.56 5.57-9.26s.93-6.94-.46-9.71s-12.54-30.08-17.18-41.19c-4.53-10.82-9.12-9.35-12.54-9.52c-3.25-.16-7-.2-10.69-.2a20.53 20.53 0 0 0-14.86 6.94c-5.11 5.56-19.51 19-19.51 46.28s20 53.68 22.76 57.38s39.3 59.73 95.21 83.76a323 323 0 0 0 31.78 11.68c13.35 4.22 25.5 3.63 35.1 2.2c10.71-1.59 33-13.42 37.63-26.38s4.64-24.06 3.25-26.37s-5.11-3.71-10.69-6.48" />
                  </svg>
                </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="px-10 animate__animated animate__bounceIn animate__slower ">
        <img src="<?= base_url('assets/img/' . $home->hero_image) ?>" alt="hero" srcset=""
          class=" object-cover h-[500px]">
      </div>
    </div>

  </section>

  <!-- Hero Section mobile -->
  <section class="relative min-h-screen block md:hidden">
    <div class="absolute bottom-0 left-0 w-full">
      <img src="<?= base_url('assets/img/' . $home->photo1) ?>" alt="background bawah"
        class="w-full object-cover h-[200px]" />
    </div>
    <div class="absolute  top-0 -mt-[80px] left-0 w-full">
      <img src="<?= base_url('assets/img/' . $home->photo1) ?>" alt="background bawah"
        class="w-full object-cover h-[200px] rotate-180" />
    </div>

    <div class="relative z-10  mt-[100px] flex flex-col space-y-5 items-center h-full text-white px-6">
      <div class="px-10 w-full  animate__animated animate__bounceIn animate__slower ">
        <img src="<?= base_url('assets/img/' . $home->hero_image) ?>" alt="hero" srcset="" class=" object-cover ">
      </div>
      <div class="mt-5 animate__animated animate__fadeIn animate__slower">
        <h2 class="text-2xl text-[#442010] text-center font-display font-black uppercase mb-4">
          <?= field_lang($home, 'judul'); ?>
        </h2>
      </div>
      <div class="animate__animated animate__fadeIn animate__slower">
        <p class=" text-md text-center font-poppins text-[#442010]  font-normal ">
          <?= field_lang($home, 'deskripsi_singkat') ?>
        </p>
      </div>
      <div class="animate__animated animate__fadeIn animate__slower py-5">
        <a href="<?= base_url('menu') ?>"
          class="mt-6 inline-block   font-display font-bold px-3 py-4 rounded-2xl w-50  text-center text-lg text-white bg-[#442010] hover:bg-[#670C0C] transition">
          <?= $this->lang->line('selengkapnya') ?>
        </a>
      </div>

    </div>
  </section>

  <!-- about desktop -->
  <section class="bg-[#F4F0F1] relative hidden md:block pb-[200px] m-h-screen ">


    <div id="tentang" data-aos="fade-down" class="text-center">
      <h2 class="font-display text-4xl 	 font-semibold text-[#442010]">
        <?= $this->lang->line('tentang') ?>
      </h2>
    </div>
    <div data-aos="fade-down" class="mx-auto  my-3">
      <img data-aos="fade-down" src="<?= base_url('assets/img/' . $about->logo) ?>" alt="" class="mx-auto w-80">
    </div>
    <div class="flex  gap-4 justify-center w-10/12 mx-auto  mt-5">
      <div data-aos="fade-right" class="my-5 w-4/12">
        <img data-aos="fade-right" src="<?= base_url('assets/img/' . $about->photo1) ?>" alt="" class="mx-auto">

      </div>
      <div data-aos="fade-left" class="flex  flex-col justify-start w-8/12">
        <div class="ms-10">
          <h2 class="text-3xl w-8/12 font-poppins text-[#442010] font-semibold w-">
            <?= field_lang($about, 'judul') ?>
          </h2>
          <div class="mt-5">
            <p class="font-poppins text-lg/8 tracking-wide text-justify font-normal ">
              <?= field_lang($about, 'deskripsi_lengkap') ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="flex justify-center gap-5 py-[30px]">
      <div data-aos="zoom-in-down" class="rounded-2xl shadow-2xl bg-white p-5 text center w-80">
        <p class="text-center">
          <svg class="mx-auto text-center" xmlns="http://www.w3.org/2000/svg" width="100" height="100"
            viewBox="0 0 24 24">
            <path fill="#FFC086"
              d="M11 18q-2.925 0-4.962-2.037T4 11V5q0-.825.588-1.412T6 3h12.5q1.45 0 2.475 1.025T22 6.5t-1.025 2.475T18.5 10H18v1q0 2.925-2.037 4.963T11 18M6 8h10V5H6zm12 0h.5q.625 0 1.063-.437T20 6.5t-.437-1.062T18.5 5H18zM4 21v-2h16v2z" />
          </svg>
        </p>
        <h2 class="py-3 text-2xl font-semibold font-poppins text-[#442010] text-center">
          <?= $this->lang->line('coffe') ?>
        </h2>
        <p class="text-center font-poppins text-lg font-normal text-[#442010]">
          <?= $this->lang->line('coffe_text') ?>
        </p>

      </div>
      <div data-aos="zoom-in-down" class="rounded-2xl shadow-2xl bg-white p-5 text center w-80">
        <p class="text-center">
          <svg class="mx-auto text-center" xmlns="http://www.w3.org/2000/svg" width="100" height="100"
            viewBox="0 0 24 24">
            <path fill="#FFC086"
              d="M12 21q-1.05 0-1.775-.725T9.5 18.5t.725-1.775T12 16t1.775.725t.725 1.775t-.725 1.775T12 21m0-11q1.875 0 3.563.6t3.062 1.65q.5.375.513.988T18.7 14.3q-.425.425-1.05.438t-1.125-.338q-.95-.65-2.1-1.025T12 13t-2.425.375t-2.1 1.025q-.5.35-1.125.325t-1.05-.45q-.425-.45-.425-1.062t.5-.988q1.375-1.05 3.063-1.638T12 10m0-6q3.125 0 5.888 1.025t4.962 2.9q.5.425.525 1.05t-.425 1.075q-.425.425-1.05.438t-1.125-.388q-1.8-1.475-4.037-2.287T12 7t-4.737.813T3.225 10.1q-.5.4-1.125.388t-1.05-.438Q.6 9.6.625 8.975t.525-1.05q2.2-1.875 4.963-2.9T12 4" />

          </svg>
        </p>
        <h2 class="py-3 text-2xl font-semibold font-poppins text-[#442010] text-center">
          <?= $this->lang->line('wifi') ?>
        </h2>
        <p class="text-center font-poppins text-lg font-normal text-[#442010]">
          <?= $this->lang->line('wifi_text') ?>

        </p>

      </div>
      <div data-aos="zoom-in-down" class="rounded-2xl shadow-2xl bg-white p-5 text center w-80">
        <p class="text-center">
          <svg class="mx-auto text-center" xmlns="http://www.w3.org/2000/svg" width="100" height="100"
            viewBox="0 0 24 24">
            <path fill="#FFC086"
              d="m22 3.41l-.12-1.26l-1.2.4a13.84 13.84 0 0 1-6.41.64a11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a9 9 0 0 0 .39 4.58a16.6 16.6 0 0 1 1.18-2.2a9.85 9.85 0 0 1 4.07-3.43a11.16 11.16 0 0 1 5.06-1A12.1 12.1 0 0 0 9.34 9.2a9.5 9.5 0 0 0-1.86 1.53a11.4 11.4 0 0 0-1.39 1.91a16.4 16.4 0 0 0-1.57 4.54A26.4 26.4 0 0 0 4 22h2a31 31 0 0 1 .59-4.32a9.25 9.25 0 0 0 4.52 1.11a11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41" />
          </svg>
        </p>
        <h2 class="py-3 text-2xl font-semibold font-poppins text-[#442010] text-center">
          <?= $this->lang->line('suasana') ?>
        </h2>
        <p class="text-center font-poppins text-lg font-normal text-[#442010]">
          <?= $this->lang->line('suasana_text') ?>
        </p>

      </div>


    </div>
    <div class="absolute left-0 right-0 -bottom-64 z-10">
      <img src="<?= base_url('assets/img/' . $about->hero_image) ?>" alt="background bawah"
        class="w-full object-cover " />
    </div>


  </section>

  <!-- about mobile -->
  <section class="bg-[#F4F0F1] relative block md:hidden">
    <div data-aos="fade-up" class="text-center">
      <h2 id="tentang" class="font-display text-2xl sm:mt[40px]  font-semibold text-[#442010]">
        <?= $this->lang->line('tentang') ?>
      </h2>
    </div>
    <div class="mx-auto  my-3">
      <img src="<?= base_url('assets/img/' . $about->logo) ?>" alt="" class="mx-auto w-40">
    </div>
    <div class="flex flex-col gap-4 justify-center w-10/12 mx-auto  mt-5">
      <div data-aos="fade-up" class="my-5 mx-auto text-center">
        <img data-aos="fade-up" src="<?= base_url('assets/img/' . $about->photo1) ?>" alt="" class="mx-auto w-[75%]">

      </div>
      <div class="flex  flex-col justify-start w-full">
        <div data-aos="fade-up" class="mt-5">
          <h2 class="text-2xl text-center font-poppins text-[#442010] font-semibold w-">
            <?= field_lang($about, 'judul') ?>
          </h2>
          <div class="mt-5">
            <p class="font-poppins text-lg/8 tracking-wide text-justify font-normal ">
              <?= field_lang($about, 'deskripsi_lengkap') ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="flex flex-col mx-auto justify-center gap-5 py-[30px]">
      <div data-aos="zoom-in-down" class="rounded-2xl shadow-2xl bg-white p-5 text-center mx-auto w-60">
        <p class="text-center">
          <svg class="mx-auto text-center" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
            viewBox="0 0 24 24">
            <path fill="#FFC086"
              d="M11 18q-2.925 0-4.962-2.037T4 11V5q0-.825.588-1.412T6 3h12.5q1.45 0 2.475 1.025T22 6.5t-1.025 2.475T18.5 10H18v1q0 2.925-2.037 4.963T11 18M6 8h10V5H6zm12 0h.5q.625 0 1.063-.437T20 6.5t-.437-1.062T18.5 5H18zM4 21v-2h16v2z" />
          </svg>
        </p>
        <h2 class="py-3 text-xl font-semibold font-poppins text-[#442010] text-center">
          <?= $this->lang->line('coffe'); ?>
        </h2>
        <p class="text-center font-poppins text-lg font-normal text-[#442010]">
          <?= $this->lang->line('coffe_text'); ?>
        </p>

      </div>
      <div data-aos="zoom-in-down" class="rounded-2xl shadow-2xl bg-white p-5 text center mx-auto w-60">
        <p class="text-center">
          <svg class="mx-auto text-center" xmlns="http://www.w3.org/2000/svg" widt="50" height="50" viewBox="0 0 24 24">
            <path fill="#FFC086"
              d="M12 21q-1.05 0-1.775-.725T9.5 18.5t.725-1.775T12 16t1.775.725t.725 1.775t-.725 1.775T12 21m0-11q1.875 0 3.563.6t3.062 1.65q.5.375.513.988T18.7 14.3q-.425.425-1.05.438t-1.125-.338q-.95-.65-2.1-1.025T12 13t-2.425.375t-2.1 1.025q-.5.35-1.125.325t-1.05-.45q-.425-.45-.425-1.062t.5-.988q1.375-1.05 3.063-1.638T12 10m0-6q3.125 0 5.888 1.025t4.962 2.9q.5.425.525 1.05t-.425 1.075q-.425.425-1.05.438t-1.125-.388q-1.8-1.475-4.037-2.287T12 7t-4.737.813T3.225 10.1q-.5.4-1.125.388t-1.05-.438Q.6 9.6.625 8.975t.525-1.05q2.2-1.875 4.963-2.9T12 4" />

          </svg>
        </p>
        <h2 class="py-3 text-xl font-semibold font-poppins text-[#442010] text-center">
          <?= $this->lang->line('wifi'); ?>
        </h2>
        <p class="text-center font-poppins text-lg font-normal text-[#442010]">
          <?= $this->lang->line('wifi_text'); ?>

        </p>

      </div>
      <div data-aos="zoom-in-down" class="rounded-2xl shadow-2xl bg-white p-5 text center mx-auto w-60">
        <p class="text-center">
          <svg class="mx-auto text-center" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
            viewBox="0 0 24 24">
            <path fill="#FFC086"
              d="m22 3.41l-.12-1.26l-1.2.4a13.84 13.84 0 0 1-6.41.64a11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a9 9 0 0 0 .39 4.58a16.6 16.6 0 0 1 1.18-2.2a9.85 9.85 0 0 1 4.07-3.43a11.16 11.16 0 0 1 5.06-1A12.1 12.1 0 0 0 9.34 9.2a9.5 9.5 0 0 0-1.86 1.53a11.4 11.4 0 0 0-1.39 1.91a16.4 16.4 0 0 0-1.57 4.54A26.4 26.4 0 0 0 4 22h2a31 31 0 0 1 .59-4.32a9.25 9.25 0 0 0 4.52 1.11a11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41" />
          </svg>
        </p>
        <h2 class="py-3 text-xl font-semibold font-poppins text-[#442010] text-center">
          <?= $this->lang->line('suasana'); ?>

        </h2>
        <p class="text-center font-poppins text-lg font-normal text-[#442010]">
          <?= $this->lang->line('suasana_text'); ?>
        </p>

      </div>
    </div>
    <div class="absolute left-0 right-0 -bottom-[80px] z-10">
      <img src="<?= base_url('assets/img/' . $about->hero_image) ?>" alt="background bawah"
        class="w-full object-cover " />
    </div>
  </section>

  <section class="bg-white/30 backdrop-blur-3xl rounded-3xl  py-20 w-full">
    <div class="pt-[200px] rounded-3xl  "></div>
    <div id="kontak"
      class=" mx-auto grid  md:grid-cols-2 gap-10 items-start p-6 bg-white shadow-2xl md:w-[80%] rounded-3xl   ">
      <!-- Info Kontak -->
      <div data-aos="fade-up" class="mx-4">
        <h2 class="text-4xl font-bold text-[#442010] font-poppins mb-4">
          <?= field_lang($contact, 'judul') ?>
        </h2>
        <p class="text-lg text-[#5a4632] mb-8">
          <?= field_lang($contact, 'deskripsi_singkat') ?>
        </p>

        <div class="space-y-6 text-[#5a4632]">
          <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#d6a97c]" fill="currentColor"
              viewBox="0 0 24 24">
              <path d="M20 4H4a2 2 0 0 0-2 2v1.5l10 5.5l10-5.5V6a2 2 0 0 0-2-2z" />
              <path d="M22 8.5l-10 5.5l-10-5.5V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2z" />
            </svg>
            <span>kopi@canduwarkop.com</span>
          </div>
          <div class="flex items-start gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#d6a97c]" fill="currentColor"
              viewBox="0 0 24 24">
              <path
                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
            </svg>
            <span>Jl. T. Amir Hamzah No.216, Helvetia Tim., Kec. Medan Helvetia, Kota Medan, Sumatera Utara 20211</span>
          </div>
          <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#d6a97c]" fill="currentColor"
              viewBox="0 0 24 24">
              <path
                d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.07 21 3 13.93 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.24 1.01l-2.21 2.2z" />
            </svg>
            <span>0811 6301 221</span>
          </div>
        </div>
        <div class="mt-5 mx-auto">
          <iframe class="rounded-4xl shadow-xl mx-auto w-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31856.18278940466!2d98.6160820723797!3d3.5822262012233304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fc5a4a82555%3A0xf906589bfe05f3c7!2sCandu%20Kuphi%20Helvetia!5e0!3m2!1sen!2sid!4v1757566662369!5m2!1sen!2sid"
            height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <!-- Form Kontak -->
      <div data-aos="fade-up" class="mt-[40px] ">
        <form action="#" method="POST" class="bg-white w-full shadow-lg rounded-2xl p-8 space-y-6">
          <div>
            <label class="block text-[#442010] font-medium mb-2">
              <?= $this->lang->line('form_name'); ?>
            </label>
            <input type="text" name="name"
              class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#d6a97c]"
              required>
          </div>
          <div>
            <label class="block text-[#442010] font-medium mb-2">
              <?= $this->lang->line('form_email'); ?>
            </label>
            <input type="email" name="email"
              class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#d6a97c]"
              required>
          </div>
          <div>
            <label class="block text-[#442010] font-medium mb-2">
              <?= $this->lang->line('form_subject'); ?>
            </label>
            <input type="text" name="subject"
              class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#d6a97c]"
              required>
          </div>
          <div>
            <label class="block text-[#442010] font-medium mb-2">
              <?= $this->lang->line('form_message'); ?>
            </label>
            <textarea name="message" rows="4"
              class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#d6a97c]"
              required></textarea>
          </div>
          <button type="submit"
            class="w-full bg-[#442010] hover:bg-[#5a2e16] text-white font-semibold py-3 rounded-xl transition duration-300 cursor-pointer">
            <?= $this->lang->line('form_send'); ?>
          </button>
        </form>
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
