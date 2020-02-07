<template>
<div :class="slide">
  <p @click="scrollPrev" :class="slideNuv" style="left: 20px;"> ＜ </p>
  <p @click="scrollNext" :class="slideNuv" style="right: 20px;"> ＞ </p>
  <ul :class="sliderContainer" :style="{width: width + 'px',left: scrollLeft + 'px'}">
    <li :class="slideItem" v-for="(icon, index) in icons" :key="icon" :slideItemNum="slideItemNum + index">
        <img :src="icon.img" @mousemove="mouseMove">
    </li>
  </ul>
      <p :class="heroMessageTop">Summoners Lift Guide , started League of Legends</p>
      <p :class="heroMessageBottom">Only those who have never feed throw stones<br> at those who have feed ...</p>
  <p>{{ slideItemWidth }}</p>
  <p class="pointer">({{ x }}),({{ y }})</p>

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
      slide: {
        slide: true,
      },
      sliderContainer: {
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
    //  {id: 1 , img: require(asset('storage/'))},
    //  {id: 2 , img: require('.././assets/TOP/runeterra-demacia-01.jpg')},
    //  {id: 3 , img: require('.././assets/TOP/runeterra-freljord-02.jpg')},
    //  {id: 4 , img: require('.././assets/TOP/runeterra-ionia-01.jpg')},
    //  {id: 5 , img: require('.././assets/TOP/runeterra-shurima-02.jpg')},
    //  {id: 6 , img: require('.././assets/TOP/runeterra-piltover-10.jpg')},
    //  {id: 7 , img: require('.././assets/TOP/runeterra-noxus-01.jpg')},
    ]
    }
    },
    computed: {
      
    },
    methods: {
      scrollPrev() {
       if(this.currentItrmNum > 1){
              this.scrollLeft = this.scrollLeft + this.scrollMove;
              //eslint-disable-next-line no-console
              console.log('現在の座標は、' + this.scrollLeft);
              this.currentItrmNum--;
               //eslint-disable-next-line no-console
                console.log(this.currentItrmNum);
              return
        }else{
          let maxSlideNum = this.slideItemNum - 1;
          this.scrollLeft = -this.scrollMove * maxSlideNum;
          this.currentItrmNum = 7;
          //eslint-disable-next-line no-console
          console.log(this.currentItrmNum);
          return 
            }
      },
      scrollNext() {
       if(this.currentItrmNum < this.slideItemNum){
              this.scrollLeft = this.scrollLeft + -this.scrollMove;
              //eslint-disable-next-line no-console
              console.log('現在の座標は、' + this.scrollLeft);
              this.currentItrmNum++;
               //eslint-disable-next-line no-console
                console.log(this.currentItrmNum);
              return
        }else{
          this.scrollLeft = 0;
          this.currentItrmNum = 1;
          //eslint-disable-next-line no-console
          console.log(this.currentItrmNum);
          return 
        }
      },
      mouseMove(event) {
        this.x = event.clientX;
        this.y = event.clientY;
        //eslint-disable-next-line no-console
        console.log(event);
      return
      }
  }
}
</script>

<style scope>
@import url('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap');


.slide{
  width: 1280px;
  height: 550px;
  overflow: hidden;
  margin: 0 auto;
  position: relative;
  margin-bottom: 50px;
}

.slider_container{
  padding: 0;
  overflow: hidden;
  margin: 0;
  position: relative;
  transition: .5s;

}
.slider_item{
  overflow: hidden;
  width: 1280px;
  /* height: 400px; */
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
    /* background: #5434346e; */
    text-shadow: 2px 2px 6px #232222;
}

.top{
    position: absolute;
    top: -20px;
    left: 480px;
    font-size: 45px;
    z-index: 2;
}

.bottom{
   position: absolute;
  top: 400px;
  left: 100px;
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