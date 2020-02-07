<template>
    <div class="footer_body">
        <ul>
            <li class="footer_link_waraper">
                <a href="" class="footer_title">{{ data.linkTitle }}</a>
                <div>
                    <ul v-for="(item,index) in data.linkItems" :key="index">
                        <li>
                            <a href="#">- {{ item }}</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ["data"],
}
</script>

<style scoped>
    .footer_body{
        width: 1280px;
    }
    .footer_link_waraper{
    display: flex;
    width: 100%;
    margin-bottom: 25px;
    }
    .footer_link_waraper div {
        display: flex;
        flex-basis: 80%;
    }
    .footer_body li a{
        color:#f6f5f4;
        text-decoration:none;
        list-style: none;
        font-size: 12px;
        padding-right: 20px;
    }
    .footer_title{
        flex-basis: 150px;
    }
    .footer_link_waraper ul {
        padding: 0;
    }
    .footer_link_waraper span{
        margin: 0 10px;
        color: #f6f5f4;
    }

</style>