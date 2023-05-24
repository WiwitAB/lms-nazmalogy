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
          title: 'Kelas Dimulai',
      })    
      </script>
      ";
} elseif ($this->session->flashdata('feedback') != '') {
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
        title: 'Feedback Terkirim',
    })    
    </script>
    ";
}
?>

<!--=============== External CSS ================= -->
<link rel="stylesheet" href="<?= base_url('assets/css/star.css') ?>">

<body id="body-pd">
    <!--=============== Course Content ===============-->
    <div class="space-top">
        <a class="fw-bold gap-3 fs-5" style="color:#2c2f75" href="<?= site_url('userBranch/classpath/listClass') ?>">
            <i class="bi bi-chevron-left"></i>
            <span class="py-5">
                Kembali </span>
        </a>

        <h3 class="ft-7 mt-3"><?= $course->title ?></h3>
        <p class="gray-text"><?= $course->instructor ?></p>
        <div class="row pt-2">
            <div class="col-lg-7">
                <div class="video-panel">
                    <div class="bg-white rounded border">
                        <div id="player"></div>
                        <div class="video-player d-flex justify-content-between p-3">
                            <div class="button-control d-flex gap-2">
                                <button id="speedDownButton" class="btn btn-primary bg-first" title="mundur 5 detik">
                                    <i class="bi bi-skip-start-fill"></i>
                                </button>
                                <button id="playPauseButton" onclick="togglePlayPause()" class="btn btn-warning bg-orange" title="Play/Stop">
                                    <i class="bi bi-play-fill text-white"></i>
                                </button>
                                <button id="speedUpButton" class="btn btn-primary bg-first" title="maju 5 detik">
                                    <i class="bi bi-skip-end-fill"></i>
                                </button>
                            </div>
                            <button id="fullscreenButton" onclick="toggleFullscreen()" class="btn btn-warning bg-orange" title="Play/Stop">
                                <i class="bi bi-fullscreen text-white"></i>
                            </button>
                        </div>
                    </div>
                    <?php if (!$has_relation) : ?>
                        <!-- <h6 class="ft-7 pt-3">Intro Kelas</h6> -->
                        <div class="list-course pt-1 d-flex flex-column gap-3 kelas">
                            <div class="bg-white rounded d-flex gap-2 px-15 border">
                                <div class="course-progress w-100 d-flex justify-content-between block-center">
                                    <div class=" icon-progress icon-center">
                                        <i id="icon-<?= $course->id ?>" class="text-center bx bx-pause-circle ready-icon"></i>
                                        <a href="<?= site_url('userBranch/classpath/detail_course/' . $course->id)  ?>" id="link-<?= $course->id ?>" class="video-ready text-warning mx-2">Intro Kelas</a>
                                    </div>

                                    <div class="button-control">
                                        <button id="speedDownButton" class="btn btn-primary bg-first" title="mundur 5 detik">
                                            <i class="bi bi-chevron-double-left"></i>
                                        </button>
                                        <button id="speedUpButton" class="btn btn-primary bg-first" title="maju 5 detik">
                                            <i class="bi bi-chevron-double-right"></i>
                                        </button>
                                    </div>

                                    <div class="time-course block-center" id="duration">
                                        0<?= $course->intro_duration ?>:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="list-course pt-1 d-flex flex-column gap-3 kelas">
                            <div class="bg-white rounded d-flex gap-2 px-15 border">
                                <div class="course-progress w-100 d-flex justify-content-between block-center">
                                    <div class=" icon-progress icon-center">
                                        <i id="icon-<?= $course->id ?>" class="text-center bi bi-check2-circle fs-5 text-success"></i>
                                        <a href="<?= site_url('userBranch/classpath/detail_course/' . $course->id)  ?>" id="link-<?= $course->id ?>" class="video-ready text-success mx-2">Intro Kelas</a>
                                    </div>
                                    <div class="time-course block-center" id="duration">
                                        <button id="button-<?= $course->id ?>" class="btn btn-success fs-6">
                                            <i class="bi bi-check-all"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
                <div class="tab-panel pt-2 mt-3 mb-5 bg-white p-4 border">

                    <div class="d-flex gap-3">
                        <div id="detail1" class="p-3 tab-up" onclick="openCity('detail')" style="border-bottom:  2px solid #2c2f75;">
                            <span class="ft-7">Pengantar</span>
                        </div>
                        <div id="profil1" class="p-3 tab-up" onclick="openCity('profil')">
                            <span class="ft-7">Feedback</span>
                        </div>
                        <?php if ($progress == 100) : ?>
                            <div id="mentoring1" class="p-3 tab-up" onclick="openCity('mentoring')">
                                <span class="ft-7">Gabung Mentoring</span>
                            </div>
                        <?php endif ?>
                    </div>

                    <div id="detail" class="city bg-white p-3">
                        <p><?= $course->summary ?></p>
                    </div>
                    <div id="profil" class="city bg-white p-3" style="display:none">
                        <?php if (!empty($rating)) : ?>
                            <form action="<?= site_url('userBranch/classpath/save_feedback') ?>" method="post">
                                <input type="text" name="id_user" value="<?php echo $id_user ?>" hidden>
                                <input type="text" name="id_course" value="<?php echo $course->id ?>" hidden>
                                <div class="mb-3 p-2">
                                    <label for="rating" class="text-lg ft-7 form-label">Berikan Rating</label>

                                    <input name="rating" class="rating" max="5" oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5" style="--value:0" type="range" value="0">
                                </div>
                                <div class="mb-3 p-2">
                                    <label for="feedback" class="text-lg ft-7 form-label">Berikan Masukan dan Saran</label>
                                    <textarea rows="4" name="feedback" class="form-control" placeholder="Leave a comment here"></textarea>
                                </div>
                                <button class="btn btn-primary bg-first w-100"> Kirim Feedback</button>
                            </form>
                        <?php else : ?>
                            <div class="feedback p-3 border">
                                <div class="d-flex justify-content-between py-2">
                                    <h6 class="fw-bold">Tanggapan Saya Tentang Kursus Ini</h6>
                                    <div class="action-btn">
                                        <button class="btn btn-primary bg-first p-1 px-3 text-white text-lg" data-bs-toggle="modal" data-bs-target="#FeedbackModal"> <i class="bi bi-pencil-square"></i> Edit</button>
                                    </div>
                                </div>

                                <input name="rating" class="rating my-3 fs-6" max="5" oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5" style="--value:<?php echo $feedback->rating ?>" type="range" value="0" disabled>
                                <p class="py-3"><?php echo $feedback->feedback ?></p>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="FeedbackModal" tabindex="-1" aria-labelledby="FeedbackModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Feedback</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= site_url('userBranch/classpath/save_feedback') ?>" method="post">
                                                <input type="text" name="id_user" value="<?php echo $id_user ?>" hidden>
                                                <input type="text" name="id_course" value="<?php echo $course->id ?>" hidden>
                                                <div class="mb-3 p-2">
                                                    <label for="rating" class="text-lg ft-7 form-label">Berikan Rating</label>

                                                    <input name="rating" class="rating my-3 fs-6" max="5" oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5" style="--value:<?php echo $feedback->rating ?>" value="<?php echo $feedback->rating ?>" type="range" value="0">
                                                </div>
                                                <div class="mb-3 p-2">
                                                    <label for="feedback" class="text-lg ft-7 form-label">Berikan Masukan dan Saran</label>
                                                    <textarea rows="4" name="feedback" class="form-control" placeholder="Leave a comment here"><?php echo $feedback->feedback ?></textarea>
                                                </div>
                                                <button class="btn btn-primary bg-first w-100"> Kirim Feedback</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                    <div id="mentoring" class="city bg-white p-3" style="display:none">
                        <h6>Gabung Mentoring Melalui Link di Bawah ini : </h6>
                        <a href="<?= $course->title ?>" class="text-decoration-underline" target="_blank"><?= $course->title ?></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-5">
                <div class="right-content mb-5 pb-5">
                    <?php if (!$has_relation) : ?>
                        <div class="alert alert-warning" role="alert">
                            Anda harus menonton video perkenalan kelas untuk membuka kelas lainnya!!
                        </div>
                        <?php
                        $no = 1;
                        foreach ($playlists as $playlist) { ?>
                            <h6 class="ft-7 pt-3"><?php echo $playlist->name; ?></h6>

                            <?php foreach ($playlist->videos as $video) { ?>
                                <div class="list-course pt-1 d-flex flex-column gap-3 kelas">
                                    <div class="card-course d-flex gap-2 px-15 border">
                                        <div class=" icon-progress w-10 icon-center">
                                            <i id="ready_icon" class="text-center bi bi-file-lock2 fs-5 text-secondary"></i>
                                        </div>
                                        <div class="course-progress w-75 block-center">
                                            <a href="#" class="video-ready text-secondary"><?= $video->title  ?></a>
                                        </div>
                                        <div class="time-course w-15 block-center">
                                            0<?= $video->duration ?>:00
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php } ?>
                    <?php else : ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="ft-7 mb-4">Perkembangan Belajar Anda</h6>
                                <div class="progress orange">
                                    <?php
                                    $width = $progress > 100 ? 100 : (int)($progress / 10) * 10; // Menghitung lebar progress bar

                                    if ($width === 0) {
                                        $width = 0; // Atur lebar minimal jika progress = 0
                                    }
                                    ?>

                                    <div class="progress-bar" id="progress" style="width:<?php echo $width; ?>%;background:#f7810e;">
                                    </div>
                                </div>
                                <div class="progress-value fw-bold text-warning text-center"><span><?= round($progress)  ?></span>%</div>
                            </div>
                        </div>

                        <?php
                        $no = 1;
                        foreach ($playlists as $playlist) { ?>
                            <h6 class="ft-7 pt-3"><?php echo $playlist->name; ?></h6>

                            <?php foreach ($playlist->videos as $video) { ?>

                                <div class="list-course pt-1 d-flex flex-column gap-3 kelas">
                                    <div class="bg-white gap-2 rounded d-flex px-15 border">
                                        <?php if ($video->status == 1) : ?>
                                            <div class=" icon-progress w-10 icon-center">
                                                <i id="ready_icon" class="text-center bi bi-check2-circle fs-5 text-success"></i>
                                            </div>
                                        <?php else : ?>
                                            <div class=" icon-progress w-10 icon-center">
                                                <i id="ready_icon" class="text-center bx bx-pause-circle ready-icon"></i>
                                            </div>
                                        <?php endif ?>
                                        <div class="course-progress w-75 block-center">
                                            <?php if ($video->status == 1) : ?>
                                                <a href="<?= site_url('userBranch/classpath/detail_video_course/' . $course->id . "/" . $video->id)  ?>" class="video-ready text-success"><?= $video->title  ?></a>
                                            <?php else : ?>
                                                <a href="<?= site_url('userBranch/classpath/detail_video_course/' . $course->id . "/" . $video->id)  ?>" class="video-ready text-warning"><?= $video->title  ?></a>
                                            <?php endif ?>

                                        </div>
                                        <div class="time-course w-15 block-center">
                                            <?php if ($video->status == 1) : ?>
                                                <button id="button-<?= $course->id ?>" class="btn btn-success">
                                                    <i class="bi bi-check-all"></i>
                                                </button>
                                            <?php else : ?>
                                                0<?= $video->duration ?>:00
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>


                        <?php } ?>
                    <?php endif; ?>
                </div>
            </div>


        </div>
    </div>
    <?php if (!$has_relation) : ?>
        <form action="<?= site_url('userBranch/classpath/user_has_course') ?>" method="post" id="form-id-<?= $course->id  ?>" hidden>
            <input type="text" name="id_user" value="<?php echo $id_user ?>">
            <input type="text" name="id_course" value="<?php echo $course->id ?>">
            <input type="text" name="status" value="1">
        </form>
    <?php endif ?>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script>
        var speedUpButton = document.getElementById('speedUpButton');
        speedUpButton.addEventListener('touchstart', speedUpVideo, {
            passive: true
        });

        var speedDownButton = document.getElementById('speedDownButton');
        speedDownButton.addEventListener('touchstart', speedDownVideo, {
            passive: true
        });

        // Global variable untuk menyimpan objek pemutar video
        var player;
        var isPlaying = false;

        // Fungsi untuk memanggil API YouTube dan membuat pemutar video
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                videoId: '<?= $course->intro_link ?>', // Ganti VIDEO_ID dengan ID video YouTube yang ingin diputar
                playerVars: {
                    autoplay: 1,
                    controls: 0,
                    disablekb: 1,
                    modestbranding: 1,
                    rel: 0,
                    showinfo: 0,
                    fs: 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            // Mendapatkan elemen iframe
            var iframe = event.target.getIframe();

            // Mengatur ukuran pemutar YouTube sesuai kebutuhan
            iframe.style.width = '100%';
            iframe.style.height = '25rem';
            document.getElementById('playPauseButton').disabled = false;
            document.getElementById('fullscreenButton').disabled = false;
        }

        function toggleFullscreen() {
            var iframe = player.getIframe();
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) {
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) {
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) {
                iframe.msRequestFullscreen();
            }
        }

        function togglePlayPause() {
            if (isPlaying) {
                player.pauseVideo();
                document.getElementById('playPauseButton').innerHTML = '<i class="bi bi-play-fill text-white"></i>';
                isPlaying = false;
            } else {
                player.playVideo();
                document.getElementById('playPauseButton').innerHTML = '<i class="bi bi-pause-fill text-white"></i>';
                isPlaying = true;
            }
        }
        // Fungsi untuk menangani perubahan status pemutar video
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                startDurationTimer();
                // showVideoDuration();
            } else if (event.data == YT.PlayerState.PAUSED) {
                // Video sedang dijeda
                stopDurationTimer();
            } else if (event.data == YT.PlayerState.ENDED) {
                document.getElementById("form-id-" + "<?= $course->id ?>").submit();
                stopDurationTimer();

            }
        }

        function showVideoDuration() {
            // Mendapatkan durasi total video
            var duration = player.getDuration();

            // Memperbarui durasi video pada elemen HTML dengan id 'duration'
            var durationElement = document.getElementById('duration');
            durationElement.innerHTML = formatTime(duration);
        }

        function startDurationTimer() {
            // Memperbarui durasi video setiap detik
            timer = setInterval(updateDuration, 1000);
        }

        function stopDurationTimer() {
            // Menghentikan pembaruan durasi video
            clearInterval(timer);
        }

        function updateDuration() {
            // Mendapatkan waktu saat ini dalam video
            var currentTime = player.getCurrentTime();

            // Mendapatkan durasi total video
            var duration = player.getDuration();

            // Menghitung durasi yang tersisa
            var remainingTime = duration - currentTime;

            // Memperbarui durasi video pada elemen HTML dengan id 'duration'
            var durationElement = document.getElementById('duration');
            durationElement.innerHTML = formatTime(remainingTime);
        }

        function formatTime(time) {
            // Mengonversi waktu dalam detik menjadi format menit:detik
            var minutes = Math.floor(time / 60);
            var seconds = Math.floor(time % 60);
            return minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
        }

        function speedUpVideo(seconds) {
            var currentTime = player.getCurrentTime();
            var newTime = currentTime + seconds;
            player.seekTo(newTime, true);
        }

        function speedDownVideo(seconds) {
            var currentTime = player.getCurrentTime();
            var newTime = currentTime - seconds;
            player.seekTo(newTime, true);
        }
    </script>

    <script>
        // Menambahkan event listener pada tombol Percepat
        speedUpButton.addEventListener('click', function() {
            speedUpVideo(5);
        });

        speedDownButton.addEventListener('click', function() {
            speedDownVideo(5);
        });
    </script>

    <script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202305150101/show_ads_impl_fy2021.js" id="google_shimpl"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.progress-value > span').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 1500,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script>
    <!--=============== Footer Tab and Desktop ===============-->
    <footer class="p-0 border rounded">
        <div class="d-flex justify-content-center">
            <p class="mt-3 ft-7">NaZMa Office &copy 2023
            </p>
        </div>
    </footer>


</body>