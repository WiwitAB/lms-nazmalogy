<!--=============== Header Tab and Desktop===============-->
<header class="header" id="header">
    <div class="d-flex justify-content-start">
        <div class="header_toggle">
            <i class="bx bx-menu" id="header-toggle">
            </i>
        </div>
        <div class="search_toggle">
            <div class="search-wrapper">
                <div class="input-holder">
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
                </div>
            </div>
        </div>
    </div>
    <div class="user_panel">
        <div class="dropdown">
            <div class="profile"> <i class="bx bx-log-out nav_icon"></i>
                <div class="dropdown-content">
                    <ul>
                        <li onclick="SupportFunction()"><i class="bx bx-help-circle"></i><span>Bantuan</span></li>
                        <li onclick="logOutFunction()"><i class="bx bx-log-in-circle"></i><span>Keluar</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!--=============== Header Phone ===============-->
<header class="header-phone" id="header-phone">
    <nav class="nav__phone container">
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?= site_url('/userBranch/user/page') ?>" class="nav__link <?php if ($this->uri->segment(3) === "page") {
                                                                                            echo "active-link";
                                                                                        } ?>">
                        <i class="bx bx<?php if ($this->uri->segment(3) === "page") {
                                            echo "s";
                                        } ?>-home-alt-2 nav__icon"></i>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?= site_url('/userBranch/user/listClass') ?>" class="nav__link <?php if ($this->uri->segment(3) === "listClass") {
                                                                                                    echo "active-link";
                                                                                                } ?>">
                        <i class="bx bx-library nav__icon"></i>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?= site_url('/userBranch/user/savedClass') ?>" class="nav__link <?php if ($this->uri->segment(3) === "savedClass") {
                                                                                                    echo "active-link";
                                                                                                } ?>">
                        <i class="bx bx<?php if ($this->uri->segment(3) === "savedClass") {
                                            echo "s";
                                        } ?>-heart nav__icon"></i>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?= site_url('/userBranch/user/profile') ?>" class="nav__link <?php if ($this->uri->segment(3) === "profile") {
                                                                                                echo "active-link";
                                                                                            } ?>">
                        <i class='bx bx<?php if ($this->uri->segment(3) === "profile") {
                                            echo "s";
                                        } ?>-user nav__icon'></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<!--=============== Sidebar Tab and Desktop ===============-->
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="<?= site_url('/userBranch/user/page') ?>" class="nav_logo">
                <img src="<?= base_url('assets/img/plain_icon.png') ?>" alt="">
                <span class="nav_logo-name">NaZMalogy</span>
            </a>
            <div class="nav_list">
                <a href="<?= site_url('/userBranch/user/page') ?>" class="nav_link <?php if ($this->uri->segment(3) === "page") {
                                                                                        echo "active";
                                                                                    } ?>">
                    <i class="bx bx<?php if ($this->uri->segment(3) === "page") {
                                        echo "s";
                                    } ?>-grid-alt nav_icon"></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="<?= site_url('/userBranch/user/listClass') ?>" class="nav_link <?php if ($this->uri->segment(3) === "listClass") {
                                                                                            echo "active";
                                                                                        } ?>">
                    <i class="bx bx-library nav_icon"></i>
                    <span class="nav_name">Kelas</span>
                </a>

                <a href="<?php echo site_url('/userBranch/user/savedClass'); ?>" class="nav_link <?php if ($this->uri->segment(3) === "savedClass") {
                                                                                                        echo "active";
                                                                                                    } ?>">
                    <i class="bx bx<?php if ($this->uri->segment(3) === "savedClass") {
                                        echo "s";
                                    } ?>-bookmark nav_icon"></i>
                    <span class="nav_name">Tersimpan</span>
                </a>
                <a href="<?php echo site_url('/userBranch/user/setting'); ?>" class="nav_link <?php if ($this->uri->segment(3) === "setting") {
                                                                                                    echo "active";
                                                                                                } ?>">
                    <i class="bx bx<?php if ($this->uri->segment(3) === "setting") {
                                        echo "s";
                                    } ?>-cog nav_icon"></i>
                    <span class="nav_name">Pengaturan Akses</span>
                </a>
                <a href="<?php echo site_url('/userBranch/course/class_admin'); ?>" class="nav_link <?php if ($this->uri->segment(3) === "class_admin") {
                                                                                                        echo "active";
                                                                                                    } ?>">
                    <i class="bx bx<?php if ($this->uri->segment(3) === "class_admin") {
                                        echo "s";
                                    } ?>-book-alt nav_icon"></i>
                    <span class="nav_name">Pengaturan Kelas</span>
                </a>
                <a href="<?= site_url('/userBranch/user/profile') ?>" class="nav_link <?php if ($this->uri->segment(3) === "profile") {
                                                                                            echo "active";
                                                                                        } ?>">
                    <i class="bx bx<?php if ($this->uri->segment(3) === "profile") {
                                        echo "s";
                                    } ?>-user nav_icon"></i>
                    <span class="nav_name">Akun Saya</span>
                </a>
            </div>
        </div>
    </nav>
</div>