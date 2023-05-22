<!-- ============== Splide CSS ================= -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

<body>
  <section id="hero" class="bg-light-primary">
    <div class="container col-lg-10">
      <div class="spacer pt-5"></div>
      <div class="hero-content py-5">
        <div class="row flex-md-row-reverse">
          <div class="col-lg-6 col-md-4 pt-md-5">
            <img class="w-100 d-lg-block mx-auto d-none" src="<?= base_url('assets/images/landingpage/hero_image.png') ?>" alt=" NaZMalogy">
          </div>
          <div class="col-lg-6 col-md-8 pt-lg-5 mt-md-5 mt-2">
            <div class="d-flex gap-3">
              <img width="30" height="30" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/hero-book.png') ?>" alt="hero-book">
              <p class="fs-6">
                Your E-learning Partner
              </p>
            </div>

            <h2 class="fw-bold fs-2 lh-base">
              Bersama <span class="text-first">NaZMalogy</span>
              <br>Berinovasi <span class="text-first">Mewujudkan Mimpi</span>
            </h2>
            <p>
              Ubah impian menjadi kenyataan dengan platform pembelajaran interaktif dan inovatif.


            </p>
            <a href="<?= site_url('auth/login_page') ?>">
              <a href="<?= site_url('auth/login_page') ?>">
                <button class="btn btn-primary btn-orange px-4 ft-btn border-orange">
                  <i class="bi bi-play-fill"></i>
                  <span> Ayo Mulai</span>
                </button>
              </a>
            </a>
          </div>

        </div>
      </div>


    </div>
  </section>

  <section id="partner-ship">
    <div class="container col-10">
      <div class="title p-4 mt-3">
        <h2 class="fs-2 fw-bold text-center">Mitra Kami</h2>
      </div>
      <div class="partner-group flex-wrap d-flex gap-5 justify-content-center mt-1 mb-5">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/ukm_indonesia_1.jpg') ?>" alt="">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/ukm_indonesia_2.jpg') ?>" alt="">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/umkmnaikkelas.jpg') ?>" alt="">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/logo_amikom.jpg') ?>" alt="">
        <img width="110" class="object-fit-contain" src="<?= base_url('assets/images/landingpage/logoukmindonesia.jpg') ?>" alt="">
      </div>
    </div>
  </section>

  <section id="benefit" class="bg-white-custom py-5">
    <div class="container">
      <div class="mt-4">
        <div class="row">
          <div class="col-lg-5 d-none d-lg-inline">
            <img src="<?= base_url('assets/images/landingpage/benefits.png') ?>" alt="benefit" class="w-100">
          </div>
          <div class="col-lg-7">
            <div class="my-lg-4">
              <h2 class="fw-bold mb-lg-4 mb-sm-2">Yang Bisa Kami Berikan</h2>
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <div class="benefit-area bg-white w-100 p-4 rounded-2">
                    <div class="d-flex gap-3">
                      <div class="benefit-box bg-orange h-100 px-3 py-1 rounded-2">
                        <i class="bi bi-play-circle-fill text-white fs-5"></i>
                      </div>
                      <div class="benefit-content">
                        <h5 class="fw-bold text-first">Video Learning</h5>
                        <span class="fs-6">Pembelajaran Melalui Video</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="benefit-area bg-white w-100 p-4 rounded-2">
                    <div class="d-flex gap-3">
                      <div class="benefit-box bg-orange h-100 px-3 py-1 rounded-2">
                        <i class="bi bi-clock-history text-white fs-5"></i>
                      </div>
                      <div class="benefit-content">
                        <h5 class="fw-bold text-first">Akses Tiap Saat</h5>
                        <span class="fs-6">Akses belajar 24 jam setiap hari.</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="benefit-area bg-white w-100 p-4 rounded-2">
                    <div class="d-flex gap-3">
                      <div class="benefit-box bg-orange h-100 px-3 py-1 rounded-2">
                        <i class="bi bi-people-fill text-white fs-5"></i>
                      </div>
                      <div class="benefit-content">
                        <h5 class="fw-bold text-first">Mentoring</h5>
                        <span class="fs-6">Forum diskusi bersama mentor</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="benefit-area bg-white w-100 p-4 rounded-2">
                    <div class="d-flex gap-3">
                      <div class="benefit-box bg-orange h-100 px-3 py-1 rounded-2">
                        <i class="bi bi-trophy-fill text-white fs-5"></i>
                      </div>
                      <div class="benefit-content">
                        <h5 class="fw-bold text-first">Quiz dan Poin</h5>
                        <span class="fs-6">Latihan Soal dan Raihlah Poin</span>
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
  <!-- =============== Kelas Favorit ================= -->
  <section id="favourite-class" class="bg-first-dark py-5">
    <div class="splide pb-5" id="first-splide" aria-label="Splide Basic HTML Example">
      <div class="container">
        <div class="pt-3 pb-4">
          <h2 class="fw-bold text-center">Kursus Terpopuler</h2>
        </div>
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="class-lg">
                <div class="card-area">
                  <div class="card-class">
                    <div class="d-flex flex-column">
                      <div class="class-image">
                        <img src="<?= base_url('assets/img/class_album.jpg') ?>" alt="">
                        <div class="marker"></div>
                      </div>
                      <div class="class-tag">
                        <button class="btn btn-outline-warning text-lg">marketing</button>
                        <button class="btn btn-outline-warning text-lg">business</button>
                      </div>
                      <div class="class-title">
                        <h5 class="fw-bold p-2">Digital Marketing Untuk UMKM</h5>
                      </div>
                      <div class="class-action">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex gap-4 popularity">
                            <div class="rating">
                              <i class="bx bx-star class-icon yellow-image"></i>
                              <span class="text-xl">4.3</span>
                            </div>
                            <div class="person">
                              <i class="bx bx-user class-icon blue-image"></i>
                              <span class="text-xl">20k+</span>
                            </div>
                          </div>
                          <div class="detail-bottom">
                            <a href="detail_class.html">
                              <button class="btn btn-primary border-first btn-first text-xl">+ Ikuti</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="class-lg">
                <div class="card-area">
                  <div class="card-class">
                    <div class="d-flex flex-column">
                      <div class="class-image">
                        <img src="<?= base_url('assets/images/landingpage/communication.jpg') ?>" alt="">
                        <div class="marker"></div>
                      </div>
                      <div class="class-tag">
                        <button class="btn btn-outline-warning text-lg">marketing</button>
                        <button class="btn btn-outline-warning text-lg">business</button>
                      </div>
                      <div class="class-title">
                        <h5 class="fw-bold p-2">Komunikasi Bisnis yang Elegan dan Powerfull</h5>
                      </div>
                      <div class="class-action">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex gap-4 popularity">
                            <div class="rating">
                              <i class="bx bx-star class-icon yellow-image"></i>
                              <span class="text-xl">4.3</span>
                            </div>
                            <div class="person">
                              <i class="bx bx-user class-icon blue-image"></i>
                              <span class="text-xl">20k+</span>
                            </div>
                          </div>


                          <div class="detail-bottom">
                            <a href="detail_class.html">
                              <button class="btn btn-primary border-first btn-first text-xl">+ Ikuti</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div class="class-lg">
                <div class="card-area">
                  <div class="card-class">
                    <div class="d-flex flex-column">
                      <div class="class-image">
                        <img src="<?= base_url('assets/images/landingpage/team_management.jpg') ?>" alt="">
                        <div class="marker"></div>
                      </div>
                      <div class="class-tag">
                        <button class="btn btn-outline-warning text-lg">management</button>
                        <button class="btn btn-outline-warning text-lg">business</button>
                      </div>
                      <div class="class-title">
                        <h5 class="fw-bold p-2">Manajemen Tim Secara Efektif</h5>
                      </div>
                      <div class="class-action">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex gap-4 popularity">
                            <div class="rating">
                              <i class="bx bx-star class-icon yellow-image"></i>
                              <span class="text-xl">4.3</span>
                            </div>
                            <div class="person">
                              <i class="bx bx-user class-icon blue-image"></i>
                              <span class="text-xl">20k+</span>
                            </div>
                          </div>


                          <div class="detail-bottom">
                            <a href="detail_class.html">
                              <button class="btn btn-primary border-first btn-first text-xl">+ Ikuti</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ================== instructors ================= -->
  <section id="instructors" class="bg-light-primary py-5">
    <h2 class="fw-bold pb-2 pt-3 text-center">Instruktur Kami</h2>
    <div class="card-frame">
      <div class="splide py-3" id="second-splide" aria-label="Basic Structure Example">
        <div class="container">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="p-3">
                  <div class="person-card rounded">
                    <img class="w-100 object-fit-cover position-relative" height="225" src="<?= base_url('assets/img/Foto_Muhammad_Afifudin.png') ?>" alt="">
                    <div class="sosmed-group d-flex justify-content-center gap-2">
                      <a href="/">
                        <i class="bi bi-linkedin py-2 px-3 rounded bg-white"></i>
                      </a>
                      <a href="/">
                        <i class="bi bi-whatsapp py-2 px-3 rounded bg-white"></i>
                      </a>
                      <a href="/">
                        <i class="bi bi-envelope py-2 px-3 rounded bg-white"></i>
                      </a>
                    </div>
                    <div class="desc-card bg-white p-4">
                      <h5 class="text-center fw-bold pt-1">Muhammad Afifudin</h5>
                      <h6 class="text-center">Web Developer</h6>
                      <hr class="col-8 d-block mx-auto">
                      <div class="d-flex justify-content-lg-between justify-content-around">
                        <div class="student text-first">
                          <i class="bi bi-person fs-5"></i>
                          <span class="text-lg">126 Siswa</span>
                        </div>
                        <div class="course text-first">
                          <i class="bi bi-bookmark fs-5"></i>
                          <span class="text-lg">6 Kursus</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="p-3">
                  <div class="person-card rounded">
                    <img class="w-100 object-fit-cover" height="225" src="<?= base_url('assets/img/Foto_Muhammad_Afifudin.png') ?>" alt="">
                    <div class="sosmed-group d-flex justify-content-center gap-2">
                      <a href="/">
                        <i class="bi bi-linkedin py-2 px-3 rounded bg-white"></i>
                      </a>
                      <a href="/">
                        <i class="bi bi-whatsapp py-2 px-3 rounded bg-white"></i>
                      </a>
                      <a href="/">
                        <i class="bi bi-envelope py-2 px-3 rounded bg-white"></i>
                      </a>
                    </div>
                    <div class="desc-card bg-white p-4">
                      <h5 class="text-center fw-bold pt-1">Muhammad Afifudin</h5>
                      <h6 class="text-center">Web Developer</h6>
                      <hr class="col-8 d-block mx-auto">
                      <div class="d-flex justify-content-lg-between justify-content-around">
                        <div class="student text-first">
                          <i class="bi bi-person fs-5"></i>
                          <span class="text-lg">126 Siswa</span>
                        </div>
                        <div class="course text-first">
                          <i class="bi bi-bookmark fs-5"></i>
                          <span class="text-lg">6 Kursus</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="p-3">
                  <div class="person-card rounded">
                    <img class="w-100 object-fit-cover" height="225" src="<?= base_url('assets/img/Foto_Muhammad_Afifudin.png') ?>" alt="">
                    <div class="sosmed-group d-flex justify-content-center gap-2">
                      <a href="/">
                        <i class="bi bi-linkedin py-2 px-3 rounded bg-white"></i>
                      </a>
                      <a href="/">
                        <i class="bi bi-whatsapp py-2 px-3 rounded bg-white"></i>
                      </a>
                      <a href="/">
                        <i class="bi bi-envelope py-2 px-3 rounded bg-white"></i>
                      </a>
                    </div>
                    <div class="desc-card bg-white p-4">
                      <h5 class="text-center fw-bold pt-1">Muhammad Afifudin</h5>
                      <h6 class="text-center">Web Developer</h6>
                      <hr class="col-8 d-block mx-auto">
                      <div class="d-flex justify-content-lg-between justify-content-around">
                        <div class="student text-first">
                          <i class="bi bi-person fs-5"></i>
                          <span class="text-lg">126 Siswa</span>
                        </div>
                        <div class="course text-first">
                          <i class="bi bi-bookmark fs-5"></i>
                          <span class="text-lg">6 Kursus</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="p-3">
                  <div class="person-card rounded">
                    <img class="w-100 object-fit-cover" height="225" src="<?= base_url('assets/img/Foto_Muhammad_Afifudin.png') ?>" alt="">
                    <div class="sosmed-group d-flex justify-content-center gap-2">
                      <a href="/">
                        <i class="bi bi-linkedin py-2 px-3 rounded bg-white"></i>
                      </a>
                      <a href="/">
                        <i class="bi bi-whatsapp py-2 px-3 rounded bg-white"></i>
                      </a>
                      <a href="/">
                        <i class="bi bi-envelope py-2 px-3 rounded bg-white"></i>
                      </a>
                    </div>
                    <div class="desc-card bg-white p-4">
                      <h5 class="text-center fw-bold pt-1">Muhammad Afifudin</h5>
                      <h6 class="text-center">Web Developer</h6>
                      <hr class="col-8 d-block mx-auto">
                      <div class="d-flex justify-content-lg-between justify-content-around">
                        <div class="student text-first">
                          <i class="bi bi-person fs-5"></i>
                          <span class="text-lg">126 Siswa</span>
                        </div>
                        <div class="course text-first">
                          <i class="bi bi-bookmark fs-5"></i>
                          <span class="text-lg">6 Kursus</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================== Testiomni =================== -->
  <section id="testimoni" class="bg-light-primary py-5">
    <h2 class="fw-bold pb-2 pt-3 text-center">Testimoni</h2>
    <div class="container">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6">
          <div class="card-testimoni mb-3">
            <div class="card-header p-3 bg-white border">
              <div class="d-flex">
                <div class="w-25">
                  <img class="image-testimoni rounded-circle" height="70" src="<?= base_url('assets/img/Foto_Muhammad_Afifudin.png') ?>" alt="">
                </div>
                <div class="w-75 d-grid" style="place-items: center start;">
                  <h5 class="fw-bold">Muhammad Afifudin</h5>
                  <h6>Web Developer</h6>
                </div>
              </div>
            </div>
            <div class="card-content p-3 bg-white border border-top-0">
              <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magni praesentium deleniti rem accusantium
                blanditiis voluptatibus sapiente! Reiciendis quia sunt unde dolorum possimus sit consequuntur ducimus,
                minus incidunt quisquam necessitatibus quidem voluptates aliquid nostrum ullam omnis illum quaerat nulla
                atque saepe tempore doloribus vero aperiam. Asperiores suscipit distinctio deleniti alias.</i>
              <div class="star-group pt-4 pb-3 text-center">
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card-testimoni mb-3">
            <div class="card-header p-3 bg-white border">
              <div class="d-flex">
                <div class="w-25">
                  <img class="image-testimoni rounded-circle" height="70" src="<?= base_url('assets/img/Foto_Muhammad_Afifudin.png') ?>" alt="">
                </div>
                <div class="w-75 d-grid" style="place-items: center start;">
                  <h5 class="fw-bold">Muhammad Afifudin</h5>
                  <h6>Web Developer</h6>
                </div>
              </div>
            </div>
            <div class="card-content p-3 bg-white border border-top-0">
              <i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam suscipit expedita quibusdam
                recusandae dolore magni voluptas id voluptatem consequatur facilis!</i>
              <div class="star-group pt-4 pb-3 text-center">
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card-testimoni mb-3">
            <div class="card-header p-3 bg-white border">
              <div class="d-flex">
                <div class="w-25">
                  <img class="image-testimoni rounded-circle" height="70" src="<?= base_url('assets/img/Foto_Muhammad_Afifudin.png') ?>" alt="">
                </div>
                <div class="w-75 d-grid" style="place-items: center start;">
                  <h5 class="fw-bold">Muhammad Afifudin</h5>
                  <h6>Web Developer</h6>
                </div>
              </div>
            </div>
            <div class="card-content p-3 bg-white border border-top-0">
              <i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit earum est facilis, quia
                provident amet obcaecati suscipit natus. Fuga veritatis dolores fugit magni, quisquam facere ipsa vel
                consectetur corrupti explicabo?</i>
              <div class="star-group pt-4 pb-3 text-center">
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
                <i class="bi bi-star-fill fs-3 text-first"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =============== Email ================= -->
  <section id="email" class="bg-first-dark py-5">
    <div class="email-area w-100 mt-md-3 py-md-5 pb-5">
      <div class="text-center">
        <div class="email-logo ">
          <i class="bi bi-envelope text-warning py-3 px-4 rounded-circle bg-white fs-1"></i>
        </div>
        <div class="card-email mx-auto bg-white pt-5 p-3 p-md-5 rounded" style="margin-top:-30px">
          <h3 class="fw-bold text-center">Mari Tetap Terkoneksi</h3>
          <h6>bergabunglah dengan email kami untuk mendapat kabar dan diskon spesial. Kami berjanji akan mengirim banyak
            kabar baik</h6>
          <div class="form-email py-3">
            <form>
              <div class="row">
                <div class="col-md-8 mb-3">
                  <input type="email" class="form-control" placeholder="example@example.com" aria-describedby="emailHelp">
                </div>
                <div class="col-md-4 mb-3">
                  <button class="btn btn-primary w-100 btn-first border-first fw-bold">Subscibe</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>