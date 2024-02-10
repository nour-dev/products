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
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Categories</li>
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                            <div class="box-header with-border">
                                <h4 class="box-title">Create</h4>
                            </div>
                            <!-- /.box-header -->
                            <form class="form" @submit.prevent="submitCategory">
                                <div class="box-body">
                                    <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i>Cartegory Add</h4>
                                    <hr class="my-15">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" v-model="category.name" class="form-control"
                                                    placeholder="First Name">
                                                <span v-if="errors.name" class="text-danger">{{ errors.name[0] }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Description</label>
                                                <textarea rows="5" v-model="category.description" class="form-control"
                                                    placeholder="About Category"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">avatar</label>
                                                <input type="file" class="form-control"
                                                    @change="onFileChange($event, 'avatar')">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">cover</label>
                                                <input type="file" class="form-control"
                                                    @change="onFileChange($event, 'cover')">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" class="btn btn-warning me-1">
                                        <i class="ti-trash"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
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
import axios from 'axios';

export default {
    name: 'newcategory',
    data() {
        return {
            category: {
                name: '',
                description: '',
                avatar: null,
                cover: null,
            },
            errors: {}, // لتخزين الأخطاء التي قد تعود من الخادم
        };
    },
    methods: {
        submitCategory() {
            const formData = new FormData();
            Object.keys(this.category).forEach(key => {
                formData.append(key, this.category[key]);
            });
            axios.post('/api/categories', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            })
                .then(response => {
                    this.$router.push({ name: 'categoories' }); // توجيه المستخدم إلى صفحة الفئات
                })
                .catch(error => {
                    console.error(error);
                    if (error.response && error.response.data.errors) {
                        this.errors = error.response.data.errors; // تخزين الأخطاء لعرضها
                    }
                });
        },
        onFileChange(event, fieldName) {
            this.category[fieldName] = event.target.files[0];
        },
    },
};
</script>
