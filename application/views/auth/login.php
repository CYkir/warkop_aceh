<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Login Admin - Warkop Aceh</title>
  <link rel="stylesheet" href="<?= base_url('assets/src/output.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body class="dash flex items-center justify-center h-screen">

  <div class="bg-white/40 backdrop-blur-2xl p-8 rounded-lg shadow-md w-96">
    <h1 class="text-2xl font-bold text-center mb-6">Login Admin</h1>

    <?php if ($this->session->flashdata('error')): ?>
    <div class="bg-red-200 text-red-400 p-3 rounded mb-4 text-center">
      <?= $this->session->flashdata('error'); ?>
    </div>
    <?php endif; ?>
    <form method="post" action="<?= base_url('auth/login') ?>">
      <div class="mb-4">
        <label class="block mb-1 font-medium ">Username</label>
        <input type="text" name="username" class="w-full border rounded px-3 py-2" required>
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-medium">Password</label>
        <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
      </div>
      <button type="submit"
        class="w-full bg-[#493628] text-white py-2 rounded hover:bg-[#AB886D] transition cursor-pointer">Login</button>
    </form>
  </div>

</body>

</html>
