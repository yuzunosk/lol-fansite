<template>
    <div class="p-nav-unit-container" @mouseover="mouseOverShow" @mouseout="mouseOutHide">
            <li  class="p-nav-unit-container__item">
                <router-link
                    to="#"
                    :class="listItems"
                    active-class="done_link"
                    exact>
                    {{ data.linkTitle }}
                    </router-link> 

                <transition name="nav_fade">
                    <div class="js-show-navList" v-show="show">
                            <li :class="bordItems" v-for="(item,index) in data.linkItems" :key="index">
                                <a href="#" :label="item">{{ item }}</a>
                            </li>
                    </div>
                </transition>

            </li>
        <!-- <p>{{ X }}、{{ Y }}</p> -->
    </div>
</template>

<script>
export default {
    props: ["data"],
    data() {
        return {
                show: false,
                num: "",
                X: 0,
                Y: 0,
                listItems: {
                    item: true,
                },
                bordItems: {
                    bordItem: true,
                },
        }
    },
    computed: {
        currentNum() {
            return this.id + 1;
        }
    },
    methods: {
        mouseOverShow() {
                this.show = true;
                //eslint-disable-next-line no-console
                // console.log(event);
                return
            },
        mouseOutHide() {
            this.show = false;
            return
            }
        },
        mousePoint(event) {
            this.X = event.clientX;
            this.Y = event.clientY;
            return
        }
    }
</script>

<style scope>
/* 不要コード整理する */

.list{
  z-index: 3;
  margin: 0;
  font-size: 12px;
  text-align: center;
}
.listItems{
    height: 100px;
}
.list-item a{
  display: block;
}
.done_link{
    color: green;
    transition: .5s;
}
.show{
    opacity: 1;
    transition: 2s;
}
.hide{
    opacity: 0;
    transition: 2s;
}

/* アニメーション */
.nav_fade-enter-active , .nav_fade-leave-active{
    transition: opacity .2s;
}

.nav_fade-enter , .nav_fade-leave-to{
    opacity: 0;
}
</style>