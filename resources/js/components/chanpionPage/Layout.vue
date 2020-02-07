<template>
<!-- チャンピオンページのレイアウト -->
    <div>
        <ChanpionPageTop
           :key="chanpionDatas[key].id"
           :data="chanpionDatas[key]"
        >
            <!-- チャンピオンTOP image -->
            <!-- <p>チャンピオン画像など</p> -->
        </ChanpionPageTop>
        <p class="main_text">{{ chanpionDatas[key].feature }}</p>

        <div class="chanpion_stetus_data">
            <ChanpionStatus
           :key="chanpionDatas[key].id"
           :data="chanpionDatas[key]"
            >
                <!-- チャンピオン簡易ステータスコンポーネント -->
            </ChanpionStatus>

            <ChanpionSkill
           :key="chanpionDatas[key].id"
           :data="chanpionDatas[key]">
                 <!-- チャンピオンスキルコンポーネント -->
            </ChanpionSkill>
        </div>
        <!-- チャンピオンについての感想やステーステータス、スキン情報など -->
        <ChanpionPageTag
           :key="chanpionDatas[key].id"
           :data="chanpionDatas[key]"
        >
        </ChanpionPageTag>
    </div>
</template>

<script>
import {chanpionDatas} from "../.././chanpionDatas"
import ChanpionPageTop from "./ChanpionPageTop.vue";
import ChanpionSkill from "./ChanpionSkill.vue";
import ChanpionStatus from "./ChanpionStatus.vue";
import ChanpionPageTag from "./ChanpionPageTag";

export default {
    mixins: [chanpionDatas],
    data() {
        return {
            key: 0,
        }
    },
    components: {
        ChanpionPageTop,
        ChanpionSkill,
        ChanpionStatus,
        ChanpionPageTag
    },
        created () {
            this.key = Number(this.$route.params.id);
            //eslint-disable-next-line no-console
            // console.log('keyは、' + this.key + 'です');
            
            return
        },
}

</script>

<style scope>
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
    margin: 50px auto;
}
</style>