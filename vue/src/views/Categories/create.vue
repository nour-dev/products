<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Categories</h4>
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
                                        Categories
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
                    <div class="col-lg-12 col-12">
                        <div class="box">
                            <!-- /.box-header -->
                            <form class="form" @submit.prevent="submitCategory">
                                <div class="box-header">
                                    <h4 class="box-title text-info mb-0">
                                        <i class="ti-user me-15"></i>Cartegory
                                        Add
                                    </h4>
                                </div>
                                <div class="box-body" v-if="category.id">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >Details</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="category.details"
                                                    class="form-control"
                                                    placeholder="Details"
                                                />
                                                <span
                                                    v-if="errors.details"
                                                    class="text-danger"
                                                    >{{
                                                        errors.details[0]
                                                    }}</span
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
                                                        category.description
                                                    "
                                                    class="form-control"
                                                    placeholder="About Category"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >avatar</label
                                                >
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    @change="
                                                        onFileChange(
                                                            $event,
                                                            'avatar',
                                                        )
                                                    "
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >cover</label
                                                >
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    @change="
                                                        onFileChange(
                                                            $event,
                                                            'cover',
                                                        )
                                                    "
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >symbol</label
                                                >
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    @change="
                                                        onFileChange(
                                                            $event,
                                                            'image_symbol',
                                                        )
                                                    "
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >gallery</label
                                                >
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    name="gallery[]"
                                                    @change="
                                                        onFilesChange(
                                                            $event,
                                                            'gallery',
                                                        )
                                                    "
                                                    multiple="multiple"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >Offer Title</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="
                                                        category.offer_title
                                                    "
                                                    class="form-control"
                                                    placeholder="Offer Title"
                                                />
                                                <span
                                                    v-if="errors.offer_title"
                                                    class="text-danger"
                                                    >{{
                                                        errors.offer_title[0]
                                                    }}</span
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >Offer Image</label
                                                >
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    @change="
                                                        onFileChange(
                                                            $event,
                                                            'offer_image',
                                                        )
                                                    "
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-header">
                                    <h3>Features</h3>

                                    <button
                                        type="button"
                                        @click.prevent="addFeature"
                                        class="waves-effect waves-light btn shadow push-btn btn-primary-light"
                                    >
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                                <div v-if="features.length" class="box-body">
                                    <div
                                        class="row"
                                        v-for="(feature, i) in features"
                                        :key="i"
                                        style="
                                            border-bottom: 1px solid #ccc;
                                            margin-bottom: 1em;
                                        "
                                    >
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >Title</label
                                                >
                                                <input
                                                    type="text"
                                                    v-model="feature.title"
                                                    class="form-control"
                                                    placeholder="Feature Title"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >Description</label
                                                >
                                                <textarea
                                                    v-model="
                                                        feature.description
                                                    "
                                                    class="form-control"
                                                    placeholder="Feature Title"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    >Image</label
                                                >
                                                <input
                                                    type="file"
                                                    class="form-control"
                                                    @change="
                                                        onFeatureFileChange(
                                                            $event,
                                                            i,
                                                        )
                                                    "
                                                />
                                            </div>
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

export default {
    name: "NewCategory",
    data() {
        return {
            category: {
                details: "",
                description: "",
                offer_title: "",
                offer_image: null,
                image_symbol: null,
                avatar: null,
                cover: null,
            },
            features: [],
            gallery: [],
            errors: {}, // لتخزين الأخطاء التي قد تعود من الخادم
        };
    },
    methods: {
        addFeature() {
            this.features.push({
                img: null,
                title: "",
                description: "",
            });
        },
        removeFeature(index) {
            this.features.splice(index, 0);
        },
        submitCategory() {
            const formData = new FormData();
            Object.keys(this.category).forEach((key) => {
                formData.append(key, this.category[key]);
            });
            for (let img of this.gallery) {
                formData.append("gallery[]", img);
            }
            for (let i = 0; i < this.features.length; i++) {
                formData.append(
                    `features[${i}][title]`,
                    this.features[i].title,
                );
                formData.append(
                    `features[${i}][description]`,
                    this.features[i].description,
                );
                formData.append(`features[${i}][img]`, this.features[i].img);
            }
            axios
                .post("/api/categories", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    this.$router.push({ name: "Categories" }); // توجيه المستخدم إلى صفحة الفئات
                })
                .catch((error) => {
                    console.error(error);
                    if (error.response && error.response.data.errors) {
                        this.errors = error.response.data.errors; // تخزين الأخطاء لعرضها
                    }
                });
        },
        onFileChange(event, fieldName) {
            this.category[fieldName] = event.target.files[0];
        },
        onFeatureFileChange(event, index) {
            this.features[index].img = event.target.files[0];
        },
        onFilesChange(event, fieldName) {
            this.gallery = event.target.files;
        },
    },
};
</script>
