<template>
<div :class="sliderContainer" data-ride="carousel" style="width:100%;height:600px;">
    <ol class="carousel-indicators">
    <li data-target="#example-3" data-slide-to="0" class="active"></li>
    <li data-target="#example-3" data-slide-to="1"></li>
    <li data-target="#example-3" data-slide-to="2"></li>
    <li data-target="#example-3" data-slide-to="3"></li>
    <li data-target="#example-3" data-slide-to="4"></li>
    <li data-target="#example-3" data-slide-to="5"></li>
    <li data-target="#example-3" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img :src="icons[0].img" alt="1st slide">
    </div>
    <div class="carousel-item">
      <img :src="icons[1].img" alt="2nd slide">
    </div>
    <div class="carousel-item">
      <img :src="icons[2].img" alt="3th slide">
    </div>
    <div class="carousel-item">
      <img :src="icons[3].img" alt="4th slide">
    </div>
    <div class="carousel-item">
      <img :src="icons[4].img" alt="5th slide">
    </div>
    <div class="carousel-item">
      <img :src="icons[5].img" alt="6th slide">
    </div>
    <div class="carousel-item">
      <img :src="icons[6].img" alt="7th slide">
    </div>

    <a class="carousel-control-prev" href="#example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon pointer" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon pointer" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
  <p :class="heroMessageTop">Summoners Lift Guide , started League of Legends</p>
  <p :class="heroMessageBottom">Only those who have never feed throw stones<br> at those who have feed ...</p> 

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
      sliderContainer: {
        slide: true,
        carousel: true,
        slider_container: true,
      },
      slideItem: {
        slider_item: true,
      },
      slideNuv: {
        slider_nav: true,
      },
      heroMessageTop: {
        hero_message: true,
        top: true,
        mainMessage: true,
      },
      heroMessageBottom: {
        hero_message: true,
        bottom: true,
        subMessage: true,
      },
   icons: [
     {id: 1 , img: '/storage/img/TOP/runeterra-bilgewater-01.jpg'},
     {id: 2 , img: 'storage/img/TOP/runeterra-demacia-01.jpg'},
     {id: 3 , img: 'storage/img/TOP/runeterra-freljord-02.jpg'},
     {id: 4 , img: 'storage/img/TOP/runeterra-ionia-01.jpg'},
     {id: 5 , img: 'storage/img//TOP/runeterra-shurima-02.jpg'},
     {id: 6 , img: 'storage/img/TOP/runeterra-piltover-10.jpg'},
     {id: 7 , img: 'storage/img/TOP/runeterra-noxus-01.jpg'},
    ]
    }
    },
    computed: {
      
    },
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap');


.slider_container{
  padding: 0;
  overflow: hidden;
  margin: 0;
  position: relative;
  transition: .5s;
  margin-bottom:50px;
}
.slider_item{
  overflow: hidden;
  width: 1280px;
  float: left;
  text-align: center;
  line-height: 400px;
}

.slider_nav{
  color: #1e192f;;
  position: absolute;
  top: 250px;
  font-size: 20px;
  cursor: pointer;
  z-index: 2;
  background: #f7f6f5;
  opacity: .5;
  border-radius: 50%;
  width: 30px;
  line-height: 30px;
  text-align: center;
}
.slider_nav:active{
  opacity: 1;
  transition: .1s;
  /* もう少しアニメーションさせる */
}

img{
   max-width: 100%;
    height: auto;
}

.hero_message{
    font-family: 'Open Sans Condensed', sans-serif;
    color: #f6f5f4;
    padding: 2px 15px;
    text-shadow: 2px 2px 6px #232222;
}

.top{
    position: absolute;
    top: 10px;
    right: 50px;
    font-size: 45px;
    z-index: 2;
}

.bottom{
  position: absolute;
  bottom: 70px;
  left: 50px;
  z-index: 2;
}

.mainMessage{
  font-size: 45px;
}

.subMessage{
  font-size: 24px;
}
.pointer{
  z-index: 5;
  font-size: 20px;
  color: #fff;
}
</style>