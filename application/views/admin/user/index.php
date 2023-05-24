<?php $this->load->view('admin/user/style'); ?>
<?php $this->load->view('admin/user/menubar'); ?>
<?php if ($this->session->flashdata('success_login') != '') { ?>
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
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body id="body-pd">
      <!--=============== Dashboard Content ===============-->
      <div class="space-top">

            <?php
            $dashboardTitle = '';
            switch ($id_role) {
                  case '3':
                        $dashboardTitle = 'Dashboard Pengguna';
                        break;
                  case '1':
                        $dashboardTitle = 'Dashboard Admin';
                        break;
                  case '2':
                        $dashboardTitle = 'Dashboard Instruktur';
                        break;
            }
            ?>

            <h5 class="ft-7 mb-3 p-2" data-aos="fade-right" data-aos-duration="300">
                  <?php echo $dashboardTitle; ?>
            </h5>

            <div class="d-flex card-groups">
                  <!-- 1. Jumlah User, 2. Jumlah Murid, 3. Jumlah kelas -->
                  <?php if ($id_role == '1') : ?>
                        <div class="card-lg">
                              <div class="card-area">
                                    <div class="card-body border" data-aos="fade-right" data-aos-duration="700">
                                          <div class="mt-2 image-card d-flex justify-content-center">
                                                <i class="bx bx-user bx-tada stat-image green-image"></i>
                                          </div>
                                          <h2 class="title-card ft-7"><?= $user_count ?></h2>
                                          <h6 class="title-card">Pengguna</h6>
                                    </div>
                              </div>
                        </div>
                  <?php else : ?>
                        <div class="card-lg">
                              <div class="card-area">
                                    <div class="card-body border" data-aos="fade-right" data-aos-duration="700">
                                          <div class="mt-2 image-card d-flex justify-content-center">
                                                <i class="bx bx-library bx-tada stat-image green-image"></i>
                                          </div>
                                          <h2 class="title-card ft-7"><?php echo $course_count_user; ?></h2>
                                          <h6 class="title-card">Kelas Berjalan</h6>
                                    </div>
                              </div>
                        </div>
                  <?php endif; ?>

                  <div class="card-lg">
                        <div class="card-area">
                              <div class="card-body border" data-aos="fade-right" data-aos-duration="900">
                                    <div class="mt-2 image-card d-flex justify-content-center">
                                          <i class="bx bx-<?php echo ($id_role == '1') ? 'library' : 'card'; ?> bx-tada stat-image blue-image"></i>
                                    </div>
                                    <!-- <h2 class="title-card ft-7"><?= $course_count ?></h2> -->
                                    <h2 class="title-card ft-7"><?php echo ($id_role == '1') ? $course_count : $course_finish; ?></h2>
                                    <h6 class="title-card"><?php echo ($id_role == '1') ? 'Kelas' : 'Kelas Selesai'; ?></h6>
                              </div>
                        </div>
                  </div>
            </div>


            <?php if (!empty($courses)) : ?>
                  <div class="col-md-6 pb-5 mb-5">
                        <?php if ($id_role != '1') : ?>
                              <section class="splide" aria-label="Splide Basic HTML Example">
                                    <div class="py-4" data-aos="fade-up" data-aos-duration="500">
                                          <h5 class="ft-7">Kelas Berjalan</h5>
                                    </div>
                                    <div class="splide__track" data-aos="fade-up" data-aos-duration="500">
                                          <ul class="splide__list">
                                                <?php foreach ($courses as $course) : ?>
                                                      <li class="splide__slide">
                                                            <div class="gallery-card">
                                                                  <div class="card-area">
                                                                        <div class="card-gallery px-4">
                                                                              <div class="d-flex flex-column">
                                                                                    <div class="course-image">
                                                                                          <img src="<?= base_url('assets/images/admin/course/' . $course->cover) ?>">
                                                                                          <div class="marker"></div>
                                                                                    </div>
                                                                                    <div class="gallery-content bg-white p-4 border rounded-bottom">
                                                                                          <h6 class="ft-7 p-2 text-center"><?= $course->title ?></h6>
                                                                                          <div class="">
                                                                                                <?php
                                                                                                $progress = $course->progress;
                                                                                                $width = ($progress >= 100) ? 100 : $progress; // Menghindari lebar yang melebihi 100%

                                                                                                ?>
                                                                                                <div class="progress" style="height: 10px;">
                                                                                                      <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: <?= $width ?>%;" aria-valuenow="<?= $width ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                                </div>
                                                                                                <p class="text-lg text-center py-2"><?= round($progress) ?>%</p>
                                                                                          </div>
                                                                                          <a href="<?= base_url('userBranch/classpath/detail_course/' . $course->id) ?>">
                                                                                                <div class="course-detail">
                                                                                                      <button class="btn btn-danger bg-yellow w-100 ft-7">Lanjutkan
                                                                                                            Kelas</button>
                                                                                                </div>
                                                                                          </a>
                                                                                    </div>

                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </li>
                                                <?php endforeach ?>
                                          </ul>
                                    </div>
                              </section>
                        <?php endif; ?>
                  </div>
            <?php endif; ?>


            <!-- Cannot see the Analytics User When User Auth is not admin role -->
            <?php
            $analyticsClass = ($id_role != '1') ? 'd-none' : '';
            ?>

            <section id="analytics" class="<?php echo $analyticsClass; ?>">
                  <div class="mb-5 pb-5">
                        <div class="row">
                              <div class="col-md-6">
                                    <div class="py-4" data-aos="fade-up" data-aos-duration="500">
                                          <h5 class="ft-7">Statistik Pengguna</h5>
                                    </div>
                                    <div class="px-3">
                                          <canvas id="UserChart" data-aos-duration="500"></canvas>
                                    </div>

                              </div>
                              <div class="col-md-6">
                                    <div class="py-4" data-aos="fade-up" data-aos-duration="500">
                                          <h5 class="ft-7">Statistik Video</h5>
                                    </div>
                                    <div class="px-3">
                                          <canvas id="VideoChart" data-aos-duration="500"></canvas>
                                    </div>

                              </div>
                        </div>
                  </div>
            </section>
            <!-- Cannot see the Analytics User When User Auth is not admin role -->

      </div>

      <!-- Analytics User Management Script -->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script>
            var ctx = document.getElementById('UserChart').getContext('2d');
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

            var ctx = document.getElementById('VideoChart').getContext('2d');
            var videoCounts = <?php echo json_encode($video_counts); ?>;
            var labels = videoCounts.map(function(item) {
                  return item.category_name;
            });
            var data = videoCounts.map(function(item) {
                  return item.video_count;
            });

            var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                        labels: labels,
                        datasets: [{
                              label: 'Statistik Jumlah Video Berdasarkan Kategori',
                              data: data,
                              backgroundColor: 'rgba(45, 47, 118, 0.39)',
                              borderColor: 'rgba(44, 47, 117, 1)',
                              borderWidth: 2
                        }]
                  },
                  options: {
                        scales: {
                              y: {
                                    beginAtZero: true,
                                    stepSize: 1
                              }
                        }
                  }
            });
      </script>
      <!-- Analytics User Management Script -->
</body>