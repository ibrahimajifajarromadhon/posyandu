<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>ABOUT</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->


<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="<?php echo base_url() . 'index.php/Frontend' ?>">Home</a><i
                        class="fa fa-angle-double-right"></i><span>About</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->

<section class="about-section py-5">
    <div class="container">

        <!-- Header -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">Tentang Posyandu Wijaya Kusuma</h2>
            <p class="text-muted">Bersama Mewujudkan Generasi Sehat dan Bebas Stunting</p>
        </div>

        <!-- Sejarah -->
        <div class="mb-5">
            <h4 class="fw-bold mb-3">Sejarah</h4>
            <p>
                Posyandu Wijaya Kusuma didirikan sebagai bentuk kepedulian masyarakat terhadap
                kesehatan ibu dan anak di lingkungan sekitar. Sejak awal berdiri, Posyandu ini
                berkomitmen memberikan pelayanan kesehatan dasar secara rutin dan terpadu.
            </p>
            <p>
                Dengan dukungan kader yang aktif dan partisipasi masyarakat, Posyandu Wijaya Kusuma
                terus berkembang dalam meningkatkan kualitas pelayanan, khususnya dalam pencegahan
                stunting dan pemantauan tumbuh kembang balita.
            </p>
        </div>

        <!-- Struktur Organisasi -->

        <div class="mb-3">
            <h4 class="fw-bold mb-2">Struktur Organisasi</h4>
            <div class="card-bagan">
                <svg viewBox="0 0 880 520" xmlns="http://www.w3.org/2000/svg">

                    <!-- ===== CONNECTOR LINES ===== -->

                    <!-- Ketua → Wakil Ketua -->
                    <line class="connector" x1="440" y1="72" x2="440" y2="100" />

                    <!-- Wakil Ketua → horizontal bar -->
                    <line class="connector" x1="440" y1="162" x2="440" y2="210" />
                    <!-- Horizontal bar: Sekretaris ↔ Bendahara -->
                    <line class="connector" x1="200" y1="210" x2="680" y2="210" />
                    <!-- Down to Sekretaris -->
                    <line class="connector" x1="200" y1="210" x2="200" y2="232" />
                    <!-- Down to Bendahara -->
                    <line class="connector" x1="680" y1="210" x2="680" y2="232" />

                    <!-- Center vertical → SIE horizontal bar -->
                    <line class="connector" x1="440" y1="210" x2="440" y2="310" />
                    <!-- Horizontal bar for SIE -->
                    <line class="connector" x1="110" y1="310" x2="770" y2="310" />
                    <!-- Down to each SIE -->
                    <line class="connector" x1="110" y1="310" x2="110" y2="332" />
                    <line class="connector" x1="330" y1="310" x2="330" y2="332" />
                    <line class="connector" x1="550" y1="310" x2="550" y2="332" />
                    <line class="connector" x1="770" y1="310" x2="770" y2="332" />

                    <!-- Center vertical → Kapok horizontal bar -->
                    <line class="connector" x1="440" y1="310" x2="440" y2="420" />
                    <!-- Horizontal bar for Kapok -->
                    <line class="connector" x1="65" y1="420" x2="815" y2="420" />
                    <!-- Down to each Kapok -->
                    <line class="connector" x1="65" y1="420" x2="65" y2="440" />
                    <line class="connector" x1="213" y1="420" x2="213" y2="440" />
                    <line class="connector" x1="361" y1="420" x2="361" y2="440" />
                    <line class="connector" x1="519" y1="420" x2="519" y2="440" />
                    <line class="connector" x1="667" y1="420" x2="667" y2="440" />
                    <line class="connector" x1="815" y1="420" x2="815" y2="440" />

                    <!-- ===== NODES ===== -->

                    <!-- Ketua -->
                    <g class="node-utama">
                        <rect x="320" y="10" width="240" height="62" rx="10" />
                        <text class="title" x="440" y="31" text-anchor="middle" dominant-baseline="central">Ketua</text>
                        <text class="sub" x="440" y="51" text-anchor="middle" dominant-baseline="central">Ibu Utami</text>
                    </g>

                    <!-- Wakil Ketua -->
                    <g class="node-utama">
                        <rect x="320" y="100" width="240" height="62" rx="10" />
                        <text class="title" x="440" y="121" text-anchor="middle" dominant-baseline="central">Wakil Ketua</text>
                        <text class="sub" x="440" y="141" text-anchor="middle" dominant-baseline="central">Ibu Rika S</text>
                    </g>

                    <!-- Sekretaris -->
                    <g class="node-biasa">
                        <rect x="90" y="232" width="220" height="58" rx="8" />
                        <text class="title" x="200" y="251" text-anchor="middle" dominant-baseline="central">Sekretaris</text>
                        <text class="sub" x="200" y="271" text-anchor="middle" dominant-baseline="central">Ibu Radna W</text>
                    </g>

                    <!-- Bendahara -->
                    <g class="node-biasa">
                        <rect x="570" y="232" width="220" height="58" rx="8" />
                        <text class="title" x="680" y="251" text-anchor="middle" dominant-baseline="central">Bendahara</text>
                        <text class="sub" x="680" y="271" text-anchor="middle" dominant-baseline="central">Ibu Basirotun</text>
                    </g>

                    <!-- SIE Pendaftaran -->
                    <g class="node-biasa">
                        <rect x="16" y="332" width="188" height="58" rx="8" />
                        <text class="title" x="110" y="351" text-anchor="middle" dominant-baseline="central">Sie Pendaftaran</text>
                        <text class="sub" x="110" y="371" text-anchor="middle" dominant-baseline="central">Ibu Nisye O</text>
                    </g>

                    <!-- SIE Penimbangan -->
                    <g class="node-biasa">
                        <rect x="236" y="332" width="188" height="58" rx="8" />
                        <text class="title" x="330" y="351" text-anchor="middle" dominant-baseline="central">Sie Penimbangan</text>
                        <text class="sub" x="330" y="371" text-anchor="middle" dominant-baseline="central">Ibu Kinta S</text>
                    </g>

                    <!-- SIE Pencatatan -->
                    <g class="node-biasa">
                        <rect x="456" y="332" width="188" height="58" rx="8" />
                        <text class="title" x="550" y="351" text-anchor="middle" dominant-baseline="central">Sie Pencatatan</text>
                        <text class="sub" x="550" y="371" text-anchor="middle" dominant-baseline="central">Ibu D Agnis</text>
                    </g>

                    <!-- SIE Penyuluhan -->
                    <g class="node-biasa">
                        <rect x="676" y="332" width="188" height="58" rx="8" />
                        <text class="title" x="770" y="351" text-anchor="middle" dominant-baseline="central">Sie Penyuluhan</text>
                        <text class="sub" x="770" y="371" text-anchor="middle" dominant-baseline="central">Ibu Herluyin</text>
                    </g>

                    <!-- Kapok I -->
                    <g class="node-biasa">
                        <rect x="8" y="440" width="114" height="58" rx="8" />
                        <text class="title" x="65" y="459" text-anchor="middle" dominant-baseline="central">Kapok I</text>
                        <text class="sub" x="65" y="479" text-anchor="middle" dominant-baseline="central">Ibu Presti M</text>
                    </g>

                    <!-- Kapok II -->
                    <g class="node-biasa">
                        <rect x="156" y="440" width="114" height="58" rx="8" />
                        <text class="title" x="213" y="459" text-anchor="middle" dominant-baseline="central">Kapok II</text>
                        <text class="sub" x="213" y="479" text-anchor="middle" dominant-baseline="central">Ibu Serli W</text>
                    </g>

                    <!-- Kapok III -->
                    <g class="node-biasa">
                        <rect x="304" y="440" width="114" height="58" rx="8" />
                        <text class="title" x="361" y="459" text-anchor="middle" dominant-baseline="central">Kapok III</text>
                        <text class="sub" x="361" y="479" text-anchor="middle" dominant-baseline="central">Ibu Rida W</text>
                    </g>

                    <!-- Kapok IV -->
                    <g class="node-biasa">
                        <rect x="462" y="440" width="114" height="58" rx="8" />
                        <text class="title" x="519" y="459" text-anchor="middle" dominant-baseline="central">Kapok IV</text>
                        <text class="sub" x="519" y="479" text-anchor="middle" dominant-baseline="central">Ibu Diril S</text>
                    </g>

                    <!-- Kapok V -->
                    <g class="node-biasa">
                        <rect x="610" y="440" width="114" height="58" rx="8" />
                        <text class="title" x="667" y="459" text-anchor="middle" dominant-baseline="central">Kapok V</text>
                        <text class="sub" x="667" y="479" text-anchor="middle" dominant-baseline="central">Ibu Rofi C</text>
                    </g>

                    <!-- Kapok VI -->
                    <g class="node-biasa">
                        <rect x="758" y="440" width="114" height="58" rx="8" />
                        <text class="title" x="815" y="459" text-anchor="middle" dominant-baseline="central">Kapok VI</text>
                        <text class="sub" x="815" y="479" text-anchor="middle" dominant-baseline="central">Ibu Sri H</text>
                    </g>

                </svg>
            </div>
        </div>


        <!-- Sarana Prasarana -->
        <div class="mb-5">
            <h4 class="section-title">Sarana dan Prasarana</h4>

            <div class="row g-3">

                <!-- Item -->
                <div class="col-md-6">
                    <div class="fasilitas-item">
                        <i class="bi bi-clipboard2-pulse"></i>
                        <span>Timbangan bayi dan balita</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fasilitas-item">
                        <i class="bi bi-rulers"></i>
                        <span>Alat ukur tinggi badan</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fasilitas-item">
                        <i class="bi bi-journal-text"></i>
                        <span>Buku KMS bayi dan balita</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fasilitas-item">
                        <i class="bi bi-table"></i>
                        <span>Meja dan kursi pelayanan</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fasilitas-item">
                        <i class="bi bi-heart-pulse"></i>
                        <span>Alat pemeriksaan kesehatan dasar</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fasilitas-item">
                        <i class="bi bi-easel"></i>
                        <span>Media edukasi kesehatan</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fasilitas-item">
                        <i class="bi bi-house-heart"></i>
                        <span>Ruang pelayanan yang nyaman</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="fasilitas-item">
                        <i class="bi bi-folder2-open"></i>
                        <span>Perlengkapan administrasi</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Layanan -->
        <div class="layanan-section">
            <h4 class="fw-bold mb-4">Layanan</h4>

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card layanan-card h-100">
                        <div class="card-body">

                            <div class="icon-box">
                                <i class="bi bi-activity"></i>
                            </div>

                            <h5 class="card-title">Pelayanan Pertumbuhan</h5>

                            <p class="card-text">
                                Penimbangan rutin, pemantauan pertumbuhan dan perkembangan,
                                serta pemberian vitamin dan imunisasi.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="card layanan-card h-100">
                        <div class="card-body">

                            <div class="icon-box">
                                <i class="bi bi-shield-check"></i>
                            </div>

                            <h5 class="card-title">Pelayanan Imunisasi</h5>

                            <p class="card-text">
                                Pemeriksaan kesehatan dasar, edukasi gizi, serta pemantauan
                                kondisi kehamilan.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>