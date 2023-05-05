    <!--=============== External CSS ================= -->
    <link rel="stylesheet" href="<?= base_url('assets/css/star.css') ?>">

    <body id="body-pd">
        <!--=============== Course Content ===============-->
        <div class="space-top">
            <h3 class="ft-7">Digital Maketing Untuk UMKM</h3>
            <p class="gray-text">Nama Instruktur</p>
            <div class="row pt-2">
                <div class="col-lg-7">
                    <div class="video-panel">
                        <iframe class="w-100" style="height: 60vh;" src="https://www.youtube-nocookie.com/embed/alQ_TbhyyWY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="tab-panel pt-2 mt-3 mb-5 bg-white p-4">

                        <div class="d-flex gap-3">
                            <div id="detail1" class="p-3 tab-up" onclick="openCity('detail')" style="border-bottom:  2px solid #2c2f75;">
                                <span class="ft-7">Pengantar</span>
                            </div>
                            <div id="profil1" class="p-3 tab-up" onclick="openCity('profil')">
                                <span class="ft-7">Feedback</span>
                            </div>

                        </div>

                        <div id="detail" class="city bg-white p-3">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatum possimus temporibus
                                alias, labore sint nisi odit sit laboriosam reiciendis inventore mollitia dignissimos
                                veritatis quasi. Perferendis vel nihil magnam animi sunt? Nobis voluptatibus cumque tenetur
                                incidunt adipisci eligendi numquam explicabo dolorum hic dolorem aut iusto officia, culpa
                                recusandae assumenda voluptates at?</p>
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
                        <h5 class="ft-7">Perkembangan Belajar Anda</h5>
                        <div class="progress-field pt-4 pb-3">
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar" id="progress-bar" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                            <span id="text-progress" class="text-lg">25%</span>
                        </div>
                        <!-- Success roll -->
                        <h6 class="ft-7 pt-2">Bab 1</h6>
                        <div class="list-course pt-3 d-flex flex-column gap-3">
                            <div class="card-course d-flex px-15">
                                <div class="icon-progress w-10 icon-center">
                                    <i class="text-center bx bxs-check-circle wathed-icon"></i>
                                </div>
                                <div class="course-progress w-75 block-center">
                                    <a class="video-watched-title text-lg" href=" #">Belajar Pemahaman Digital Marketing</a>
                                </div>
                                <div class="time-course w-15 block-center">
                                    02:30
                                </div>
                            </div>
                            <!-- Ready roll -->
                            <div class="card-course d-flex px-15">
                                <div class=" icon-progress w-10 icon-center">
                                    <i id="ready_icon" class="text-center bx bx-play-circle ready-icon"></i>
                                </div>
                                <div class="course-progress w-75 block-center">
                                    <a id="ready_title" href="#" class="video-ready-title text-lg">Konten yang Cocok untuk
                                        Digital
                                        Marketing</a>
                                </div>
                                <div class="time-course w-15 block-center">
                                    <span id="time"></span>
                                </div>
                            </div>
                            <!-- Pending roll -->
                            <h6 class="ft-7 pt-2">Bab 2</h6>
                            <div class="card-course d-flex px-15">
                                <div class=" icon-progress w-10 icon-center">
                                    <i id="pending_icon" class="text-center bx bx-pause-circle pending-icon"></i>
                                </div>
                                <div class="course-progress w-75 block-center">
                                    <a id="pending_title" href="#" class="video-pending text-lg">Strategi Jitu Sales</a>
                                </div>
                                <div class="time-course w-15 block-center">
                                    06:29
                                </div>
                            </div>
                            <div class="card-course d-flex px-15">
                                <div class=" icon-progress w-10 icon-center">
                                    <i class="text-center bx bx-pause-circle pending-icon"></i>
                                </div>
                                <div class="course-progress w-75 block-center">
                                    <a href="#" class="video-pending text-lg">Penutup Kelas</a>
                                </div>
                                <div class="time-course w-15 block-center">
                                    07:21
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>

        <script>
            //Video Time 
            function startTimer(duration, display) {
                var timer = duration,
                    minutes, seconds;
                setInterval(function() {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = minutes + ":" + seconds;

                    if (--timer < 0) {
                        timer = duration;
                    }

                }, 1000);
            }
            window.onload = function() {
                var oneMinutes = 60 * 1 / 2,
                    display = document.querySelector('#time');
                startTimer(oneMinutes, display);
            };
            // Hidden Link Before Legal Time
            setTimeout(function() {
                document.getElementById('ready_icon').className = "text-center bx bxs-check-circle wathed-icon";
                document.getElementById('ready_title').className = "video-watched-title text-lg";
                document.getElementById('pending_icon').className = "text-center bx bx-play-circle ready-icon";
                document.getElementById('pending_title').className = "video-ready-title text-lg";
                document.getElementById('progress-bar').style.width = "50%";
                document.getElementById('text-progress').innerHTML = "50%";
                document.getElementById('time').style.display = "none";
            }, 1 / 2 * 60000);
        </script>

        <!--=============== Footer Tab and Desktop ===============-->
        <footer class="p-0">
            <div class="d-flex justify-content-center">
                <p class="mt-3 ft-7">NaZMa Office &copy 2023
                </p>
            </div>
        </footer>


    </body>