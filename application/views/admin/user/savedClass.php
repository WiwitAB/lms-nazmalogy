<body id="body-pd">
    <!--=============== Course Content ===============-->
    <div class="space-top">

        <!-- =============== Kelas Tersimpan ================= -->
        <div class="mt-5 mb-1 p-2 d-flex justify-content-lg-start" data-aos="fade-up" data-aos-duration="700">
            <h5 class="ft-7">Kelas Tersimpan</h5>
        </div>



        <!-- Class List All Component -->
        <div class="d-flex">

            <!-- Class List -->
            <div class="w-100">
                <div class="d-flex card-groups">
                    <div class="class-lg" id="1">
                        <div class="card-area">
                            <div class="card-class" data-aos="fade-up" data-aos-duration="700">
                                <div class="d-flex flex-column">
                                    <div class="class-image">
                                        <img src="<?= base_url('assets/img/class_album.jpg') ?>" alt="">
                                        <div class="marker"></div>
                                        <div class="like-bottom my-auto mt-auto">
                                            <i id="2" onclick="unlikeFunction(this.id)"
                                                class="position-absolute bx bxs-bookmark like_icon"></i>
                                        </div>
                                    </div>
                                    <div class="class-tag">
                                        <button class="btn btn-outline-warning text-lg">marketing</button>
                                        <button class="btn btn-outline-warning text-lg">business</button>
                                    </div>
                                    <div class="class-title">
                                        <h6 class="ft-7 p-2">Digital Marketing Untuk UMKM</h6>
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
                                            <a href="detail_class.html">
                                                <div class="detail-bottom">
                                                    <button class="btn btn-primary bg-first text-xl">+ Ikuti</button>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="class-lg" id="3">
                        <div class="card-area">
                            <div class="card-class" data-aos="fade-up" data-aos-duration="700">
                                <div class="d-flex flex-column">
                                    <div class="class-image">
                                        <img src="<?= base_url('assets/img/course-1.png') ?>" alt="">
                                        <div class="marker"></div>
                                        <div class="like-bottom my-auto mt-auto">
                                            <i id="4" onclick="unlikeFunction(this.id)"
                                                class="position-absolute bx bxs-bookmark like_icon"></i>
                                        </div>
                                    </div>
                                    <div class="class-tag">
                                        <button class="btn btn-outline-warning text-lg">marketing</button>
                                        <button class="btn btn-outline-warning text-lg">business</button>
                                    </div>
                                    <div class="class-title">
                                        <h6 class="ft-7 p-2">Go Digital - Memahami Corong Pemasaran</h6>
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
                                            <a href="detail_class.html">

                                                <div class="detail-bottom">
                                                    <button class="btn btn-primary bg-first text-xl">+ Ikuti</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="class-lg" id="5">
                        <div class="card-area">
                            <div class="card-class" data-aos="fade-up" data-aos-duration="700">
                                <div class="d-flex flex-column">
                                    <div class="class-image">
                                        <img src="<?= base_url('assets/img/class_album.jpg') ?>" alt="">
                                        <div class="marker"></div>
                                        <div class="like-bottom my-auto mt-auto">
                                            <i id="6" onclick="unlikeFunction(this.id)"
                                                class="position-absolute bx bxs-bookmark like_icon"></i>
                                        </div>
                                    </div>
                                    <div class="class-tag">
                                        <button class="btn btn-outline-warning text-lg">marketing</button>
                                        <button class="btn btn-outline-warning text-lg">business</button>
                                    </div>
                                    <div class="class-title">
                                        <h6 class="ft-7 p-2">Digital Marketing Untuk UMKM</h6>
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


                                            <a href="detail_class.html">
                                                <div class="detail-bottom">
                                                    <button class="btn btn-primary bg-first text-xl">+ Ikuti</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="pagination-line" data-aos="fade-up" data-aos-duration="300">
                    <div id="app">
                        <div class="button active"></div>
                        <div class="button"></div>
                        <div class="button"></div>
                        <div class="button"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--=============== Footer Tab and Desktop ===============-->
    <footer class="p-0">
        <div class="d-flex justify-content-center">
            <p class="mt-3 ft-7">NaZMa Office &copy 2023
            </p>
        </div>
    </footer>

</body>