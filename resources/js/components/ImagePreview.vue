<template>
  <div class="imgContent">
    <h5>画像ファイルをアップロード</h5>
    <div class="imagePreview">
      <img :src="uploadedImage" class="imgFile" />
      <input
        type="file"
        class="file_input"
        name="chanpion_img"
        @change="onFileChange"
        accept="image/*"
      />
    </div>
  </div>
</template>

<script>
export default {
  props: ["value"],
  data() {
    return {
      uploadedImage: "",
      storage: "https://lol-fansite.com/top/",
      noImage: "https://lol-fansite.com/top/img/img_no.png",
      show: false
    };
  },
  computed: {
    judgmentData() {
      // alert('読み込みました');
      let $value = this.value;
      //  alert('中身は、' + $value);
      if ($value) {
        //  alert('処理を実行します');
        this.uploadedImage = this.storage + $value;
        //  alert(this.uploadedImage);
        return;
      }
      return (this.uploadedImage = this.noImage);
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
      if (file.type.indexOf("image") < 0) {
        return false;
      }
      reader.onload = e => {
        this.uploadedImage = e.target.result;
        console.log(this.uploadedImage);
      };
      reader.readAsDataURL(file);
    }
  },
  beforeMount() {
    this.judgmentData();
  }
};
</script>


<style scoped>
.imgContent {
  width: 90%;
  max-width: 700px;
  margin: auto;
  margin-bottom: 40px;
}
.imagePreview {
  height: 30vh;
  background: rgb(240, 240, 240);
  overflow: hidden;
  border-radius: 10px;
  background-position: center center;
  background-size: cover;
  margin-bottom: 30px;
  position: relative;
}
.imgFile {
  width: 100%;
  height: 300px;
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

.file_input:hover {
  border: 2px dotted #333;
  transition: border 0.5s;
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
  color: rgb(134, 134, 134);
  padding: 20px;
}
</style>