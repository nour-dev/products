<template>
    <div class="content-wrapper">
        <div class="container-full">
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Categories</h4>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Categories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="row">
                    <div class="col-12 col-lg-4" v-for="category in categories" :key="category.id">
                        <div class="box">
                            <div class="box-header no-border p-0">
                                <router-link :to="`/category/${category.id}`">
                                    <img class="img-fluid"
                                        :src="category.avatar || '../../assets/dashboard/images/avatar/375x200/2.jpg'"
                                        alt="">
                                </router-link>
                            </div>
                            <div class="box-body">
                                <div class="text-center">
                                    <div class="user-contact list-inline text-center">
                                        <router-link :to="`/category/${category.id}`"
                                            class="btn btn-circle mb-5 btn-facebook">
                                            <i>Avatar</i>
                                        </router-link>
                                    </div>
                                    <h3 class="my-10"><a :href="`/category/${category.id}`">{{ category.name }}</a></h3>
                                    <h6 class="user-info mt-0 mb-10 text-fade">{{ category.name }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'CategoriesIndex',
    data() {
        return {
            categories: [] // تخزين بيانات الفئات هنا
        };
    },
    created() {
        this.fetchCategories(); // جلب الفئات عند تحميل المكون
    },
    methods: {
        fetchCategories() {
            axios.get('/api/categories')
                .then(response => {
                    this.categories = response.data; // تخزين البيانات في المتغير categories
                })
                .catch(error => console.error("There was an error fetching the categories:", error));
        }
    }
}
</script>
