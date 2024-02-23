<template>
    <div class="content-wrapper" v-if="form.id">
        <div class="container-full">
            <div class="content-header">
                <h4 class="page-title">Create New Product</h4>
            </div>
            <section class="content">
                <div class="box">
                    <form @submit.prevent="submitForm">
                        <div class="box-body">
                            <!-- Product Name -->
                            <div class="form-group">
                                <label>Name</label>
                                <input
                                    type="text"
                                    v-model="form.name"
                                    class="form-control"
                                    required
                                />
                            </div>

                            <!-- Product Category -->
                            <div class="form-group">
                                <label>Category</label>
                                <select
                                    v-model="form.category_id"
                                    class="form-control"
                                >
                                    <option
                                        v-for="category in categories"
                                        :key="category.id"
                                        :value="category.id"
                                    >
                                        {{ category.description }}
                                    </option>
                                </select>
                            </div>

                            <!-- Product Price -->
                            <div class="form-group">
                                <label>Price</label>
                                <input
                                    type="number"
                                    v-model="form.price"
                                    class="form-control"
                                    required
                                />
                            </div>

                            <!-- Product Description -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea
                                    v-model="form.desc"
                                    class="form-control"
                                ></textarea>
                            </div>

                            <div>
                                <!-- Product Images -->
                                <RFileUpload
                                    :file="form.image"
                                    label="image"
                                    @update-file="(file) => (form.image = file)"
                                />
                            </div>
                            <div>
                                <!-- Product Images -->
                                <RFileUpload
                                    :file="form.image_cover"
                                    label="Image Cover"
                                    @update-file="
                                        (file) => (form.image_cover = file)
                                    "
                                />
                            </div>
                            <div>
                                <!-- Product Images -->
                                <RFilesUpload
                                    label="Details"
                                    :files="details"
                                    @update-files="(files) => (details = files)"
                                />
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
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

export default {
    name: "EditProduct",
    components: { RFileUpload, RFilesUpload },
    data() {
        return {
            form: {
                name: "",
                price: null,
                desc: "",
                category_id: null,
                image: null,
                image_cover: null,
            },
            details: [],
            categories: [], // Assuming you fetch this from your backend
        };
    },
    methods: {
        random() {
            return new Date().getTime();
        },
        async submitForm() {
            let formData = new FormData();

            formData.append("_method", "put");

            formData.append("name", this.form.name);
            formData.append("price", this.form.price);
            formData.append("desc", this.form.desc);
            formData.append("category_id", this.form.category_id);
            formData.append("image", this.form.image);
            formData.append("image_cover", this.form.image_cover);

            for (let img of this.details) {
                formData.append("details[]", img);
            }
            try {
                let response = await axios.post(
                    "/api/products/" + this.$route.params.id,
                    formData,
                    {
                        headers: {
                            "Content-Type": "multipart/form-data",
                        },
                    },
                );

                this.$router.push(`/products/${response.data.id}`);
            } catch (error) {
                if (error.response && error.response.data.errors) {
                    this.errors = error.response.data.errors;
                }
                // Handle error
                console.error(error.response.data);
            }
        },
    },
    async created() {
        this.categories = (await axios.get("/api/categories-list")).data;
        await fetch(url(`products/${this.$route.params.id}`), (product) => {
            this.form = product;
            this.details = product.details;
        });
    },
};
</script>
