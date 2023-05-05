<!--=============== Header Phone ===============-->
<header class="header-phone" id="header-phone">
    <nav class="nav__phone container">
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?= site_url('front') ?>"
                        class="nav__link <?= ($this->uri->uri_string() === '' || $this->uri->uri_string() === 'front') ? 'active-link' : '' ?>">
                        <i
                            class="bx bx<?= ($this->uri->uri_string() === '' || $this->uri->uri_string() === 'front') ? 's' : '' ?>-home-alt-2 nav__icon"></i>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?= site_url('front/listClass') ?>" class="nav__link <?php if ($this->uri->segment(2) === "listClass") {
                          echo "active-link";
                      } ?>">
                        <i class="bx bx-library nav__icon"></i>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?= site_url('front/support') ?>" class="nav__link <?php if ($this->uri->segment(2) === "support") {
                          echo "active-link";
                      } ?>">
                        <i class='bx bx<?php if ($this->uri->segment(2) === "support") {
                            echo "s";
                        } ?>-help-circle nav__icon'></i>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="<?= site_url('auth/login_page') ?>" class="nav__link <?php if ($this->uri->segment(1) === "auth") {
                          echo "active-link";
                      } ?>">
                        <i class='bx bx<?php if ($this->uri->segment(1) === "auth") {
                            echo "s";
                        } ?>-user nav__icon'></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>