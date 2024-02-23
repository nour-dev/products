<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Blog</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <router-link to="/"
                                            ><i class="mdi mdi-home-outline"></i
                                        ></router-link>
                                    </li>
                                    <li
                                        class="breadcrumb-item"
                                        aria-current="page"
                                    >
                                        <router-link to="/blogs">
                                            Blogs
                                        </router-link>
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
            <section class="content" v-if="blog.id">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input
                                        type="text"
                                        v-model="blog.title"
                                        class="form-control"
                                        placeholder="Title"
                                    />
                                    <span
                                        v-if="errors.title"
                                        class="text-danger"
                                        >{{ errors.title[0] }}</span
                                    >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Author</label>
                                    <input
                                        type="text"
                                        v-model="blog.author"
                                        class="form-control"
                                        placeholder="Author"
                                    />
                                    <span
                                        v-if="errors.author"
                                        class="text-danger"
                                        >{{ errors.author[0] }}</span
                                    >
                                </div>
                            </div>
                            <div id="image" class="col-md-4">
                                <RFileUpload
                                    :file="blog.image"
                                    label="Image"
                                    @update-file="(file) => (blog.image = file)"
                                />
                            </div>
                            <div id="cover" class="col-md-4">
                                <RFileUpload
                                    :file="blog.cover"
                                    label="Cover"
                                    @update-file="(file) => (blog.cover = file)"
                                />
                            </div>
                            <div id="images" class="col-md-4">
                                <RFilesUpload
                                    :files="images"
                                    label="Images"
                                    @update-files="(files) => (images = files)"
                                />
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Article</label>
                                    <QuillEditor
                                        style="height: 50vh"
                                        class="form-control"
                                        v-model:content="blog.article"
                                        contentType="html"
                                        theme="snow"
                                    />
                                    <span
                                        v-if="errors.article"
                                        class="text-danger"
                                        >{{ errors.article[0] }}</span
                                    >
                                </div>
                            </div>
                        </div>
                        <button @click.prevent="save" class="btn btn-primary">
                            save
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { fetch, url } from "@/utils";
import RFileUpload from "@/components/file-upload.vue";
import RFilesUpload from "@/components/files-upload.vue";

import { QuillEditor } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";

export default {
    components: {
        QuillEditor,
        RFileUpload,
        RFilesUpload,
    },
    data() {
        return {
            blog: {
                title: "",
                author: "",
                article: "",
                cover: null,
                image: null,
            },
            images: [],
            errors: {},
        };
    },
    async created() {
        await fetch(url(`blogs/${this.$route.params.id}`), (blog) => {
            this.blog = blog;
            this.images = blog.images;
        });
    },
    methods: {
        async save() {
            const formData = new FormData();
            formData.append("_method", "put");

            Object.keys(this.blog).forEach((key) => {
                if (key != "images") {
                    formData.append(key, this.blog[key]);
                }
            });

            for (let img of this.images) {
                formData.append("images[]", img);
            }
            try {
                await axios.post(
                    "/api/blogs/" + this.$route.params.id,
                    formData,
                    {
                        headers: {
                            "Content-Type": "multipart/form-data",
                        },
                    },
                );
                this.$router.push("/blogs/" + this.$route.params.id);
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
