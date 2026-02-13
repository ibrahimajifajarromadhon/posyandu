<!-- Footer -->
<svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79">
    <defs>
        <style>
            .cls-2 {
                fill: #008000;
            }
        </style>
    </defs>
    <title>footer-frame</title>
    <path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)" />
</svg>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col first">
                    <h4>TENTANG POSYANDU</h4>
                    <p class="p-small">Website ini digunakan untuk membantu pemerintah dalam hal kesehatan balita dan anak serta membantu orang tua untuk memantau tumbuh kembang anaknya</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>JAM OPERASIONAL</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-calendar" style="font-size: 15px;"></i>
                            <div class="media-body">Senin - Jumat : 08.00 - 16.00 WIB</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-phone" style="font-size: 15px;"></i>
                            <div class="media-body">(+62) 123 456 789</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-envelope" style="font-size: 15px;"></i>
                            <div class="media-body"><a class="white" href="mailto:posyanduwk@gmail.com">posyanduwk@gmail.com</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>LOKASI</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="media-body">Jl. Madukoro No 27, Panca Arga 1, Banyurojo, Kec. Mertoyudan, Kab. Magelang</div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2025 <a href="https://alfianiqbal.com">Website Developed By Alfian Iqbal</a>
                </p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="<?php echo base_url() . 'assets/Frontend/js/jquery.min.js' ?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="<?php echo base_url() . 'assets/Frontend/js/popper.min.js' ?>"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="<?php echo base_url() . 'assets/Frontend/js/bootstrap.min.js' ?>"></script> <!-- Bootstrap framework -->
<script src="<?php echo base_url() . 'assets/Frontend/js/jquery.easing.min.js' ?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="<?php echo base_url() . 'assets/Frontend/js/swiper.min.js' ?>"></script> <!-- Swiper for image and text sliders -->
<script src="<?php echo base_url() . 'assets/Frontend/js/jquery.magnific-popup.js' ?>"></script> <!-- Magnific Popup for lightboxes -->
<script src="<?php echo base_url() . 'assets/Frontend/js/validator.min.js' ?>"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="<?php echo base_url() . 'assets/Frontend/js/scripts.js' ?>"></script> <!-- Custom scripts -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- WAJIB jika template memakai easing -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
$(document).ready(function(){

    $('.kader-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: false,
        smartSpeed: 600,
        responsive:{
            0:{ items:1 },
            576:{ items:2 },
            768:{ items:3 },
            992:{ items:3 },
            1200:{ items:4 }
        }
    });

    $('.motivasi-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 800
    });

});

</script>
</body>

</html>