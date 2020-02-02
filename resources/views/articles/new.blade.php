@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Articles Register') }}</div>

                <div class="card-body">
                    <form method="POST" enctype='multipart/form-data' action="{{ route('articles.create') }}">
                        @csrf

<!-- タイトル -->
                    <div class="container mb-1 p-0">
                        <div class="form-group row">

                                <label for="title" class="col-md-4 col-4 col-form-label mb-1">
                                {{ __('title') }}
                                <span class="badge badge-danger py-1 ml-2">必須</span>
                                </label>

                                <div class="col-md-8 col-8">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                    </div>
<!-- タイトル  end-->

<!-- カテゴリー -->
                    <div class="container mb-1 p-0">
                        <div class="form-group row">
                                <label for = "select-category_id"
                                    class="col-md-8 col-7 col-form-label mb-1">
                                    {{ __("category_id") }}
                                </label>
                            <div class="col-md-4 col-5">
                                    <select name="category_id"
                                    id = "select-category_id"
                                    class = "form-control text-center @error('category_id') is-invalid @enderror"
                                    value="{{ old('category_id') }}"
                                    >
                                    <option value="999" selected>未設定</option>
                                      @foreach($categoryDatas as $categoryData)
                                            <option value="{{ $categoryData->name }}" @if(old('category_id') == $categoryData->name) selected @endif>
                                            {{ $categoryData->name }}</option>
                                      @endforeach
                                    </select>
                            @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            </div>
                        </div>
                    </div>
<!-- カテゴリー  end-->

<!-- user_id -->
<div class="container mb-1 p-0">
                        <div class="form-group row">
                                <label for = "select-user_id"
                                    class="col-md-8 col-7 col-form-label mb-1">
                                    {{ __("user_id") }}
                                </label>
                            <div class="col-md-4 col-5">
                                    <select name="user_id"
                                    id = "select-user_id"
                                    class = "form-control text-center @error('user_id') is-invalid @enderror"
                                    value="{{ old('user_id') }}"
                                    >
                                    <option value="999" selected>未設定</option>
                                    @foreach($userDatas as $userData)
                                            <option value="{{ $userData->name }}" @if(old('user_id') == $userData->name) selected @endif>
                                            {{ $userData->name }}</option>
                                    @endforeach
                                    </select>
                            @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                            </div>
                        </div>
                    </div>
<!-- user_id  end-->

<!-- text -->
            <div class="container p-0">
                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label">{{ __('text') }}</label>
                                <div class="col-md-8">
                                    <textarea 
                                    id="text" 
                                    class="form-control @error('text') is-invalid @enderror" name="text" 
                                    value="{{ old('text') }}" 
                                    cols="100"
                                    rows="5"
                                    autofocus
                                    placeholder="トップテキストを記入して下さい、必要ない場合は無記入にして下さい"
                                    >
                                    </textarea>

                                    @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
            </div>
<!-- text  END -->

<!-- 記事 img -->
            <div class="container p-0">
                <div class="row">
                    <div class="form-group col">
                        <label for="articles_img">
                        {{ __("img") }}
                        </label>
                        <div class="chanpion_img_container p-3" style="position:relative;background: #dcdcdc;border: 1px solid #333;border-radius: 5px;">
                        <span
                        style="position: absolute;">
                        drag&drop
                        </span>
                            <input name="img"
                            type = "file"
                            id="articles_img"
                            class="form-control-file @error('img') is-invalid @enderror"
                            style="height:200px;opacity:0;"
                            value="img">
                            @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                </div>
            </div>
<!-- 記事 img end-->



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
