<body class="portfolio-details-page">

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Portfolio Details</h1>
              <p class="mb-0"><h2><?= $portofolio['judul'] ?></h2></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url('home/index')?>">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">

              <div class="align-items-center">

                <div class="image-thumbnail">
                  <img src="<?= base_url('front-end/assets/img/portofolio/').$portofolio['image'] ?>" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: <?= $portofolio['tipe'] ?></li>
                <li><strong>Client</strong>: <?= $portofolio['client'] ?></li>
                <li><strong>Project Date</strong>: <?= date('d M Y', ($portofolio['created_at'])); ?></li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2><?= $portofolio['judul'] ?></h2>
              <p>
                <?= $portofolio['deskripsi'] ?>
              </p>
            </div>
          </div>
        
        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>
