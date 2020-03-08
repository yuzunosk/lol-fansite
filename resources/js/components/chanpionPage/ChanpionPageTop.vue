<template>
    <div class="chanpion_page_container">
        <div class="chanpion_top">
            <div class="top_picture" :style="topImage">
                    <div class="pic_date">
                        <img :src="storage + data.chanpion_img" alt="" width="50%">
                    </div>
                <div class="chanpion_head_date">
                        <p>実装日<span>/</span>{{ data.created_at }}</p>
                        <p>更新日<span>/</span>{{ data.updated_at }}</p>
                </div>
            </div>


        <!-- TOP内データ管理 -->
                <div class="chanpion_top_state_container">

                        <h2 class="name state_text">{{ data.name }}</h2>
                        <p class="sub_name state_text">-{{data.sub_name}}-</p>
                        <hr class="m-1" style="background-color:#f6f5f4;">
                        <h2 class="mini_name mb-3 state_text">{{ data.popular_name == null ? "no-data" : data.popular_name }}</h2>

                        <div class="chanpion_head_roll state_text">
                            <p class="roll_text">{{ data.main_roll_id }}</p>
                            <p class="roll_text left_space">{{ data.sub_roll_id }}</p>
                        </div>

                    <div class="chanpion_head_cost state_text">
                        <p class="cost cost-l">
                            <img class="head_cost_img" src="/storage/img/logo/Pt1am6v9j2KZ87FNIOjjscNMSBbfuOf7yq5RQWpG.png" width="40px">
                        {{ data.be_cost }}
                        </p>
                        <p class="cost cost-r left_space">
                            <img class="head_cost_img" src="/storage/img/logo/riot-games_owler_20180821_223624_original-500x500.png" width="38px">
                        {{ data.rp_cost }}
                        </p>
                    </div>
                </div>
                <!-- TOP内データ管理 END -->
            </div>
        </div>
</template>

<script>

export default {
    props: ["data"],
    data() {
        return {
            storage: "/storage/",
            bgColor: "bule"
        }
    },
}
</script>

<style scoped>
.chanpion_page_container{
    width: 1280px;
    height: 350px;
    margin: 0 auto;
}
.chanpion_top{
    background-color: black;
    overflow: hidden;
    position: relative;
    letter-spacing: 1.1px;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

}

.chanpion_top::before {
    content: "・Chanpion Guide";
    position: absolute;
    top: 0;
    left: 0;
    color: #333;
    font-size: 1rem;
    font-weight: bold;
    background: #FFEB3B;
    text-align: center;
    padding: 8px 10px 8px 5px;
    /* border: 1px solid; */
    z-index: 2;
    transform: rotate(-10deg);
}

.top_picture{
    height: auto;
    flex: 6;
    order: 1;
    flex-wrap: wrap;
}
.top_picture_blur{
    height: 340px;
    margin-bottom: -340px;
    background-size: 100%;
    background-repeat: repeat-y;
    background-position: left top;
    z-index: -1;
    background-image: linear-gradient(90deg, #0d0d0d 0%, #0a0a0a 45%, rgba(13,13,13,0) 65%, rgba(13,13,13,0) 82%, #0d0d0d 93%);
}

.chanpion_top_state_container{
    height: auto;
    flex: 4;
    display: flex;
    justify-content: flex-start;
    flex-flow: column wrap;
    margin-top: 4rem;
}
.state_text{
    align-self: center;
    text-align: center;
    width: 100%;
    color: #f6f5f4;
    margin-bottom: 8px;
}

.name{
    font-size: 2.8rem;
}
.sub_name{
    font-size: 1rem;
}
.mini_name{
    font-size: 2rem;
}
.chanpion_head_name > h2,span,p{
    color: #f6f5f4;
    margin: 0;
}
.chanpion_head_roll{
    max-width: 90%;
    display: flex;
    padding: 8px;
}
.roll_text{
    background: #49575a;
    border: 1.5px solid #f6f5f4;
    padding-left: 15%;
    height: 40px;
    line-height: 40px;
    flex: 1;
    position: relative;
}

.roll_text::before{
    content: "MAIN";
    text-align: center;
    background: #f6f5f4;
    color: #333;
    font-weight: bold;
    height: -webkit-fill-available;
    position: absolute;
    left: 0;
    width: 80px;
}
.roll_text:last-child::before{
    content: "SUB";
    background: #f6f5f4;
    color: #333;
}
.pic_date{
    flex: 1;
}

.chanpion_head_date {
    position: absolute;
    bottom: 10%;
    right: 2%;
    font-size: 14px;
    display: flex;
    flex-direction: column;
    flex: 1;
}


.chanpion_head_cost{
    color: #f6f5f4;
    font-size: 1.2rem;
    display: flex;
}
.cost{
    padding: 8px;
}

.head_cost_img{
    position: relative;
    top: 25%;
    }

.left_space{
    margin-left: 15px;
}

.cost-l {
position: absolute;
bottom: 5%;
left: 9%;
}

.cost-r {
position: absolute;
bottom: 5%;
left: 23%;
}

</style>