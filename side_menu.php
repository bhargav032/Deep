<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">


    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="#">
                <img alt="Logo" src="<?php echo BASE_URL ?>assets/media/logos/logo-6.png" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">

            <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>

            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->
    <!-- begin:: Root -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <!-- begin:: Page -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">


                <!-- INCLUDE :: SIDE MENU -->
                <?php
                $menu     = "SELECT * FROM menu_management where status='1' AND parent_id = '0'";
                $menu_connection = mysqli_query($connection, $menu);
                ?>
                <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                    <div class="kt-aside__brand-logo">
                        <a href="<?php echo BASE_URL ?>index.php">
                            <img alt="Logo" src="<?php echo BASE_URL ?>assets/media/logos/logo-6.png" />
                        </a>
                    </div>

                    <div class="kt-aside__brand-tools">
                        <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
                    </div>
                </div>
                <!-- end:: Aside Brand -->

                <!-- Start :: Side Menu-->
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
                        <ul class="kt-menu__nav ">
                            <!-- Start :: Menu Section Header-->
                            <li class="kt-menu__section ">
                                <h4 class="kt-menu__section-text">Admin Setting</h4>
                                <i class="kt-menu__section-icon flaticon-more-v2"></i>
                            </li>
                            <!-- End :: Menu Section Header-->
                            <!-- Start :: Main Menu-->
                            <?php while ($main_menu = mysqli_fetch_array($menu_connection)) { ?>
                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                    <a href="<?php echo BASE_URL; ?><?php echo $main_menu['link']; ?>" class="kt-menu__link kt-menu__toggle">
                                        <i class="kt-menu__link-icon flaticon2-telegram-logo"></i>
                                        <span class="kt-menu__link-text">
                                            <?php echo $main_menu['menu_name']; ?>
                                        </span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>

                                    <!-- Start :: Sub Menu-->
                                    <div class="kt-menu__submenu ">
                                        <span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                            <?php
                                            $sub_menu     = "SELECT * FROM menu_management where status='1' AND parent_id = '" . $main_menu['id'] . "'";
                                            $sub_menu_connection = mysqli_query($connection, $sub_menu);
                                            while ($sub_menu = mysqli_fetch_array($sub_menu_connection)) {
                                            ?>
                                                <li class="kt-menu__item " aria-haspopup="true">
                                                    <a href="<?php echo BASE_URL; ?><?php echo $sub_menu['link']; ?>" class="kt-menu__link ">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">
                                                            <?php echo $sub_menu['menu_name']; ?>
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- Start :: Sub Menu-->
                                </li>
                            <?php } ?>
                            <!-- End :: Main Menu-->
                        </ul>
                    </div>
                </div>
                <!-- End :: Side Menu-->

                <!-- begin:: Aside Footer -->
                <div class="kt-aside__footer kt-grid__item" id="kt_aside_footer">
                    <div class="kt-aside__footer-nav">
                        <div class="kt-aside__footer-item">
                            <a href="#" class="btn btn-icon"><i class="flaticon2-gear"></i></a>
                        </div>
                        <div class="kt-aside__footer-item">
                            <a href="#" class="btn btn-icon"><i class="flaticon2-cube"></i></a>
                        </div>
                        <div class="kt-aside__footer-item">
                            <a href="#" class="btn btn-icon"><i class="flaticon2-bell-alarm-symbol"></i></a>
                        </div>
                        <div class="kt-aside__footer-item">
                            <button type="button" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon2-add"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-left">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Export Tools</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-copy"></i>
                                            <span class="kt-nav__link-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                            <span class="kt-nav__link-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-text-o"></i>
                                            <span class="kt-nav__link-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="kt-aside__footer-item">
                            <a href="#" class="btn btn-icon"><i class="flaticon2-calendar-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end:: Aside -->