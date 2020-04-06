<template>
  <section id="js-move_filed">
    <nav class="l-nav-container">
      <!-- navbar -->
      <div class="c-navbar__head" @click="toggleShow">
        <span class="c-navbar__text">Menu</span>
      </div>

      <transition name="slideDown" mode="out-in">
        <div v-if="show">
          <ul class="c-navbar__container">
            <li class="c-navbar__item" v-for="item in items" v-bind:key="item">
              <a class="c-navbar__link" href>
                <span class="c-navbar__text">{{ item }}</span>
              </a>
            </li>
          </ul>
        </div>
      </transition>
      <!-- navbar END -->
    </nav>
  </section>
</template>


<script>
export default {
  data() {
    return {
      show: false,
      items: ["Top", "Information", "News", "Chanpions", "Contact"]
    };
  },
  methods: {
    toggleShow() {
      return (this.show = !this.show);
    }
  }
};
</script>

<style scoped>
/* アニメーション */
.fade-enter-active,
.fade-leave-active {
  transform: translateX(-100px);
  transition: 1s;
}
.fade-enter,
.fade-leave-to {
  transform: translateX(0px);
  transition: 1s;
}
</style>