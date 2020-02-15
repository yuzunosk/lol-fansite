<template>
    <div class="imgContent">
        <h5>画像ファイルをアップロード</h5>
          <div class="imagePreview">
          <img :src="uploadedImage" class="imgFile">
             <input type="file" class="file_input" name="photo" @change="onFileChange"  accept="image/*" />
          </div>
        </div>
</template>

<script>
export default {
   data() {
      return{
        uploadedImage: "",
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
      if(file.type.indexOf('image') < 0) {
        return false;
      }
      reader.onload = (e) => {
        this.uploadedImage = e.target.result;
        console.log(this.uploadedImage);
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
    overflow: hidden;
    border-radius: 10px;
    background-position: center center;
    background-size: cover;
     margin-bottom:30px;
     position: relative;
 }
 .imgFile{
   width:100%;
   height: 400px;
   object-fit: contain;
 }
 .file_input {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: inline-block;
    opacity: 0;
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