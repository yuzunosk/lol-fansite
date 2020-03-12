<template>
  <div>
<!-- Loading -->
      <Loading v-show="loading"></Loading>

        <transition name="fade" mode="out-in">
          <div v-show="!loading">

<!-- header -->
    <div class="l-header">
        <LikeHeader></LikeHeader>
<!-- header_navigation -->
    <div class="header-link-item">
        <HeaderLink
          :id="linkDatas[0].id"
          :data="linkDatas[0]"
        >
        </HeaderLink>
        <HeaderLink
          :id="linkDatas[1].id"
          :data="linkDatas[1]"
        >
        </HeaderLink>
        <HeaderLink
          :id="linkDatas[2].id"
          :data="linkDatas[2]"
        >
        </HeaderLink>
        <HeaderLink
          :id="linkDatas[3].id"
          :data="linkDatas[3]"
        >
        </HeaderLink>
    </div>
    <!-- header_navigation end -->
  </div>
<!-- header end -->

<div id="l-main">
    <HeroSlider></HeroSlider>

    <div class="l-main-container-news">
      <div class="news_header">
        <h2 class="sub_title news_title">更新情報<span class="sub_title_item">NEWS</span></h2>
        <button @click="clickUpdateNews" class="news_List_button" type="button"><span>一覧を見る</span></button>
      </div>
      <News class="test"
         v-for="newsData in newsDatas"
         :key="newsData.id"
         :data="newsData"
      >
      </News>
    </div>

    <div class="l-main-container-products">
      <h2 class="sub_title center">- Chanpions - </h2>
        <div class="chanpion_card_holder">
              <ChanpionData
                v-for="(chanpionData, i) in getItems"
                :key="i"
                :id="i"
                :data="chanpionDatas[i]"
                :skilldata="skillDatas"
                :tagdata="tagDatas"
                :tags="tags">
              </ChanpionData>
        </div>
            <div class="paginate_container">
                  <li ><button :class="prev_A" @click="clickCallback" num="1">{{ minPage }}</button></li>
                  <li v-if="(currentPage == totalPage) ? true : false"><button :class="prev_E" @click="clickCallback" :num="prev4">{{ prev4 }}</button></li>
                  <li v-if="(currentPage >= totalPage -1) ? true : false"><button :class="prev_D" @click="clickCallback" :num="prev3">{{ prev3 }}</button></li>
                  <li v-if="(currentPage <= 2) ? false : true"><button :class="prev_B" @click="clickCallback" :num="prev2">{{ prev2 }}</button></li>
                  <li v-if="(currentPage == 1) ? false : true"><button :class="prev_C" @click="clickCallback" :num="prev1">{{ prev1 }}</button></li>
                  <li ><button :class="now" @click="clickCallback" :num="nowPage">{{ nowPage }}</button></li>
                  <li v-if="(currentPage == totalPage) ? false : true"><button :class="next_A" @click="clickCallback" :num="next1">{{ next1 }}</button></li>
                  <li v-if="(currentPage >= totalPage -1) ? false : true"><button :class="next_B" @click="clickCallback" :num="next2">{{ next2 }}</button></li>
                  <li v-if="(currentPage == 1 ) ? true : false"><button :class="next_C" @click="clickCallback" :num="next3">{{ next3 }}</button></li>
                  <li v-if="(currentPage <= 2) ? true : false"><button :class="next_D" @click="clickCallback" :num="next4">{{ next4 }}</button></li>
                  <li ><button :class="next_C" @click="clickCallback" :num="totalPage">{{ maxPage }}</button></li>
            </div>
        </div>

    </div>

<!-- footer -->
        <div class="l-footer">
          <div class="footer_body_container">
            <span><img class="footer_logo" src="/storage/img/logo/lol_logo.png" alt=""></span>
            <Footer
              v-for="footerData in footerDatas"
              :key="footerData.id"
              :data="footerData"
            >
            </Footer>
          </div>
        </div>
<!-- footer END -->


  </div>

</transition>

</div>
</template>

<script>
import LikeHeader from "./components/LikeHeader.vue";
import HeaderLink from "./components/HeaderLink.vue";
import ChanpionData from "./components/ChanpionData.vue";
import HeroSlider from "./components/HeroSlider.vue";
import News from "./components/News.vue";
import EventTitle from "./components/EventTitle.vue";
import Footer from "./components/Footer.vue";
import Loading from "./components/ management/showLoading";

