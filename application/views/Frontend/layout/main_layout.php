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

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <style>
        .accordion-button {
            font-weight: 500;
        }

        .accordion-button:not(.collapsed) {
            background-color: #198754;
            color: #fff;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .kader-carousel .item {
            padding: 10px;
        }

        .kader-box img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 4px;
        }

        .motivasi-section {
            background: #2ea6be;
            padding: 80px 0;
            color: #ffffff;
        }

        .motivasi-text {
            font-size: 22px;
            max-width: 800px;
            margin: 0 auto 20px auto;
            line-height: 1.6;
        }

        .motivasi-author {
            font-size: 14px;
            opacity: 0.9;
        }

        .motivasi-carousel .owl-dots {
            margin-top: 30px;
        }

        .motivasi-carousel .owl-dot span {
            width: 10px;
            height: 10px;
            margin: 5px;
            background: rgba(255, 255, 255, 0.4);
            display: block;
            border-radius: 50%;
        }

        .motivasi-carousel .owl-dot.active span {
            background: #ffffff;
        }

        .about-section h4 {
            border-left: 5px solid #198754;
            padding-left: 10px;
        }

        .about-section .card {
            border: none;
            border-radius: 8px;
        }

        .program-section {
            background: #f8f9fa;
        }

        .program-card {
            background: #ffffff;
            padding: 30px 20px;
            border-radius: 10px;
            transition: 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .program-card:hover {
            transform: translateY(-5px);
        }

        .icon-box {
            font-size: 40px;
            color: #198754;
        }

        .imunisasi-section {
            background: #ffffff;
        }

        .imun-card {
            background: #f8f9fa;
            padding: 30px 20px;
            border-radius: 12px;
            transition: 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .imun-card:hover {
            transform: translateY(-6px);
            background: #e9f7ef;
        }

        .imun-icon {
            font-size: 42px;
            color: #198754;
        }
    </style>
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