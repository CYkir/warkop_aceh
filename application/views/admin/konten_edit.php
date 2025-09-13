<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Edit Konten - Admin</title>
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<body class="dash p-6">
  <div class="min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-4xl bg-white/40 backdrop-blur-2xl rounded-2xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Konten</h2>

      <form action="<?= base_url('admin/update_action/' . $konten->id_konten) ?>" method="post"
        enctype="multipart/form-data" class="space-y-6">

        <!-- Kategori -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
          <select name="kategori"
            class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1">
            <?php
						$kategori_list = ['home', 'gallery', 'testimoni', 'e-menu', 'contact', 'story', 'edukasi', 'experience', 'about'];
						foreach ($kategori_list as $k) {
							$selected = ($konten->kategori == $k) ? 'selected' : '';
							echo "<option value='$k' $selected>" . ucfirst($k) . "</option>";
						}
						?>
          </select>
        </div>

        <!-- Judul -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
          <input type="text" name="judul" value="<?= $konten->judul ?>"
            class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1" >
        </div>
        <!-- Judul EN -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Judul English</label>
          <input type="text" name="judul_en" value="<?= $konten->judul_en ?>"
            class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1">
        </div>

        <!-- Deskripsi -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat</label>
          <textarea name="deskripsi_singkat" rows="3"
            class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1"><?= $konten->deskripsi_singkat ?></textarea>
        </div>
        <!-- Deskripsi -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat English</label>
          <textarea name="deskripsi_singkat_en" rows="3"
            class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1"><?= $konten->deskripsi_singkat_en ?></textarea>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Lengkap</label>
          <textarea name="deskripsi_lengkap" rows="5"
            class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1"><?= $konten->deskripsi_lengkap ?></textarea>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Lengkap English</label>
          <textarea name="deskripsi_lengkap_en" rows="5"
            class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1"><?= $konten->deskripsi_lengkap_en ?></textarea>
        </div>

        <!-- Meta URL & Keyword -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Meta URL</label>
            <input type="text" name="meta_url" value="<?= $konten->meta_url ?>"
              class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Keyword</label>
            <input type="text" name="keyword" value="<?= $konten->keyword ?>"
              class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1">
          </div>
        </div>

        <!-- Logo & Tagline -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Logo</label>
            <input type="file" name="logo"
              class="block w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1">
            <?php if ($konten->logo): ?>
            <img src="<?= base_url('assets/img/' . $konten->logo) ?>" alt="Logo" class="mt-2 h-16">
            <?php endif; ?>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tagline</label>
            <input type="text" name="tagline" value="<?= $konten->tagline ?>"
              class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1">
          </div>
        </div>

        <!-- Hero Image -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Hero Image</label>
          <input type="file" name="hero_image"
            class="block px-4 py-2 w-full text-sm text-gray-600 border border-gray-800/50 rounded-lg cursor-pointer">
          <?php if ($konten->hero_image): ?>
          <img src="<?= base_url('assets/img/' . $konten->hero_image) ?>" alt="Hero" class="mt-2 h-32 rounded-lg">
          <?php endif; ?>
        </div>

        <!-- Foto tambahan -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Foto Tambahan (1-5)</label>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
              <input type="file" name="photo1"
                class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
              <?php if ($konten->hero_image): ?>
              <img src="<?= base_url('assets/img/' . $konten->photo1) ?>" alt="Hero" class="mt-2 h-32 rounded-lg">
              <?php endif; ?>
            </div>
            <div>
              <input type="file" name="photo2"
                class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
              <?php if ($konten->hero_image): ?>
              <img src="<?= base_url('assets/img/' . $konten->photo2) ?>" alt="Hero" class="mt-2 h-32 rounded-lg">
              <?php endif; ?>

            </div>
            <div>
              <input type="file" name="photo3"
                class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
              <?php if ($konten->hero_image): ?>
              <img src="<?= base_url('assets/img/' . $konten->photo3) ?>" alt="Hero" class="mt-2 h-32 rounded-lg">
              <?php endif; ?>

            </div>
            <div>
              <input type="file" name="photo4"
                class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
              <?php if ($konten->hero_image): ?>
              <img src="<?= base_url('assets/img/' . $konten->photo4) ?>" alt="Hero" class="mt-2 h-32 rounded-lg">
              <?php endif; ?>

            </div>
            <div>
              <input type="file" name="photo5"
                class="block w-full border border-gray-800 focus:ring-black  rounded-lg px-4 py-2 focus:ring-1">
              <?php if ($konten->hero_image): ?>
              <img src="<?= base_url('assets/img/' . $konten->photo5) ?>" alt="Hero" class="mt-2 h-32 rounded-lg">
              <?php endif; ?>

            </div>


          </div>
        </div>

        <!-- Harga -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Harga (jika produk)</label>
          <input type="number" step="0.01" name="harga" value="<?= $konten->harga ?>"
            class="w-full border border-gray-800/50 focus:ring-black rounded-lg px-4 py-2 focus:ring-1">
        </div>

        <!-- Tombol -->
        <div class="flex justify-end space-x-4">
          <a href="<?= base_url('admin/konten') ?>"
            class="px-6 py-2 rounded-lg border border-gray-300  text-gray-600 hover:bg-red-400 hover:text-white">Batal</a>
          <button type="submit"
            class="px-6 py-2 rounded-lg bg-[#493628] hover:bg-[#AB886D] text-white cursor-pointer">Update</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>
