<body class="service-details-page">
    
<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Service Details</h1>
          <p class="mb-0"><?= $service['judul'] ?></p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="<?= base_url('home/index') ?>">Home</a></li>
        <li class="current">Service Details</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<!-- Service Details Section -->
<section id="service-details" class="service-details section">

  <div class="container">

    <div class="row gy-5">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="200">
        <img src="<?= base_url('front-end/assets/img/service/').$service['image']; ?>" alt="img-fluid" class="img-fluid services-img mb-4">
        
        <div class="d-flex align-items-center mb-4">
          <!-- Profile Icon and Created By -->
          <div class="me-3 d-flex align-items-center">
            <i class="bi bi-person-circle me-1"></i>
            <span><?= $service['created_by']; ?></span>
          </div>

          <!-- Calendar Icon and Created At -->
          <div class="d-flex align-items-center">
            <i class="bi bi-calendar-event me-1"></i>
            <span><?= date('d M Y', ($service['created_at'])); ?></span>
          </div>
        </div>

        <h3><?= $service['judul'] ?></h3>
        <!-- Directly applying justify here -->
        <p style="text-align: justify;"><?= $service['isi_service']; ?></p>
      </div>
    </div>

  </div>

</section>
<!-- /Service Details Section -->

</body>
