@extends('layouts.app')

@section('content')
<div class="col-12 col-md-9 col-lg-10">
        <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
                <div class="card">
                    <div class="card-header text-center">{{ __('Roll Editer') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('rolls.update',$roll->id) }}">
                            @csrf

<!-- 名前・英名 -->
<div class="container mt-4">
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label mb-3">{{ __('roll name') }}</label>

                                <div class="col-8 col-lg-6">
                                    <input 
                                    id="name" 
                                    type="text" 
                                    class="form-control @error('name') is-invalid @enderror" name="name" 
                                    value="{{ old('name',$roll->name) }}" 
                                    autocomplete="name" autofocus>

                                    @error('name')
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