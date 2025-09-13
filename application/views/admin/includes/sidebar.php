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
      class="absolute top-1/2 -right-3 transform -translate-y-1/2 bg-white shadow-md border rounded-full w-7 h-7 flex items-center justify-center text-brown-600 hover:bg-amber-100 transition">
      <span id="toggleIcon">&lt;</span>
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
        <a href="<?= base_url('admin/konten'); ?>"
          class="flex items-center gap-3 my-3 p-3 mx-2 rounded-lg text-brown-800 hover:bg-[#AB886D] hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" class="color-">
            <path fill="#fff"
              d="M6.75 3A3.75 3.75 0 0 0 3 6.75v14.5A3.75 3.75 0 0 0 6.75 25h14.5A3.75 3.75 0 0 0 25 21.25V6.75A3.75 3.75 0 0 0 21.25 3zM6 9a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2zm2-.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5V9a.5.5 0 0 0-.5-.5zM6.75 15h5.5a.75.75 0 0 1 0 1.5h-5.5a.75.75 0 0 1 0-1.5M6 19.5a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 0 1.5h-5.5A.75.75 0 0 1 6 19.5m11.25-5h3c.966 0 1.75.784 1.75 1.75v3A1.75 1.75 0 0 1 20.25 21h-3a1.75 1.75 0 0 1-1.75-1.75v-3c0-.966.784-1.75 1.75-1.75M17 16.25a.25.25 0 0 1 .25-.25h3a.25.25 0 0 1 .25.25v3a.25.25 0 0 1-.25.25h-3a.25.25 0 0 1-.25-.25z" />
          </svg>
          <span class="menu-text">Manajemen Konten</span>
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
