<template>
<!-- チャンピオンページのレイアウト -->
    <div>
        
        <ChanpionPageTop
           :key="currentChampionId"
           :data="$attrs.chanpionDatas[key]"
        >
            <!-- チャンピオンTOP image -->
            <!-- <p>チャンピオン画像など</p> -->
        </ChanpionPageTop>
        <p class="main_text">{{ $attrs.chanpionDatas[key].feature }}</p>

        <div class="chanpion_stetus_data">
            <!-- チャンピオン簡易ステータスコンポーネント -->
            <ChanpionStatus
                :key="currentChampionId"
                :data="$attrs.chanpionDatas[key]">
            </ChanpionStatus>

            <!-- チャンピオンスキルコンポーネント -->
            <ChanpionSkill
                :key="currentChampionId"
                :id="currentChampionId"
                :data="currentSkillData"
                >
            </ChanpionSkill>

        </div>
        <!-- チャンピオンについての感想やステーステータス、スキン情報など -->
        <ChanpionPageTag
           :key="currentChampionId"
           :data="$attrs.tagDatas"
        >
        </ChanpionPageTag>
    </div>
</template>

<script>
// import {chanpionDatas} from "../.././chanpionDatas"
import ChanpionPageTop from "./ChanpionPageTop.vue";
import ChanpionSkill from "./ChanpionSkill.vue";
import ChanpionStatus from "./ChanpionStatus.vue";
import ChanpionPageTag from "./ChanpionPageTag";

export default {
    data() {
        return {
            key: 0,
            currentChampionId: "",
            currentSkillData: {},
        }
    },
    components: {
        ChanpionPageTop,
        ChanpionSkill,
        ChanpionStatus,
        ChanpionPageTag
    },
    methods: {
        roopSkillData(){
        let num = 0;
        //skillDatasに対してループ処理実行
        //eslint-disable-next-line no-console
        // console.log('読み込みました');
        for (let i=0 ; i < this.$attrs.skillDatas.length; i++) {
        //オブジェクトskillDatasの配列の数だけループを行う
        //eslint-disable-next-line no-console
        // console.log('lengthは：' + this.$attrs.skillDatas.length);
        //変数へと収納
        let championId = this.currentChampionId;

                if(this.$attrs.skillDatas[i].chanpion_id == championId){
                    //もし、skillDatas[i]とchanpionIdが同じならば処理を行う
                     this.currentSkillData[num] = this.$attrs.skillDatas[i];
                     //変数に入れ中身の確認
                    // eslint-disable-next-line no-console
                    console.log(this.currentSkillData);
                    num++;
                }
        }
        return
    },
    },
        created () {
            this.key = Number(this.$route.params.id);
            //eslint-disable-next-line no-console
            // console.log('keyは、' + this.key + 'です');
            this.currentChampionId = this.$attrs.chanpionDatas[this.key].id;
            return
        },
        beforeMount(){
            //eslint-disable-next-line no-console
            // console.log('currentChanpionIdは:' + this.currentChampionId);
            this.roopSkillData();
            return 

        },
}

</script>

<style scoped>
    .main_text{
    margin: 0;
    width: 100%;
    font-size: 1.5rem;
    color: #333;
    padding: 10px;
    text-align: center;
    background: #e6e6e6;
    }

.chanpion_stetus_data{
    display: flex;
    width: 1280px;
    height: 500px;
    margin: 35px auto;
}
</style>