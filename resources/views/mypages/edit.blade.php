@extends('layouts.app')

@section('content')
<div class="container col-12 col-md-9">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Profile Editer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('mypage.update',Auth::user()->id) }}">
                        @csrf

                        <!-- 名前・英名 -->
                        <div class="container my-5">
                            <div class="form-group row">
                                <label for="name" class="col-sm-12 col-lg-4 col-form-label mb-3 text-center">{{ __('user_name') }}</label>

                                <div class="col-sm-10 col-lg-6" style="margin: 0 auto">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',Auth::user()->name) }}" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!-- 名前・英名 END -->

                        <div class="container text-center my-4">
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