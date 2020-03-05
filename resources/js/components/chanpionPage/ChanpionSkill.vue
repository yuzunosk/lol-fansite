<template>
    <div class="chanpion_skill_container">
        <div class="chanpion_skill_table">
            <!-- この下からループ処理をする -->

            <div class="skill_table_tab">
                <ul>
                        <li v-for="(botton , index) in bottons" :key="index">
                            <p class="tab_botton" @click="toggleBotton($event);toggleIconShow($event)" :num="index">{{ botton }}</p>
                        </li>
                </ul>
            </div>
            <div class="table_body">
                <div class="table_body_left">
                    <p class="skill_type_baner" :style="tagStyle">{{ skillType }}</p>
                    <div>
                        <transition name="fade"
                        mode="out-in"
                        >
                            <div v-if="secondIconShow" key="oneSkill">
                                <img class="skill_icon" :src="skillIcon1" alt="" width="150px">
                            </div>
                            <div v-if="!secondIconShow" key="twoSklill">
                                <img class="skill_icon" :src="storage + skillIcon1" width="150px">
                                <img class="skill_icon" :src="storage + skillIcon2" width="150px">
                            </div>
                        </transition>

                        <p>{{ skillName1 }}</p>
                        <p>{{ skillName2 }}</p>
                    </div>
                </div>
                <div class="teble_body_right">
                    <h2>スキル解説</h2>
                    <p>{{ skillText }}</p>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    props: ["data"],
    data: function() {
        return {
            storage: "/storage/",
            tab_bottom: {
                    border_bottom: true,
                    tab_botton: true,
            },
            secondIconShow: true,
            nowNum: 0,
            bottons: ['P' , 'Q' , 'W' , 'E' , 'R'],
            banerColor:[
                {bgColor: "background-color:#5e5ee4;color:#f6f5f4" },
                {bgColor: "background-color:yellow"},
                {bgColor: "background-color:yellow"},
                {bgColor: "background-color:yellow"},
                {bgColor: "background-color:#de3333;color:#f6f5f4"}
            ],
        }
    },
    computed: {
            skillIcon1() {
                //eslint-disable-next-line no-console
                // console.log(this.skills[this.nowNum].icon2);
            return this.data[this.nowNum].skill_icon_1;
            },
            skillIcon2() {
            return  this.data[this.nowNum].skill_icon_2;
            },
            skillName1() {
            return this.data[this.nowNum].name;
            },
            skillName2() {
            return this.data[this.nowNum].na_name;
            },
            skillText() {
            return this.data[this.nowNum].text;            },
            skillType() {
            return this.data[this.nowNum].skill_type;            },
            tagStyle() {
                return this.banerColor[this.nowNum].bgColor;
            }
    },
    methods: {
        toggleBotton(event) {
            this.nowNum = event.currentTarget.attributes[1].value;
            return
        },
        toggleIconShow() {
            if(this.data[this.nowNum].skill_icon_2 === undefined){
                this.secondIconShow = true;
            return
            }else{
                this.secondIconShow = false;
            }
        },
    },
    beforeMount() {
        // es-lint-disable-next-line no-console
        // console.log('データの中身');
        // es-lint-disable-next-line no-console
        // console.log( this.data[0].chanpion_id);
    }
}
</script>

<style scoped>
.chanpion_skill_container {
    padding-left: 100px;
    }

.chanpion_skill_table {
margin: 50px 0 50px auto;
width: 980px;
letter-spacing: 1.1px;
}

.skill_table_tab > ul{
    display: flex;
    width: 40%;
    height: 40px;
    line-height: 40px;
    margin: 0 0 0 auto;
    padding: 0;
}
.skill_table_tab > ul > li {
    flex-basis: 20%;
    flex-basis: 20%;
    text-align: center;
    border-top: 2px solid #333;
    border-left: 2px solid #333;
    /* border-bottom: 2px solid #333; */
    border-radius: 5px 5px 0 0;
    background-color: #fff;

    /* border-right: 2px solid #333; */
}
.skill_table_tab > ul > li:last-child{
    border-right: 2px solid #333;

}

.tab_botton{
    width: 100%;
    height: 100%;
    margin: 0;
    font-size: 16px;
}

.tab_botton:hover{
    cursor: pointer;
    color: #f6f5f4;
    background-color: #333;
    transition: all.3s;
}

.boder_bottom{
    border-bottom: none;
}

.table_body {
    border: 2px solid #333;
    border-radius: 5px 0 5px 5px;
    display: flex;
    overflow: hidden;
    position: relative;
}

.table_body_left {
    flex-basis: 35%;
    background: #f6f5f4;
    /* margin: 0 auto; */
    text-align: center;
    padding: 30px;
}
.table_body_left > p{
    font-size: 22px;
    margin-top: 10px;
    margin: 0;
    margin-top: 10px;
    }
.table_body_left p:last-child{
    font-size: 14px;
}
.skill_icon{
    border-radius: 10%;
    border: 4px solid #33333324;
    box-sizing: border-box;
}
.teble_body_right {
    text-align: left;
    padding: 30px;
    box-sizing: border-box;
    flex-basis: 70%;
}

.teble_body_right > h2 {
    margin: 0;
    margin-bottom: 10px;
}
.teble_body_right > p{
    margin: 0;
}

.icon_container{
    display: flex;
}

.skill_type_baner {
    position: absolute;
    top: 5%;
    left: -5%;
    padding: 2px;
    background: #39ff0a;
    width: 200px;
    height: 30px;
    line-height: 30px;
    font-size: 16px;
    transform: rotate(-37deg);
    z-index: 2;
}

/* アニメーション */
.fade-enter-active , .fade-leave-active{
    transition: all .5s;
}
.fade-enter , .fade-leave-to{
    opacity: 0;
    transform: scale(1.2);
}

/* アニメーション END */


</style>
