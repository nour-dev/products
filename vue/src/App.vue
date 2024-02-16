<template>
    <AppMaster />
    <div v-if="loading" class="loading-indicator">
        <i class="fa fa-4xl fa-refresh fa-spin text-black" />
    </div>
</template>
<script>
import AppMaster from "./components/layouts/AppMaster.vue";
import { mapState } from "pinia";
import { useAppStore } from "./store";

export default {
    name: "App",
    components: {
        AppMaster,
    },
    computed: {
        ...mapState(useAppStore, ["loading"]),
    },
    watch: {
        loading(value) {
            if (value) {
                document.body.style.overflow = "hidden";
            } else {
                document.body.style.overflow = "scroll";
            }
        },
    },
};
</script>
<style>
.loading-indicator {
    background: #999;
    opacity: 0.7;
    position: fixed;
    top: 0;
    height: 100vh;
    width: 100vw;
    z-index: 1000;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}
.loading-indicator .fa {
    font-size: 10em;
}
</style>
