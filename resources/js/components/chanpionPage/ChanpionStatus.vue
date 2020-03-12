<template>
    <div class="l-information-left">
        <h3 class="p-information__header">プレイ感</h3>
        <div class="p-information__section">
                    <!-- attack -->
                    <li>
                        <p class="p-information__section__item">
                            {{ attackData.name }}</p>
                        <span class="p-information__section--square" :style="attackData.color" v-html="st_att"></span>
                    </li>
                    <!-- magic -->
                    <li>
                        <p class="p-information__section__item">
                            {{ magicData.name }}</p>
                        <span class="p-information__section--square" :style="magicData.color" v-html="st_mag"></span>
                    </li>
                    
                    <!-- toughness -->
                    <li>
                        <p class="p-information__section__item">
                            {{ toughnessData.name }}</p>
                        <span class="p-information__section--square" :style="toughnessData.color" v-html="st_tou"></span>
                    </li>

                    <!-- mobility -->
                    <li>
                        <p class="p-information__section__item">
                            {{ mobilityData.name }}</p>
                        <span class="p-information__section--square" :style="mobilityData.color" v-html="st_mob"></span>
                    </li>

                    <!-- difficulty -->
                    <li>
                        <p class="p-information__section__item">
                            {{ difficultyData.name }}</p>
                        <span class="p-information__section--square" :style="difficultyData.color" v-html="st_dif"></span>
                    </li>
        </div>
    </div>
</template>

<script>
export default {
    props: ["data"],
    data() {
        return {
            st_att: '',
            st_mag: '',
            st_tou: '',
            st_mob: '',
            st_dif: '',
            insertBar: '<span>a</span>',
            attackData:     {name: "Attack"    , value: this.data.st_attack , color: "color:red" },
            magicData:      {name: "Magic"    , value: this.data.st_magic , color: "color:purple" },
            toughnessData:  {name: "Toughness"    , value: this.data.st_toughness , color: "color:green" },
            mobilityData:   {name: "Mobility"    , value: this.data.st_mobility , color: "color:skyblue" },
            difficultyData: {name: "Difficulty"    , value: this.data.st_difficulty , color: "color:#cddc39" },
        }
    },
    methods: {
        makeAtt(){
            // alert('読み込みました');
            for (let $i = 0; $i < this.attackData.value; $i++)
                {
                this.st_att = this.st_att + '■';
                }
        },
        makeMag(){
            // alert('読み込みました');
            for (let $i = 0; $i < this.magicData.value; $i++)
                {
                this.st_mag = this.st_mag + '■';
                }
        },
        makeTou(){
            // alert('読み込みました');
            for (let $i = 0; $i < this.toughnessData.value; $i++)
                {
                this.st_tou = this.st_tou + '■';
                }
        },
        makeMob(){
            // alert('読み込みました');
            for (let $i = 0; $i < this.mobilityData.value; $i++)
                {
                this.st_mob = this.st_mob + '■';
                }
        },
        makeDif(){
            // alert('読み込みました');
            for (let $i = 0; $i < this.difficultyData.value; $i++)
                {
                this.st_dif = this.st_dif + '■';
                }
        }
    },
            beforeMount(){
            this.makeAtt();
            this.makeMag();
            this.makeTou();
            this.makeMob();
            this.makeDif();
            // disable-next-line no-console
            // console.log('beforeMount read')
        },
}
</script>

<style scoped>


</style>