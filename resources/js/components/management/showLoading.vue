<template>
  <div v-show="loading">
    <div class="fullview">
      <div class="loading-spacer"></div>
      <vue-loading type="cylon" color="#d9544e" :size="{ width: '80px', height: '80px' }"></vue-loading>
    </div>
  </div>
</template>

<script>
import { VueLoading } from "vue-loading-template";

export default {
  name: "loading",
  color: {
    loading_color: true
  },
  components: {
    VueLoading
  },
  beforeMount() {
    //es-lint-disable-next-line no-console
    console.log("showLoadingを読み込みました。");
  }
};
</script>

<style>
.fullview {
  width: 100%;
  height: 100%;
  background: #fefefe;
  position: fixed;
  top: 0;
  left: 0;
}
.loading-spacer {
  height: 50%;
}

/* アニメーション */
.fade-enter-active,
.fade-leave-active {
  transition: all 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>