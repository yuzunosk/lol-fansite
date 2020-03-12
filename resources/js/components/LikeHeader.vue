<template>
    <div class="logo_container">
        <!-- slotはhtmlのテンプレート全てを送れる -->
            <span><img class="logo" src="/storage/img/logo/lol_logo.png" alt=""></span>
    </div>
</template>

<script>
export default {
    data() {
        return {
            
            }
        }
    }
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=Maven+Pro:400,700&display=swap');
.logo_container{
    /* display: flex; */
}
h1{
    /* padding-left: 15px;
    margin: 0;
    font-size: 35px;
    display: inline-block;
    letter-spacing: .8px;
    color: #f4f3f2; */
}
.logo{
    width: 150px;
    height: 60px;
    margin-left: 100px;
    }
</style>