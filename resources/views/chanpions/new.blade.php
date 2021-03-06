@extends('layouts.app')

@section('content')
<div class="col-sm-12 col-md-9 col-lg-10" style="letter-spacing: .05rem;">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('ChanpionRegister') }}</div>

                <div class="card-body">
                    <form method="POST" enctype='multipart/form-data' action="{{ route('chanpions.create') }}">
                        @csrf

                        <div class="container mb-1 p-0">
                            <div class="form-group row">

                                <label for="name" class="col-4 col-lg-2  col-form-label mb-3">
                                    {{ __('name') }}
                                    <span class="badge badge-danger py-1 ml-1">必須</span>
                                </label>

                                <div class="col-8 col-lg-4 mb-3">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="sub_name" class="col-4 col-lg-2 col-form-label mb-1">
                                    {{ __('sub_name') }}
                                    <span class="badge badge-danger py-1 ml-1">必須</span>
                                </label>

                                <div class="col-8 col-lg-4 ">
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
                                    <input id="feature" type="text" class="form-control @error('feature') is-invalid @enderror" name="feature" value="{{ old('feature') }}" autocomplete="feature" autofocus>

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
                            <div class=" form-group row">
                                <label for="select-main_roll" class="col-md-8 col-7 col-form-label mb-1">
                                    {{ __("main_roll") }}
                                </label>
                                <div class="col-md-4 col-5">
                                    <select name="main_roll_id" id="select-main_roll" class="form-control text-center @error('main_roll_id') is-invalid @enderror">
                                        @foreach($rollCategorys as $rollCategory)
                                        <option value="{{ $rollCategory->name }}" @if(old("main_roll_id")==$rollCategory->name) selected @endif>
                                            {{ $rollCategory->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('main_roll_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="select-sub_roll" class="col-md-8 col-7 col-form-label">
                                    {{ __("sub_roll") }}
                                </label>
                                <div class="col-md-4 col-5">
                                    <select name="sub_roll_id" id="select-sub_roll" class="form-control text-center @error('sub_roll_id') is-invalid @enderror">
                                        <option value="なし" selected>なし</option>
                                        @foreach($rollCategorys as $rollCategory)
                                        <option value="{{ $rollCategory->name }}" @if(old("sub_roll_id")==$rollCategory->name) selected @endif>
                                            {{ $rollCategory->name }}
                                        </option>
                                        @endforeach
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
                            <div class="row form-group ">
                                <label for="select-be_cost" class="col-md-8 col-8 col-form-label mb-1">
                                    {{ __("BE") }}
                                </label>
                                <div class="col-md-4 col-4">
                                    <select name="be_cost" id="select-be_cost" class="form-control text-center @error('be_cost') is-invalid @enderror" value="{{ old('be_cost') }}">
                                        <!-- <option>7800</option> -->
                                        <option value=6300 @if(old("be_cost")==6300) selected @endif>6300</option>
                                        <option value=4800 @if(old("be_cost")==4800) selected @endif>4800</option>
                                        <option value=3150 @if(old("be_cost")==3150) selected @endif>3150</option>
                                        <option value=1350 @if(old("be_cost")==1350) selected @endif>1350</option>
                                        <option value=450 @if(old("be_cost")==450) selected @endif>450</option>
                                    </select>
                                    @error('be_cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="select-rp_cost" class="col-md-8 col-8 col-form-label">
                                    {{ __("RP") }}
                                </label>
                                <div class="col-md-4 col-4">
                                    <select name="rp_cost" id="select-rp_cost" class="form-control text-center @error('rp_cost') is-invalid @enderror" value="{{ old('rp_cost') }}">
                                        <option value=975 @if(old("rp_cost")==975) selected @endif>975</option>
                                        <option value=880 @if(old("rp_cost")==880) selected @endif>880</option>
                                        <option value=790 @if(old("rp_cost")==790) selected @endif>790</option>
                                        <option value=585 @if(old("rp_cost")==585) selected @endif>585</option>
                                        <option value=260 @if(old("rp_cost")==260) selected @endif>260</option>
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

                        <preview-component></preview-component>

                        <!-- チャンピオン　簡易ステータス -->
                        <div class="container mb-2 p-0">
                            <h4>
                                {{ __("Status input") }}
                                <span class="badge badge-danger py-1 ml-2">必須</span>
                            </h4>
                            <p class="text-danger text-small">※最大 10 ~ 最低 1</p>

                            <div class="row">
                                <label for="st_attack" class="col-md-10 col-8 col-form-label mb-1">
                                    {{ __('st_attack') }}
                                </label>
                                <div class="col-md-2 col-4">
                                    <input id="st_attack" type="number" class="form-control text-center border-0 bg-secondary text-light @error('st_attack') is-invalid @enderror" name="st_attack" value="{{ old('st_attack') }}" required max=10 min=1 autocomplete="st_attack" autofocus>

                                    @error('st_attack')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label for="st_magic" class="col-md-10 col-8 col-form-label mb-1">
                                    {{ __('st_magic') }}
                                </label>
                                <div class="col-md-2 col-4">
                                    <input id="st_magic" type="number" class="form-control text-center border-0 bg-secondary text-light @error('st_magic') is-invalid @enderror" name="st_magic" value="{{ old('st_magic') }}" required max=10 min=1 autocomplete="st_magic" autofocus>

                                    @error('st_magic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label for="st_toughness" class="col-md-10 col-8 col-form-label mb-1">
                                    {{ __('st_toughness') }}
                                </label>
                                <div class="col-md-2 col-4">
                                    <input id="st_toughness" type="number" class="form-control text-center border-0 bg-secondary text-light @error('st_toughness') is-invalid @enderror" name="st_toughness" value="{{ old('st_toughness') }}" required max=10 min=1 autocomplete="st_toughness" autofocus>

                                    @error('st_toughness')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label for="st_mobility" class="col-md-10 col-8 col-form-label mb-1">
                                    {{ __('st_mobility') }}
                                </label>
                                <div class="col-md-2 col-4">
                                    <input id="st_mobility" type="number" class="form-control text-center border-0 bg-secondary text-light @error('st_mobility') is-invalid @enderror" name="st_mobility" value="{{ old('st_mobility') }}" required max=10 min=1 autocomplete="st_mobility" autofocus>

                                    @error('st_mobility')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label for="st_difficulty" class="col-md-10 col-8 col-form-label mb-1">
                                    {{ __('st_difficulty') }}
                                </label>
                                <div class="col-md-2 col-4">
                                    <input id="st_difficulty" type="number" class="form-control text-center border-0 bg-secondary text-light @error('st_difficulty') is-invalid @enderror" name="st_difficulty" value="{{ old('st_difficulty') }}" required max=10 min=1 autocomplete="st_difficulty" autofocus>

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
                                    <select name="user_id" id="select-user_id" class="form-control @error('user_id') is-invalid @enderror" readonly>

                                        <option value="{{ Auth::user()->name }}">
                                            {{ Auth::user()->name }}
                                        </option>

                                    </select>
                                    @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <!-- submit -->
                        <div class="container text-center mt-4">
                            <div class="form-group row">
                                <div class="col">
                                    <button type="submit" class="btn btn-light border-info px-5">
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