<template>
<div>
<!-- header -->
  <div class="header-content">
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

    <HeroSlider></HeroSlider>

    <div class="news_container">
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

    <div class="chanpion_data_container">
      <h2 class="sub_title center">- Chanpions - </h2>
        <div class="chanpion_card_holder">
              <ChanpionData
                v-for="(chanpionData, index) in getItems"
                :key="index"
                :id="index"
                :data="chanpionDatas[index]"
                :skilldata="skillDatas"
                :tagdata="tagDatas"
                :tags="tags">
              </ChanpionData>
        </div>
              <paginate
                :page-count="getPageCount"
                :page-range="3"
                :margin-pages="2"
                :click-handler="clickCallback"
                :prev-text="'＜'"
                :next-text="'＞'"
                :container-class="'pagination'"
                :page-class="'page-item'">
              </paginate>
        </div>


<!-- footer -->
<div class="footer_container">
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


<div v-if="formShow" style="padding: 10rem;font-size:1.1rem;">
  <h2>イベントフォーム</h2>
<EventTitle v-model="eventData.title"></EventTitle>

    <label for="maxNumber">最大人数</label>
  <input
  id="maxNumber"
  type="number"
  v-model.number="eventData.maxNumber"
  >
  <p>{{ typeof eventData.maxNumber }}</p>

      <label for="host">主催者</label>
  <input
  id="host"
  type="text"
  v-model.trim="eventData.host"
  >
  <pre>{{ eventData.host }}</pre>
  <label for="detail">イベントの内容</label>
<textarea id="detail" cols="50" rows="5" v-model="eventData.detail">
</textarea>
<p style="white-space:pre">  {{ eventData.detail }}</p>

<!-- 単体チェックボックス -->
<input 
type="checkbox"
id="isPrivate"
v-model="eventData.isPrivate"
>
<label for="isPrivate">非公開</label>
<p>{{ eventData.isPrivate }}</p>

<!-- 複数チェックボックス -->
<p>参加条件</p>
<input 
type="checkbox" 
id="10" 
value="10代"
v-model="eventData.target"
>
<label for="10">10代</label>

<input 
type="checkbox" 
id="20" 
value="20代"
v-model="eventData.target"
>
<label for="20">20代</label>

<input 
type="checkbox" 
id="30" 
value="30代"
v-model="eventData.target"
>
<label for="30">30代</label>
<p>{{ eventData.target }}</p>
<p>参加費</p>
<input 
type="radio"
 id="free"
  value="無料"
  v-model="eventData.price"
  >
<label for="free">無料</label>
<!-- ラジオボタン -->
<input
type="radio"
 id="paid"
  value="有料"
  v-model="eventData.price"
  >
<label for="paid">有料</label>
<p>{{ eventData.price }}</p>

<!-- セレクトボックス -->
<p>開催場所</p>
<select v-model="eventData.location" multiple>
  <option v-for="location in locations"
  :key="location"
  >{{ location }}</option>
</select>
<p>{{ eventData.location }}</p>

  </div>

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

export default {
  props: ["chanpionDatas","skillDatas","tagDatas","tags"],
  data(){
    return {
     items: this.chanpionDatas,
     parPage: 12,
     currentPage: 1,
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
  },
    mounted() {
    window.addEventListener('scroll', this.handleScroll);
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
    clickCallback: function (pageNum) {
       this.currentPage = Number(pageNum);
    },

  },
     computed: {
     getItems: function() {
      let current = this.currentPage * this.parPage;
      let start = current - this.parPage;
      return this.chanpionDatas.slice(start, current);
     },
     getPageCount: function() {
      return Math.ceil(this.chanpionDatas.length / this.parPage);
     }
   },
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=Maven+Pro:400,700&display=swap');
@import url('https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap');
/* @import ResetCss from ".././public/reset"; */

    .header-content{
    width: 100%;
    margin: 0 auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    height: 100px;
    position: relative;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    }

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

    .news_container{
      /* display: flex;
      justify-content: space-between; */
      width: 980px;
      margin: 0 auto;
      margin-bottom: 100px;
    }
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
    .chanpion_data_container{
    background: #e6e6e6;
    padding-bottom: 100px;

    }
    .chanpion_card_holder{
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
    width: 1280px;
    margin: 0 auto;
    }
    .footer_container{
    background: #131313;
    padding: 100px 0;
    margin: 0 auto;
    }
    .footer_body_container{
      width: 1280px;
      margin: 0 auto;
    }
    .footer_logo{
    width: 200px;
    margin-left: 50px;
    margin-bottom: 30px;
    }

</style>