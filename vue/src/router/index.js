import { createRouter, createWebHistory } from "vue-router";
import Statistics from "../views/statistics.vue";
import Products from "../views/Products/index.vue";
import NewProduct from "../views/Products/create.vue";
import ProductDetails from "../views/Products/show.vue";
import EditProduct from "../views/Products/edit.vue";

import Company from "../views/company.vue";
import Categories from "../views/Categories/index.vue";
import newcategory from "../views/Categories/create.vue";
import EditCategory from "../views/Categories/edit.vue";
import detailscategory from "../views/Categories/show.vue";




import newervice from "../views/Services/create.vue";
import Services from "../views/Services/index.vue";
import Service from "../views/Services/show.vue";
import EditService from "../views/Services/edit.vue";



import newreview from "../views/Reviews/create.vue";
import reviews from "../views/Reviews/index.vue";
import review from "../views/Reviews/show.vue";

import newblog from "../views/Blogs/create.vue";
import blogs from "../views/Blogs/index.vue";
import blog from "../views/Blogs/show.vue";
import EditBlog from "../views/Blogs/edit.vue";



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "statistics",
      component: Statistics,
    },
    {
      path: '/products',
      name: 'Products',
      component: Products
    },
    {
      path: '/products/create',
      name: 'NewProduct',
      component: NewProduct
    }
     ,
    {
      path: '/products/:id/edit',
      name: 'EditProduct',
      component: EditProduct
    },
    {
      path: '/products/:id',
      name: 'ProductDetails',
      component: ProductDetails
    },
   {
      path: "/company",
      name: "company",
      component: Company,
    },
    {
      path: "/categories",
      name: "Categories",
      component: Categories,
    },
    {
      path: "/categories/:id",
      name: "CategoryDetails",
      component: detailscategory,
    },
    {
      path: "/categories/:id/edit",
      name: "CategoryEdit",
      component: EditCategory,
    },
    {
      path: "/newcategory",
      name: "newcategory",
      component: newcategory,
    },
    {
      path: "/services",
      name: "services",
      component: Services,
    },
    {
      path: "/services/:id",
      name: "service",
      component: Service,
    },
    {
      path: "/services/:id/edit",
      name: "EditService",
      component: EditService,
    },
     {
      path: "/newervice",
      name: "newervice",
      component: newervice,
    },

    {
      path: "/review",
      name: "review",
      component: review,
    },
    {
      path: "/reviews",
      name: "reviews",
      component: reviews,
    },
    {
      path: "/newreview",
      name: "newreview",
      component: newreview,
    },

    {
      path: "/blogs",
      name: "blogs",
      component: blogs,
    },
    {
      path: "/blogs/:id",
      name: "blog",
      component: blog,
    },
    {
      path: "/blogs/:id/edit",
      name: "EditBlog",
      component: EditBlog,
    },
     {
      path: "/newblog",
      name: "newblog",
      component: newblog,
    },

  ],
});
export default router;
