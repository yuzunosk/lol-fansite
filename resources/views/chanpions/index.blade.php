@extends('layouts.app');


@section('content')
    <div class="container ">
        <div class="row">

                @foreach($chanpionsData AS $chanpionData)

                <div class="col-md-6">
                <div class="card">
                    <!-- <router-link :to="routerLink"> -->
                        <div class="card-body">
                        <h3 class="card-title p-3 mb-3">{{ $chanpionData -> name }}
                        <span class="px-3 ml-3">{{ $chanpionData -> sub_name }}</span>
                        </h3>
                        <div>
                        <span class="bg-primary px-3 text-light ml-1">popular_name / {{ $chanpionData -> popular_name }}</span>
                        <p class="bg-primary px-3 text-light ml-1">feature / {{ $chanpionData -> feature }}</p>

                        </div>
                        <p>
                        <span class="bg-secondary px-3 text-white ml-1">main_roll / {{ $chanpionData -> main_roll_id }}</span>
                        <span class="bg-secondary px-3 text-white ml-1">sub_roll / {{ $chanpionData -> sub_roll_id }}</span>
                        <span class="bg-secondary px-3 text-white ml-1">be_cost / {{ $chanpionData -> be_cost }}</span>
                        <span class="bg-secondary px-3 text-white ml-1">rp_cost / {{ $chanpionData -> rp_cost }}</span>

                        </p>
                            <img src="{{ $chanpionData -> chanpion_img }}" alt="">
                    <!-- </router-link> -->
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
    </div>
@endsection