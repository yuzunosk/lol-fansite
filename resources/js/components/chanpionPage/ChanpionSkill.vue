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

<!-- Passive  -->
            <transition name="change" mode="out-in">
                <div v-if="cheack_P" class="passive">
                    <div :class="table_body_left">
                        <p class="skill_type_baner" :style="banerColor[0].style">{{ bottons[0] }}</p>
                        <div>
                            <transition name="fade" mode="out-in">
                                <div v-if="secondIconShow" key="oneSkill">
                                    <img class="skill_icon" :src="storage + p_skillIcon1" alt="" style="width: 150px;">
                                </div>
                                <div v-if="!secondIconShow" key="twoSkill">
                                    <img class="skill_icon" :src="storage + p_skillIcon1" width="150px">
                                    <img class="skill_icon" :src="storage + p_skillIcon2" width="150px">
                                </div>
                            </transition>
                            <div class="name_container">
                                <p>{{ p_skillName }}</p>
                                <p>{{ p_skillNa_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="teble_body_right">
                        <h2>スキル解説</h2>
                        <p>{{ p_skillTaxt }}</p>
                    </div>
                </div>
            </transition>
<!-- Passive END -->


<!-- Q skill  -->
            <transition name="change" mode="out-in">
                <div v-if="cheack_Q" class="passive">
                    <div :class="table_body_left">
                        <p class="skill_type_baner" :style="banerColor[1].style">{{ bottons[1] }}</p>
                        <div>
                            <transition name="fade" mode="out-in">
                                <div v-if="secondIconShow" key="oneSkill">
                                    <img class="skill_icon" :src="storage + q_skillIcon1" alt="" style="width: 150px;">
                                </div>
                                <div v-if="!secondIconShow" key="twoSkill">
                                    <img class="skill_icon" :src="storage + q_skillIcon1" width="150px">
                                    <img class="skill_icon" :src="storage + q_skillIcon2" width="150px">
                                </div>
                            </transition>

                            <div class="name_container">
                                <p>{{ q_skillName }}</p>
                                <p>{{ q_skillNa_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="teble_body_right">
                        <h2>スキル解説</h2>
                        <p>{{ q_skillTaxt }}</p>
                    </div>
                </div>
            </transition>
<!-- Q skill END -->


<!-- W skill  -->
            <transition name="change" mode="out-in">
                <div v-if="cheack_W" class="passive">
                    <div :class="table_body_left">
                        <p class="skill_type_baner" :style="banerColor[2].style">{{ bottons[2] }}</p>
                        <div>
                            <transition name="fade" mode="out-in">
                                <div v-if="secondIconShow" key="oneSkill">
                                    <img class="skill_icon" :src="storage + w_skillIcon1" alt="" style="width: 150px;">
                                </div>
                                <div v-if="!secondIconShow" key="twoSkill">
                                    <img class="skill_icon" :src="storage + w_skillIcon1" width="150px">
                                    <img class="skill_icon" :src="storage + w_skillIcon2" width="150px">
                                </div>
                            </transition>


                            <div class="name_container">
                                <p>{{ w_skillName }}</p>
                                <p>{{ w_skillNa_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="teble_body_right">
                        <h2>スキル解説</h2>
                        <p>{{ w_skillTaxt }}</p>
                    </div>
                </div>
            </transition>
<!-- W skill END -->


<!-- E skill  -->
            <transition name="change" mode="out-in">
                <div v-if="cheack_E" class="passive">
                    <div :class="table_body_left">
                        <p class="skill_type_baner" :style="banerColor[3].style">{{ bottons[3] }}</p>
                        <div>
                            <transition name="fade" mode="out-in">
                                <div v-if="secondIconShow" key="oneSkill">
                                    <img class="skill_icon" :src="storage + e_skillIcon1" alt="" style="width: 150px;">
                                </div>
                                <div v-if="!secondIconShow" key="twoSkill">
                                    <img class="skill_icon" :src="storage + e_skillIcon1" width="150px">
                                    <img class="skill_icon" :src="storage + e_skillIcon2" width="150px">
                                </div>
                            </transition>
                            <div class="name_container">
                                <p>{{ e_skillName }}</p>
                                <p>{{ e_skillNa_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="teble_body_right">
                        <h2>スキル解説</h2>
                        <p>{{ e_skillTaxt }}</p>
                    </div>
                </div>
            </transition>

<!-- E skill END -->

<!-- U skill  -->
            <transition name="change" mode="out-in">
                <div v-if="cheack_U" class="passive">
                    <div :class="table_body_left">
                        <p class="skill_type_baner" :style="banerColor[4].style">{{ bottons[4] }}</p>
                        <div>
                            <transition name="fade" mode="out-in">
                                <div v-if="secondIconShow" key="oneSkill">
                                    <img class="skill_icon" :src="storage + u_skillIcon1" alt="" style="width: 150px;">
                                </div>
                                <div v-if="!secondIconShow" key="twoSkill">
                                    <img class="skill_icon" :src="storage + u_skillIcon1" width="150px">
                                    <img class="skill_icon" :src="storage + u_skillIcon2" width="150px">
                                </div>
                            </transition>
                            <div class="name_container">
                                <p>{{ u_skillName }}</p>
                                <p>{{ u_skillNa_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="teble_body_right">
                        <h2>スキル解説</h2>
                        <p>{{ u_skillTaxt }}</p>
                    </div>
                </div>
            </transition>

<!-- U skill END -->

            </div>


        </div>
    </div>
</template>

<script>
export default {
    props: ["id","data"],
    data: function() {
        return {
            storage: "/storage/",
            cheack_P: true,
            cheack_Q: false,
            cheack_W: false,
            cheack_E: false,
            cheack_U: false,
            tab_bottom: {
                    border_bottom: true,
                    tab_botton: true,
            },
            table_body_left: {
                    table_body_left: true,
                    p_0: false,
                    pt_50: false,
                    flex_2: true,
                    flex_4: false,
            },
            secondIconShow: true,
            nowNum: 0,
            bottons: ['Passive' , 'Qスキル' , 'Wスキル' , 'Eスキル' , 'Ultimate'],
            banerColor:[
                {style: "background-color:#5e5ee4;color:#f6f5f4" },
                {style: "background-color:yellow"},
                {style: "background-color:yellow"},
                {style: "background-color:yellow"},
                {style: "background-color:#de3333;color:#f6f5f4"}
            ],
            p_skillName: "default",
            p_skillNa_name: "default",
            p_skillIcon1: "img/etc/noimage.png",
            p_skillIcon2: null,
            p_skillTaxt: "none",

            q_skillName: "default",
            q_skillNa_name: "default",
            q_skillIcon1: "img/etc/noimage.png",
            q_skillIcon2: null,
            q_skillTaxt: "none",

            w_skillName: "default",
            w_skillNa_name: "default",
            w_skillIcon1: "img/etc/noimage.png",
            w_skillIcon2: null,
            w_skillTaxt: "none",

            e_skillName: "default",
            e_skillNa_name: "default",
            e_skillIcon1: "img/etc/noimage.png",
            e_skillIcon2: "img/etc/noimage.png",
            e_skillTaxt: "none",

            u_skillName: "default",
            u_skillNa_name: "default",
            u_skillIcon1: "img/etc/noimage.png",
            u_skillIcon2: null,
            u_skillTaxt: "none",
        }
    },
    methods: {
            toggleBotton(event) {
                this.nowNum = event.currentTarget.attributes[1].value;
                // this.clickBotton = 
                //eslint-disable-next-line
                // console.log(event.currentTarget.attributes);
                this.toggleCheack();
                return
            },
            toggleIconShow() {
                // alert('読み込みました');
                const list = [this.p_skillIcon2 , this.q_skillIcon2 , this.w_skillIcon2 , this.e_skillIcon2 , this.u_skillIcon2];
                let val = list[this.nowNum];
                //eslint-disable-next-line no-console
                console.log({ val });
                if(val){
                    this.secondIconShow = false;
                    this.table_body_left.p_0 = true;
                    this.table_body_left.pt_50 = true;
                    this.table_body_left.flex_4 = true;
                    this.table_body_left.flex_2 = false;
                return
                }
                else
                {
                    this.secondIconShow = true;
                    this.table_body_left.p_0 = false;
                    this.table_body_left.pt_50 = false;
                    this.table_body_left.flex_4 = false;
                    this.table_body_left.flex_2 = true;
                }
            },
            passiveSkill() {
                let id = this.id;
                // eslint-disable-next-line no-console
                console.log('読み込みました:' + this.data[id]);
                    for(let i=0; i < 5 ; i++)
                    {
                        // eslint-disable-next-line no-console
                        console.log('ループ開始:'+ i + '週目');
                        if(this.data[i].skill_type == 'Passive')
                        {
                            // eslint-disable-next-line no-console
                            console.log('Passive in');
                            this.p_skillName = this.data[i].name;
                            this.p_skillNa_name = this.data[i].na_name;
                            this.p_skillTaxt = this.data[i].text;
                            this.p_skillIcon1 = this.data[i].skill_icon_1;
                            this.p_skillIcon2 = this.data[i].skill_icon_2;
                        }
                        else if(this.data[i].skill_type == 'Qスキル')
                        {
                            // eslint-disable-next-line no-console
                            console.log('Qskill in');
                            this.q_skillName = this.data[i].name;
                            this.q_skillNa_name = this.data[i].na_name;
                            this.q_skillTaxt = this.data[i].text;
                            this.q_skillIcon1 = this.data[i].skill_icon_1;
                            this.q_skillIcon2 = this.data[i].skill_icon_2;
                        }
                        else if(this.data[i].skill_type == 'Wスキル')
                        {
                            // eslint-disable-next-line no-console
                            console.log('Wskill in');
                            this.w_skillName = this.data[i].name;
                            this.w_skillNa_name = this.data[i].na_name;
                            this.w_skillTaxt = this.data[i].text;
                            this.w_skillIcon1 = this.data[i].skill_icon_1;
                            this.w_skillIcon2 = this.data[i].skill_icon_2;
                        }
                        else if(this.data[i].skill_type == 'Eスキル')
                        {
                            // eslint-disable-next-line no-console
                            console.log('Eskill in');
                            this.e_skillName = this.data[i].name;
                            this.e_skillNa_name = this.data[i].na_name;
                            this.e_skillTaxt = this.data[i].text;
                            this.e_skillIcon1 = this.data[i].skill_icon_1;
                            this.e_skillIcon2 = this.data[i].skill_icon_2;
                        }else{
                            // eslint-disable-next-line no-console
                            console.log('Ultimate in');
                            this.u_skillName = this.data[i].name;
                            this.u_skillNa_name = this.data[i].na_name;
                            this.u_skillTaxt = this.data[i].text;
                            this.u_skillIcon1 = this.data[i].skill_icon_1;
                            this.u_skillIcon2 = this.data[i].skill_icon_2;
                        }
                    }
                },
                toggleCheack(){
                if(this.nowNum == 0)
                {
                    this.cheack_P = true;
                    this.cheack_Q = false;
                    this.cheack_W = false;
                    this.cheack_E = false;
                    this.cheack_U = false;
                }
                else if(this.nowNum == 1)
                {
                    this.cheack_P = false;
                    this.cheack_Q = true;
                    this.cheack_W = false;
                    this.cheack_E = false;
                    this.cheack_U = false;
                }
                else if(this.nowNum == 2)
                {
                    this.cheack_P = false;
                    this.cheack_Q = false;
                    this.cheack_W = true;
                    this.cheack_E = false;
                    this.cheack_U = false;
                }
                else if(this.nowNum == 3)
                {
                    this.cheack_P = false;
                    this.cheack_Q = false;
                    this.cheack_W = false;
                    this.cheack_E = true;
                    this.cheack_U = false;
                }
                else
                {
                    this.cheack_P = false;
                    this.cheack_Q = false;
                    this.cheack_W = false;
                    this.cheack_E = false;
                    this.cheack_U = true;
                }
            },
            },
    beforeMount() {
        // es-lint-disable-next-line no-console
        // console.log('データの中身');
        // es-lint-disable-next-line no-console
        // console.log( this.data[0].chanpion_id);
        this.passiveSkill();
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
    padding: 0 .5rem;
    font-size: 12px;
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
    position: relative;
    width: 100%;
}
.passive{
    border: 2px solid #333;
    border-radius: 5px 0 5px 5px;
    width: 100%;
    display: flex;
    height: 350px;
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
}

.table_body_left {
    background: #f6f5f4;
    text-align: center;
    padding: 50px;
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
    border: 3px solid #33333324;
    box-sizing: border-box;
}
.teble_body_right {
    flex: 6;
    text-align: left;
    padding: 50px;
    box-sizing: border-box;
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

.name_container{
    margin-top: 30px;
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

.p_0{
    padding: 0;
}
.pt_50{
    padding-top: 50px;
}

.flex_2 {
    flex: 2;
}

.flex_4{
    flex: 4;
}

/* アニメーション */
.fade-enter-active , .fade-leave-active{
    transition: all .5s;
}
.fade-enter , .fade-leave-to{
    opacity: 0;
    transform: scale(1.2);
}

.change-enter-active , .change-leave-active{
    transition: all 1s ease;
}

.change-enter , .change-leave-to{ 
    opacity: 0;
}



/* アニメーション END */


</style>
