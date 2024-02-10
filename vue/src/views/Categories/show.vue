<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Category Details</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#"
                                            ><i class="mdi mdi-home-outline"></i
                                        ></a>
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                        Category Details
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-8 col-12">
                        <div class="box">
                            <div
                                class="box-body text-end min-h-150"
                                :style="`
                                    background-image: url(${category.cover});
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;
                                `"
                                alt="cover"
                            >
                                <!--<div
                                    class="bg-success rounded10 p-15 fs-18 d-inline"
                                >
                                    <i class="fa fa-stethoscope"></i> ENT
                                    Specialist
                                </div>
                                -->
                            </div>
                            <div class="box-body wed-up position-relative">
                                <div class="d-md-flex align-items-start">
                                    <img
                                        :src="category.avatar"
                                        class="bg-success-light rounded10 me-20 w-200"
                                        alt="avatar"
                                    />
                                    <div>
                                        <h4></h4>
                                        <!--<p>
                                            <i class="fa fa-clock-o"></i> Join
                                            on 15 May 2019, 10:00 AM
                                        </p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <h4>Description</h4>
                                <p>{{ category.description }}</p>
                                <br />
                                <h4>Details</h4>
                                <p>{{ category.details }}</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">features</h4>
                                <pre>{{ category.features }}</pre>
                            </div>
                            <div class="box-body">
                                <div
                                    class="media d-lg-flex d-block text-lg-start text-center"
                                >
                                    <img
                                        class="me-3 img-fluid rounded bg-primary-light w-100"
                                        src="../../assets/dashboard/images/avatar/1.jpg"
                                        alt=""
                                    />
                                    <div class="media-body my-10 my-lg-0">
                                        <h4 class="mt-0 mb-2">title</h4>
                                        <h6 class="mb-4 text-primary">
                                            description
                                        </h6>
                                        <div
                                            class="d-flex justify-content-center justify-content-lg-start"
                                        ></div>
                                    </div>
                                    <div id="chart" class="me-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <div
                                class="media d-lg-flex d-block text-lg-start text-center"
                            >
                                <img
                                    class="me-3 img-fluid rounded bg-primary-light w-100"
                                    :src="category.offer_image"
                                    alt=""
                                />
                                <div class="media-body my-10 my-lg-0">
                                    <h4 class="mt-0 mb-2">
                                        {{ category.offer_title }}
                                    </h4>
                                    <h6 class="mb-4 text-primary">
                                        description
                                    </h6>
                                    <div
                                        class="d-flex justify-content-center justify-content-lg-start"
                                    ></div>
                                </div>
                                <div id="chart" class="me-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Gallery</h4>
                            </div>
                            <div class="box-body">
                                <img :src="category.image_symbol" />
                                <div id="paginator1"></div>
                            </div>
                            <div class="box-body">
                                <div class="inner-user-div4">
                                    <div>
                                        <div
                                            class="d-flex align-items-center mb-30"
                                            v-if="category.gallery.length"
                                        >
                                            <div
                                                class="me-30"
                                                v-for="image in category.gallery"
                                            >
                                                <img
                                                    :src="image"
                                                    class="avatar avatar-lg rounded10 bg-primary-light"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
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
import axios from "axios";

// TODO: features :: need to discouse it with client

export default {
    name: "CategoryDetails",

    data() {
        return {
            category: {},
        };
    },

    async created() {
        try {
            this.category = (
                await axios.get(`/api/categories/${this.$route.params.id}`)
            ).data;
        } catch (error) {
            console.error("There was an error fetching the categories:", error);
        }
    },
};
</script>
