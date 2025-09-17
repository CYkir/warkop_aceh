<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Admin CMS</title>
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="dash min-h-screen flex">

  <!-- Sidebar -->
  <?php require 'includes/sidebar.php'; ?>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col">

    <?php require 'includes/navbar.php' ?>
    <!-- Content -->
    <main class="p-6">
      <h2 class="text-2xl font-semibold text-amber-700 mb-6">Dashboard Admin</h2>
      <div class="flex flex-wrap justify-between gap-5 items-stretch mx-auto">
        <?php foreach ($statistik as $key => $item): ?>
        <div class="flex flex-col items-center shadow-2xl rounded-2xl bg-white/30 backdrop-blur-2xl p-6 "
          style="height: 200px; width: 350px; ">
          <h3 class="text-xl font-bold text-[#493628] mb-3"><?= $item['label'] ?></h3>
          <p class="text-5xl font-extrabold text-[#AB886D] mb-4">
            <?= $item['jumlah'] ?>
          </p>
          <a href="<?= base_url('admin/konten?kategori=' . $key); ?>" class="inline-block bg-[#493628] text-white px-6 py-3 rounded-xl font-medium shadow-md 
                  hover:bg-[#AB886D] hover:shadow-lg transition duration-300">
            Kelola <?= $item['label'] ?>
          </a>


        </div>
        <?php endforeach; ?>
      </div>
    </main>
  </div>

  <script>
  // Sidebar Toggle
  $("#toggleSidebar").click(function() {
    $("#sidebar").toggleClass("w-64 w-20");

    // Sembunyikan teks menu saat sidebar kecil
    $(".menu-text").toggleClass("hidden");

    // Putar icon
    $("#toggleIcon").toggleClass("rotate-180");
  });
  </script>

</body>

</html>
