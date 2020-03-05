<template>
    <div class="chanpion_page_container">
        <div class="chanpion_top">
            <div class="top_picture" :style="topImage">
                        <img :src="storage + data.chanpion_img" alt="" width="50%">
            </div>

        <!-- TOP内データ管理 -->
            <div class="chanpion_top_state_container">

            <div class="chanpion_head_name">
                <h2 class="name">{{ data.name }}</h2><span class="sub_name">-{{data.sub_name}}-</span>
                <hr style="margin: 0;">
                <h2>{{ data.popular_name }}</h2>
                <div class="chanpion_head_roll">
                    <p>{{ data.main_roll_id }}</p>
                    <p class="left_space">{{ data.sub_roll_id }}</p>
                </div>
            </div>
            <div class="chanpion_head_cost">
                <span class="cost cost-l">
                    <img class="head_cost_img" src="/storage/img/logo/Pt1am6v9j2KZ87FNIOjjscNMSBbfuOf7yq5RQWpG.png" width="40px">
                {{ data.be_cost }}
                </span>
                <span class="cost cost-r left_space">
                    <img class="head_cost_img" src="/storage/img/logo/riot-games_owler_20180821_223624_original-500x500.png" width="38px">
                {{ data.rp_cost }}
                </span>
            </div>

            <div class="chanpion_head_date">
                <p>実装日<span>/</span>{{ data.created_at }}</p>
                <p>更新日<span>/</span>{{ data.updated_at }}</p>
            </div>



            </div>
        </div>
                <!-- TOP内データ管理 END -->

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
    margin: 0 auto;
}
.chanpion_top{
    background-color: black;
    overflow: hidden;
    position: relative;
    letter-spacing: 1.1px;

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
    margin-left: 40%;
    height: 340px;
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
.top_picture::after{
    content: "";
    background-color: black;
    margin-left: 40%;
    width: 100%;

}
.chanpion_top_state_container{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


.chanpion_head_name{
    position: absolute;
    top: 20%;
    left: 5%;
    text-align: center;
    width: 400px;
}

.chanpion_head_name .name{
    font-size: 5rem;
}
.chanpion_head_name .sub_name{
    font-size: 1rem;
}
.sub_name {
    display: block;
}
.chanpion_head_name > h2,span,p{
    color: #f6f5f4;
    margin: 0;
}
.chanpion_head_roll{
    display: flex;
    justify-content: space-around;
    padding: 8px;
    font-size: 1.1rem;
    text-align: center;
}
.chanpion_head_roll > p{
    background: #49575a;
    padding: 5px 10px;
    border: 1.5px solid #f6f5f4;
    position: relative;
    margin-left: 50px;
    width: 100%;
    height: 39px;
    }


.chanpion_head_roll p::before{
    content: "MAIN";
    text-align: center;
    background: #f6f5f4;
    color: #333;
    position: absolute;
    top: -2px;
    left: -30%;
    width: 45%;
    height: 39px;
    line-height: 39px;
    border: 1px solid #f6f5f4;
    font-weight: bold;

}
.chanpion_head_roll p:last-child::before{
    content: "SUB";
    background: #f6f5f4;
    color: #333;
}

.chanpion_head_date {
    position: absolute;
    bottom: 10%;
    right: 2%;
    font-size: 14px;
    display: flex;
    flex-direction: column;
}


.chanpion_head_cost{
    color: #f6f5f4;
    font-size: 1.2rem;
    display: flex;
}
.chanpion_head_cost cost{
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