@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Skill Editer') }}</div>

                    <div class="card-body">
                        <form method="POST" enctype='multipart/form-data' action="{{ route('skills.update', $skillData[0]->chanpion_id) }}">
                            @csrf

<!-- 名前・英名 -->
                        <div class="container mt-4">
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-8 col-form-label mb-3">{{ __('name') }}</label>

                                <div class="col-md-3 col-4">
                                    <input 
                                    id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror
                                    name="name" 
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
                                    <option value="passive" @if(old('skill_type', $skillData->skill_type) == 'passive' ) selected @endif>passive</option>
                                    <option value="Qスキル" @if(old('skill_type', $skillData->skill_type) == 'Qスキル' ) selected @endif>Qスキル</option>
                                    <option value="Wスキル" @if(old('skill_type', $skillData->skill_type) == 'Wスキル' ) selected @endif>Wスキル</option>
                                    <option value="Eスキル" @if(old('skill_type', $skillData->skill_type) == 'Eスキル' ) selected @endif>Eスキル</option>
                                    <option value="Ultimate" @if(old('skill_type', $skillData->skill_type) == 'Ultimate' ) selected @endif>Ultimate</option>
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
                                    value="{{ old('chanpion_id', $chanpion->id) }}"
                                    >
                                    @foreach($chanpionDatas as $chanpionData)
                                        <option value="{{ old(chanpion_id,$chanp->name) }}" @if(old('chanpion_id') == $chanpionData->name) selected @endif>
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
                                            <!-- <div class="container">
                                            <div class="row justify-content-between">
                                                <div class="form-group col-12 col-md-4">
                                                    <label for="file">
                                                    {{ __("skill_icon_1") }}
                                                    </label>
                                                    <div class="skill_icon_1_container p-3" style="position:relative;background: #dcdcdc;border: 1px solid #333;border-radius: 5px; height:250px;overflow:hidden;">
                                                    <span
                                                    style="position: absolute;top:5%;left:5%;">
                                                    drag&drop
                                                    </span>
                                                    <img src="@if($skillData->skill_icon_1){{ asset('storage/'.$skillData->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif"
                                                        style="width:100%;height:100%;position:absolute;top:0;left:0;object-fit:cover; @if(empty($skillData->skill_icon_1)) display:none @endif">
                                                        <input name="skill_icon_1"
                                                        type = "file"
                                                        id="file"
                                                        class="form-control-file @error('skill_icon_1') is-invalid @enderror"
                                                        style="width:100%;height:100%;opacity:0;"
                                                        value="{{ old('skill_icon_1',$skillData->skill_icon_1) }}">
                                                        @error('skill_icon_1')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <skill-preview value="{{ $skillData }}"></skill-preview>


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