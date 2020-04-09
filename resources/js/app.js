/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from "vue";
import "./bootstrap";
import Router from "./router";
import Paginate from "vuejs-paginate";

require("./bootstrap");

window.Vue = require("vue");
Vue.component("paginate", Paginate);

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

const app = new Vue({
    el: "#app1",
    router: Router
});

const test = new Vue({
    el: "#test",
    data: {
        emailSent: false,
        name: "",
        email: "",
        contact: "",
        errors: {}
    },
    methods: {
        onSubmit() {
            if (!confirm("上記内容で送信します。よろしいですか？")) {
                return;
            }
            //errorsの初期化
            this.errors = {};
            const self = this;
            axios.defaults.headers.common = {
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            };

            const params = {
                name: this.name,
                email: this.email,
                contact: this.contact
            };

            axios
                .get("/send", params)
                .then(function(response) {
                    console.log("送信しました");
                    // 成功した時
                    self.emailSent = true;
                })
                .catch(function(error) {
                    let errors = {};
                    console.log("失敗しました");

                    // 失敗したとき
                    for (const key in error.response.data.errors) {
                        errors[key] = error.response.data.errors[key].join(
                            "<br>"
                        );
                    }

                    self.errors = errors;
                });
        }
    }
});
