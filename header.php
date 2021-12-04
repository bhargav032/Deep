<!-- begin:: Wrapper -->
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

    <!-- begin:: Header -->
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

        <!-- begin:: Header Menu -->
        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

        </div>
        <!-- end:: Header Menu -->
        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">

            <!--begin: User Bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">

                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                    <!--use "kt-rounded" class for rounded avatar style-->
                    <div class="kt-header__topbar-user kt-rounded-">
                        <span class="kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                        <span class="kt-header__topbar-username kt-hidden-mobile">Bhargav</span>
                        <img alt="Pic" src="<?php echo BASE_URL ?>assets/media/users/300_321.jpg" class="kt-rounded-" />
                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--username kt-badge--lg kt-badge--brand kt-hidden kt-badge--bold">S</span>
                    </div>
                </div>

                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-sm">
                    <div class="kt-user-card kt-margin-b-40 kt-margin-b-30-tablet-and-mobile" style="background-image: url(../../themes/keen/theme/demo1/dist/assets/media/misc/head_bg_sm.jpg)">
                        <div class="kt-user-card__wrapper">
                            <div class="kt-user-card__pic">
                                <!--use "kt-rounded" class for rounded avatar style-->
                                <img alt="Pic" src="<?php echo BASE_URL ?>assets/media/users/300_322.jpg" class="kt-rounded-" />
                            </div>
                            <div class="kt-user-card__details">
                                <div class="kt-user-card__name">Bhargav Patel</div>
                                <div class="kt-user-card__position">CTO, Kramit Infotech</div>
                            </div>
                        </div>
                    </div>

                    <ul class="kt-nav kt-margin-b-10">
                        <li class="kt-nav__item">
                            <a href="../custom/profile/personal-information.html" class="kt-nav__link">
                                <span class="kt-nav__link-icon"><i class="flaticon2-calendar-3"></i></span>
                                <span class="kt-nav__link-text">My Profile</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="../custom/profile/overview-1.html" class="kt-nav__link">
                                <span class="kt-nav__link-icon"><i class="flaticon2-browser-2"></i></span>
                                <span class="kt-nav__link-text">My Tasks</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="../custom/profile/overview-2.html" class="kt-nav__link">
                                <span class="kt-nav__link-icon"><i class="flaticon2-mail"></i></span>
                                <span class="kt-nav__link-text">Messages</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="../custom/profile/account-settings.html" class="kt-nav__link">
                                <span class="kt-nav__link-icon"><i class="flaticon2-gear"></i></span>
                                <span class="kt-nav__link-text">Settings</span>
                            </a>
                        </li>
                        <li class="kt-nav__separator kt-nav__separator--fit"></li>

                        <li class="kt-nav__custom kt-space-between">
                            <a href="../custom/login/login-v1.html" target="_blank" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
                            <i class="flaticon2-information kt-label-font-color-2" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end: User Bar -->
            

        </div>
        <!-- end:: Header Topbar -->
    </div>
    <!-- end:: Header -->