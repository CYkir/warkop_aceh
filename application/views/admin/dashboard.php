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
      <h2 class="text-2xl font-semibold text-amber-700">Welcome to Dashboard</h2>
      <p class="text-gray-600 mt-2">Silakan pilih menu di sidebar.</p>
    </main>
  </div>

  <script>
  // Sidebar Toggle
  $("#toggleSidebar").click(function() {
    $("#sidebar").toggleClass("w-64 w-20");

    // Sembunyikan teks menu saat sidebar kecil
    $(".menu-text").toggleClass("hidden");

    // Ganti icon
    if ($("#toggleIcon").text() === "<") {
      $("#toggleIcon").text(">");
    } else {
      $("#toggleIcon").text("<");
    }
  });
  </script>

</body>

</html>
