@extends('layouts.app')

@section('content')
<div class="col-12 col-md-9 col-lg-10">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card">
                    <div class="card-header text-center">{{ __('Tag Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('tags.create') }}">
                            @csrf

<!-- 名前・英名 -->
<div class="container mt-4">
                            <div class="form-group row">
                                <label for="name" class="col-3 col-lg-3 col-form-label mb-3">{{ __('name') }}</label>

                                <div class="col-9 col-lg-6">
                                    <input 
                                    id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" name="name" 
                                    value="{{ old('name') }}" 
                                    autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sub_name" class="col-3  col-lg-3 col-form-label mb-3">{{ __('sub_name') }}</label>

                                <div class="col-9 col-lg-6">
                                    <input 
                                    id="sub_name" 
                                    type="text" 
                                    class="form-control @error('sub_name') is-invalid @enderror" name="sub_name" 
                                    value="{{ old('sub_name') }}" 
                                    autocomplete="sub_name" autofocus>

                                    @error('sub_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
<!-- 名前・英名 END -->

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