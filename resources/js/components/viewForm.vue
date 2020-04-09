<template>
  <section id="form">
    <div class="p-form__btnContainer">
      <router-link :to="routerLink">
        <button class="p-form__btmContainer--btn">
          <span>{{ showText }}</span>
        </button>
      </router-link>
    </div>

    <transition name="fade">
      <div v-if="show">
        <form v-if="!emailSent">
          <div class="c-form__container">
            <h2 class="c-form__container--title">お問い合わせ</h2>
            <!-- errorメッセージ -->
            <div class="c-form__error-text" v-html="errors.name"></div>
            <div class="c-form__unit">
              <lavel class="c-form__unit--head" for="name">名前</lavel>
              <input
                class="c-form__unit--body"
                id="name"
                name="name"
                type="text"
                v-model="name"
                style="color:#fff"
              />
            </div>

            <!-- errorメッセージ -->
            <div class="c-form__error-text" v-html="errors.email"></div>
            <div class="c-form__unit">
              <lavel class="c-form__unit--head" for="email">メールアドレス</lavel>
              <input
                class="c-form__unit--body"
                id="email"
                name="email"
                type="text"
                v-model="email"
                style="color:#fff"
              />
            </div>

            <!-- errorメッセージ -->
            <div class="c-form__error-text" v-html="errors.contact"></div>
            <div class="c-form__unit">
              <lavel class="c-form__unit--head" for="content">お問い合わせ内容</lavel>
              <textarea
                class="c-form__unit--txtAria"
                name="content"
                id="content"
                cols="30"
                rows="6"
                v-model="contact"
                style="color:#fff"
              ></textarea>
            </div>
            <button class="c-form__container--btn" type="button" @click="onSubmit()">送信する</button>
          </div>
        </form>
        <!-- 送信成功時に表示する -->
        <div v-if="emailSent">メッセージが送信されました。ありがとうございました。</div>
      </div>
    </transition>
  </section>
</template>

<script>
export default {
  data() {
    return {
      showText: "お問い合わせ",
      show: false,
      emailSent: false,
      name: "",
      email: "",
      contact: "",
      errors: {}
    };
  },
  computed: {
    routerLink() {
      return "/contact";
    }
  }
};
</script>