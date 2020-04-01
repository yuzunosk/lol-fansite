<template>
  <!-- チャンピオンページのレイアウト -->
  <div class="l-main">
    <ChanpionPageTop :key="currentChampionId" :data="$attrs.chanpionDatas[key]">
      <!-- チャンピオンTOP image -->
      <!-- <p>チャンピオン画像など</p> -->
    </ChanpionPageTop>
    <p class="p-hero__featureText">{{ $attrs.chanpionDatas[key].feature }}</p>

    <div class="l-main-container l-information">
      <!-- チャンピオン簡易ステータスコンポーネント -->
      <ChanpionStatus :key="currentChampionId" :data="$attrs.chanpionDatas[key]"></ChanpionStatus>

      <!-- チャンピオンスキルコンポーネント -->
      <ChanpionSkill :key="currentChampionId" :id="currentChampionId" :data="currentSkillData"></ChanpionSkill>
    </div>
    <!-- チャンピオンについての感想やステーステータス、スキン情報など -->
    <ChanpionPageTag :key="currentChampionId" :data="currentTagData" :tags="$attrs.tags"></ChanpionPageTag>

    <!-- footer -->
    <div class="l-footer">
      <div class="c-footer-container">
        <div class="c-footer-container-header">
          <div class="logo__unit">
            <img class="logo__unit--img" src="/storage/img/logo/lol_logo.png" alt />
          </div>
        </div>
        <div class="c-footer-container-body">
          <Footer v-for="footerData in footerDatas" :key="footerData.id" :data="footerData"></Footer>
        </div>
      </div>
    </div>
    <!-- footer END -->
  </div>
</template>

<script>
// import {chanpionDatas} from "../.././chanpionDatas"
import ChanpionPageTop from "./ChanpionPageTop.vue";
import ChanpionSkill from "./ChanpionSkill.vue";
import ChanpionStatus from "./ChanpionStatus.vue";
import ChanpionPageTag from "./ChanpionPageTag";
import Footer from "../.././components/Footer.vue";

export default {
  data() {
    return {
      key: 0,
      currentChampionId: "",
      currentSkillData: {},
      currentTagData: {},
      removeTagData: [],

      footerDatas: [
        {
          id: 0,
          linkTitle: "役割について",
          linkItems: ["TOP", "JG", "MID", "BOTTOM", "SUPPORT"]
        },
        {
          id: 1,
          linkTitle: "オブジェクトについて",
          linkItems: [
            "タワー",
            "インヒビター",
            "ネクサス",
            "ドラゴン",
            "バロン"
          ]
        },
        {
          id: 2,
          linkTitle: "ゲームの進め方",
          linkItems: [
            "チャンピオン",
            "操作",
            "ゲームルール",
            "チャンピオンを成長させよう",
            "アイテムを買おう",
            "仲間と行動しよう"
          ]
        },
        {
          id: 3,
          linkTitle: "JGについて",
          linkItems: [
            "ガンク",
            "カウンターJG",
            "オブジェクト管理",
            "レーンのフォロー",
            "JGチャンピオンのタイプ"
          ]
        }
      ]
    };
  },
  components: {
    ChanpionPageTop,
    ChanpionSkill,
    ChanpionStatus,
    ChanpionPageTag,
    Footer
  },

  methods: {
    roopSkillData() {
      let num = 0;
      //skillDatasに対してループ処理実行
      //eslint-disable-next-line no-console
      // console.log('読み込みました');
      for (let i = 0; i < this.$attrs.skillDatas.length; i++) {
        //オブジェクトskillDatasの配列の数だけループを行う
        //eslint-disable-next-line no-console
        // console.log('lengthは：' + this.$attrs.skillDatas.length);
        //変数へと収納
        let championId = this.currentChampionId;

        if (this.$attrs.skillDatas[i].chanpion_id == championId) {
          //もし、skillDatas[i]とchanpionIdが同じならば処理を行う
          this.currentSkillData[num] = this.$attrs.skillDatas[i];
          //変数に入れ中身の確認
          // eslint-disable-next-line no-console
          // console.log(this.currentSkillData);
          num++;
        }
      }
      return;
    },
    roopTagData() {
      let num = 0;
      //skillDatasに対してループ処理実行
      for (let i = 0; i < this.$attrs.tagDatas.length; i++) {
        //変数へと収納
        let championId = this.currentChampionId;

        if (this.$attrs.tagDatas[i].chanpion_id == championId) {
          //もし、tagDatas[i]とchanpionIdが同じならば処理を行う
          this.currentTagData[num] = this.$attrs.tagDatas[i];
          //変数に入れ中身の確認
          // eslint-disable-next-line no-console
          // console.log(this.currentTagData);
          num++;
        }
      }
      return;
    },
    roopNullRemove() {
      // alert('読み込みました');
      let num = 0;
      const id = "chanpion_tag_id_";
      for (let i = 0; i < 10; i++) {
        // alert('ループ開始');
        if (this.currentTagData[0][id] + i !== null) {
          this.removeTagData.push(this.currentTagData[0][id] + i);
          // eslint-disable-next-line no-console
          console.log(this.removeTagData);
          num++;
        }
      }
    }
  },
  created() {
    this.key = Number(this.$route.params.id);
    //eslint-disable-next-line no-console
    // console.log('keyは、' + this.key + 'です');
    this.currentChampionId = this.$attrs.chanpionDatas[this.key].id;
    return;
  },
  beforeMount() {
    //eslint-disable-next-line no-console
    // console.log('currentChanpionIdは:' + this.currentChampionId);
    this.roopSkillData();
    this.roopTagData();
    this.roopNullRemove();
    return;
  }
};
</script>

<style scoped>
</style>