<template>
    <div class="status_wrapper">
                <!-- <p class="main_text">{{ data.feature }}</p> -->
        <h3>プレイ感</h3>
        <div class="status_container">
            <div class="status_keybox">
                <ul>
                    <li v-for="(status , index) in data.statusDatas" :key="index">
                        <p>{{ status.name }}</p><span :style="status.color" @click="cleateStatusBox" :value="status.value">{{ status.value }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["data"],
    data() {
        return {
        }
    },
    methods: {
    },
}
</script>

<style scoped>
.status_wrapper{
    margin: 18px 0;
}
.status_wrapper p{
    margin: 0;
}
.status_container{
    display: flex;
    justify-content: space-between;
}
.status_wrapper h3{
    font-size: 24px;
    padding: 8px 30px;
    background: #333;
    border-radius: 5%;
    text-align: center;
    color: #f6f5f4;
    margin-bottom: 20px;
}
.status_wrapper p{
    font-size: 14px;
    margin: 5px 0;
}


</style>