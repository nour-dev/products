<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Services</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#"
                                            ><i class="mdi mdi-home-outline"></i
                                        ></a>
                                    </li>
                                    <li
                                        class="breadcrumb-item"
                                        aria-current="page"
                                    >
                                        Services
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                        Create
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
                    <div class="col-lg-12 col-12" v-if="service.id">
                        <div class="box">
                            <!-- /.box-header -->
                            <form class="form" @submit.prevent="submit">
                                <div class="box-header">
                                    <h4 class="box-title text-info mb-0">
                                        <i class="ti-user me-15"></i>Service
                                        Edit
                                    </h4>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >Name</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="service.name"
                                                    class="form-control"
                                                    placeholder="Name"
                                                />
                                                <span
                                                    v-if="errors.name"
                                                    class="text-danger"
                                                    >{{ errors.name[0] }}</span
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >Description</label
                                                >
                                                <textarea
                                                    rows="5"
                                                    v-model="
                                                        service.description
                                                    "
                                                    class="form-control"
                                                    placeholder="About service"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <RFileUpload
                                                :file="service.avatar"
                                                label="Avatar"
                                                @update-file="
                                                    (file) =>
                                                        (service.avatar = file)
                                                "
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <RFileUpload
                                                :file="service.video_cover"
                                                label="Video Cover"
                                                @update-file="
                                                    (file) =>
                                                        (service.video_cover =
                                                            file)
                                                "
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <RFilesUpload
                                                :files="gallery"
                                                label="Gallery"
                                                @update-files="
                                                    (files) => (gallery = files)
                                                "
                                            />
                                        </div>
                                    </div>
                                </div>

                                <div class="box-header">
                                    <h3>Reviews</h3>

                                    <button
                                        type="button"
                                        @click.prevent="addReview"
                                        class="waves-effect waves-light btn shadow push-btn btn-primary-light"
                                    >
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div v-if="reviews.length" class="box-body">
                                    <div
                                        class="row"
                                        v-for="(review, i) in reviews"
                                        :key="i"
                                        style="
                                            border-bottom: 1px solid #ccc;
                                            margin-bottom: 1em;
                                        "
                                    >
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >name</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="review.name"
                                                    class="form-control"
                                                    placeholder="Review Name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >comment</label
                                                >
                                                <textarea
                                                    v-model="review.comment"
                                                    class="form-control"
                                                    placeholder="Review Comment"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <RFileUpload
                                                label="Image"
                                                :file="review.img"
                                                @update-file="
                                                    (file) =>
                                                        (review.img = file)
                                                "
                                            />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button
                                        type="button"
                                        class="btn btn-warning me-1"
                                    >
                                        <i class="ti-trash"></i> Cancel
                                    </button>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="ti-save-alt"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
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
import { fetch, url } from "@/utils";
import RFileUpload from "@/components/file-upload.vue";
import RFilesUpload from "@/components/files-upload.vue";

export default {
    name: "EditService",
    components: { RFileUpload, RFilesUpload },
    async created() {
        await fetch(url(`services/${this.$route.params.id}`), (service) => {
            this.service = service;
            this.reviews = service.reviews;
            this.gallery = service.gallery;
        });
    },

    data() {
        return {
            service: {
                name: "",
                description: "",
                avatar: null,
                video_cover: null,
            },
            reviews: [],
            gallery: [],
            errors: {}, // لتخزين الأخطاء التي قد تعود من الخادم
        };
    },
    methods: {
        addReview() {
            this.reviews.push({
                img: null,
                name: "",
                comment: "",
            });
        },
        removeReview(index) {
            this.reviews.splice(index, 0);
        },
        async submit() {
            const formData = new FormData();

            formData.append("_method", "put");

            Object.keys(this.service).forEach((key) => {
                if (!["reviews", "gallery"].includes(key)) {
                    formData.append(key, this.service[key]);
                }
            });
            for (let img of this.gallery) {
                formData.append("gallery[]", img);
            }
            for (let i = 0; i < this.reviews.length; i++) {
                formData.append(`reviews[${i}][name]`, this.reviews[i].name);
                formData.append(
                    `reviews[${i}][comment]`,
                    this.reviews[i].comment,
                );
                formData.append(`reviews[${i}][img]`, this.reviews[i].img);
            }
            try {
                await axios.post(
                    "/api/services/" + this.$route.params.id,
                    formData,
                    {
                        headers: {
                            "Content-Type": "multipart/form-data",
                        },
                    },
                );
                this.$router.push(`/services/${this.$route.params.id}`);
            } catch (error) {
                console.error(error);
                if (error.response && error.response.data.errors) {
                    this.errors = error.response.data.errors; // تخزين الأخطاء لعرضها
                }
            }
        },
    },
};
</script>
