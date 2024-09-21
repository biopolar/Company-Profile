<footer id="footer" class="footer">

<div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <?php foreach($contact as $ct) : ?>
          <div class="col-lg-7 col-md-12 footer-about d-flex align-items-start justify-content-between flex-column flex-lg-row">
            <img src="<?= base_url('front-end/assets/img/contact/').$ct['image'] ?>" style="width: 100%; height: auto; max-width: 288px;" alt="" class="footer-logo"/>
              <div class="footer-contact ms-lg-4 mt-3 mt-lg-0 text-lg-start text-center">
                  <h4>Address</h4>
                  <p><?= $ct['alamat'] ?></p>
                  <p class="mt-3"><strong>Phone:</strong> <span><?= $ct['telp'] ?></span></p>
                  <p><strong>Email:</strong> <span><?= $ct['email'] ?></span></p>
              </div>
          </div>
          <?php endforeach; ?>
          <div class="col-lg-4 col-md-6 d-flex flex-column flex-md-row justify-content-between">
            <div class="footer-links">
              <h4>Useful Links</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/index/') ?>#hero">Home</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/index/') ?>#about">About us</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/index/') ?>#services">Services</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/index/') ?>#portfolio">Portfolio</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('home/index/') ?>#team">Team us</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-newsletter mt-2 mt-md-0 ms-md-3">  <!-- Added ms-md-3 for left margin -->
          <h4>Our Social Media</h4>
          <div class="social-links d-flex mt-4">
            <?php foreach($contact as $ct) : ?>
            <a href="<?= $ct['instagram'] ?>" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="<?= $ct['wa'] ?>" target="_blank"><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?= base_url('front-end/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('front-end/'); ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('front-end/'); ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url('front-end/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('front-end/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url('front-end/'); ?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('front-end/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('front-end/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Main JS File -->
<script src="<?= base_url('front-end/'); ?>assets/js/main.js"></script>
 
</body>

  <script>
    AOS.init();
  </script>
  
</html>