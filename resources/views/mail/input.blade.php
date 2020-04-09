@extends('layouts.app2')

@section('content')

@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif


<section id="app2">
    <form action="{{action('ContactController@send')}}" method="post">
        @csrf

        <div class="c-form__container">
            <h2 class="c-form__container--title">お問い合わせ</h2>
            <!-- errorメッセージ -->
            <div class="c-form__error-text"></div>
            <div class="c-form__unit">
                <lavel class="c-form__unit--head" for="name">名前</lavel>
                <input class="c-form__unit--body" id="name" name="name" type="text" v-model="name" style="color:#fff" v-model="name" value="{{ old('name') }}" />
            </div>

            <!-- errorメッセージ -->
            <div class="c-form__error-text"></div>
            <div class="c-form__unit">
                <lavel class="c-form__unit--head" for="email">メールアドレス</lavel>
                <input class="c-form__unit--body" id="email" name="email" type="text" v-model="email" style="color:#fff" v-model="email"  value="{{ old('email') }}"/>
            </div>

            <!-- errorメッセージ -->
            <div class="c-form__error-text"></div>
            <div class="c-form__unit">
                <lavel class="c-form__unit--head" for="content">お問い合わせ内容</lavel>
                <textarea class="c-form__unit--txtAria" name="content" id="content" cols="30" rows="6" v-model="contact" style="color:#fff" placeholder="お問い合わせの内容をご入力ください。" v-model="contact"  value="{{ old('contact') }}"></textarea>
            </div>
            <input type="submit" value="Confirm">
        </div>
    </form>
</section>
@endsection