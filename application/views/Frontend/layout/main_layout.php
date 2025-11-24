<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Posyandu Wijaya Kusuma</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/backend/backend/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/Frontend/css/bootstrap.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/Frontend/css/fontawesome-all.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/Frontend/css/swiper.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/Frontend/css/magnific-popup.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/Frontend/css/styles.css' ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
</head>


<body data-spy="scroll" data-target=".fixed-top">
    <!-- Navigation -->
    <?php $this->load->view('Frontend/layout/navbar'); // Memuat navbar 
    ?>
    <!-- end of navigation -->
    <?php
    if (isset($main_content)) {
        $this->load->view($main_content);
    } else {
        echo "<p>Tidak ada konten utama yang ditentukan.</p>";
    }
    ?>
    <!-- Footer -->
    <?php $this->load->view('Frontend/layout/footer'); // Memuat footer 
    ?>