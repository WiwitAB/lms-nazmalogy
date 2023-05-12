<body id="body-pd">
    <!--=============== Course Content ===============-->
    <div class="space-top">

        <!-- =============== Kelas Tersedia ================= -->
        <div class="mt-5 mb-1 p-2 d-flex justify-content-lg-start" data-aos="fade-up" data-aos-duration="700">
            <h5 class="ft-7">Kelas Tersedia</h5>
        </div>


        <!-- Top Menu -->
        <div class="d-flex btn-filter" data-aos="fade-up" data-aos-duration="700">
            <div class="filter-panel card-lg">
            </div>
            <div class="search-panel card-xxl p-side">
                <div class="d-flex m-js">
                    <button class="mx-2 pc-none btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Filter <i class="bx bx-filter"></i>
                    </button>
                </div>
            </div>
        </div>


        <!-- Class List All Component -->
        <div class="d-flex">

            <!-- PC dan Tab Filter -->
            <div class="wd-25" data-aos="fade-up" data-aos-duration="700">
                <div class="area-filter">
                    <div class="card-filter">
                        <div class="py-3">
                            <div class="search-box">
                                <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                                <form action="" class="search-form">
                                    <input type="text" placeholder="Cari Modul Pembelajaran" id="search" autocomplete="off">
                                </form>
                                <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;" xml:space="preserve">
                                    <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
                                    <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
                                </svg>
                                <div class="go-icon"><i class="bx bx-search"></i></div>
                            </div>
                            <div class="dropdown mt-2">
                                <button class="btn btn-outline-secondary dropdown-toggle category" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-category-alt"></i> <span class="mx-2"> Urutkan Per</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Waktu</a></li>
                                    <li><a class="dropdown-item" href="#">Nama</a></li>
                                </ul>
                            </div>
                            <h5 class="ft-7 mx-3 mt-4">Kategori</h5>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Manajemen
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Programming
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Business
                                </label>
                            </div>
                            <h5 class="ft-7 mx-3 mt-4">Level</h5>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Mudah
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Menengah
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Lanjutan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Class List -->
            <div class="wd-75">
                <div class="d-flex card-groups">
                    <?php
                    $no = 1;
                    foreach ($course as $data) { ?>
                        <div class="class-lg">
                            <div class="card-area">
                                <div class="card-class" data-aos="fade-up" data-aos-duration="700">
                                    <div class="d-flex flex-column">
                                        <div class="class-image">
                                            <img src="<?= base_url('assets/images/admin/course/' . $data->cover) ?>">
                                            <div class="marker"></div>
                                            <div class="like-bottom my-auto mt-auto">
                                                <i id="<?= $no++ ?>" onclick="likeFunction(this.id)" class="position-absolute bx bx-bookmark like_icon"></i>
                                            </div>
                                        </div>
                                        <div class="p-2 pb-0 d-flex gap-2 flex-wrap">
                                            <?php
                                            $category = explode(',', $data->category);
                                            foreach ($category as $kat) {
                                                echo "
                                    <button class='btn btn-warning font-lg'>" . $kat . "</button>";
                                            }
                                            ?>
                                        </div>
                                        <div class="class-title">
                                            <h6 class="ft-7 p-2"><?= $data->title ?></h6>
                                        </div>
                                        <div class="class-action">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex gap-4 popularity">
                                                    <div class="rating">
                                                        <i class="bx bx-star class-icon yellow-image"></i>
                                                        <span class="text-xl"><?= $data->rating ?></span>
                                                    </div>
                                                    <div class="person">
                                                        <i class="bx bx-user class-icon blue-image"></i>
                                                        <span class="text-xl"><?= $data->participant ?></span>
                                                    </div>
                                                </div>
                                                <div class="detail-bottom">
                                                    <?php echo anchor('userBranch/user/detail_course/' . $data->id, "
                                                        <button class='btn btn-primary bg-first text-xl'>+ Ikuti</button>
                                                    "); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Pagination
                    <div class="pagination-line" data-aos="fade-up" data-aos-duration="700">
                        <div id="app">
                            <div class="button active"></div>
                            <div class="button"></div>
                            <div class="button"></div>
                            <div class="button"></div>
                        </div>
                    </div> -->
                </div>


            </div>
        </div>

        <!-- Mobile Filter -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered d-flex justify-content-center align-items-center">
                <div class="modal-content">
                    <div class="p-5">
                        <div class="search-box">
                            <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                            <form action="" class="search-form">
                                <input type="text" class="search" placeholder="Cari Modul Pembelajaran" autocomplete="off">
                            </form>
                            <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;" xml:space="preserve">
                                <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
                                <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
                            </svg>
                            <div class="go-icon"><i class="bx bx-search"></i></div>
                        </div>
                        <div class="dropdown mt-2">
                            <button class="btn btn-outline-secondary dropdown-toggle category" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-category-alt"></i> <span class="mx-2"> Urutkan Per</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Waktu</a></li>
                                <li><a class="dropdown-item" href="#">Nama</a></li>
                            </ul>
                        </div>
                        <h5 class="ft-7 mx-3 mt-4">Kategori</h5>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Manajemen
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Programming
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Business
                            </label>
                        </div>
                        <h5 class="ft-7 mx-3 mt-4">Level</h5>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Mudah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Menengah
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lanjutan
                            </label>
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