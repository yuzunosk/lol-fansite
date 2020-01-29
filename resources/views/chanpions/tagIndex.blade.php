@extends('layouts.app');


@section('content')
        @section('sidebar')
        <div class="col-10">
                <div class="row">
            @foreach($tagsData AS $tagData)
                        <div class="col-md-3">
                            <div class="card bg-white text-dark mb-4">
                              <div class="card-body">
                                <h4 class="card-title text-center">{{ $tagData -> name }}</h4>
                                <h5 class="card-title text-center">{{ $tagData -> sub_name }}</h5>
                                    <a href="{{ route('tags.edit', $tagData->id) }}"
                                        class="btn btn-warning">
                                        {{ __('Go Edit')}}</a>
                                    <form action="{{ route('tags.delete',$tagData->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    <button class="btn btn-secondary" 
                                    onclick="return confirm('本当に削除しますか？');">
                                    {{  __('Go Delete') }}</button>
                                    </form>
                                </div>
                              </div>
                        </div>
            @endforeach
                </div>
        </div>
            @parent
        @endsection
@endsection