@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('ChanpionRegister') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('chanpions.create') }}">
                        @csrf

                    <div class="container mb-1 p-0">
                        <div class="form-group row">

                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="sub_name" class="col-md-4 col-form-label text-md-right">{{ __('sub_name') }}</label>

                                <div class="col-md-6">
                                    <input id="sub_name" type="text" class="form-control @error('sub_name') is-invalid @enderror" name="sub_name" value="{{ old('sub_name') }}" autocomplete="sub_name" autofocus>

                                    @error('sub_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                        </div>
                    </div>
                    <div class="container mb-1 p-0">
                    <div class="form-group row">
                                <label for="popular_name" class="col-md-4 col-form-label text-md-right">{{ __('popular_name') }}</label>

                                <div class="col-md-6">
                                    <input id="popular_name" type="text" class="form-control @error('popular_name') is-invalid @enderror" name="popular_name" value="{{ old('popular_name') }}" autocomplete="popular_name" autofocus>

                                    @error('popular_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                    </div>

                    <div class="container mb-1 p-0">
                        @include('form.inputText', ['text' => 'feature'])
                    </div>

                <!-- roll 選択 -->
            <div class="container mb-1 p-0">
                <div class = " form-group row">
                        <label for = "select-main_roll" class="col-md-8 col-7 col-form-label" style="margin-bottom: 10px;">
                        {{ __("main_roll") }}
                        </label>
                        <div class="col-md-4 col-5">
                        <select name="main_roll_id" id = "select-main_roll" class = "form-control text-center">
                            <option value="1">Assasin</option>
                            <option value="2">Mage</option>
                            <option value="3">Fighter</option>
                            <option value="4">Support</option>
                            <option value="5">Marksman</option>
                        </select>
                        </div>

                        <label for = "select-sub_roll" class="col-md-8 col-7 col-form-label">
                        {{ __("sub_roll") }}
                        </label>
                        <div class="col-md-4 col-5">
                        <select name="sub_roll_id" id = "select-sub_roll" class = "form-control text-center">
                            <option value="1">Assasin</option>
                            <option value="2">Mage</option>
                            <option value="3">Fighter</option>
                            <option value="4">Support</option>
                            <option value="5">Marksman</option>
                        </select>
                        </div>
                </div>
            </div>
<!-- roll 選択 END -->

<!-- チャンピオン コスト -->
                <div class="container mb-1 p-0">
                    <div class = "row form-group ">
                        <label for = "select-be_cost"
                        class="col-md-8 col-8 col-form-label"
                        style="margin-bottom: 10px;">
                        {{ __("BE") }}
                        </label>
                        <div class="col-md-4 col-4">
                            <select name="be_cost" id = "select-be_cost" class = "form-control text-center">
                                <!-- <option>7800</option> -->
                                <option>6300</option>
                                <option>4800</option>
                                <option>3150</option>
                                <option>1350</option>
                                <option>450</option>
                            </select>
                        </div>
                        <label for = "select-rp_cost"
                            class="col-md-8 col-8 col-form-label">
                        {{ __("RP") }}
                        </label>
                            <div class="col-md-4 col-4">
                                <select name="rp_cost" id ="select-rp_cost" class = "form-control text-center">
                                    <option>975</option>
                                    <option>880</option>
                                    <option>790</option>
                                    <option>585</option>
                                    <option>260</option>
                                </select>
                            </div>
                    </div>
                </div>
<!-- チャンピオン コスト END-->

<!-- チャンピオン img -->
            <div class="container">
                <div class="row">
                    <div class="form-group col">
                        <label for="file1">
                        {{ __("chanpion_img") }}
                        </label>
                        <div class="chanpion_img_container" style="position:relative;background: #dcdcdc;border: 1px solid #333;border-radius: 5px;">
                        <span
                        style="padding:8px;position: absolute;">
                        drag&drop
                        </span>
                            <input name="chanpion_img"
                            type = "file"
                            id="file1"
                            class="form-control-file"
                            style="height:200px;opacity:0;"
                            value="img">
                        </div>
                    </div>
                </div>
            </div>
<!-- チャンピオン　簡易ステータス -->
            <div class="container mb-1 p-0" style="margin-bottom: 10px;">
                <h4>
                {{ __("Status input") }}
                </h4>
                <p class="text-danger text-small">※最大 10 ~ 最低 1</p>
                <div class="row">
                @include('form.inputNumber', ['text' => 'st_attack'])
                </div>                
                <div class="row">
                @include('form.inputNumber', ['text' => 'st_magic'])
                </div>
                <div class="row">
                @include('form.inputNumber', ['text' => 'st_toughness'])
                </div>
                <div class="row">
                @include('form.inputNumber', ['text' => 'st_mobility'])
                </div>
                <div class="row">
                @include('form.inputNumber', ['text' => 'st_difficulty'])
                </div>
            </div>
<!-- ステータス end -->

<!-- 登録者 -->
                <div class="container mb-1 p-0">
                    <div class="form-group row justify-content-start">
                        <label for="select-user_id" class="col-md-8 col-6 col-form-label">
                        {{ __("user_id") }}
                        </label>
                        <div class="col-md-4 col-6">
                        <select id = "select-user_id" class=" form-control ">
                            <option value="1">user_1</option>
                            <option value="2">user_2</option>
                            <option value="3">user_3</option>
                        </select>
                        </div>
                    </div>
                </div>

<!-- チャンピオンタグ -->
                <div class="container  mb-1 p-0">
                    <div class="form-group row" style="margin-bottom: 10px;">
                        <label for="select-chanpion_tag_id" class="col-md-8 col-5 col-form-label">
                        {{ __("chanpion_tag_id") }}
                        </label>
                        <div class="col-md-4 col-7">
                        <select id = "select-chanpion_tag_id" class=" form-control ">
                            <option value="1">chanpion_tag_id 1</option>
                            <option value="2">chanpion_tag_id 2</option>
                            <option value="3">chanpion_tag_id 3</option>
                        </select>
                        </div>
                    </div>
                </div>


                    <!-- ブートストラップ練習 -->


                    <!-- ブートストラップ練習 END-->
                    <div class="container text-center my-5">
                        <div class="form-group row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary px-5">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
