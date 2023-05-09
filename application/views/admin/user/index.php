<?php
if ($this->session->flashdata('success_login') != '') {
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
          title: 'Login Sukses',
      })    
      </script>
      ";
}
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body id="body-pd">
      <!--=============== Dashboard Content ===============-->
      <div class="space-top">

            <h5 class="ft-7 mb-3 p-2" data-aos="fade-right" data-aos-duration="300">
                  <?php if ($id_role == '3') {
                        echo 'Dashboard Pengguna';
                  } ?>
                  <?php if ($id_role == '1') {
                        echo 'Dashboard Admin';
                  } ?>
                  <?php if ($id_role == '2') {
                        echo 'Dashboard Instruktur';
                  } ?>
            </h5>


            <div class="d-flex card-groups">
                  <!-- 1. Jumlah User, 2. Jumlah Murid, 3. Jumlah kelas -->
                  <div class="card-lg">
                        <div class="card-area">
                              <div class="card-body" data-aos="fade-right" data-aos-duration="700">
                                    <div class="mt-2 image-card d-flex justify-content-center">
                                          <i class="bx bx-<?php if ($id_role == '1') {
                                                                  echo 'user';
                                                            } else {
                                                                  echo 'library';
                                                            } ?> bx-tada stat-image green-image"></i>
                                    </div>
                                    <h2 class="title-card ft-7">
                                          <?= $user_count ?>
                                    </h2>
                                    <h6 class="title-card">
                                          <?php if ($id_role == '1') {
                                                echo 'Pengguna';
                                          } else {
                                                echo 'Kelas';
                                          } ?>
                                    </h6>
                              </div>
                        </div>
                  </div>
                  <div class="card-lg">
                        <div class="card-area">
                              <div class="card-body" data-aos="fade-right" data-aos-duration="900">
                                    <div class="mt-2 image-card d-flex justify-content-center">
                                          <i class="bx bx-<?php if ($id_role == '1') {
                                                                  echo 'library';
                                                            } else {
                                                                  echo 'card';
                                                            } ?> bx-tada stat-image blue-image"></i>
                                    </div>
                                    <h2 class="title-card ft-7">
                                          <?= $course_count ?>
                                    </h2>
                                    <h6 class="title-card">
                                          <?php if ($id_role == '1') {
                                                echo 'Kelas';
                                          } else {
                                                echo 'Sertifikat';
                                          } ?>
                                    </h6>
                              </div>
                        </div>
                  </div>
                  <div class="card-lg <?php if ($id_role == '1') {
                                                echo 'd-none';
                                          } ?>">
                        <div class="card-area">
                              <div class="card-body" data-aos="fade-right" data-aos-duration="900">
                                    <div class="mt-2 image-card d-flex justify-content-center">
                                          <i class="bx bxs-hot bx-tada stat-image red-image"></i>
                                    </div>
                                    <h2 class="title-card ft-7">200</h2>
                                    <h6 class="title-card">Poin Saya</h6>
                              </div>
                        </div>
                  </div>
                  <div class="card-lg <?php if ($id_role == '1') {
                                                echo 'd-none';
                                          } ?>">
                        <div class="card-area">
                              <div class="card-body" data-aos="fade-right" data-aos-duration="900">
                                    <div class="mt-2 image-card d-flex justify-content-center">
                                          <i class="bx bx-medal bx-tada stat-image yellow-image"></i>
                                    </div>
                                    <h2 class="title-card ft-7">1</h2>
                                    <h6 class="title-card">Pencapaian</h6>
                              </div>
                        </div>
                  </div>
            </div>



            <!-- =============== Kelas Berjalan ================= -->
            <section class="splide <?php if ($id_role == '1') {
                                          echo 'd-none';
                                    } ?>" aria-label="Splide Basic HTML Example">
                  <div class="py-4" data-aos="fade-up" data-aos-duration="500">
                        <h5 class="ft-7">Kelas Berjalan</h5>

                  </div>
                  <div class="splide__track" data-aos="fade-up" data-aos-duration="500">
                        <ul class="splide__list">
                              <li class="splide__slide">
                                    <div class="gallery-card-lg">
                                          <div class="card-area">
                                                <div class="card-gallery">
                                                      <div class="d-flex flex-column">
                                                            <div class="course-image">
                                                                  <img src="<?= base_url('assets/img/course-2.png') ?>" alt="">
                                                                  <div class="marker"></div>
                                                            </div>
                                                            <div class="course-title">
                                                                  <h6 class="ft-7 p-2 text-center">Membangun Ketangguhan
                                                                        Bisnis dengan
                                                                        Diversifikasi Inovasi Produk</h6>
                                                            </div>
                                                            <div class="course-progress">
                                                                  <div class="progress" style="height: 10px;">
                                                                        <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                                        </div>
                                                                  </div>
                                                                  <p class="text-lg text-center py-2">100%</p>
                                                            </div>
                                                            <a href="<?= base_url('userBranch/user/detail') ?>">
                                                                  <div class="course-detail">
                                                                        <button class="btn btn-danger bg-yellow w-100 ft-7">Lanjutkan
                                                                              Kelas</button>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </li>
                              <li class="splide__slide">
                                    <div class="gallery-card-lg">
                                          <div class="card-area">
                                                <div class="card-gallery">
                                                      <div class="d-flex flex-column">
                                                            <div class="course-image">
                                                                  <img src="<?= base_url('assets/img/course-1.png') ?>" alt="">
                                                                  <div class="marker"></div>
                                                            </div>
                                                            <div class="course-title">
                                                                  <h6 class="ft-7 p-2 text-center"> Go Digital -
                                                                        Memahami Corong Pemasaran
                                                                  </h6>
                                                            </div>
                                                            <div class="course-progress">
                                                                  <div class="progress" style="height: 10px;">
                                                                        <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                                        </div>
                                                                  </div>
                                                                  <p class="text-lg text-center py-2">25%</p>
                                                            </div>
                                                            <a href="<?= base_url('userBranch/user/detail') ?>">
                                                                  <div class="course-detail">
                                                                        <button class="btn btn-danger bg-yellow w-100 ft-7">Lanjutkan
                                                                              Kelas</button>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </li>
                        </ul>
                  </div>
            </section>

            <section id="analytics">
                  <div class="py-4" data-aos="fade-up" data-aos-duration="500">
                        <h5 class="ft-7">Statistik Pengguna</h5>
                  </div>
                  <div class="row">
                        <div class="col-md-6">
                              <canvas id="myChart"></canvas>
                        </div>
                  </div>
            </section>
            <script>
                  var ctx = document.getElementById('myChart').getContext('2d');
                  var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                              labels: ['Super Admin', 'Instruktur', 'Murid'],
                              datasets: [{
                                    label: 'Statistik Jumlah Pengguna Berdasarkan Role',
                                    data: [<?php echo $admin_count; ?>, <?php echo $instructor_count; ?>, <?php echo $member_count; ?>],
                                    backgroundColor: [
                                          'rgba(0, 0, 0, 0.58)',
                                          'rgba(45, 47, 118, 0.39)',
                                          'rgba(254, 129, 27, 0.5)'
                                    ],
                                    borderColor: [
                                          'rgba(0, 0, 0, 0.89)',
                                          'rgba(44, 47, 117, 1)',
                                          'rgba(254, 129, 27, 1)'
                                    ],
                                    borderWidth: 2
                              }]
                        },
                        options: {
                              scales: {
                                    y: {
                                          beginAtZero: true
                                    }
                              }
                        }
                  });
            </script>
            </script>
      </div>
      <!--=============== Footer Tab and Desktop ===============-->
      <footer class="p-0">
            <div class="d-flex justify-content-center">
                  <p class="mt-3 ft-7">NaZMa Office &copy 2023
                  </p>
            </div>
      </footer>
</body>