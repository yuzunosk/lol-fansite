@extends('layouts.app');


@section('content')
@section('sidebar')
<div class="col-md-10">
    <div class="row row-cols-1 row-cols-md-2">

        @foreach($articleDatas AS $articleData)

        <div class="col-md-4 mb-4">
            <div class="card border-dark p-2">
                <img src="@if($articleData->img){{ secure_asset('storage/'.$articleData->img) }}@else{{ secure_asset('storage/img/etc/img_no.png') }} @endif" class="card-img" style="position:relative;height:200px;object-fit:cover">

                <div class="card-body text-dark p-0">
                    <p class="text-secondary col-12">{{ $articleData->created_at }}</p>
                    <p class="card-text col-12">{{ $articleData->title }}</p>
                    <div class="row justify-content-end row p-0 m-0">
                        <button type="button" class="btn btn-primary col-4 py-2 m-0" style="cursor:pointer;">
                            <a href="{{ route('articles.edit', $articleData->id) }}" class="text-light" style="text-decoration:none;">
                                <i class="fas fa-edit fa-sm"></i>
                                {{ __('Article Edit') }}</a>
                        </button>
                    </div>
                </div>
                <!-- リンクなど -->


                <!-- リンクなど end -->
            </div>
        </div>

        @endforeach

    </div>
</div>
@parent
@endsection
@endsection