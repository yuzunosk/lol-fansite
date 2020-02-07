<template>
    <div>
        <p>{{ testProps }}：({{ halfNumber }})</p>
        <button @click="plusNumber">クリック</button>
    </div>
</template>

<script>
export default {
    // props: ["totalNumber", "testProps"],
    props: {
        totalNumber: {
            type: Number,
            default: 10
        }
    ,
    testProps: {
        type: String,
        default: '未入力'
    }
},
    computed: {
        halfNumber() {
            return this.totalNumber / 2
        }
    },
    methods: {
        plusNumber() {
            this.$emit("my-click", this.totalNumber + 1); //親へとデータを渡す送り口、$emitが必要(キーの名前,受けわたすデータ)
        }
    }
};
</script>


<style scoped>
div {
    border: 1px dotted black;
}

</style>