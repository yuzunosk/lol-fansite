<template>
    <div class="status_wrapper">
        <h3>プレイ感</h3>
        <div class="status_container">
            <div class="status_keybox">
                <ul>
                    <!-- attack -->
                    <li>
                        <p>{{ attackData.name }}</p>
                        <span :style="attackData.color" v-html="st_att"></span>
                    </li>
                    <!-- magic -->
                    <li>
                        <p>{{ magicData.name }}</p>
                        <span :style="magicData.color" v-html="st_mag"></span>
                    </li>
                    
                    <!-- toughness -->
                    <li>
                        <p>{{ toughnessData.name }}</p>
                        <span :style="toughnessData.color" v-html="st_tou"></span>
                    </li>

                    <!-- mobility -->
                    <li>
                        <p>{{ mobilityData.name }}</p>
                        <span :style="mobilityData.color" v-html="st_mob"></span>
                    </li>

                    <!-- difficulty -->
                    <li>
                        <p>{{ difficultyData.name }}</p>
                        <span :style="difficultyData.color" v-html="st_dif"></span>
                    </li>

                </ul>
            </div>
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
.status_wrapper{
    margin: 18px 0;
}
.status_wrapper p{
    margin: 0;
}
.status_container{
    display: flex;
    justify-content: space-between;
}
.status_wrapper h3{
    font-size: 24px;
    padding: 8px 30px;
    background: #333;
    border-radius: 5%;
    text-align: center;
    color: #f6f5f4;
    margin-bottom: 20px;
}
.status_wrapper p{
    font-size: 14px;
    margin: 5px 0;
}


</style>