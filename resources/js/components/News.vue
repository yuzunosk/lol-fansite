<template>
    <div class="c-news_list" @mouseover="mouseOverMove" @mouseout="mouseOutRemove">
            <li>
                <a href="" :class="newsBodyContents">
                    <span class="c-news_list--data news_update">{{ data.date }}</span>
                    <span class="c-news_list--index news_index">{{ data.index }}</span>
                    <span class="c-news_list--body news_content">{{ data.content }}</span>
                </a>
            </li>
    </div>
</template>

<script>
export default {
    props: ["data"],

    data() {
        return {
            newsBodyContents: {
            c_news_items: true,
            c_news_items__move: false
            },
        }
    },
    methods: {
        mouseOverMove() {
            this.newsBodyContents.c_news_items__move = true;
            //eslint-disable-next-line no-console
            // console.log(this.newsBodyContents.c_news_items__move);
            return
            },
        mouseOutRemove() {
            this.newsBodyContents.c_news_items__move = false;
            //eslint-disable-next-line no-console
            // console.log(this.newsBodyContents.c_news_items__move);
            return
        }
    }
}
</script>


<style scoped>

/* .c_news_items > ul {
    margin: 0;
    padding: 0;
}

.c_news_items > ul > li {
    border-top: 1px dashed #333;
    font-size: 12px;
    height: 40px;
    line-height: 40px; */


</style>