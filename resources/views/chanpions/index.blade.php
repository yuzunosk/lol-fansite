@extends('layouts.app');


@section('content')
    <div class="container">
        <div class="row">

                @foreach($chanpionsData AS $chanpionData)

                <div class="col-md-6">
                <div class="card">
                    <!-- <router-link :to="routerLink"> -->
                        <div class="card-body">
                            <img src="{{ $chanpionData -> chanpion_img }}" alt="">
                        </div>
                    <!-- </router-link> -->
                        <p class="card-header">{{ $chanpionData -> main_roll_id }}</p>
                        <p class="cardName">{{ $chanpionData -> name }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection