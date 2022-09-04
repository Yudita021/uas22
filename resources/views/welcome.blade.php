<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('judul')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.8.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="#hero">YG HOTEL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Fasilitas</a></li>
          <li><a class="nav-link scrollto " href="#work">Portofolio</a></li>
          <li><a class="nav-link scrollto " href="#blog">KAMAR</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="" href="/admin">Admin Page</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/welcome.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <img src="assets/img/logo-1.png" alt="">
          <h1 class="hero-title mb-4">Welcome to YG Hotel</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Hotel Terbaik, Hotel Elegan, Hotel Ternyaman"></span></p>
          <p class="pt-3"><a class="btn btn-light btn-lg js-scroll px-4" href="/order" role="button">PESAN SEKARANG</a></p>
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-12">
                      <div class="about-img text-center">
                        <img src="assets/img/logo-1.png" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Fitur Kami</p>
                    <ul>
                      <li>Memiliki salah satu kamar deluxe terbesar di dunia</li>
                      <li>Panorama elok yang memukau dari kolam, fasilitas rekreasi</li>
                      <li>Prasmanan akhir pekan dan acara spesial di restoran Purnawarman</li>
                      <li>Bersantap dengan menu internasional yang terbuat dari bahan lokal di Fresco</li>
                      <li>Salah satu lokasi untuk resepsi pernikahan yang disukai didunia</li>
                      <li>Fasilitas yang luar biasa untuk acara perusahaan</li>
                      <li>Pengalaman yang tak terlupakan</li>
                    </ul>
      
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        YG Hotel
                      </h5>
                    </div>
                    <p class="lead">
                      Kenyamanan, kemudahan, dan berkelas di Dunia. Mulai dari kamar untuk tamu yang luas dan layanan berkelas dunia hingga lokasinya di pusat kota, YG Hotel memiliki warisan untuk menjadi pilihan pertama bagi banyak pelancong yang datang. 
                    </p>
                    <p class="lead">
                      YG Hotel terletak di pusat kota sekitar 10 menit dari Bandara Internasional, 5 menit dari stasiun kereta api, dan tiga jam berkendara dari Ibu Kota, dengan akses yang mudah ke pusat perbelanjaan dan kuliner.
                    </p>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Fasilitas
              </h3>
              <p class="subtitle-a">
                terlengkap dan terbaik yang ada di dunia.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-clock"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">24 Jam</h2>
                <p class="s-description text-center">
                  Dilengkapi dengan 24 jam pelayanan Front Desk, Security, Room Service
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-wifi"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Full Wifi Area</h2>
                <p class="s-description text-center">
                  Dilengkapi dengan fasilitas wifi seluruh area hotel dengan speed 100 GB/s
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-egg-fried"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Makanan Beragam</h2>
                <p class="s-description text-center">
                  Tersedia gratis semua makanan yang ada untuk tamu yang memesan kamar.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Spot Pemandangan</h2>
                <p class="s-description text-center">
                  Dilengkapi dengan spot pemandangan yang indah. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-controller"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Game Center</h2>
                <p class="s-description text-center">
                 Dilengkapi dengan tempat khusus untuk para gamer.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-flower1"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Outbound</h2>
                <p class="s-description text-center">
                  Terdapat tempat rekreasi seperti Kolam Renang dan Taman yang indah.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">STAFF 24 HOURS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="1550" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL GUEST</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portofolio Hotel
              </h3>
              <p class="subtitle-a">
                
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/kfbszif9uuihiezvt4i8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/kfbszif9uuihiezvt4i8.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Restaurant Mewah</h2>
                    <div class="w-more">
                     
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/beautiful-luxury-outdoor-swimming-pool-hotel-resort.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/beautiful-luxury-outdoor-swimming-pool-hotel-resort.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Swimming Pool</h2>
                    
                  </div>
                  <div class="col-sm-4">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/pinterest-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/pinterest-2.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Meeting Room</h2>
                    
                  </div>
                  <div class="col-sm-4">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/large-shutterstock-1848367486-d7f34e7cf66191d189c099dae8e4fd16.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/large-shutterstock-1848367486-d7f34e7cf66191d189c099dae8e4fd16.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Makanan Beragam</h2>
                    
                  </div>
                  <div class="col-sm-4">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/647befa4-2a2c-4204-bbcf-5bd1e99d958a.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/647befa4-2a2c-4204-bbcf-5bd1e99d958a.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Gaming</h2>
                    
                  </div>
                  <div class="col-sm-4">
                                      </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table_105762-1783.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/luxury-bedroom-suite-resort-high-rise-hotel-with-working-table_105762-1783.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Kamar mewah</h2>
                    
                  </div>
                  <div class="col-sm-4">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Xavi Alonso</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        "Hotel yang sangat mewah sekali, Semua ada, semua tersedia. Terimakasih YGHotel".
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Marta Socrate</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        "Hotel yang begitu memukau. Sangat megah dan elegant. saya sangat menyukainya."
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Kamar
              </h3>
              <p class="subtitle-a">
                Ada banyak pilihan kamar mewah harga bersahabat
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="assets/img/post-1.jpg"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <a href="yghotel/vvip" class="btn btn-sm" type="button" ><h6 class="category">Klik Untuk Pesan VVIP CLASS</h6></a>
                  </div>
                </div>
                
                <p class="card-description">
                 Memenangkan kontes panorama hotel di seluruh dunia
                </p>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="assets/img/post-2.jpg"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <a href="yghotel/vvip" class="btn btn-sm" type="button" ><h6 class="category">Klik Untuk Pesan VIP CLASS</h6></a>
                  </div>
                </div>
                <p class="card-description">
                 Memenangkan beragam kontes Food and Beverage di seluruh dunia
                </p>
              </div>
             
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="assets/img/post-3.jpg"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <a href="yghotel/vvip" class="btn btn-sm" type="button" ><h6 class="category">Klik Untuk Pesan Reguler CLASS</h6></a>
                  </div>
                </div>
                
                <p class="card-description">
                  Memenangkan piagam penghargaan staff paling berkompeten di seluruh dunia
                </p>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <div class="embed-responsive embed-responsive-16by9">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15779.86932504985!2d116.1058677!3d-8.5991349!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f21dd8f2bada56d!2sBanjar%20Seraya%20Pagesangan!5e0!3m2!1sen!2sid!4v1660127085314!5m2!1sen!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                      </div>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> JL Guru Bangkol, Lingkungan Seraya</li>
                        <li><span class="bi bi-phone"></span> (+62)-87854631424</li>
                        <li><span class="bi bi-envelope"></span> yudita321@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://www.facebook.com/yudita.seven"><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href="https://www.instagram.com/yudita_pratama"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href="https://www.twitter.com/yudita_p"><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href="https://github.com/Yudita021/"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                        <a href="/order" type="submit" class="btn btn-lg btn-dark">BOOK NOW</a>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. Edited By Yudita_Pratama </p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>