<template>
    <div class="news_body" @mouseover="mouseOverMove" @mouseout="mouseOutRemove">
        <ul>
            <li>
                <a href="" :class="newsBodyContents">
                    <span class="news_update">{{ data.date }}</span>
                    <span class="news_index">{{ data.index }}</span>
                    <span class="news_content">{{ data.content }}</span>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ["data"],

    data() {
        return {
            newsBodyContents: {
            news_body_contents: true,
            over_move: false
            },
        }
    },
    methods: {
        mouseOverMove() {
            this.newsBodyContents.over_move = true;
            //eslint-disable-next-line no-console
            // console.log(this.newsBodyContents.over_move);
            return
            },
        mouseOutRemove() {
            this.newsBodyContents.over_move = false;
            //eslint-disable-next-line no-console
            // console.log(this.newsBodyContents.over_move);
            return
        }
    }
}
</script>


<style scoped>
.news_body{
    letter-spacing: 2px;
    position: relative;
    overflow: hidden;
    transition: .3s;
}
.news_body:hover{
    background: #333;
    transition: .3s;

}
.news_body_contents{
    color:#333;
    display: block;
}
.over_move{
    color: #f6f5f4;
    margin-left: 20px;
}

.news_body > ul {
    margin: 0;
    padding: 0;
}

.news_body > ul > li {
    border-top: 1px dashed #333;
    font-size: 12px;
    height: 40px;
    line-height: 40px;
}
.news_body > ul > li > a {
    text-decoration:none;
    transition: .3s;
}

.news_update{
    margin-right: 30px;
}

.news_index{
    margin-right: 70px;
}

</style>