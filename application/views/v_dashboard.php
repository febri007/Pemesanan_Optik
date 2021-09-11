
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 10:50:17 GMT -->
<head>

        <title>PAMSIMAS</title>
        <link href="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro/css/styles.css" rel="stylesheet" />
        <link href="<?= base_url()?>sbadmin/cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="<?= base_url()?>sbadmin/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"/>
        <link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="<?= base_url()?>sbadmin/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" ></script>
    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <a class="navbar-brand" href="index.html">SB Admin Pro</a>
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
            <form class="form-inline mr-auto d-none d-md-block">
                <div class="input-group input-group-joined input-group-solid">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                    <div class="input-group-append">
                        <div class="input-group-text"><i data-feather="search"></i></div>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown no-caret mr-3 d-none d-md-inline">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="d-none d-md-inline font-weight-500">Documentation</div>
                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right py-0 mr-sm-n15 mr-lg-0 o-hidden animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book"></i></div>
                            <div>
                                <div class="small text-gray-500">Documentation</div>
                                Usage instructions and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="code"></i></div>
                            <div>
                                <div class="small text-gray-500">Components</div>
                                Code snippets and reference
                            </div>
                        </a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog" target="_blank">
                            <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="file-text"></i></div>
                            <div>
                                <div class="small text-gray-500">Changelog</div>
                                Updates and changes
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-3 d-md-none">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="search"></i></a>
                    <!-- Dropdown - Search-->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in-up" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100">
                            <div class="input-group input-group-joined input-group-solid">
                                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                <div class="input-group-append">
                                    <div class="input-group-text"><i data-feather="search"></i></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="mr-2" data-feather="bell"></i>
                            Alerts Center
                        </h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 29, 2019</div>
                                <div class="dropdown-notifications-item-content-text">This is an alert message. It&apos;s nothing serious, but it requires your attention.</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 22, 2019</div>
                                <div class="dropdown-notifications-item-content-text">A new monthly report is ready. Click here to view!</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-danger"><i class="fas fa-exclamation-triangle"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 8, 2019</div>
                                <div class="dropdown-notifications-item-content-text">Critical system failure, systems shutting down.</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <div class="dropdown-notifications-item-icon bg-success"><i data-feather="user-plus"></i></div>
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-details">December 2, 2019</div>
                                <div class="dropdown-notifications-item-content-text">New user request. Woody has requested access to the organization.</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                        <h6 class="dropdown-header dropdown-notifications-header">
                            <i class="mr-2" data-feather="mail"></i>
                            Message Center
                        </h6>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="https://source.unsplash.com/vTL_qy03D1I/60x60" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Emily Fowler &#xB7; 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-item" href="#!">
                            <img class="dropdown-notifications-item-img" src="https://source.unsplash.com/4ytMf8MgJlY/60x60" />
                            <div class="dropdown-notifications-item-content">
                                <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                <div class="dropdown-notifications-item-content-details">Diane Chambers &#xB7; 2d</div>
                            </div>
                        </a>
                        <a class="dropdown-item dropdown-notifications-footer" href="#!">Read All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"/></a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">Valerie Luna</div>
                                <div class="dropdown-user-details-email">vluna@aol.com</div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#!">
                            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                            Account
                        </a>
                        <a class="dropdown-item" href="#!">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <div class="sidenav-menu-heading">Core</div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboards
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <a class="nav-link" href="index.html">
                                        Default
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="dashboard-2.html">
                                        Multipurpose
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="dashboard-3.html">
                                        Affiliate
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                </nav>
                            </div>
                            <div class="sidenav-menu-heading">App Views</div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                                Pages
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                                        Account
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAccount" data-parent="#accordionSidenavPagesMenu">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="account-profile.html">
                                                Profile
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="account-billing.html">
                                                Billing
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="account-security.html">
                                                Security
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="account-notifications.html">
                                                Notifications
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPagesMenu">
                                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                                                Basic
                                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuthBasic" data-parent="#accordionSidenavPagesAuth">
                                                <nav class="sidenav-menu-nested nav">
                                                    <a class="nav-link" href="auth-login-basic.html">Login</a>
                                                    <a class="nav-link" href="auth-register-basic.html">Register</a>
                                                    <a class="nav-link" href="auth-password-basic.html">Forgot Password</a>
                                                </nav>
                                            </div>
                                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                                                Social
                                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuthSocial" data-parent="#accordionSidenavPagesAuth">
                                                <nav class="sidenav-menu-nested nav">
                                                    <a class="nav-link" href="auth-login-social.html">Login</a>
                                                    <a class="nav-link" href="auth-register-social.html">Register</a>
                                                    <a class="nav-link" href="auth-password-social.html">Forgot Password</a>
                                                </nav>
                                            </div>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" data-parent="#accordionSidenavPagesMenu">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="error-400.html">
                                                400 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-401.html">
                                                401 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-403.html">
                                                403 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-404-1.html">
                                                404 Error 1
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-404-2.html">
                                                404 Error 2
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-500.html">
                                                500 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-503.html">
                                                503 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="error-504.html">
                                                504 Error
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseKnowledgeBase" aria-expanded="false" aria-controls="pagesCollapseKnowledgeBase">
                                        Knowledge Base
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseKnowledgeBase" data-parent="#accordionSidenavPagesMenu">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="knowledge-base-home-1.html">
                                                Home 1
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="knowledge-base-home-2.html">
                                                Home 2
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="knowledge-base-category.html">
                                                Category
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="knowledge-base-article.html">
                                                Article
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                        </nav>
                                    </div>
                                    <a class="nav-link" href="pricing.html">
                                        Pricing
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                    <a class="nav-link" href="invoice.html">
                                        Invoice
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                                <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                                Flows
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a>
                                    <a class="nav-link" href="wizard.html">
                                        Wizard
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                </nav>
                            </div>
                            <div class="sidenav-menu-heading">UI Toolkit</div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="nav-link-icon"><i data-feather="layout"></i></div>
                                Layout
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutSidenavVariations" aria-expanded="false" aria-controls="collapseLayoutSidenavVariations">
                                        Sidenav Variations
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayoutSidenavVariations" data-parent="#accordionSidenavLayout">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                            <a class="nav-link" href="layout-dark.html">Dark Sidenav</a>
                                            <a class="nav-link" href="layout-rtl.html">RTL Layout</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutContainers" aria-expanded="false" aria-controls="collapseLayoutContainers">
                                        Container Options
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayoutContainers" data-parent="#accordionSidenavLayout">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="layout-boxed.html">
                                                Boxed Layout
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="layout-fluid.html">Fluid Layout</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders">
                                        Page Headers
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayoutsPageHeaders" data-parent="#accordionSidenavLayout">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="header-simplified.html">Simplified</a>
                                            <a class="nav-link" href="header-compact.html">
                                                Compact
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                            <a class="nav-link" href="header-overlap.html">Content Overlap</a>
                                            <a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a>
                                            <a class="nav-link" href="header-light.html">Light</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayoutsStarterTemplates" aria-expanded="false" aria-controls="collapseLayoutsStarterTemplates">
                                        Starter Layouts
                                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayoutsStarterTemplates" data-parent="#accordionSidenavLayout">
                                        <nav class="sidenav-menu-nested nav">
                                            <a class="nav-link" href="starter-default.html">Default</a>
                                            <a class="nav-link" href="starter-minimal.html">
                                                Minimal
                                                <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                            </a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                                <div class="nav-link-icon"><i data-feather="package"></i></div>
                                Components
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="alerts.html">Alerts</a>
                                    <a class="nav-link" href="avatars.html">Avatars</a>
                                    <a class="nav-link" href="badges.html">Badges</a>
                                    <a class="nav-link" href="buttons.html">Buttons</a>
                                    <a class="nav-link" href="cards.html">
                                        Cards
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="dropdowns.html">Dropdowns</a>
                                    <a class="nav-link" href="forms.html">
                                        Forms
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="modals.html">Modals</a>
                                    <a class="nav-link" href="navigation.html">
                                        Navigation
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                    <a class="nav-link" href="progress.html">Progress</a>
                                    <a class="nav-link" href="step.html">
                                        Step
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                    <a class="nav-link" href="timeline.html">
                                        Timeline
                                        <span class="badge badge-primary-soft text-primary ml-auto">New</span>
                                    </a>
                                    <a class="nav-link" href="toasts.html">Toasts</a>
                                    <a class="nav-link" href="tooltips.html">Tooltips</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                                <div class="nav-link-icon"><i data-feather="tool"></i></div>
                                Utilities
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUtilities" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="animations.html">Animations</a>
                                    <a class="nav-link" href="background.html">Background</a>
                                    <a class="nav-link" href="borders.html">Borders</a>
                                    <a class="nav-link" href="lift.html">Lift</a>
                                    <a class="nav-link" href="shadows.html">Shadows</a>
                                    <a class="nav-link" href="typography.html">
                                        Typography
                                        <span class="badge badge-primary-soft text-primary ml-auto">Updated</span>
                                    </a>
                                </nav>
                            </div>
                            <div class="sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="nav-link-icon"><i data-feather="filter"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title">Valerie Luna</div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-5">
                        <div class="container">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="package"></i></div>
                                            Pricing
                                        </h1>
                                        <div class="page-header-subtitle">Example pricing layouts to use within your project</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container">
                        <div class="text-center mb-5">
                            <div class="display-4 text-primary mb-2">Pricing built for your business.</div>
                            <div class="display-4">No surprises, no hassle.</div>
                        </div>
                        <!-- Detailed pricing example-->
                        <div class="pricing-detailed">
                            <div class="row align-items-center no-gutters">
                                <!-- Detailed pricing column 1-->
                                <div class="col-lg-6 z-1 mb-4 mb-lg-0">
                                    <div class="card text-center border-0">
                                        <div class="card-header bg-transparent justify-content-center py-4"><h5 class="text-primary mb-0">Standard</h5></div>
                                        <div class="card-body p-5">
                                            <p class="lead">One easy to understand pricing plan for all of our users! Get complete access to all of our features.</p>
                                            <div class="mb-5">
                                                <div class="display-3 text-dark">$9</div>
                                                per month
                                            </div>
                                            <ul class="list-unstyled">
                                                <li class="d-flex align-items-center justify-content-center mb-3">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    Unlimited access to all of our products
                                                </li>
                                                <li class="d-flex align-items-center justify-content-center mb-3">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    No setup fees or any hidden fees
                                                </li>
                                                <li class="d-flex align-items-center justify-content-center">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    Dedicated customer support
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="card-footer d-flex align-items-center justify-content-center" href="#!">
                                            Start now
                                            <i class="ml-2" data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Detailed pricing column 2-->
                                <div class="col-lg-6">
                                    <div class="card bg-dark text-center pricing-detailed-behind">
                                        <div class="card-header justify-content-center py-4"><h5 class="mb-0 text-white">Custom</h5></div>
                                        <div class="card-body text-white-50 p-5">Need something more? We offer customized, enterprise level plans for specific implementations. Contact our sales team to learn more about custom licensing!</div>
                                        <a class="card-footer bg-gray-800 text-white d-flex align-items-center justify-content-center" href="#!">
                                            Contact sales
                                            <i class="ml-2" data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-10" />
                    <div class="container">
                        <div class="text-center mb-5">
                            <div class="display-4 text-primary mb-2">Choose a pricing plan</div>
                            <div class="display-4">Pick what&apos;s right for you</div>
                        </div>
                        <!-- Pricing columns example-->
                        <div class="pricing-columns">
                            <div class="row justify-content-center">
                                <!-- Pricing column 1-->
                                <div class="col-xl-4 col-lg-6 mb-4 mb-xl-0">
                                    <div class="card h-100">
                                        <div class="card-header bg-transparent">
                                            <span class="badge badge-primary-soft text-primary badge-pill py-2 px-3 mb-2">Individual</span>
                                            <div class="pricing-columns-price">
                                                $9
                                                <span>/month</span>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    1 user account
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    Remove ads
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    Premium assets
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-primary mr-2" data-feather="check-circle"></i>
                                                    Saved projects
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="card-footer d-flex align-items-center justify-content-between text-decoration-none bg-primary-soft" href="#!">
                                            Get started!
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Pricing column 2-->
                                <div class="col-xl-4 col-lg-6 mb-4 mb-xl-0">
                                    <div class="card h-100">
                                        <div class="card-header bg-transparent">
                                            <span class="badge badge-secondary-soft text-secondary badge-pill py-2 px-3 mb-2">Team</span>
                                            <div class="pricing-columns-price">
                                                $39
                                                <span>/month</span>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Up to 5 user accounts
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Remove ads
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Premium assets
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Saved projects
                                                </li>
                                                <li class="list-group-item">
                                                    <i class="text-secondary mr-2" data-feather="check-circle"></i>
                                                    Team collaboration tools
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="card-footer d-flex align-items-center justify-content-between text-secondary bg-secondary-soft text-decoration-none" href="#!">
                                            Get started!
                                            <i data-feather="arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Pricing column 3-->
                                <div class="col-xl-4 col-lg-6">
                                    <div class="pricing-table">
                                        <div class="card h-100">
                                            <div class="card-header bg-transparent">
                                                <span class="badge badge-success-soft text-success badge-pill py-2 px-3 mb-2">Organization</span>
                                                <div class="pricing-columns-price">
                                                    $249
                                                    <span>/month</span>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Up to 50 user accounts
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Remove ads
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Premium assets
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Saved projects
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Team collaboration tools
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Create teams &amp; groups
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="text-success mr-2" data-feather="check-circle"></i>
                                                        Priority customer support
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="card-footer d-flex align-items-center justify-content-between text-success bg-success-soft text-decoration-none" href="#!">
                                                Get started!
                                                <i data-feather="arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-10" />
                    <div class="container">
                        <div class="text-center mb-5">
                            <div class="display-4 text-primary mb-2">Compare our pricing plans</div>
                            <div class="display-4">Pick what&apos;s right for you</div>
                        </div>
                        <!-- Pricing table example-->
                        <div class="card mb-5">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr class="bg-dark text-white">
                                                <th class="py-4" scope="col"></th>
                                                <th class="py-4" scope="col">Individual</th>
                                                <th class="py-4" scope="col">Team</th>
                                                <th class="py-4" scope="col">Organization</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Price per month</th>
                                                <td>$9</td>
                                                <td>$39</td>
                                                <td>$249</td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th scope="row">User accounts</th>
                                                <td>1</td>
                                                <td>Up to 5</td>
                                                <td>Up to 50</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ad free</th>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th scope="row">Premium assets</th>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Saved projects</th>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th scope="row">Team collaboration tools</th>
                                                <td><i class="fas fa-times text-red"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Create teams &amp; groups</th>
                                                <td><i class="fas fa-times text-red"></i></td>
                                                <td><i class="fas fa-times text-red"></i></td>
                                                <td><i class="fas fa-check text-green"></i></td>
                                            </tr>
                                            <tr class="bg-gray-100">
                                                <th scope="row">Customer support</th>
                                                <td>Email only</td>
                                                <td>Email &amp; phone</td>
                                                <td>Dedicated account manager</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &#xA9; Your Website 2020</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#!">Privacy Policy</a>
                                &#xB7;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?= base_url()?>sbadmin/code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="<?= base_url()?>sbadmin/stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/themes.startbootstrap.com/sb-admin-pro/js/scripts.js"></script>
        <script src="<?= base_url()?>sbadmin/cdn.jsdelivr.net/momentjs/latest/moment.min.js" ></script>
        <script src="<?= base_url()?>sbadmin/jquery.js"></script>
    </body>

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2020 10:50:17 GMT -->
</html>
