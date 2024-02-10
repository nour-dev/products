

<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Service Details</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-xl-12 col-12">
                        <div class="d-md-flex align-items-center justify-content-between mb-20">
                            <a href="javascript:void(0);" class="btn btn-primary me-5 mb-md-0 mb-5"><i
                                    class="fa fa-edit"></i> Edit Service</a>
                            <div class="d-flex">
                                <a href="javascript:void(0);" class="btn btn-outline btn-danger me-5"><i
                                        class="fa fa-times-circle-o"></i> Reject Service</a>
                                <a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-check-circle-o"></i>
                                    Accept Service</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body text-end min-h-150"
                                style="background-image:url(../images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
                            </div>
                            <div class="box-body wed-up position-relative">
                                <div class="d-md-flex align-items-center">
                                    <div class=" me-20 text-center text-md-start">
                                        <img src="../images/avatar/2.jpg" class="bg-success-light rounded10" alt="" />
                                        <div class="text-center my-10">
                                            <p class="mb-0">Name</p>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-xl-12 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Assigned Doctor</h4>
                            </div>
                            <div class="box-body">
                                <div class="d-flex align-items-center">
                                    <img src="../images/avatar/avatar-10.png" class="w-100 bg-primary-light rounded10 me-15"
                                        alt="" />
                                    <div>
                                        <h4 class="mb-0">Title</h4>
                                        <p class="text-muted">desc</p>
                                     
                                    </div>
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
export default { name: 'Service', }
</script>

