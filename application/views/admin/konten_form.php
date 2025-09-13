<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Tambah Konten - Admin</title>
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body class="dash p-6">
  <div class="min-h-screen  flex items-center justify-center p-6">
    <div class="w-full max-w-4xl bg-white/40 backdrop-blur-2xl rounded-2xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Konten Baru</h2>

      <form action="<?= base_url('admin/create_action') ?>" method="post" enctype="multipart/form-data"
        class="space-y-6">

        <!-- Kategori -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
          <select name="kategori"
            class="w-full border border-gray-800 focus:ring-black rounded-lg px-4 py-2 focus:ring-1 ">
            <?php
						$kategori_list = ['home', 'gallery', 'testimoni', 'e-menu', 'contact', 'story', 'edukasi', 'experience', 'konten' , 'about'];
						foreach ($kategori_list as $k) {
							echo "<option value='$k'>" . ucfirst($k) . "</option>";
						}
						?>
          </select>
        </div>

        <!-- Judul -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
          <input type="text" name="judul"
            class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1 " required>
        </div>
        <!-- Judul_en -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Judul English</label>
          <input type="text" name="judul_en"
            class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1 ">
        </div>

        <!-- Deskripsi -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat</label>
          <textarea name="deskripsi_singkat" rows="3"
            class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1"></textarea>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat English</label>
          <textarea name="deskripsi_singkat_en" rows="3"
            class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1"></textarea>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Lengkap</label>
          <textarea name="deskripsi_lengkap" rows="5"
            class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1"></textarea>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Lengkap English</label>
          <textarea name="deskripsi_lengkap_en" rows="5"
            class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1"></textarea>
        </div>

        <!-- Meta URL & Keyword -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Meta URL</label>
            <input type="text" name="meta_url"
              class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Keyword</label>
            <input type="text" name="keyword"
              class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
          </div>
        </div>

        <!-- Logo & Tagline -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Logo</label>
            <input type="file" name="logo"
              class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tagline</label>
            <input type="text" name="tagline"
              class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
          </div>
        </div>

        <!-- Hero Image -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Hero Image</label>
          <input type="file" name="hero_image"
            class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
        </div>

        <!-- Foto tambahan -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Foto Tambahan (1-3)</label>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <input type="file" name="photo1"
              class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
            <input type="file" name="photo2"
              class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
            <input type="file" name="photo3"
              class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
            <input type="file" name="photo4"
              class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
            <input type="file" name="photo5"
              class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
          </div>
        </div>

        <!-- Harga -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Harga (jika produk)</label>
          <input type="number" step="0.01" name="harga"
            class="w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
        </div>

        <!-- Tombol -->
        <div class="flex justify-end space-x-4">
          <a href="<?= base_url('admin/konten') ?>"
            class="px-6 py-2 rounded-lg border border-gray-800  text-gray-600 hover:bg-red-400 hover:text-white ">Batal</a>
          <button type="submit"
            class="px-6 py-2 rounded-lg bg-[#493628] hover:bg-[#AB886D] text-white cursor-pointer">Simpan</button>
        </div>
      </form>
    </div>
  </div>


</body>

</html>