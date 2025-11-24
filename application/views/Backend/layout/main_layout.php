<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kader Posyandu Wijaya Kusuma</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <link href="<?php echo base_url() . 'assets/Backend/css/styles.css' ?>" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo base_url() . 'assets/Backend/css/tailwind.output.css' ?>" />
  <script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer></script>
  <script src="<?php echo base_url() . 'assets/Backend/js/init-alpine.js' ?>"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    defer></script>

  <!-- Favicon  -->
  <link rel="icon" href="<?php echo base_url() . 'assets/Backend/img/logo_posyandu.png' ?>">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <?php $this->load->view('Backend/layout/sidebar'); // Memuat sidebar jika ada 
    ?>

    <div class="flex flex-col flex-1 w-full">
      <?php $this->load->view('Backend/layout/header'); // Memuat header 
      ?>

      <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
          <?php
          if (isset($main_content)) {
            $this->load->view($main_content);
          } else {
            echo "<p>Tidak ada konten utama yang ditentukan.</p>";
          }
          ?>
        </div>
      </main>

    </div>
  </div>
  <?php $this->load->view('Backend/layout/footer'); ?>