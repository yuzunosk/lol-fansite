<template>
    <div>
        <Loading v-show="loading"></Loading>
        <Home v-show="!loading"></Home>

    </div>
</template>


<script>
import Loading from '@/components/Loading'
import Home from './views/Home'

export default {
    name: "App",
    data(){
    return {
        loading:true,
        }
    },
    mounted() {
    setTimeout(() => {
        this.loading = false; 
        }, 1000);
    },
    components: {
        Loading,
        Home,
    }

}
</script>

<style scoped>

#is-loading
{
    display: block;
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #fff;
    z-index: 10;
}

#loading
{
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    width: 200px;
    height: 200px;
    margin-top: -100px;
    margin-left: -100px;
    text-align: center;
    color: #f6f5f4;
    z-index: 11;
}
</style>
