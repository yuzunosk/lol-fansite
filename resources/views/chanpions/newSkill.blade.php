@extends('layouts.app')

@section('content')
<div class="col-12 col-md-9 col-lg-10">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card">
                <div class="card-header text-center">{{ __('Skill Register') }}</div>

                <div class="card-body">
                    <form method="POST" enctype='multipart/form-data' action="{{ route('skills.create') }}">
                        @csrf

                        <!-- 名前・英名 -->
                        <div class="container mt-4">
                            <div class="form-group row">
                                <label for="name" class=" col-8 col-lg-2 col-form-label">
                                    {{ __('name') }}
                                    <span class="badge badge-danger py-1 ml-1">必須</span>
                                </label>

                                <div class="col-12 col-lg-4 mb-3">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="na_name" class="col-8 col-lg-2 col-form-label">
                                    {{ __('na_name') }}
                                    <span class="badge badge-danger py-1 ml-1">必須</span>
                                </label>

                                <div class="col-12 col-lg-4 mb-3">
                                    <input id="na_name" type="text" class="form-control @error('na_name') is-invalid @enderror" name="na_name" value="{{ old('na_name') }}" autocomplete="na_name" autofocus>

                                    @error('na_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- 名前・英名 END -->

                        <!-- スキルタイプ -->
                        <div class="container mb-4">
                            <div class="form-group row">
                                <label for="skill_type" class="col-8 col-lg-8 col-form-label">
                                    {{ __('skill_type') }}
                                    <span class="badge badge-danger py-1 ml-2">必須</span>
                                </label>

                                <div class="col-12 col-lg-4">
                                    <select id="skill_type" class="form-control @error('skill_type') is-invalid @enderror" name="skill_type" value="{{ old('skill_type') }}">
                                        <option value="Passive" @if (old('skill_type', $typeData)=='Passive' ) selected @endif>Passive</option>
                                        <option value="Qスキル" @if (old('skill_type', $typeData)=='Qスキル' ) selected @endif>Qスキル</option>
                                        <option value="Wスキル" @if (old('skill_type', $typeData)=='Wスキル' ) selected @endif>Wスキル</option>
                                        <option value="Eスキル" @if (old('skill_type', $typeData)=='Eスキル' ) selected @endif>Eスキル</option>
                                        <option value="Ultimate" @if (old('skill_type', $typeData)=='Ultimate' ) selected @endif>Ultimate</option>
                                    </select>

                                    @error('skill_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- スキルタイプ END -->

                        <!-- 使用者 -->
                        <div class="container mb-4">
                            <div class="form-group row">
                                <label for="chanpion_id" class="col-12 col-lg-8 col-form-label">
                                    {{ __('use_chanpion') }}
                                    <span class="badge badge-danger py-1 ml-2">必須</span>
                                </label>

                                <div class="col-12 col-lg-4 mb-3">
                                    <select id="chanpion_id" class="form-control @error('chanpion_id') is-invalid @enderror" name="chanpion_id" value="{{ old('chanpion_id') }}">
                                        @foreach($chanpionDatas as $chanpionData)
                                        <option value="{{ $chanpionData->id}}" @if(old('chanpion_id')==$chanpionData->id) selected @endif>
                                            {{ $chanpionData->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('chanpion_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- 使用者 END -->

                        <!-- スキルテキスト -->
                        <div class="container">
                            <div class="form-group row">
                                <label for="text" class="col-md-3 col-form-label">{{ __('text') }}</label>

                                <div class="col-md-9 mb-3">
                                    <textarea id="text" class="form-control col-12 
                                    @error('text') is-invalid @enderror" name="text" value="{{ old('text') }}" cols="100" rows="5" autofocus placeholder="スキルのテキストを入力して下さい">
                                    </textarea>

                                    @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- スキルテキスト END -->

                        <!-- スキル　アイコン -->

                        <skill-preview></skill-preview>

                        <!-- 未実装 -->

                        <!-- スキル　アイコン END -->
                        <div class="container text-center mt-4">
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