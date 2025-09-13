<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Konten</title>
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="dash min-h-screen flex">
  <!-- Sidebar -->
  <?php require 'includes/sidebar.php'; ?>
  <!-- Main Content -->
  <div class="flex-1 flex flex-col">

    <?php require 'includes/navbar.php' ?>

    <main class=" container mx-auto p-6">
      <div class="flex sm:flex-row sm:items-center sm:justify-between gap-4 mb-5">
        <!-- Tombol Tambah -->
        <div class="col-12 col-md-auto mb-3 mb-md-0">
          <a href="<?php echo base_url('admin/create') ?>"
            class="bg-[#493628] rounded-lg py-3 px-4 text-white text-md">Tambah Konten</a>
        </div>

        <!-- Filter + Search -->
        <form method="get" action="<?= base_url('admin/konten') ?>" class="flex items-center gap-3">
          <!-- Dropdown kategori -->
          <select name="kategori"
            class="select select-bordered  w-60 bg-white/40 backdrop-blur-3xl rounded-2xl text-gray-700">
            <option value="">Semua Kategori</option>
            <?php foreach ($kategori_list as $kat): ?>
            <option value="<?= $kat ?>" <?= ($this->input->get('kategori') == $kat ? 'selected' : '') ?>>
              <?= ucfirst($kat) ?>
            </option>
            <?php endforeach; ?>
          </select>

          <!-- Search -->
          <input type="text" name="q" value="<?= $this->input->get('q') ?>" placeholder="Cari judul..."
            class="input input-bordered rounded-2xl  w-60 bg-white/40 backdrop-blur-3xl text-gray-700" />

          <!-- Tombol Filter -->
          <button type="submit" class="btn hover:bg-[#AB886D] text-white rounded-2xl bg-[#493628]">
            Filter
          </button>
        </form>

      </div>



      <div class="overflow-x-auto   rounded-xl shadow-xl bg-white/20 backdrop-blur-xl min-w-max">
        <table class="min-w-full text-sm table-fixed text-left text-gray-700 overflow-x-auto">
          <thead>
            <tr class="bg-[#AB886D] text-white uppercase text-sm ">
              <th class=" px-4 py-2">No</th>
              <th class=" px-4 py-2">Kategori</th>
              <th class=" px-4 py-2">Judul</th>
              <th class=" px-4 py-2">Aksi</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <?php $no = $start + 1;  ?>
            <?php foreach ($konten as $k): ?>
            <tr class="hover:bg-gray-50">
              <td class=" px-4 py-2"><?= $no++ ?></td>
              <td class=" px-4 py-2"><?= $k->kategori ?></td>
              <td class=" px-4 py-2"><?= $k->judul ?></td>

              <td class=" px-4 py-2">
                <a href="<?= base_url('admin/edit/' . $k->id_konten) ?>"
                  class="inline-block px-3 py-1 text-sm rounded-md bg-[#faf5b1] text-black hover:bg-[#faee41] hover:text-black transition">Edit</a>

                <a href="<?= base_url('admin/delete/' . $k->id_konten) ?>"
                  class="inline-block px-3 py-1 text-sm rounded-md bg-red-100 text-red-700 hover:text-white hover:bg-red-400 transition cursor-pointer"
                  onclick="return confirm('Yakin hapus?')">Hapus</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>

        </table>

    </main>
    <div class="mb-5">
      <?= $pagination; ?>
    </div>
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
