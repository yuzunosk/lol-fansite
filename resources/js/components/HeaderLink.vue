<template>
    <div class="header-nuv" @mouseover="mouseOverShow" @mouseout="mouseOutHide">
        <ul class="list_warapper">
            <li class="list-item">
                <router-link
                    to="#"
                    :class="listItems"
                    active-class="done_link"
                    exact
                    >
                    {{ data.linkTitle }}
                    </router-link> 
                <transition name="nav_fade">
                    <div class="nav_itemBord" v-show="show">
                        <ul>
                            <li :class="listClass" v-for="(item,index) in data.linkItems" :key="index">
                                <a href="#" :label="item">{{ item }}</a>
                            </li>
                        </ul>
                    </div>
                </transition>

            </li>
        </ul>
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
                    list: true,
                },
                listClass: {
                    sublistItem: true,
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
.header-nuv{
    /* padding: 0 10px; */
    flex-basis: 25%;
}
.list_warapper {
    padding: 0;
    margin: 0;
    height: 100px;
}
li {
  list-style:none;
}
.list_warapper a {
  color:#333;
  text-decoration:none;
  transition: .5s;
}
.list_warapper a:hover {
    color: #b9ae6a;
    transition: .5s;
}
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
.sublistItem{
    font-size: 12px;
    box-sizing: border-box;
    -webkit-transition: .5s;
    transition: .5s;
    height: 30px;
    padding: 8px 20px;
    -ms-flex-preferred-size: 30%;
    flex-basis: 25%;
}
.nav_itemBord{
    background: #fff;
    width: 100%;
    height: 150px;
    box-sizing: border-box;
    margin: 0 auto;
    padding-left: 200px;
    position: absolute;
    top: 85px;
    left: 0;
    z-index: 5;
    }
.nav_itemBord > ul{
  display: flex;
  flex-wrap: wrap;
  height: 100px;
  max-width: 100%;
}

/* アニメーション */
.nav_fade-enter-active , .nav_fade-leave-active{
    transition: opacity .2s;
}

.nav_fade-enter , .nav_fade-leave-to{
    opacity: 0;
}
</style>