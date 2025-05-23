<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="#" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="https://vebu.vebusoft.com/admin/template/assets/images/vebusoft-logo-beyaz.svg"
                                 alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="https://vebu.vebusoft.com/admin/template/assets/images/vebusoft-logo-beyaz.svg"
                                 alt="" height="33">
                        </span>
                    </a>

                    <a href="#" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="https://vebu.vebusoft.com/admin/template/assets/images/vebusoft-logo-beyaz.svg"
                                 alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="https://vebu.vebusoft.com/admin/template/assets/images/vebusoft-logo-beyaz.svg"
                                 alt="" height="33">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                        id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!--                    <form class="app-search d-none d-md-block">-->
                <!--                        <div class="position-relative">-->
                <!--                            <input type="text" class="form-control" placeholder="Arama..." autocomplete="off" id="search-options" value="">-->
                <!--                            <span class="mdi mdi-magnify search-widget-icon"></span>-->
                <!--                            <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>-->
                <!--                        </div>-->
                <!--                    </form>-->
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Arama ..."
                                           aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <a class="btn viewwebsite" type="button" href="{{ request()->getHost() }}" target="_blank">
                        <svg class="icon icon-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                            <path d="M3.6 9h16.8"></path>
                            <path d="M3.6 15h16.8"></path>
                            <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                            <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                        </svg>
                        Siteyi Görüntüle
                    </a>
                </div>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                            class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle"
                            data-toggle="fullscreen">
                        <i class="bx bx-fullscreen fs-22"></i>
                    </button>
                </div>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('setLocale', 'tr') }}">
                                <img src="https://vebu.vebusoft.com/admin/template/assets/images/flags/tr.svg"
                                     alt="English" class="me-2 rounded" height="18">
                                Türkçe
                            </a></li>
                        <li><a class="dropdown-item" href="{{ route('setLocale', 'en') }}">
                                <img src="https://vebu.vebusoft.com/admin/template/assets/images/flags/en.svg" alt="Türkçe"
                                     class="me-2 rounded" height="18">
                                English
                            </a></li>
                    </ul>
                </li>

                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-bell fs-22"></i>
                        <span
                            class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                class="visually-hidden">unread messages</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">

                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                    <div class="col-auto dropdown-tabs">
                                        <span class="badge bg-light-subtle text-body fs-13"> 4 New</span>
                                    </div>
                                </div>
                            </div>

                            <div class="px-2 pt-2">
                                <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"
                                    id="notificationItemsTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab"
                                           aria-selected="true">
                                            All (4)
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab"
                                           aria-selected="false" tabindex="-1">
                                            Messages
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab"
                                           aria-selected="false" tabindex="-1">
                                            Alerts
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar="init" style="max-height: 300px;" class="pe-2">
                                    <div class="simplebar-wrapper" style="margin: 0px -8px 0px 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                     aria-label="scrollable content"
                                                     style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px 8px 0px 0px;">
                                                        <div
                                                            class="text-reset notification-item d-block dropdown-item position-relative">
                                                            <div class="d-flex">
                                                                <div class="avatar-xs me-3 flex-shrink-0">
                                                <span
                                                    class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <a href="#!" class="stretched-link">
                                                                        <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b>
                                                                            author Graphic
                                                                            Optimization <span class="text-secondary">reward</span>
                                                                            is
                                                                            ready!
                                                                        </h6>
                                                                    </a>
                                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                        <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                                    </p>
                                                                </div>
                                                                <div class="px-2 fs-15">
                                                                    <div class="form-check notification-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                               value="" id="all-notification-check01">
                                                                        <label class="form-check-label"
                                                                               for="all-notification-check01"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="my-3 text-center view-all" style="display: block;">
                                                            <button type="button"
                                                                    class="btn btn-soft-success waves-effect waves-light">
                                                                View
                                                                All Notifications <i
                                                                    class="ri-arrow-right-line align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                 aria-labelledby="messages-tab">
                                <div data-simplebar="init" style="max-height: 300px;" class="pe-2">
                                    <div class="simplebar-wrapper" style="margin: 0px -8px 0px 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                     aria-label="scrollable content"
                                                     style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px 8px 0px 0px;">
                                                        <!--                                        <div class="text-reset notification-item d-block dropdown-item">-->
                                                        <!--                                            <div class="d-flex">-->
                                                        <!--                                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">-->
                                                        <!--                                                <div class="flex-grow-1">-->
                                                        <!--                                                    <a href="#!" class="stretched-link">-->
                                                        <!--                                                        <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>-->
                                                        <!--                                                    </a>-->
                                                        <!--                                                    <div class="fs-13 text-muted">-->
                                                        <!--                                                        <p class="mb-1">We talked about a project on linkedin.</p>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">-->
                                                        <!--                                                        <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>-->
                                                        <!--                                                    </p>-->
                                                        <!--                                                </div>-->
                                                        <!--                                                <div class="px-2 fs-15">-->
                                                        <!--                                                    <div class="form-check notification-check">-->
                                                        <!--                                                        <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">-->
                                                        <!--                                                        <label class="form-check-label" for="messages-notification-check01"></label>-->
                                                        <!--                                                    </div>-->
                                                        <!--                                                </div>-->
                                                        <!--                                            </div>-->
                                                        <!--                                        </div>-->


                                                        <div class="my-3 text-center view-all" style="display: none;">
                                                            <button type="button"
                                                                    class="btn btn-soft-success waves-effect waves-light">
                                                                View
                                                                All Messages <i
                                                                    class="ri-arrow-right-line align-middle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>
                                <div class="empty-notification-elem">
                                    <div class="w-25 w-sm-50 pt-3 mx-auto"><img
                                            src="https://vebu.vebusoft.com/theme/assets/img/bell.svg" class="img-fluid"
                                            alt="user-pic"></div>
                                    <div class="text-center pb-5 mt-2"><h6 class="fs-18 fw-semibold lh-base">Hey! You
                                            have no any notifications </h6></div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab">
                                <div class="empty-notification-elem">
                                    <div class="w-25 w-sm-50 pt-3 mx-auto"><img
                                            src="https://vebu.vebusoft.com/theme/assets/img/bell.svg" class="img-fluid"
                                            alt="user-pic"></div>
                                    <div class="text-center pb-5 mt-2"><h6 class="fs-18 fw-semibold lh-base">Hey! You
                                            have no any notifications </h6></div>
                                </div>
                            </div>

                            <div class="notification-actions" id="notification-actions">
                                <div class="d-flex text-muted justify-content-center">
                                    Select
                                    <div id="select-content" class="text-body fw-semibold px-1">0</div>
                                    Result
                                    <button type="button" class="btn btn-link link-danger p-0 ms-3"
                                            data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                 src="https://vebu.vebusoft.com/admin/template/assets/images/users/avatar-1.jpg"
                                 alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Anna!</h6>
                        <a class="dropdown-item" href="https://vebu.vebusoft.com/panel/logout"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