export default {
  props: ["chanpionDatas","skillDatas","tagDatas","tags"],
  data(){
    return {
     perPage: 8,
     currentPage: 1,
     totalPage: 5,
     loading: true,
     count: this.chanpionDatas.length, //アイテム総数
     //ページング
     prev_A: {
       paginate_btn: true,
       active: false,
       ml_0: true,
     },
     prev_B: {
       paginate_btn: true,
       active: false,
     },
     prev_C: {
       paginate_btn: true,
       active: false,
     },
      prev_D: {
       paginate_btn: true,
       active: false,
     },
     prev_E: {
       paginate_btn: true,
       active: false,
     },
     now:{
       paginate_btn: true,
       active: true,
     },
     next_A: {
       paginate_btn: true,
       active: false,
     },
     next_B: {
       paginate_btn: true,
       active: false,
     },
     next_C: {
       paginate_btn: true,
       active: false,
     },
    next_D: {
       paginate_btn: true,
       active: false,
     },
     //ページング number
     minPage: '<<',
     maxPage: '>>',
     //ページング用 end
      number: 14,
      test: 'いいね',
      currentComponent: true,
      formShow: false,
      locations: [
        "東京","大阪","神奈川"
        ],
      links: [
        "リンク１","リンク２","リンク３"
        ],
      // chanpCards: [],
      paginate: ['chanpionsDatas'],
      linkDatas: [
        {id: 0 ,linkTitle:"役割について", linkItems: ['- TOP','- JG','- MID','- BOTTOM','- SUPPORT']},
        {id: 1 ,linkTitle:"オブジェクトについて", linkItems: ['- タワー','- インヒビター','- ネクサス','- ドラゴン','- バロン']},
        {id: 2 ,linkTitle:"ゲームの進め方", linkItems: ['- チャンピオン','- 操作','- ゲームルール','- チャンピオンを成長させよう','- アイテムを買おう','- 仲間と行動しよう']},
        {id: 3 ,linkTitle:"JGについて", linkItems: ['- ガンク','- カウンターJG','- オブジェクト管理','- レーンのフォロー','- JGチャンピオンのタイプ']},
      ],
      newsDatas: [
        {id: 5 , date: "2020/01/12", index: "更新", content: "チャンピオンページ、トップ、スキルコンポーネント 、ステータス、タグ完成"},
        {id: 4 , date: "2020/01/10", index: "更新", content: "チャンピオンページ制作開始"},
        {id: 3 , date: "2020/01/07", index: "更新", content: "ヘッダーナビゲーションのコンポーネントを細分化、ニュースの調整、フッターの追加"},
        {id: 2 , date: "2020/01/06", index: "更新", content: "チャンピオンカード、ヘッダーの調整、ニュースの追加"},
        {id: 1 , date: "2020/01/05", index: "更新", content: "全体の構想、ヘッダーナビゲーション制作"},
        // {id: 0 , date: "2020/01/04", index: "更新", content: "サイト構想を行い、Vue.jsを使う練習を行う"},
      ],
      footerDatas: [
        {id: 0 ,linkTitle:"役割について", linkItems: ['TOP','JG','MID','BOTTOM','SUPPORT']},
        {id: 1 ,linkTitle:"オブジェクトについて", linkItems: ['タワー','インヒビター','ネクサス','ドラゴン','バロン']},
        {id: 2 ,linkTitle:"ゲームの進め方", linkItems: ['チャンピオン','操作','ゲームルール','チャンピオンを成長させよう','アイテムを買おう','仲間と行動しよう']},
        {id: 3 ,linkTitle:"JGについて", linkItems: ['ガンク','カウンターJG','オブジェクト管理','レーンのフォロー','JGチャンピオンのタイプ']},
      ],

      eventData: {
        title: "",
        maxNumber: 0,
        host: "",
        detail: "",
        isPrivate: false,
        target: [],
        price: "無料",
        location: "東京",
        link: "リンク１"
      }
    }
  },
  components: {
    LikeHeader,
    HeaderLink,
    HeroSlider,
    ChanpionData,
    News,
    EventTitle,
    Footer,
    Loading,
  },
    destroyed() {
    window.removeEventListener('scroll', this.handleScroll);
    },
  methods: {
    incrementNumber(value) {
      this.number = value
      // eslint-disable-next-line no-console
      console.log('おはよう');
    },
    clickUpdateNews(){
    //eslint-disable-next-line no-console
    console.log('まだ作ってないよ');
    return
  },
    clickCallback(event) {
      //es-lint-disable-next-line no-console
      // console.log(event.currentTarget.attributes[1].value);
       this.currentPage = Number(event.currentTarget.attributes[1].value);
    },
    totalPageCount() {
      //総ページ数
     return this.totalPage = Math.ceil(this.chanpionDatas.length / this.perPage);
    },

  },
  computed: {
    //  getItems() {
    //    //開始位置をstartで、終了位置をcurrent
    //   let current = this.currentPage * this.parPage;//現在のページが1で１ページ辺りの表示数parPageをかける
    //   let start = current - this.parPage;
    //   return this.chanpionDatas.slice(start, current);
    //  },
    // filterItems() {
    // return this.chanpionDatas.filter(
    //   (chanpionData, i =>
    //     i >= (this.currentPage - 1) * this.perPage &&
    //     i < this.currentPage * this.perPage)
    // )
    // },
    getItems() {
    return this.chanpionDatas.slice((this.currentPage - 1) * this.perPage, this.currentPage * this.perPage);
    },
    prev4() {
       return this.currentPage - 4;
     },
    prev3() {
       return this.currentPage - 3;
     },
    prev2() {
       return this.currentPage - 2;
     },
    prev1() {
       return this.currentPage - 1;
     },
    nowPage() {
       return this.currentPage;
     },
    next1() {
       return this.currentPage + 1;
     },
    next2() {
       return this.currentPage + 2;
     },
    next3() {
       return this.currentPage + 3;
     },
    next4() {
       return this.currentPage + 4;
     },
   },
    mounted() {
    window.addEventListener('scroll', this.handleScroll);
      setTimeout(() => {
        this.loading = false;
      }, 1000);
      // this.totalPageCount();
      this.getItems();
    },
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=Maven+Pro:400,700&display=swap');
@import url('https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap');
/* @import ResetCss from ".././public/reset"; */


    .header-link-item{
      width: 600px;
      display: flex;
      justify-content: flex-end;
      height: 100px;
      line-height: 100px;
      padding-right: 70px;
    }

    .sub_title{
      font-size: 20px;
      letter-spacing: 2.5px;
    }
    .sub_title_item{
      font-size: 12px;
      font-weight: 800px;
      margin-left: 10px;
      font-weight: normal;
    }
    .news_title{
      display: flex;
      align-items: center;
    }

    .center{
      text-align: center;
      padding-top: 50px;
      padding-bottom: 30px;
    }

    /* .news_container{ */
      /* display: flex;
      justify-content: space-between; */
      /* margin: 0 auto;
      margin-bottom: 100px; */
    /* } */

    .news_container .test:last-child {
    border-bottom: 1px dashed #333;
}
    .news_header{
      display: flex;
      justify-content: space-between;
      margin-bottom: 40px;
    }
    .news_List_button{
    font-size: 14px;
    text-align: left;
    width: 180px;
    height: 45px;
    padding: 0;
    padding-left: 20px;
    background: #fff;
    border: 2px solid #333;
    font-weight: bold;
    position: relative;
    overflow: hidden;
    color: #333;
    z-index: 1;
    transition: .3s;
    }
    .news_List_button:hover {
      color: #fff;
      transition: .3s;
      cursor: pointer;
    }
    .news_List_button::before{
      content: "";
      width: 180px;
      height: 45px;
      background: #717070;
      position: absolute;
      top: 0;
      right: 180px;
      transition: .3s;
      z-index: -1;
      transition: .3s;
    }
    .news_List_button:hover::before{
      position: absolute;
      top: 0;
      right: 0;
      transition: .3s;
      background: black;
    }
    .news_List_button::after{
    content: "＞";
    font-size: 20px;
    position: absolute;
    top: 5px;
    right: 30px;
    z-index: -1;
    }

    .news_List_button:hover::after {
      color: #fff;
      transition: .3s;
    }
    /* .chanpion_data_container{
    background: #e6e6e6;
    padding-bottom: 100px; */
    /* } */
    .chanpion_card_holder{
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
    width: 1280px;
    margin: 0 auto;
    }

    /* ページネートCSS */
    .paginate_container{
      display: flex;
      justify-content: center;
      margin-left: 3px;
    }
    .paginate_btn{
    background: #858883;
    text-align: center;
    padding: 3px;
    width: 30px;
    height: 35px;
    margin-left: 13px;
    box-sizing: border-box;
    color: #f6f5f4;
    font-size: 12px;
    font-weight: 300;
    }
    .ml_0{
      margin-left: 0;
    }
    .paginate_btn:hover{
    transition: all .2s;
    background: #aeadb5;
    color: #333;
    font-size: 14px;
    font-weight: 500;
    transform: scale(1.2);
    }
    .active{
    opacity: .5;
    }

    /* ページネートCSS END */

    .footer_body_container{
      width: 1280px;
      margin: 0 auto;
    }
    .footer_logo{
    width: 200px;
    margin-left: 50px;
    margin-bottom: 30px;
    }

    /* アニメーション */
    .fade-enter-active , .fade-leave-active{
        transition: all .8s;
    }
    .fade-enter , .fade-leave-to{
        opacity: 0;
        background: #fff;
    }

</style>