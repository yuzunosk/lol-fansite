@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ $chanpionData->name }}：{{ __('TagBox Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tagbox.create') }}">
                        @csrf

                        <!-- Name -->
                        <div class="container mt-4">
                            <div class="form-group row">
                                <label for="name" class="col-8 col-form-label mb-3">{{ __('name') }}</label>

                                <div class="col-4">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$chanpionData->name) }}" readonly autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Name END -->

                        <!-- ID -->
                        <div class="container mt-4">
                            <div class="form-group row">
                                <label for="chanpion_id" class="col-8 col-form-label mb-3">{{ __('chanpion_id') }}
                                    <span class="badge badge-danger py-1 ml-2">必須</span>
                                </label>

                                <div class="col-4">
                                    <input id="chanpion_id" type="text" class="form-control @error('chanpion_id') is-invalid @enderror" name="chanpion_id" value="{{ old('chanpion_id',$chanpionData->id) }}" autofocus readonly>

                                    @error('chanpion_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- ID END -->

                        <!-- タグボックス -->
                        @for ($i = 1; $i <= 10; $i++) <div class="container">
                            <div class="form-group row">
                                <label for="select-tags" class="col-md-8 col-7 col-form-label mb-1">
                                    {{ __("tags ").$i }}
                                </label>
                                <div class="col-md-4 col-5">
                                    <select name="chanpion_tag_id_{{$i}}" id="tags{{$i}}" class="form-control text-center @error('chanpion_tag_id_'.($i)) is-invalid @enderror">
                                        <option value="" selected>なし</option>

                                        @foreach($tagDatas as $tagData)
                                        <option value="{{ $tagData->name }}" @if(old("tags")==$tagData->name) selected @endif>
                                            {{ $tagData->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('chanpion_tag_id_'.($i))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                </div>
                @endfor
                <!-- タグボックス END -->

                <!-- スキル　アイコン END -->
                <div class="container text-center mt-4">
                    <div class="form-group row">
                        <div class="col">
                            <button type="submit" class="btn btn-light border-dark px-5">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </div>
                </form>


                <!-- Return -->
                <div class="text-center">
                    <form method="GET" action="{{route('chanpions.sort')}}">
                        <button type="submit" class="btn btn-danger border-dark px-5 text-light">
                            {{ __('Return') }}
                        </button>
                        </fotm>
                </div>
                <!-- Return END -->

            </div>
        </div>
    </div>
</div>
</div>
@endsection