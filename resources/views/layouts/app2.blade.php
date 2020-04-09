<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{ asset('/css/css/all.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    @yield('content')
    @show

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script>
        new Vue({
            el: '#form',
            data: {
                emailSent: false,
                name: "",
                email: "",
                contact: "",
                errors: {}
            },
            methods: {
                showForms() {
                    if (this.showText === "お問い合わせ") {
                        this.showText = "閉じる";
                    } else {
                        this.showText = "お問い合わせ";
                    }
                    return (this.show = !this.show);
                },
                onSubmit() {
                    if (!confirm("上記内容で送信します。よろしいですか？")) {
                        return;
                    }
                    //errorsの初期化
                    this.errors = {};
                    const self = this;

                    const params = {
                        name: this.name,
                        email: this.email,
                        contact: this.contact
                    };

                    axios
                        .post("/contact", params)
                        .then(function(response) {
                            // 成功した時
                            self.emailSent = true;
                        })
                        .catch(function(error) {
                            let errors = {};

                            // 失敗したとき
                            for (const key in error.response.data.errors) {
                                errors[key] = error.response.data.errors[key].join("<br>");
                            }

                            self.errors = errors;
                        });
                }
            }
        });
    </script>


</body>

</html>