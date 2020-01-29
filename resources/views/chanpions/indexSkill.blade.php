@extends('layouts.app');


@section('content')
        @section('sidebar')
        <div class="col-10">
                @foreach($chanpionsData AS $chanpionData)

                <div class="col-md-6">
                    <div class="card bg-dark text-white">
                      <img src="" class="card-img" alt="" width="400px" height="300px">
                      <div class="card-img-overlay">
                        <h4 class="card-title">{{ $chanpionData -> name }}<span class="px-3 ml-3">{{ $chanpionData -> sub_name }}</span></h4>
                        <p class="card-text">{{ $chanpionData -> popular_name }}</p>
                        <p class="card-text">{{ $chanpionData -> feature }}</p>
                            <div class="conteinar">
                                <div class="row">
                                <p class="btn btn-dark p-0 mr-2">Main Roll<span class="badge badge-light px-3 ml-1">{{$chanpionData->main_roll_id }}</span></p>
                                <p class="btn btn-dark p-0 mr-2">Sub Roll<span class="badge badge-light px-3 ml-1">{{ $chanpionData->sub_roll_id }}</span></p>
                                <p class="btn btn-dark p-0 mr-2">Be Cost<span class="badge badge-light px-3 ml-1">{{ $chanpionData->be_cost }}</span></p>
                                <p class="btn btn-dark p-0 mr-2">Rp Cost<span class="badge badge-light px-3 ml-1">{{ $chanpionData->rp_cost }}</span></p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary">{{ __('Go Linked')}}</a>
                            <a href="{{ route('chanpions.edit', $chanpionData->id) }}"
                                class="btn btn-warning">
                                {{ __('Go Edit')}}</a>
                            <form action="{{ route('chanpions.delete',$chanpionData->id) }}" method="post"
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
            @parent
        @endsection
@endsection