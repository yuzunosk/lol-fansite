@extends('layouts.app');


@section('content')
        @section('sidebar')
        <div class="col-md-10">
                <div class="row row-cols-1 row-cols-md-2">

                @foreach($articleDatas AS $articleData)

                <div class="col-md-4 mb-4">
                    <div class="card border-dark p-2">
                      <img src="" class="card-img bg-dark" alt="" width="400px" height="200px">
                        <div class="card-body text-dark p-0">
                            <p class="text-secondary col-12">{{ $articleData->created_at }}</p>
                            <p class="card-text col-12">{{ $articleData->title }}</p>
                            <div class="row justify-content-end row p-0 m-0">
                                    <button type="button" class="btn btn-primary col-3 py-2 m-0">
                                    <a href="{{ route('articles.edit', $articleData->id) }}" class="text-light" style="text-decoration:none;">
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