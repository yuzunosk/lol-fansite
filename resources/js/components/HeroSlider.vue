<template>
  <div :class="js_Slider" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#example-3" data-slide-to="0" class="active"></li>
      <li data-target="#example-3" data-slide-to="1"></li>
      <li data-target="#example-3" data-slide-to="2"></li>
      <li data-target="#example-3" data-slide-to="3"></li>
      <li data-target="#example-3" data-slide-to="4"></li>
      <li data-target="#example-3" data-slide-to="5"></li>
      <li data-target="#example-3" data-slide-to="6"></li>
    </ol>

    <div class="carousel-inner" style="height:100%;">
      <div class="carousel-item active" style="height:100%;">
        <img :src="icons[0].img" alt="1st slide" style="object-fit: cover;width:100%;height:100%;" />
      </div>
      <div class="carousel-item" style="height:100%;">
        <img :src="icons[1].img" alt="2nd slide" style="object-fit: cover;width:100%;height:100%;" />
      </div>
      <div class="carousel-item" style="height:100%;">
        <img :src="icons[2].img" alt="3th slide" style="object-fit: cover;width:100%;height:100%;" />
      </div>
      <div class="carousel-item" style="height:100%;">
        <img :src="icons[3].img" alt="4th slide" style="object-fit: cover;width:100%;height:100%;" />
      </div>
      <div class="carousel-item" style="height:100%;">
        <img :src="icons[4].img" alt="5th slide" style="object-fit: cover;width:100%;height:100%;" />
      </div>
      <div class="carousel-item" style="height:100%;">
        <img :src="icons[5].img" alt="6th slide" style="object-fit: cover;width:100%;height:100%;" />
      </div>
      <div class="carousel-item" style="height:100%;">
        <img :src="icons[6].img" alt="7th slide" style="object-fit: cover;width:100%;height:100%;" />
      </div>
    </div>
    <p :class="heroMessageTop">Summoners Lift Guide , started League of Legends</p>
    <p :class="heroMessageBottom">
      Only those who have never feed throw stones
      <br />at those who have feed ...
    </p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      currentItrmNum: 1,
      slideItemNum: 7,
      width: 1280 * 7, //:style="{width: width + 'px'}
      scrollMove: 1280,
      scrollLeft: 0,
      x: 0,
      y: 0,
      js_Slider: {
        slide: true,
        carousel: true,
        c_slider__container: true
      },
      slideItem: {
        slider_item: true
      },
      slideNuv: {
        slider_nav: true
      },
      heroMessageTop: {
        hero_message: true,
        hero_message__main: true,
        hero_message__main_top: true
      },
      heroMessageBottom: {
        hero_message: true,
        hero_message__sub: true,
        hero_message__sub_bottom: true
      },
      icons: [
        {
          id: 1,
          img: "https://lol-fansite.com/top/img/runeterra-bilgewater-01.jpg"
        },
        {
          id: 2,
          img: "https://lol-fansite.com/top/img/runeterra-demacia-01.jpg"
        },
        {
          id: 3,
          img: "https://lol-fansite.com/top/img/runeterra-freljord-02.jpg"
        },
        {
          id: 4,
          img: "https://lol-fansite.com/top/img/runeterra-ionia-01.jpg"
        },
        {
          id: 5,
          img: "https://lol-fansite.com/top/img/runeterra-shurima-02.jpg"
        },
        {
          id: 6,
          img: "https://lol-fansite.com/top/img/runeterra-piltover-10.jpg"
        },
        {
          id: 7,
          img: "https://lol-fansite.com/top/img/runeterra-noxus-01.jpg"
        }
      ]
    };
  },
  computed: {}
};
</script>

<style scoped>
.slider_item {
  overflow: hidden;
  width: 1280px;
  float: left;
  text-align: center;
  line-height: 400px;
}

.slider_nav {
  color: #1e192f;
  position: absolute;
  top: 250px;
  font-size: 20px;
  cursor: pointer;
  z-index: 2;
  background: #f7f6f5;
  opacity: 0.5;
  border-radius: 50%;
  width: 30px;
  line-height: 30px;
  text-align: center;
}
.slider_nav:active {
  opacity: 1;
  transition: 0.1s;
  /* もう少しアニメーションさせる */
}

.pointer {
  z-index: 5;
  font-size: 20px;
  color: #fff;
}
</style>
