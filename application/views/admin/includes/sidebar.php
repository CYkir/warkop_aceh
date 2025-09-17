  <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>

  <aside id="sidebar" class=" shadow-md w-64 transition-all duration-300 ease-in-out relative">

    <!-- Logo -->
    <div class="p-4 flex items-center justify-center">
      <h1 class="text-xl font-bold text-brown-800 whitespace-nowrap">Kopi</h1>
    </div>

    <!-- Toggle Button -->
    <button id="toggleSidebar"
      class="absolute top-1/2 -right-3 transform -translate-y-1/2  shadow-md  rounded-full w-7 h-7 flex items-center justify-center text-brown-600 bg-white hover:bg-amber-100 transition">
      <span id="toggleIcon" class="cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 26 26" id="pre">
          <path fill="#493628"
            d="M21.125 0H4.875A4.874 4.874 0 0 0 0 4.875v16.25A4.874 4.874 0 0 0 4.875 26h16.25A4.874 4.874 0 0 0 26 21.125V4.875A4.874 4.874 0 0 0 21.125 0M16 17.949a.96.96 0 0 1-.479.817a.99.99 0 0 1-.952.039L8.34 13.857c-.337-.296-.537-.494-.537-.857s.237-.575.537-.857l6.229-4.949a.99.99 0 0 1 .952.04c.29.173.479.484.479.816z" />
        </svg>
      </span>
    </button>

    <!-- Menu -->
    <nav class="mt-6 space-y-2 flex flex-col justify-between h-[85%]">
      <div>
        <a href="<?= base_url('admin/dashboard'); ?>"
          class="flex items-center gap-3 p-3 mx-2 rounded-lg hover:bg-[#AB886D] text-white font-medium bg-[#493628] transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff" fill-rule="evenodd"
              d="M2.52 7.823C2 8.77 2 9.915 2 12.203v1.522c0 3.9 0 5.851 1.172 7.063S6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.212S22 17.626 22 13.725v-1.521c0-2.289 0-3.433-.52-4.381c-.518-.949-1.467-1.537-3.364-2.715l-2-1.241C14.111 2.622 13.108 2 12 2s-2.11.622-4.116 1.867l-2 1.241C3.987 6.286 3.038 6.874 2.519 7.823M11.25 18a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0z"
              clip-rule="evenodd" />
          </svg>
          <span class="menu-text">Dashboard</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=home'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff" d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
          </svg>
          <span class="menu-text">Home</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=gallery'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff"
              d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z" />
          </svg>
          <span class="menu-text">Gallery</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=testimoni'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff"
              d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <span class="menu-text">Testimoni</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=e-menu'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
          </svg>
          <span class="menu-text">E-Menu</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=contact'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff"
              d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
          </svg>
          <span class="menu-text">Contact</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=story'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff"
              d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <span class="menu-text">Story</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=edukasi'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff" d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
          </svg>
          <span class="menu-text">Edukasi</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=experience'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff"
              d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
          </svg>
          <span class="menu-text">Experience</span>
        </a>
        <a href="<?= base_url('admin/konten?kategori=about'); ?>"
          class="flex items-center gap-3 my-1 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff"
              d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
          </svg>
          <span class="menu-text">About</span>
        </a>
      </div>
      <div>
        <a href="<?= base_url('Auth/logout'); ?>"
          class="flex items-center gap-3 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#493628] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#fff"
              d="M17 2H7C5.3 2 4 3.3 4 5v6h8.6l-2.3-2.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4 4c.4.4.4 1 0 1.4l-4 4c-.4.4-1 .4-1.4 0s-.4-1 0-1.4l2.3-2.3H4v6c0 1.7 1.3 3 3 3h10c1.7 0 3-1.3 3-3V5c0-1.7-1.3-3-3-3" />
          </svg>
          <span class="menu-text">Logout</span>
        </a>
      </div>
    </nav>
  </aside>


  <script>
$(document).ready(function() {
  let currentUrl = window.location.href;

  // Reset semua link dulu
  $("#sidebar nav a").removeClass("bg-[#493628] text-white")
    .addClass("text-brown-800")
    .find("svg path").attr("fill", "#000");

  // Set aktif sesuai URL
  $("#sidebar nav a").each(function() {
    let linkUrl = $(this).attr("href");

    if (currentUrl.indexOf(linkUrl) !== -1) {
      $(this).addClass("bg-[#493628] text-white")
        .removeClass("text-brown-800")
        .find("svg path").attr("fill", "#fff");
    }
  });


});
  </script>