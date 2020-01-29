@extends('layouts.app');


@section('content')
        @section('sidebar')
        <div class="col-md-10">
                <div class="row">
            @foreach($rollsData AS $rollData)
                        <div class="col-md-2">
                            <div class="card bg-white text-dark mb-4">
                              <div class="card-body">
                                <h4 class="card-title text-center">{{ $rollData -> name }}</h4>
                                    <a href="{{ route('rolls.edit', $rollData->id) }}"
                                        class="btn btn-warning">
                                        {{ __('Go Edit')}}</a>
                                    <form action="{{ route('rolls.delete',$rollData->id) }}" method="post"
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