<!-- Preloader -->
<div class="spinner-wrapper">
	<div class="spinner">
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
</div>
<!-- end of preloader -->


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
	<div class="container">

		<!-- Image Logo -->
		<img src="<?php echo base_url() . 'assets/Frontend/images/logoposyandu.png' ?>" width="100px" alt="">
		<!-- Text Logo - Use this if you don't have a graphic logo -->
		<a class="navbar-brand logo-text page-scroll font" href="">Posyandu Wijaya Kusuma</a>

		<!-- Mobile Menu Toggle Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-awesome fas fa-bars"></span>
			<span class="navbar-toggler-awesome fas fa-times"></span>
		</button>
		<!-- end of mobile menu toggle button -->

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?php echo base_url() . 'Frontend' ?>">HOME <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?php echo base_url() . 'Frontend/about' ?>">ABOUT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?php echo base_url() . 'Frontend/pertumbuhan' ?>">PERTUMBUHAN</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?php echo base_url() . 'Frontend/imunisasi' ?>">IMUNISASI</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="<?php echo base_url() . 'Frontend/profil_view/' . $this->session->userdata('ses_id_ortu') . '' ?>">PROFIL</a>
				</li>
			</ul>
			<span class="nav-item">
				<a class="btn-outline-sm" href="<?php echo base_url() . 'Login/logout' ?>">LOG OUT</a>
			</span>
		</div>
	</div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->