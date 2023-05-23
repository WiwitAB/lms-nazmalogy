<?php
if ($this->session->flashdata('success') != '') {
  echo "
      <script>
      Swal.fire({
          toast: true,
          position: 'top-right',
          iconColor: 'white',
          customClass: {
              popup: 'colored-toast',
          },
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          icon: 'success',
          title: 'Email Terkirim',
      })    
      </script>
      ";
} else if ($this->session->flashdata('error') != '') {
  echo "
      <script>
      Swal.fire({
          toast: true,
          position: 'top-right',
          iconColor: 'white',
          customClass: {
              popup: 'colored-toast',
          },
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          icon: 'success',
          title: 'Email Salah',
      })    
      </script>
      ";
}
?>


<body>

  <!-- section 1 - Hero Section -->
  <div class="d-flex">
    <div class="col-lg-8 col-12">
      <div class="d-grid justify-content-center align-items-center left-side-bg" style="background-image: url('<?= base_url('assets/img/bg_blank.png') ?>')">
        <div class="container col-10">
          <div class="hero-content pt-5" data-aos="fade-right" data-aos-duration="1500">
            <h1 class="fw-bold fs-xl-1 lh-base text-white text-legend">
              Bersama <span class="text-orange">NaZMaLogy </span>
              <br>
              <span>Berinovasi Mewujudkan Mimpi</span>
              <img src="<?= base_url('assets/img/comp1.png') ?>" alt="">
            </h1>
            <p class="text-white fs-5">
              Ubah Impian Menjadi Kenyataan dengan Platform
              <br>Pembelajaran Interaktif dan Inovatif.
            </p>

            <div class="w-25 bg-white rounded my-4 bg-ocean" style="height: 7px;"></div>
            <a href="<?= site_url('front/listClass') ?>">
              <button class="btn btn-primary btn-orange mt-2 px-5 py-1 ft-btn border-orange">
                <i class="bi bi-play-fill text-first fs-5"></i>
                <span class="fw-bold ml-4 text-legend"> Ayo Mulai</span>
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 d-none d-lg-inline" style="padding-top:80px">
      <div class="" style="background-image: url('<?= base_url('assets/img/bg_side.png') ?>');background-repeat: no-repeat;background-size: cover;height:100%">
      </div>
    </div>
  </div>
  <!-- section 1 - Hero Section -->


  <!-- section 2 - Partnership -->
  <section id="partner-ship" class="py-5">
    <div class="container col-10">
      <div class="title p-4 mt-3" data-aos="zoom-in" data-aos-duration="1000">
        <h2 class="fs-2 fw-bold text-center text-legend">Mitra Kami</h2>
      </div>
      <div class="partner-group flex-wrap d-flex gap-5 justify-content-center mt-1 mb-5" data-aos="zoom-in" data-aos-duration="1000">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/ukm_indonesia_1.jpg') ?>" alt="">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/ukm_indonesia_2.jpg') ?>" alt="">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/umkmnaikkelas.jpg') ?>" alt="">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/logo_amikom.jpg') ?>" alt="">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/logoukmindonesia.jpg') ?>" alt="">
      </div>
    </div>
  </section>
  <!-- section 2 - Partnership -->


  <!-- section 3 - Benefit -->
  <section id="benefit" class="bg-first py-5">
    <div class="container">
      <div class="mt-4 py-5">
        <div class="row">
          <div class="col-lg-5 d-none d-lg-inline" data-aos="zoom-in-right" data-aos-duration="1500">
            <img src="<?= base_url('assets/images/landingpage/benefit_image.png') ?>" alt="benefit" class="w-100 p-4">
          </div>
          <div class="col-lg-7" data-aos="zoom-in-left" data-aos-duration="1500">
            <div class="my-lg-4">
              <h2 class="fw-bold mb-lg-4 mb-sm-2 text-white text-legend">Yang Bisa Kami Berikan</h2>
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <div class="bg-white w-100 p-4 rounded-2">
                    <div class="d-flex gap-3">
                      <div class="benefit-box bg-orange h-100 px-3 py-1 rounded-2">
                        <i class="bi bi-play-circle-fill text-white fs-5"></i>
                      </div>
                      <div class="benefit-content">
                        <h5 class="fw-bold text-first text-legend">Video Learning</h5>
                        <span class="fs-6">Pembelajaran Melalui Video</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="bg-white w-100 p-4 rounded-2">
                    <div class="d-flex gap-3">
                      <div class="benefit-box bg-orange h-100 px-3 py-1 rounded-2">
                        <i class="bi bi-clock-history text-white fs-5"></i>
                      </div>
                      <div class="benefit-content">
                        <h5 class="fw-bold text-first text-legend">Akses Tiap Saat</h5>
                        <span class="fs-6">Akses belajar 24 jam setiap hari.</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="bg-white w-100 p-4 rounded-2">
                    <div class="d-flex gap-3">
                      <div class="benefit-box bg-orange h-100 px-3 py-1 rounded-2">
                        <i class="bi bi-people-fill text-white fs-5"></i>
                      </div>
                      <div class="benefit-content">
                        <h5 class="fw-bold text-first text-legend">Mentoring</h5>
                        <span class="fs-6">Forum diskusi bersama mentor</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 3 - Benefit -->


  <!-- section 4 - testimoni -->
  <!-- ================== Testiomni =================== -->
  <section id="testimoni" class="bg-orange py-5">
    <div class="container">
      <div class="py-5">
        <h2 class="fw-bold pb-4 text-center text-white text-legend" data-aos="zoom-in-up" data-aos-duration="1500">Testimoni</h2>
        <div class="row" data-aos="zoom-in-up" data-aos-duration="2000">
          <?php foreach ($testimonials as $item) : ?>
            <div class="col-lg-4 col-md-6">
              <div class="card-testimoni mb-3">
                <div class="card-header p-4 bg-white border rounded-top">
                  <div class="d-flex">
                    <div class="w-25">
                      <img class="image-testimoni rounded-circle" height="70" src="<?= base_url('assets/img/' . $item->image) ?>" alt="">
                    </div>
                    <div class="w-75 d-grid" style="place-items: center start;">
                      <h5 class="fw-bold"><?= $item->author ?></h5>
                      <h6><?= $item->job ?></h6>
                    </div>
                  </div>
                </div>
                <div class="card-content p-4 bg-white border border-top-0 rounded-bottom">
                  <p><?= $item->message ?></p>
                  <div class="p-2"></div>
                  <div class="star-group py-3 text-center">
                    <?php for ($i = 0; $i < $item->rating; $i++) : ?>
                      <i class="bi bi-star-fill fs-3 text-first <?= $i ?>"></i>
                    <?php endfor ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </section>
  <!-- section 4 - testimoni -->


  <!-- section 5 - Subcribe -->
  <section id="subscribe" class="bg-white py-5">
    <div class="email-area w-100 mt-md-3 py-md-5 pb-5" data-aos="zoom-in-up" data-aos-duration="1500">
      <div class="text-center">
        <div class="email-logo ">
          <i class="bi bi-envelope text-warning py-3 px-4 rounded-circle bg-first fs-1"></i>
        </div>
        <div class="card-email mx-auto bg-first pt-5 p-3 p-md-5 rounded" style="margin-top:-30px">
          <h3 class="fw-bold py-2 text-center text-white text-legend">Mari Tetap Terkoneksi</h3>
          <h6 class="text-white">bergabunglah dengan email kami untuk mendapat kabar dan diskon spesial. Kami berjanji akan mengirim banyak
            kabar baik</h6>
          <div class="form-email py-3">
            <form action="<?= site_url('front/save_subscribe') ?>" method="post">
              <div class="row">
                <div class="col-md-8 mb-3">
                  <input type="email" name="email" class="form-control" placeholder="example@example.com">
                </div>
                <div class="col-md-4 mb-3">
                  <button type="submit" class="btn btn-primary w-100 btn-orange border-first fw-bold">Subscibe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section 5 - Subcribe -->

</body>