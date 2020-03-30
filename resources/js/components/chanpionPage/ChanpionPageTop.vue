<template>
  <div class="l-main-container l-hero c-hero-section">
    <div class="l-hero-imgArea" :style="topImage">
      <div class="c-hero-section__hero">
        <div class="c-hero-section__area">
          <img class="c-hero-section__area--img" :src="storage + data.chanpion_img" />
          <div class="c-hero-section__area--data">
            <p class="c-hero-section__area--data--first">
              実装日
              <span>/</span>
              {{ data.created_at }}
            </p>
            <p>
              更新日
              <span>/</span>
              {{ data.updated_at }}
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- TOP内データ管理 -->
    <div class="l-hero-listArea c-hero-listArea">
      <h2 class="c-hero-listArea__header c-hero-listArea__text">{{ data.name }}</h2>
      <p class="c-hero-listArea__subTitle c-hero-listArea__text">-{{data.sub_name}}-</p>
      <hr class="c-hero-listArea__hr" />
      <h2
        class="c-hero-listArea__lead c-hero-listArea__text"
      >{{ data.popular_name == null ? "no-data" : data.popular_name }}</h2>

      <div class="c-hero-listArea-unit c-hero-listArea__text">
        <p class="c-hero-listArea-unit__item">{{ data.main_roll_id }}</p>
        <p
          class="c-hero-listArea-unit__item c-hero-listArea-unit__item--right"
        >{{ data.sub_roll_id }}</p>
      </div>

      <div class="c-hero-listArea-costList c-hero-listArea__text">
        <p class="c-hero-listArea-costList c-hero-listArea-costList__item">
          <img
            class="c-hero-listArea-costList__img"
            src="https://lol-fansite.com/top/img/Pt1am6v9j2KZ87FNIOjjscNMSBbfuOf7yq5RQWpG.png"
          />
          {{ data.be_cost }}
        </p>
        <p
          class="c-hero-listArea-costList c-hero-listArea-costList__item c-hero-listArea-costList__right"
        >
          <img
            class="c-hero-listArea-costList__img"
            src="https://lol-fansite.com/top/img/riot-games_owler_20180821_223624_original-500x500.png"
          />
          {{ data.rp_cost }}
        </p>
      </div>
    </div>
    <!-- TOP内データ管理 END -->
  </div>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
      storage: "/storage/",
      bgColor: "bule"
    };
  }
};
</script>

<style scoped>
</style>