<template>
    

    <p>{{ data[0].name }}</p>
    <p>{{ data[1].name }}</p>
    <p>{{ data[2].name }}</p>
    <p>{{ data[3].name }}</p>

                <!-- <div class="dropdown"> -->
                    <!-- <button class="btn border-0 dropdown-toggle pl-1 mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('Chanpion Sort') }}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button type="botton" class="dropdown-item">新しく登録された順</button>
                            <button type="botton" class="dropdown-item">古い順</button>
                            <button type="botton" class="dropdown-item">攻撃力が高い順</button>
                            <button type="botton" class="dropdown-item">魔力が高い順</button>
                            <button type="botton" class="dropdown-item">耐久力が高い順</button>
                            <button type="botton" class="dropdown-item">機動力が高い順</button>
                            <button type="botton" class="dropdown-item">難易度の高い順</button>
                            <button type="botton" class="dropdown-item">難易度の易しい順</button>
                        </div>
                </div>

                <div class="dropdown">
                    <button class="btn border-0 dropdown-toggle pl-1 mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('Search Roll') }}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->
                            <!-- <a href="" class="dropdown-item">{{ $rollData->name }}</a> -->
                        <!-- </div>
                </div>

                <div class="dropdown">
                    <button class="btn border-0 dropdown-toggle pl-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{  __('Search Tag') }}
                    </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->
                          <!-- <a class="dropdown-item" href="#">{{ $tagData->sub_name }} / {{ $tagData->name }}</a> -->
                         <!-- </div> -->
                <!-- </div> -->
</template>

<script>


export default {
  props: ["data"],
   data() {
      return{
        uploadedImage_1: '',
        uploadedImage_2: '',
        storage: '/storage/',
        noImage: '/storage/img/etc/img_no.png',
        show: false,
      }
   },
   computed: {

   },
   methods: {

    }

}
</script>


<!-- <style scoped>

    
</style> -->