@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Roll Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('rolls.create') }}">
                            @csrf

<!-- 名前・英名 -->
<div class="container mt-4">
                            <div class="form-group row">
                                <label for="name" class="col col-form-label mb-3">{{ __('name') }}</label>

                                <div class="col">
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