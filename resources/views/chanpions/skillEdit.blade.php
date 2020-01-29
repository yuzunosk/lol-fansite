@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Skill Editer') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('skills.update', $skillData->id) }}">
                            @csrf

<!-- 名前・英名 -->
                        <div class="container mt-4">
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-8 col-form-label mb-3">{{ __('name') }}</label>

                                <div class="col-md-3 col-4">
                                    <input 
                                    id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" name="name" 
                                    value="{{ old('name', $skillData->name) }}" 
                                    autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <label for="na_name" class="col-md-3 col-8 col-form-label">{{ __('na_name') }}</label>

                                <div class="col-md-3 col-4">
                                    <input 
                                    id="na_name" 
                                    type="text" 
                                    class="form-control @error('na_name') is-invalid @enderror" name="na_name" 
                                    value="{{ old('na_name', $skillData->na_name) }}" 
                                    autocomplete="na_name" autofocus>

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
                                <label for="skill_type" class="col-md-8 col-9 col-form-label">
                                {{ __('skill_type') }}
                                </label>

                                <div class="col-md-4 col-3">
                                    <select 
                                    id="skill_type" 
                                    class="form-control @error('skill_type') is-invalid @enderror" 
                                    name="skill_type" 
                                    value="{{ old('skill_type', $skillData->skill_type) }}"
                                    >
                                    <option value="0">passive</option>
                                    <option value="1">Qスキル</option>
                                    <option value="2">Wスキル</option>
                                    <option value="3">Eスキル</option>
                                    <option value="4">Ultimate</option>
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
                                <label for="chanpion_id" class="col-md-8 col-8 col-form-label">
                                {{ __('chanpion_id') }}
                                </label>

                                <div class="col-md-4 col-4">
                                    <select 
                                    id="chanpion_id" 
                                    class="form-control @error('chanpion_id') is-invalid @enderror" 
                                    name="chanpion_id" 
                                    value="{{ old('chanpion_id', $skillData->chanpion_id) }}"
                                    >
                                    <option value="0">chanpion_id 1</option>
                                    <option value="1">chanpion_id 2</option>
                                    <option value="2">chanpion_id 3</option>
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

                                <div class="col-md-9">
                                    <textarea 
                                    id="text" 
                                    class="form-control @error('text') is-invalid @enderror" name="text" 
                                    value="{{ old('text', $skillData->text) }}" 
                                    cols="100"
                                    rows="5"
                                    autofocus
                                    placeholder="スキルのテキストを入力して下さい"
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

<!-- スキルテキスト END -->

<!-- スキル　アイコン -->
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