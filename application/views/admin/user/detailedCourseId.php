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
          title: 'Progress Berhasil',
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


                    <!-- <iframe class="w-100" style="height: 25rem;" src="<?= $id_video->link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                    <div id="player"></div>

                </div>
                <div class="tab-panel pt-2 mt-3 mb-5 bg-white p-4 border">

                    <div class="d-flex gap-3">
                        <div id="detail1" class="p-3 tab-up" onclick="openCity('detail')" style="border-bottom:  2px solid #2c2f75;">
                            <span class="ft-7">Pengantar</span>
                        </div>
                        <div id="profil1" class="p-3 tab-up" onclick="openCity('profil')">
                            <span class="ft-7">Feedback</span>
                        </div>

                    </div>

                    <div id="detail" class="city bg-white p-3">
                        <p><?= $course->summary ?></p>
                    </div>
                    <div id="profil" class="city bg-white p-3" style="display:none">
                        <form action="">
                            <div class="mb-3 p-2">
                                <label for="TextInput" class="text-lg ft-7 form-label">Berikan Rating</label>

                                <input class="rating" max="5" oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)" step="0.5" style="--value:0" type="range" value="0">
                            </div>
                            <div class="mb-3 p-2">
                                <label for="TextInput" class="text-lg ft-7 form-label">Berikan Masukan dan Saran</label>
                                <textarea rows="4" class="form-control" placeholder="Leave a comment here"></textarea>
                            </div>
                            <button class="btn btn-primary bg-first w-100"> Kirim Feedback</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="right-content of-10">
                    <!-- <h5 class="ft-7">Perkembangan Belajar Anda</h5>
                        <div class="progress-field pt-4 pb-3">
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" id="progress-bar" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                            <span id="text-progress" class="text-lg">25%</span>
                        </div> -->

                    <?php if ($has_relation) : ?>
                        <!-- Success roll -->
                        <h6 class="ft-7 pt-3">Intro Kelas </h6>
                        <div class="list-course pt-1 d-flex flex-column gap-3 kelas">
                            <div class="bg-white rounded d-flex gap-2 px-15 border">
                                <div class=" icon-progress w-10 icon-center">
                                    <i id="icon-<?= $course->id ?>" class="text-center bi bi-check2-circle fs-5 text-success"></i>
                                </div>
                                <div class="course-progress w-75 block-center">
                                    <a href="<?= site_url('userBranch/classpath/detail_course/' . $course->id)  ?>" class="video-ready text-success">Intro Kelas</a>
                                </div>
                                <div class="time-course w-15 block-center">
                                    <button id="button-<?= $course->id ?>" class="btn btn-success">
                                        <i class="bi bi-check-all"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php
                    $no = 1;
                    foreach ($playlists as $playlist) { ?>
                        <h6 class="ft-7 pt-3"><?php echo $playlist->name; ?></h6>
                        <?php foreach ($playlist->videos as $video) { ?>
                            <?php if ($video->id == $id_video->id) : ?>
                                <div class="list-course pt-1 d-flex flex-column gap-3 kelas">
                                    <div class="bg-white gap-2 rounded d-flex px-15 border">
                                        <div class=" icon-progress w-10 icon-center">
                                            <?php if ($video->status == 1) : ?>
                                                <div class=" icon-progress w-10 icon-center">
                                                    <i id="ready_icon" class="text-center bi bi-check2-circle fs-5 text-success"></i>
                                                </div>
                                            <?php else : ?>
                                                <div class=" icon-progress w-10 icon-center">
                                                    <i id="ready_icon" class="text-center bx bx-pause-circle ready-icon"></i>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                        <div class="course-progress w-50 block-center">
                                            <?php if ($video->status == 1) : ?>
                                                <a href="<?= site_url('userBranch/classpath/detail_video_course/' . $course->id . "/" . $video->id)  ?>" class="video-ready text-success"><?= $video->title  ?></a>
                                            <?php else : ?>
                                                <a href="<?= site_url('userBranch/classpath/detail_video_course/' . $course->id . "/" . $video->id)  ?>" class="video-ready text-warning"><?= $video->title  ?></a>
                                            <?php endif ?>
                                        </div>
                                        <div class="w-25 d-flex justify-content-center gap-2">
                                            <button id="speedDownButton" class="btn btn-primary bg-first" title="mundur 5 detik">
                                                <i class="bi bi-chevron-double-left"></i>
                                            </button>
                                            <button id="speedUpButton" class="btn btn-primary bg-first" title="maju 5 detik">
                                                <i class="bi bi-chevron-double-right"></i>
                                            </button>
                                        </div>
                                        <div class="time-course w-15 block-center" id="duration">

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

                            <?php else : ?>
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
                            <?php endif; ?>
                        <?php } ?>

                    <?php } ?>

                </div>
            </div>


        </div>
    </div>

    <form action="<?= site_url('userBranch/classpath/user_has_video') ?>" method="post" id="form-id-detail" hidden>
        <input type="text" name="id_user" value="<?php echo $id_user ?>">
        <input type="text" name="id_video" value="<?= $id_video->id ?>">
        <input type="text" name="status" value="1">
    </form>


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

        // Fungsi untuk memanggil API YouTube dan membuat pemutar video
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                videoId: '<?= $id_video->link ?>', // Ganti VIDEO_ID dengan ID video YouTube yang ingin diputar
                playerVars: {
                    // autoplay: 1,
                    // controls: 0,
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
                // document.getElementById('icon-' + "<?= $course->id ?>").className = "text-center bi bi-check2-circle fs-5 text-success";
                // document.getElementById('link' + '-' + '<?= $course->id ?>').className = "video-ready text-success";
                document.getElementById("form-id-detail").submit();
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

    <!--=============== Footer Tab and Desktop ===============-->
    <footer class="p-0">
        <div class="d-flex justify-content-center">
            <p class="mt-3 ft-7">NaZMa Office &copy 2023
            </p>
        </div>
    </footer>


</body>