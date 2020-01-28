@extends('layouts.app');


@section('content')
    <div class="container ">
        <div class="row">

                @foreach($skillsData AS $skillData)

                <div class="col-md-6">
                <div class="card">
                    <!-- <router-link :to="routerLink"> -->
                        <div class="card-body">
                        <h3 class="card-title p-3 mb-3">{{ $skillData -> name }}
                        <span class="px-3 ml-3">{{ $skillData -> na_name }}</span>
                        </h3>

                        <p>
                        <span class="bg-primary px-3 text-light ml-1">skill_type / {{ $skillData -> skill_type }}</span>
                        <span class="bg-secondary px-3 text-white ml-1">use_chanpion / {{ $skillData -> chanpion_id }}</span>
                        </p>

<!-- アイコン -->
                        <div class="container">
                            <div class="row">
                                <img 
                                class="col-6" 
                                src="{{ $skillData -> skill_icon_1 }}"      alt="">

                                <img class="col-6" 
                                src="{{ $skillData -> skill_icon_2 }}"      alt="">
                            </div>
                        </div>
<!-- アイコン END -->

<!-- テキスト -->
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <p>
                                        {{ $skillData -> text }}
                                    </p>
                                </div>
                            </div>
                        </div>
<!-- テキスト  end-->

                    <!-- </router-link> -->
                        <!-- <a href="{{ route('chanpions.edit', $skillData->id) }}"
                        class="btn btn-warning">
                        {{ __('Go Edit')}}</a>
                        <form action="{{ route('chanpions.delete',$skillData->id) }}" method="post"
                        class="d-inline">
                        @csrf
                        <button class="btn btn-secondary" 
                        onclick="return confirm('本当に削除しますか？');">
                        {{  __('Go Delete') }}</button>
                        </form> -->

                                <!-- </router-link> -->
                                <a href="#" class="btn btn-primary">{{ __('Go Linked') }}</a>
                                <a href="{{ route('skills.edit', $skillData->id) }}" class="btn btn-warning">
                                {{ __('Go Edit') }}</a>
                                <form class="d-inline" action="{{ route('skills.delete', $skillData->id) }}" method="post">
                                @csrf
                                <button class="btn btn-secondary" onclick="return confirm('本当に削除しますか？?'); ">
                                {{ __('Go Delete') }}</button>
                                </form>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection