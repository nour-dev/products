<template>
    <div class="wrapper" ref="container">
        <!-- <div id="loader"></div> -->
        <header class="main-header">
            <div
                class="d-flex align-items-center logo-box justify-content-start"
            >
                <!-- Logo -->
                <a href="index.html" class="logo">
                    <!-- logo-->
                    <div class="logo-mini w-50">
                        <span class="light-logo"
                            ><img
                                src="/src/assets/dashboard/images/logo-letter.png"
                                alt="logo"
                        /></span>
                        <span class="dark-logo"
                            ><img
                                src="/src/assets/dashboard/images/logo-letter.png"
                                alt="logo"
                        /></span>
                    </div>
                    <div class="logo-lg">
                        <span class="light-logo"
                            ><img
                                src="/src/assets/dashboard/images/logo-dark-text.png"
                                alt="logo"
                        /></span>
                        <span class="dark-logo"
                            ><img
                                src="/src/assets/dashboard/images/logo-light-text.png"
                                alt="logo"
                        /></span>
                    </div>
                </a>
            </div>
            <nav class="navbar navbar-static-top">
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a
                                href="#"
                                class="waves-effect waves-light nav-link push-btn btn-primary-light"
                                data-toggle="push-menu"
                                role="button"
                            >
                                <i data-feather="align-left"></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input
                                                type="search"
                                                class="form-control"
                                                placeholder="Search"
                                                aria-label="Search"
                                                aria-describedby="button-addon2"
                                            />
                                            <div class="input-group-append">
                                                <button
                                                    class="btn"
                                                    type="submit"
                                                    id="button-addon3"
                                                >
                                                    <i
                                                        data-feather="search"
                                                    ></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a
                                href="#"
                                data-provide="fullscreen"
                                class="waves-effect waves-light nav-link full-screen btn-warning-light"
                                title="Full Screen"
                            >
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a
                                href="#"
                                class="waves-effect waves-light dropdown-toggle btn-info-light"
                                data-bs-toggle="dropdown"
                                title="Notifications"
                            >
                                <i data-feather="bell"></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">
                                                    Notifications
                                                </h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger"
                                                    >Clear All</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i
                                                    class="fa fa-users text-info"
                                                ></i>
                                                Curabitur id eros quis nunc
                                                suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i
                                                    class="fa fa-warning text-warning"
                                                ></i>
                                                Duis malesuada justo eu sapien
                                                elementum, in semper diam
                                                posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i
                                                    class="fa fa-users text-danger"
                                                ></i>
                                                Donec at nisi sit amet tortor
                                                commodo porttitor pretium a
                                                erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i
                                                    class="fa fa-shopping-cart text-success"
                                                ></i>
                                                In gravida mauris et nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i
                                                    class="fa fa-user text-danger"
                                                ></i>
                                                Praesent eu lacus in libero
                                                dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i
                                                    class="fa fa-user text-primary"
                                                ></i>
                                                Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i
                                                    class="fa fa-user text-success"
                                                ></i>
                                                Nullam euismod dolor ut quam
                                                interdum, at scelerisque ipsum
                                                imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Control Sidebar Toggle Button -->
                        <li class="btn-group nav-item">
                            <a
                                href="#"
                                data-toggle="control-sidebar"
                                title="Setting"
                                class="waves-effect full-screen waves-light btn-danger-light"
                            >
                                <i data-feather="settings"></i>
                            </a>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a
                                href="#"
                                class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow"
                                data-bs-toggle="dropdown"
                                title="User"
                            >
                                <div class="d-flex pt-5">
                                    <div class="text-end me-10">
                                        <p
                                            class="pt-5 fs-14 mb-0 fw-700 text-primary"
                                        >
                                            Johen Doe
                                        </p>
                                        <small
                                            class="fs-10 mb-0 text-uppercase text-mute"
                                            >Admin</small
                                        >
                                    </div>
                                    <img
                                        src="/src/assets/dashboard/images/avatar/avatar-1.png"
                                        class="avatar rounded-10 bg-primary-light h-40 w-40"
                                        alt=""
                                    />
                                </div>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"
                                        ><i class="ti-user text-muted me-2"></i>
                                        Profile</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        ><i
                                            class="ti-wallet text-muted me-2"
                                        ></i>
                                        My Wallet</a
                                    >
                                    <a class="dropdown-item" href="#"
                                        ><i
                                            class="ti-settings text-muted me-2"
                                        ></i>
                                        Settings</a
                                    >
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"
                                        ><i class="ti-lock text-muted me-2"></i>
                                        Logout</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar position-relative">
                <div class="help-bt">
                    <a href="tel:108" class="d-flex align-items-center">
                        <div
                            class="bg-danger rounded10 h-50 w-50 l-h-50 text-center me-15"
                        >
                            <i data-feather="mic"></i>
                        </div>
                        <h4 class="mb-0">Emergency<br />help</h4>
                    </a>
                </div>
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li>
                                <router-link to="/">
                                    <i data-feather="calendar"></i>
                                    <span>Statistics</span>
                                </router-link>
                            </li>
                            <li>
                                <router-link to="/company">
                                    <i data-feather="calendar"></i>
                                    <span>Company</span>
                                </router-link>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="monitor"></i>
                                    <span>Products</span>
                                    <span class="pull-right-container">
                                        <i
                                            class="fa fa-angle-right pull-right"
                                        ></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <router-link to="/products"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >List Products</router-link
                                        >
                                    </li>

                                    <li>
                                        <router-link to="/products/create"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >Add Product</router-link
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="monitor"></i>
                                    <span>Categories</span>
                                    <span class="pull-right-container">
                                        <i
                                            class="fa fa-angle-right pull-right"
                                        ></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <router-link to="/categories"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >List Category</router-link
                                        >
                                    </li>
                                    <li>
                                        <router-link to="/newcategory"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >Add Category</router-link
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="monitor"></i>
                                    <span>Services</span>
                                    <span class="pull-right-container">
                                        <i
                                            class="fa fa-angle-right pull-right"
                                        ></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <router-link to="/services"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >List Services</router-link
                                        >
                                    </li>
                                    <li>
                                        <router-link to="/newervice"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >Add Service</router-link
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="monitor"></i>
                                    <span>Reviews</span>
                                    <span class="pull-right-container">
                                        <i
                                            class="fa fa-angle-right pull-right"
                                        ></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <router-link to="/reviews"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >List Reviews</router-link
                                        >
                                    </li>
                                    <li>
                                        <router-link to="/newreview"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >Add Review</router-link
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="monitor"></i>
                                    <span>Blogs</span>
                                    <span class="pull-right-container">
                                        <i
                                            class="fa fa-angle-right pull-right"
                                        ></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <router-link to="/blogs"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >List Blogs</router-link
                                        >
                                    </li>
                                    <li>
                                        <router-link to="/newblog"
                                            ><i class="icon-Commit"
                                                ><span class="path1"></span
                                                ><span class="path2"></span></i
                                            >Add Blog</router-link
                                        >
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="sidebar-widgets">
                            <div class="copyright text-center m-25">
                                <p>
                                    <strong class="d-block"
                                        >Rhythm Admin Dashboard</strong
                                    >
                                    © All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
        <router-view />
    </div>
</template>
<script>
import PerfectScrollbar from "perfect-scrollbar";
export default {
    name: "AppMaster",
    mounted() {
        const container = this.$refs.container;
        const ps = new PerfectScrollbar(container);
    },
};
import "@/assets/dashboard/css/vendors_css.css";
import "@/assets/dashboard/css/style.css";
import "@/assets/dashboard/css/skin_color.css";
import "@/assets/dashboard/js/vendors.min.js";
import "@/assets/dashboard/js/pages/chat-popup.js";
import "@/assets/dashboard/icons/feather-icons/feather.min.js";
import "@/assets/dashboard/vendor_components/apexcharts-bundle/dist/apexcharts.js";
import "@/assets/dashboard/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js";
import "@/assets/dashboard/vendor_components/date-paginator/moment.min.js";
import "@/assets/dashboard/vendor_components/date-paginator/bootstrap-datepaginator.min.js";
import "@/assets/dashboard/js/template.js";
import "@/assets/dashboard/js/pages/dashboard.js";
</script>
