<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
        class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
        <ul class="m-menu__nav ">


            {{-- <li class="m-menu__item {{ Request::is('home') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">--}}
            <li class="m-menu__item  {{ Request::is('admin/dashboard') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">
                <a href="#" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon fas fa-file-medical-alt"></i>
                    <span class="m-menu__link-text">Dashboard</span>
                </a>
            </li>


            <li class="m-menu__item m-menu__item--submenu
            {{ (Request::is(['admin/section*', 'admin/system*', 'admin/disease'])) ?
            'm-menu__item--open m-menu__item--active' : ''}}

                " aria-haspopup="true" m-menu-submenu-toggle="hover">
                <a href="javascript:;" class="m-menu__link m-menu__toggle">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon fas fa-procedures"></i>
                    <span class="m-menu__link-text">Locations </span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">


                        <li class="m-menu__item {{  (Request::is('admin/section') || Request::is('admin/section/*')) ? 'm-menu__item--active' : '' }}"
                            aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="#" class="m-menu__link ">
                                <span class="m-menu__item-here"></span>
                                <i class="m-menu__link-icon fa fa-forward"></i>
                                <span class="m-menu__link-text">Division</span>
                            </a>
                        </li>


                        <li class="m-menu__item {{  (Request::is('admin/system') || Request::is('admin/system/*')) ? 'm-menu__item--active' : '' }}"
                            aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="#" class="m-menu__link ">
                                <span class="m-menu__item-here"></span>
                                <i class="m-menu__link-icon fas fa-allergies"></i>
                                <span class="m-menu__link-text">District</span>
                            </a>
                        </li>


                        <li class="m-menu__item {{  (Request::is('admin/disease') || Request::is('admin/disease/*')) ? 'm-menu__item--active' : '' }}"
                            aria-haspopup="true" m-menu-link-redirect="1">
                            <a href="#" class="m-menu__link ">
                                <span class="m-menu__item-here"></span>
                                <i class="m-menu__link-icon fas fa-x-ray"></i>
                                <span class="m-menu__link-text">Upazila</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="m-menu__item  {{ Request::is('admin/dashboard') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">
                <a href="#" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon fas fa-file-medical-alt"></i>
                    <span class="m-menu__link-text">Associations</span>
                </a>
            </li>

            <li class="m-menu__item  {{ Request::is('admin/dashboard') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">
                <a href="#" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon fas fa-file-medical-alt"></i>
                    <span class="m-menu__link-text">Center</span>
                </a>
            </li>

            <li class="m-menu__item  {{ Request::is('admin/dashboard') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">
                <a href="#" class="m-menu__link ">
                    <span class="m-menu__item-here"></span>
                    <i class="m-menu__link-icon fas fa-file-medical-alt"></i>
                    <span class="m-menu__link-text">Register Murid</span>
                </a>
            </li>






        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->
