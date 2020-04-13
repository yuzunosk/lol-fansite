<template>
  <div class="container">
    <h5 class="col-12">スキル画像をアップロード</h5>
    <div class="skill_icon_container">
      <!-- スキルアイコン１ -->
      <div class="imgContent">
        <div class="imagePreview_1">
          <img :src="uploadedImage_1" class="imgFile" />
          <input
            type="file"
            class="file_input_1"
            name="skill_icon_1"
            @change="onFileChange_1"
            accept="image/*"
          />
        </div>
      </div>

        <!-- スキルアイコン2 -->
        <div class="imgContent">
          <div class="imagePreview_2">
            <img :src="uploadedImage_2" class="imgFile" />
            <input
              type="file"
              class="file_input_2"
              name="skill_icon_2"
              @change="onFileChange_2"
              accept="image/*"
            />
          </div>
        </div>
    </div>
  </div>
  </div>
</template>

<script>
export default {
  props: ["value"],
  data() {
    return {
      uploadedImage_1: "",
      uploadedImage_2: "",
      storage: "https://lol-fansite.com/",
      noImage: "https://lol-fansite.com/top/img/img_no.png",
      show: false
    };
  },
  methods: {
    judgmentData_1() {
      // alert('読み込みました');
      if (this.value) {
        let $value = this.value.skill_icon_1;
        //disable eslint-next-line no-console
        console.log({ $value });
        //  alert('中身は、' + $value);
        if ($value.skill_icon_1.length !== undefined) {
          //  alert('処理を実行します');
          this.uploadedImage_1 = this.storage + $value;
          //  alert(this.uploadedImage_1);
          return;
        } else {
          return (this.uploadedImage_1 = null);
        }
      }
      return;
    },
    judgmentData_2() {
      // alert('読み込みました');
      if (this.value) {
        let $value = this.value.skill_icon_2;
        //disable eslint-next-line no-console
        console.log({ $value });
        //  alert('中身は、' + $value);
        if ($value.skill_icon_2.length !== undefined) {
          //  alert('処理を実行します');
          this.uploadedImage_2 = this.storage + $value;
          //  alert(this.uploadedImage);
          return;
        } else {
          return (this.uploadedImage_2 = null);
        }
      }
      return;
    },
    onFileChange_1(e) {
      let files = e.target.files || e.dataTransfer.files;
      this.createImage_1(files[0]);
    },
    onFileChange_2(e) {
      let files = e.target.files || e.dataTransfer.files;
      this.createImage_2(files[0]);
    },
    // アップロードした画像を表示
    createImage_1(file) {
      let reader = new FileReader();
      if (file.type.indexOf("image") < 0) {
        return false;
      }
      reader.onload = e => {
        this.uploadedImage_1 = e.target.result;
        console.log(this.uploadedImage_1);
      };
      reader.readAsDataURL(file);
    },
    createImage_2(file) {
      let reader = new FileReader();
      if (file.type.indexOf("image") < 0) {
        return false;
      }
      reader.onload = e => {
        this.uploadedImage_2 = e.target.result;
        console.log(this.uploadedImage_2);
      };
      reader.readAsDataURL(file);
    }
  },
  beforeMount() {
    this.judgmentData_1();
    this.judgmentData_2();
  }
};
</script>


<style scoped>
.skill_icon_container {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  position: relative;

@media screen and (min-width:480px) { 
    /*　画面サイズが480pxからはここを読み込む　*/
    flex-direction: column;
}
}

.imgContent {
  width: 40%;
  height: 300px;
  overflow: hidden;
}
.imagePreview_1 {
  width: 100%;
  height: 100%;
  background: rgb(240, 240, 240);
  border-radius: 10px;
  background-position: center center;
  background-size: cover;
  margin-bottom: 30px;
}
.imagePreview_2 {
  width: 100%;
  height: 100%;
  background: rgb(240, 240, 240);
  overflow: hidden;
  background-position: center center;
  background-size: cover;
  margin-bottom: 30px;
}
.imgFile {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.file_input_1 {
  position: absolute;
  top: 0;
  left: 3%;
  width: 45%;
  height: 100%;
  display: inline-block;
  opacity: 0;
}

.file_input_2 {
  position: absolute;
  top: 0;
  right: 3%;
  width: 45%;
  height: 100%;
  display: inline-block;
  opacity: 0;
}

.file_input_1:hover {
  border: 2px dotted #333;
  transition: border 0.5s;
}
.file_input_2:hover {
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