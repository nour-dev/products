
<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Doctors</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">

                    <div class="col-12 col-lg-4">
                        <div class="box">
                            <div class="box-header no-border p-0">
                                <router-link to="/Service" href="#">
                                    <img class="img-fluid" src="../../assets/dashboard/images/avatar/375x200/2.jpg" alt="">
                                </router-link>
                            </div>
                            <div class="box-body">
                                <div class="text-center">
                                    <div class="user-contact list-inline text-center">
                                        <router-link to="/Service"
                                            class="btn btn-circle mb-5 btn-facebook"><i>Avatar</i></router-link>
                                    </div>
                                    <h3 class="my-10"><a href="#">Name Category</a></h3>
                                    <h6 class="user-info mt-0 mb-10 text-fade">Num PRODUCTS</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
</template>
<script>
export default { name: 'Services', }
</script>

