<template>
  <div class="c-main-card-unit">
    <div class="c-main-card-unit__thmbnail">
      <router-link :to="routerLink">
        <img class="c-main-card-unit__img" :src="changeImg" alt />
      </router-link>
      <p class="c-main-card-unit__text c-main-card-unit__text--top">{{ changeRoll }}</p>
      <p class="c-main-card-unit__text c-main-card-unit__text--bottom">{{ changeName }}</p>
    </div>
  </div>
</template>


<script>
export default {
  props: ["id", "data", "skilldata"],
  data() {
    return {
      storage: "https://lol-fansite.com/"
    };
  },
  computed: {
    routerLink() {
      return "/home/chanpion/" + this.id;
    },
    changeImg() {
      return this.storage + this.data.chanpion_img;
    },
    changeRoll() {
      return this.data.main_roll_id;
    },
    changeName() {
      return this.data.name;
    }
  }
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css?family=IBM+Plex+Serif&display=swap");
@import url("https://fonts.googleapis.com/css?family=Sawarabi+Mincho&display=swap");
</style>