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

                                <label for="name" class="col-md-2 col-4 col-form-label mb-1">{{ __('name') }}</label>

                                <div class="col-md-4 col-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="sub_name" class="col-md-2 col-4 col-form-label mb-1">{{ __('sub_name') }}</label>

                                <div class="col-md-4 col-8">
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
                                <label for="popular_name" class="col-md-4 col-form-label">
                                {{ __('popular_name') }}
                                </label>

                                <div class="col-md-8">
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
                    <div class="form-group row">
                                <label for="feature" class="col-md-4 col-form-label">
                                {{ __('feature') }}
                                </label>

                                <div class="col-md-8">
                                    <input id="feature" type="text" class="form-control @error('feature') is-invalid @enderror" name="feature" 
                                    value="{{ old('feature') }}" autocomplete="feature" autofocus>

                                    @error('feature')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                    </div>

                <!-- roll 選択 -->
            <div class="container mb-1 p-0">
                <div class = " form-group row">
                        <label for = "select-main_roll"
                        class="col-md-8 col-7 col-form-label mb-1"
                        >
                        {{ __("main_roll") }}
                        </label>
                        <div class="col-md-4 col-5">
                        <select name="main_roll_id"
                        id = "select-main_roll"
                        class = "form-control text-center @error('main_roll_id') is-invalid @enderror"
                        value="{{ old('main_roll_id') }}"
                        >
                            <option value="1">Assasin</option>
                            <option value="2">Mage</option>
                            <option value="3">Fighter</option>
                            <option value="4">Support</option>
                            <option value="5">Marksman</option>
                        </select>
                        @error('main_roll_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>

                        <label for = "select-sub_roll"
                        class="col-md-8 col-7 col-form-label"
                        >
                        {{ __("sub_roll") }}
                        </label>
                        <div class="col-md-4 col-5">
                        <select name="sub_roll_id"
                        id = "select-sub_roll"
                        class = "form-control text-center @error('sub_roll_id') is-invalid @enderror"
                        value="{{ old('sub_roll_id') }}"
                        >
                            <option value="0">なし</option>
                            <option value="1">Assasin</option>
                            <option value="2">Mage</option>
                            <option value="3">Fighter</option>
                            <option value="4">Support</option>
                            <option value="5">Marksman</option>
                        </select>
                        @error('sub_roll_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                </div>
            </div>
<!-- roll 選択 END -->

<!-- チャンピオン コスト -->
                <div class="container mb-1 p-0">
                    <div class = "row form-group ">
                        <label for = "select-be_cost"
                        class="col-md-8 col-8 col-form-label mb-1"
                        >
                        {{ __("BE") }}
                        </label>
                        <div class="col-md-4 col-4">
                            <select 
                            name="be_cost" 
                            id = "select-be_cost" 
                            class = "form-control text-center @error('be_cost') is-invalid @enderror"
                            value="{{ old('be_cost') }}"
                            >
                                <!-- <option>7800</option> -->
                                <option>6300</option>
                                <option>4800</option>
                                <option>3150</option>
                                <option>1350</option>
                                <option>450</option>
                            </select>
                            @error('be_cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                        <label for = "select-rp_cost"
                            class="col-md-8 col-8 col-form-label">
                        {{ __("RP") }}
                        </label>
                            <div class="col-md-4 col-4">
                                <select 
                                name="rp_cost" 
                                id ="select-rp_cost" 
                                class = "form-control text-center @error('rp_cost') is-invalid @enderror"
                                value="{{ old('rp_cost') }}"
                                >
                                    <option>975</option>
                                    <option>880</option>
                                    <option>790</option>
                                    <option>585</option>
                                    <option>260</option>
                                </select>
                                @error('rp_cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                            </div>
                    </div>
                </div>
<!-- チャンピオン コスト END-->

<!-- チャンピオン img -->
            <!-- <div class="container">
                <div class="row">
                    <div class="form-group col">
                        <label for="file1">
                        {{ __("chanpion_img") }}
                        </label>
                        <div class="chanpion_img_container p-3" style="position:relative;background: #dcdcdc;border: 1px solid #333;border-radius: 5px;">
                        <span
                        style="position: absolute;">
                        drag&drop
                        </span>
                            <input name="chanpion_img"
                            type = "file"
                            id="file1"
                            class="form-control-file @error('chanpion_img') is-invalid @enderror"
                            style="height:200px;opacity:0;"
                            value="img">
                            @error('chanpion_img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                </div>
            </div> -->
<!-- チャンピオン　簡易ステータス -->
            <div class="container mb-2 p-0">
                <h4>
                {{ __("Status input") }}
                </h4>
                <p class="text-danger text-small">※最大 10 ~ 最低 1</p>

                <div class="row">
                <label
                for="st_attack" 
                class="col-md-10 col-8 col-form-label mb-1">
                {{ __('st_attack') }}
                </label>
                    <div class="col-md-2 col-4">
                        <input id="st_attack" 
                        type="number" 
                        class="form-control text-center border-0 bg-secondary text-light @error('st_attack') is-invalid @enderror"
                        name="st_attack" 
                        value="{{ old('st_attack') }}"
                        required
                        max=10
                        min=1
                        autocomplete="st_attack" 
                        autofocus>

                        @error('st_attack')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                <label
                for="st_magic" 
                class="col-md-10 col-8 col-form-label mb-1">
                {{ __('st_magic') }}
                </label>
                    <div class="col-md-2 col-4">
                        <input id="st_magic" 
                        type="number" 
                        class="form-control text-center border-0 bg-secondary text-light @error('st_magic') is-invalid @enderror"
                        name="st_magic" 
                        value="{{ old('st_magic') }}"
                        required
                        max=10
                        min=1
                        autocomplete="st_magic" 
                        autofocus>

                        @error('st_magic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                <label
                for="st_toughness" 
                class="col-md-10 col-8 col-form-label mb-1">
                {{ __('st_toughness') }}
                </label>
                    <div class="col-md-2 col-4">
                        <input id="st_toughness" 
                        type="number" 
                        class="form-control text-center border-0 bg-secondary text-light @error('st_toughness') is-invalid @enderror"
                        name="st_toughness" 
                        value="{{ old('st_toughness') }}"
                        required
                        max=10
                        min=1
                        autocomplete="st_toughness" 
                        autofocus>

                        @error('st_toughness')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                <label
                for="st_mobility" 
                class="col-md-10 col-8 col-form-label mb-1">
                {{ __('st_mobility') }}
                </label>
                    <div class="col-md-2 col-4">
                        <input id="st_mobility" 
                        type="number" 
                        class="form-control text-center border-0 bg-secondary text-light @error('st_mobility') is-invalid @enderror"
                        name="st_mobility" 
                        value="{{ old('st_mobility') }}"
                        required
                        max=10
                        min=1
                        autocomplete="st_mobility" 
                        autofocus>

                        @error('st_mobility')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                <label
                for="st_difficulty" 
                class="col-md-10 col-8 col-form-label mb-1">
                {{ __('st_difficulty') }}
                </label>
                    <div class="col-md-2 col-4">
                        <input id="st_difficulty" 
                        type="number" 
                        class="form-control text-center border-0 bg-secondary text-light @error('st_difficulty') is-invalid @enderror"
                        name="st_difficulty" 
                        value="{{ old('st_difficulty') }}"
                        required
                        max=10
                        min=1
                        autocomplete="st_difficulty" 
                        autofocus>

                        @error('st_difficulty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
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
                        <select name="user_id"
                        id = "select-user_id" 
                        class="form-control @error('user_id') is-invalid @enderror">
                            <option value="1">user_1</option>
                            <option value="2">user_2</option>
                            <option value="3">user_3</option>
                        </select>
                        @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                </div>

<!-- チャンピオンタグ -->
                <!-- <div class="container  mb-1 p-0">
                    <div class="form-group row mb-1">
                        <label for="select-chanpion_tag_id" class="col-md-8 col-5 col-form-label">
                        {{ __("chanpion_tag_id") }}
                        </label>
                        <div class="col-md-4 col-7">
                        <select name="chanpion_tag_id"
                        id = "select-chanpion_tag_id" 
                        class="form-control @error('chanpion_tag_id') is-invalid @enderror">
                            <option value="1">chanpion_tag_id 1</option>
                            <option value="2">chanpion_tag_id 2</option>
                            <option value="3">chanpion_tag_id 3</option>
                        </select>
                        @error('chanpion_tag_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                </div> -->
<!-- チャンピオンタグ END-->

<!-- submit -->
                    <div class="container text-center mt-4">
                        <div class="form-group row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary px-5">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
<!-- submit END-->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
