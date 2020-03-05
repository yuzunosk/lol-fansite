<template>
    <div class="chanpion_tag_container">
        <div class="tag_title">
        <h3><img src="/storage/img/logo/perm_data_setting-24px.svg" alt="" width="25px;">メカニクス</h3>
        </div>
        <ul class="tag_form">
            <li v-for="(tagdata , index) in data" :key="index">
                <div class="tag_body">
                    <span>{{ tagdata.sub_name }}</span><p>{{ tagdata.name }}</p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ["data"],
    data() {
        return {

        }
    }
}
</script>

<style scoped>
    .chanpion_tag_container {
        width: 1280px;
        height: 300px;
        margin: 0 auto;
    }
    .tag_title img{
    vertical-align: text-top;
    margin-right: 10px;
    }
    .tag_form{
    display: flex;
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
    margin-bottom: 10px;    }

    .tag_body p{
        margin: 0;
        font-size: 12px;
        font-weight: bold;
    }
    .tag_body span{
        font-size: 10px;
    }
</style>