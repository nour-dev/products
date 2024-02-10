<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Blog widgets</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">widgets</li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog widgets</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
               

                <div class="row">
                    <div class="col-xl-6 col-12 h-p100">
                        <div class="box card-inverse bg-img text-center py-80"
                            style="background-image: url(../images/gallery/thumb/12.jpg)" data-overlay="5">
                            <div class="card-body">
                                <span class="bb-1 opacity-80 pb-2">22 October, 2019</span>
                                <br><br>
                                <h3>Aenean venenatis arcu quis ante porttitor bibendum.</h3>
                                <br><br>
                                <router-link to="/blog" class="btn btn-primary-light" >Read More</router-link>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
</template>
<script>
export default { name: 'newproduct', }
</script>