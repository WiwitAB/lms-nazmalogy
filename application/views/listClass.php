<section id="list-class" class="bg-light-primary">
    <div class="container">
        <!-- =============== Kelas Tersedia ================= -->
        <div class="pt-5 my-5">
            <!-- Top Menu -->
            <div class="d-flex btn-filter justify-content-end">
                <div class="filter-panel card-lg">
                </div>
                <div class="search-panel card-xxl p-side">
                    <div class="d-flex m-js">
                        <button class="mx-2 pc-none btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Filter <i class="bx bx-filter"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Class List All Component -->
            <div class="d-flex">
                <!-- PC dan Tab Filter -->
                <div class="col-lg-3 d-none d-lg-inline">
                    <div class="area-filter">
                        <div class="card-filter">
                            <div class="py-3">
                                <div class="search-box">
                                    <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                                    <form action="" class="search-form">
                                        <input type="text" placeholder="Cari Modul Pembelajaran" id="search"
                                            autocomplete="off">
                                    </form>
                                    <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                                        viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;"
                                        xml:space="preserve">
                                        <path class="border"
                                            d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
                                        <path class="border"
                                            d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
                                    </svg>
                                    <div class="go-icon"><i class="bx bx-search"></i></div>
                                </div>
                                <div class="dropdown mt-2">
                                    <button class="btn btn-outline-secondary dropdown-toggle category" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
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
                <div class="col-lg-9">
                    <div class="d-flex flex-wrap">
                        <div class="list-lg">
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


                                                <div class="detail-bottom">
                                                    <a href="detail_class.html">
                                                        <button class="btn btn-primary bg-first text-xl border-first">+
                                                            Ikuti</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-lg">
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


                                                <div class="detail-bottom">
                                                    <a href="detail_class.html">
                                                        <button class="btn btn-primary bg-first text-xl border-first">+
                                                            Ikuti</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-lg">
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


                                                <div class="detail-bottom">
                                                    <a href="detail_class.html">
                                                        <button class="btn btn-primary bg-first text-xl border-first">+
                                                            Ikuti</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-lg">
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


                                                <div class="detail-bottom">
                                                    <a href="detail_class.html">
                                                        <button class="btn btn-primary bg-first text-xl border-first">+
                                                            Ikuti</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-lg">
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


                                                <div class="detail-bottom">
                                                    <a href="detail_class.html">
                                                        <button class="btn btn-primary bg-first text-xl border-first">+
                                                            Ikuti</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-lg">
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


                                                <div class="detail-bottom">
                                                    <a href="detail_class.html">
                                                        <button class="btn btn-primary bg-first text-xl border-first">+
                                                            Ikuti</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-line">
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




    </div>

    <!-- Mobile Filter -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered d-flex justify-content-center align-items-center">
            <div class="modal-content w-auto">
                <div class="p-5">
                    <div class="search-box">
                        <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                        <form action="" class="search-form">
                            <input type="text" class="search" placeholder="Cari Modul Pembelajaran" autocomplete="off">
                        </form>
                        <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                            viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;" xml:space="preserve">
                            <path class="border"
                                d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280" />
                            <path class="border"
                                d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280" />
                        </svg>
                        <div class="go-icon"><i class="bx bx-search"></i></div>
                    </div>
                    <div class="dropdown mt-2">
                        <button class="btn btn-outline-secondary dropdown-toggle category" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
    </div>
</section>