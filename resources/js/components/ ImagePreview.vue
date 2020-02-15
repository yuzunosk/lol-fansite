<template>
    <div class="imgContent">
          <div class="imagePreview">
          <img :src="uploadedImage" style="width:100%;" />
             <input type="file" class="file_input" name="photo" @change="onFileChange"  accept="image/*" />
          </div>
        </div>
</template>

<script>
export default {
   data() {
      return{

      }
   },
   methods: {
          onFileChange(e) {
      let files = e.target.files || e.dataTransfer.files;
      this.createImage(files[0]);
    },
    // アップロードした画像を表示
    createImage(file) {
      let reader = new FileReader();
      reader.onload = (e) => {
        this.uploadedImage = e.target.result;
      };
      reader.readAsDataURL(file);
    }
   }
}
</script>


<style scoped>
.imgContent {
   width: 90%;
    max-width: 700px;
    margin:auto;
     margin-bottom:40px;
} 
.imagePreview {
    height:30vh;
    background: rgb(240, 240, 240);
    overflow:hidden;
    border-radius: 10px;
    background-position: center center;
    background-size: cover;
     margin-bottom:30px;
     position: relative;
 }
 .fileUpload {
  text-align: center;
  position: absolute;
  height: 25px;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  color:rgb(134, 134, 134);
  padding: 20px;
}
</style>