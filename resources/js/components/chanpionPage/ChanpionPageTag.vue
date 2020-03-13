<template>
    <div class="l-main-container l-tagGroup p-tagGroup">
        <div class="p-tagGroup__icon">
            <h3><img src="/storage/img/logo/perm_data_setting-24px.svg" alt="" width="25px;">メカニクス</h3>
        </div>
        <ul>
            <li  class="p-tagGroup__list" v-for="(tagdata , index) in data" :key="index">
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_1 !== null">#{{ tagdata.chanpion_tag_id_1 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_2 !== null">#{{ tagdata.chanpion_tag_id_2 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_3 !== null">#{{ tagdata.chanpion_tag_id_3 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_4 !== null">#{{ tagdata.chanpion_tag_id_4 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_5 !== null">#{{ tagdata.chanpion_tag_id_5 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_6 !== null">#{{ tagdata.chanpion_tag_id_6 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_7 !== null">#{{ tagdata.chanpion_tag_id_7 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_8 !== null">#{{ tagdata.chanpion_tag_id_8 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_9 !== null">#{{ tagdata.chanpion_tag_id_9 }}</span>
                        <span class="p-tagGroup__list__item" v-if="tagdata.chanpion_tag_id_10 !== null">#{{ tagdata.chanpion_tag_id_10 }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ["data","tags"],
    data() {
        return {

        }
    }
}
</script>

<style scoped>


</style>