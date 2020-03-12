<template>
    <div class="l-main-container l-tagGoup">
        <div class="tag_title">
        <h3><img src="/storage/img/logo/perm_data_setting-24px.svg" alt="" width="25px;">メカニクス</h3>
        </div>
        <ul>
            <li  class="tag_form" v-for="(tagdata , index) in data" :key="index">
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_1 !== null">#{{ tagdata.chanpion_tag_id_1 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_2 !== null">#{{ tagdata.chanpion_tag_id_2 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_3 !== null">#{{ tagdata.chanpion_tag_id_3 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_4 !== null">#{{ tagdata.chanpion_tag_id_4 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_5 !== null">#{{ tagdata.chanpion_tag_id_5 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_6 !== null">#{{ tagdata.chanpion_tag_id_6 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_7 !== null">#{{ tagdata.chanpion_tag_id_7 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_8 !== null">#{{ tagdata.chanpion_tag_id_8 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_9 !== null">#{{ tagdata.chanpion_tag_id_9 }}</span>
                        <span class="tag_body" v-if="tagdata.chanpion_tag_id_10 !== null">#{{ tagdata.chanpion_tag_id_10 }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ["data","tags"],
    data() {
        return {

        }
    }
}
</script>

<style scoped>
    /* .chanpion_tag_container {
        width: 1280px;
        height: 300px;
        margin: 0 auto;
    } */
    .tag_title img{
    vertical-align: text-top;
    margin-right: 10px;
    }
    .tag_form{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    }

    .tag_body {
    background: linear-gradient(white, #f6f5f4);
    display: block;
    width: 200px;
    text-align: left;
    border: 1px solid #cacaca;
    border-radius: 5px;
    padding: 8px 10px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin-left: 10px;
    margin-bottom: 10px;
    }
    .tag_body:hover{
        background: #333;
        /* opacity: .9; */
        color: #f6f5f4;
        transition: all .4s;
    }

    .tag_body p{
        margin: 0;
        font-size: 12px;
        font-weight: bold;
    }
    .tag_body span{
        font-size: 10px;
    }
    .tag_btn{
        text-decoration: none;
        color: #333;
    }
</style>