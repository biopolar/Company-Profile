  <main class="main">

    <!-- Hero Section -->
     <?php foreach($banner_image as $bi) : ?>
    <section id="hero" class="hero section">
      <img src="<?= base_url('front-end/assets/img/banner/') . $bi['image']; ?>" alt="" data-aos="fade-in">
      <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <?= $bi['text'] ?> 
          </div>
        </div>
      </div>
    </section>
    <?php endforeach; ?>
    
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <?php foreach($about as $a) : ?>
        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="<?= base_url('front-end/assets/img/about/') . $a['image'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3> <?= $a['hb'] ?> </h3>
            <p class="fst-italic">
              <?= $a['motto'] ?>
            </p>
            <ul>
            <?= $a['detail_bio'] ?>
            </ul>
            <?php endforeach; ?>
            
            <?php foreach($visi_misi as $vm) : ?>
            <div class="col-lg-12 order-2 order-lg-1 content">
              <h3><?= $vm['header'] ?></h3>
              <ul>
                <span><?= $vm['visi_misi'] ?></span></li>
              </ul>
            </div>
            <?php endforeach;?>
          </div>
        </div>

      </div>

    </section>
    <!-- /About Section -->

    <!-- Brand Ambasador Section -->
    <!-- Untuk foto atau logo dari brand ambasador itu ada di assets/img/clients -->
    
    <div class="container">
      <div class="text-center">
        <h2 class="sitename">Our Costumer</h2>
      </div>
    </div>

    <section id="clients" class="clients section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <?php foreach($partner as $prt) : ?>
            <a href="<?= $prt['url'] ?>" target="_blank" class="swiper-slide"><img src="<?= base_url('front-end/assets/img/partner/').$prt['image']; ?>" class="img-fluid" alt=""></a>
            <?php endforeach; ?>
          </div>
            <div class="swiper-pagination">
          </div>
        </div>
      
      </div>
      
      </div>
    
    </section>
    <!-- /Brand Ambasador Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>OUR SERVICES</p>
      </div><!-- End Section Title -->

      <div class="container">

      <div class="row gy-4">
        <?php foreach($service as $sv) : ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 20px;">
            <div class="service-item position-relative text-center" style="padding: 20px;  /* Adjust padding as needed */">
              <div class="mb-3" style="margin-bottom: 10px;">
                <a href="<?= base_url('home/service_detail/').$sv['slug']; ?>">
                  <img src="<?= base_url('front-end/assets/img/service/').$sv['image'] ?>" alt="<?= $sv['judul'] ?>" class="img-fluid" style="max-width: 100%; height: auto;">
                </a>
              </div>
              <!-- Judul dan Deskripsi -->
              <a href="<?= base_url('home/service_detail/').$sv['slug']; ?>" class="stretched-link">
                <h3 style="margin-bottom: 10px;"><?= $sv['judul'] ?></h3>
              </a>
              <p style="margin-top: 0;"><?= substr(strip_tags($sv['isi_service']), 0, 250); ?>...</p>

              <a href="<?= base_url('home/service_detail/').$sv['slug']; ?>" class="read-more"> Baca Selengkapnya...</a>
            </div>  
          </div>
        <?php endforeach; ?>
      </div>

    </div>

    </section>
    <!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>OUR PORTOFOLIO</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-Product">Products</li>
            <li data-filter=".filter-Project">Project</li>
            <li data-filter=".filter-Innovation">Innvoation</li>
            <li data-filter=".filter-Awards">Awards</li>
            <li data-filter=".filter-Partnership">Partnership</li>
            <li data-filter=".filter-Tech-support">Tech Support</li>
        </ul>
          <!-- End Portfolio Filters -->

          <?php foreach($portofolio as $pf) : ?>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?= $pf['tipe']; ?>">
              <img src="<?= base_url('front-end/assets/img/portofolio/'). $pf['image']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $pf['judul'] ?></h4>
                <p><?= substr(strip_tags($pf['deskripsi']), 0, 180); ?>...</p>
                <a href="<?= base_url('front-end/assets/img/portofolio/'). $pf['image']; ?>" title="<?= $pf['judul']; ?>" data-gallery="portfolio-gallery-products" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('home/portofolio_detail/').$pf['slug'] ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
            <!-- End Portfolio Item -->
          <?php endforeach; ?>
          </div>
          <!-- End Portfolio Container -->

        </div>

      </div>

    </section>
    <!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <img src="<?= base_url('front-end/'); ?>assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="container">
          <div class="text-center">
            <h2 class="sitename">What our customer say</h2>
          </div>
        </div>    
      
        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>
          <div class="swiper-wrapper">

          <?php foreach($comment as $cmt) : ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-img-container">
                  <img src="<?= base_url('front-end/assets/img/comment/').$cmt['image']; ?>" class="testimonial-img" alt="">
                </div>
                <h3><?= $cmt['name']?></h3>
                <h4><?= $cmt['jabatan'] ?></h4>
                <p>
                  <?= $cmt['pesan']; ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
            <!-- End testimonial item -->
            
          </div>
            <div class="swiper-pagination"></div>
            <div style="color: orange;" class="swiper-button-prev swiper-btn"></div>
            <div style="color: orange;" class="swiper-button-next swiper-btn"></div>
          </div>

      </div>

    </section>
    <!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our Team</p>
      </div><!-- End Section Title -->

      <div class="container">

      <div class="row gy-4">
          <?php foreach($karyawan as $kry) : ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                <div class="member-img">
                  <img src="<?= base_url('front-end/assets/img/karyawan/') . $kry['image'] ?>" class="img-fluid" alt="image" style="height: 355px; width: 100%; object-fit: cover;" >
                  <div class="social">
                    <a href="<?= $kry['facebook']; ?>" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="<?= $kry['instagram']; ?>" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="<?= $kry['linkedin']; ?>" target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4><?= $kry['nama']; ?></h4>
                  <span><?= $kry['jabatan']; ?></span>
                  <p><?= $kry['pesan'] ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
          <?php foreach($contact as $ct): ?>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p><?= $ct['alamat'] ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p><?= $ct['telp'] ?></p>
              </div> 
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><?= $ct['email'] ?></p>
              </div>
            </div>
            <?php endforeach;?>
            <!-- End Info Item -->
          </div>
          <div class="col-lg-8">
            <iframe style="border:0; width: 100%; height: 300px;" src="<?= $ct['maps'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <!-- End Google Maps -->

        </div>

    </section>
    <!-- /Contact Section -->

  </main>