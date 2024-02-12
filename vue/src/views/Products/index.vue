<template>
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <!-- header content -->
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row fx-element-overlay">
                    <div
                        class="col-12 col-lg-6 col-xl-4"
                        v-for="product in products"
                        :key="product.id"
                    >
                        <div class="box">
                            <div class="fx-card-item">
                                <div class="fx-card-avatar fx-overlay-1">
                                    <img
                                        :src="
                                            product.image ||
                                            '../../assets/dashboard/images/product/default.png'
                                        "
                                        alt="product"
                                        class="bbsr-0 bber-0"
                                    />
                                    <div class="fx-overlay scrl-up">
                                        <ul class="fx-info">
                                            <li>
                                                <router-link
                                                    :to="`/products/${product.id}`"
                                                    class="btn btn-outline image-popup-vertical-fit"
                                                    ><i
                                                        class="mdi mdi-magnify"
                                                    ></i
                                                ></router-link>
                                            </li>
                                            <li>
                                                <a
                                                    class="btn btn-outline"
                                                    @click="
                                                        deleteProduct(
                                                            product.id,
                                                        )
                                                    "
                                                    ><i
                                                        class="mdi mdi-delete"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <router-link
                                                    :to="
                                                        '/products/' +
                                                        product.id +
                                                        '/edit'
                                                    "
                                                    class="btn btn-outline"
                                                    ><i
                                                        class="mdi mdi-settings"
                                                    ></i
                                                ></router-link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fx-card-content text-start">
                                    <div class="product-text">
                                        <h2 class="pro-price text-blue">
                                            {{ product.price }}
                                        </h2>
                                        <h4 class="box-title mb-0">
                                            {{ product.name }}
                                        </h4>
                                        <small class="text-muted db">{{
                                            product.category.description
                                        }}</small>
                                        <!-- Assume category_name is available -->
                                    </div>
                                </div>
                            </div>
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

export default {
    name: "Products",
    data() {
        return {
            products: [], // Initialize products as an empty array
        };
    },
    methods: {
        fetchProducts() {
            axios
                .get("/api/products") // Adjust the URL as necessary
                .then((response) => {
                    this.products = response.data; // Store the fetched products in the data object
                })
                .catch((error) => {
                    console.error(
                        "There was an error fetching the products:",
                        error,
                    );
                });
        },
        deleteProduct(productId) {
            axios
                .delete(`/api/products/${productId}`) // Adjust the URL as necessary
                .then(() => {
                    // Refresh the list after deletion
                    this.fetchProducts();
                })
                .catch((error) => {
                    console.error(
                        "There was an error deleting the product:",
                        error,
                    );
                });
        },
    },
    mounted() {
        this.fetchProducts(); // Fetch products when the component mounts
    },
};
</script>
