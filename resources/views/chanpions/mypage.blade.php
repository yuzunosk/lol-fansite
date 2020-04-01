@extends('layouts.app');


@section('content')
@section('sidebar')
<div class="col-10">

    <div class="row row-cols-1 row-cols-md-2">
        @foreach($myChanpionData AS $myChanpionData)

        <div class="col-md-3 col-12 mb-4">
            <div class="card bg-dark text-white">
                <div class="container p-0">
                    <img src="@if($myChanpionData->chanpion_img){{ secure_asset('storage/'.$myChanpionData->chanpion_img) }}@else{{ secure_asset('storage/img/etc/img_no.png') }}   @endif" class="card-img" style="position:relative;height:300px;object-fit:cover">
                    <div class="card-img-overlay p-0">
                        <h3 class="card-title font-weight-boldre" style="position: absolute;top:5%;box-shadow:inset 0px 0px 12px 14px #2c29c354;padding: 0 25px 0 10px;border-radius: 5%;">
                            {{ $myChanpionData -> name }}</h3>
                        <div class="card-text row ml-2" style="position: absolute;bottom:20%;">
                            <p class="bg-light text-dark p-0 px-2">Main Roll<span class="badge badge-dark px-3 ml-1">{{$myChanpionData->main_roll_id }}</span></p>
                            <p class="bg-light text-dark p-0 px-2">Sub Roll<span class="badge badge-dark px-3 ml-1">{{ $myChanpionData->sub_roll_id }}</span></p>
                        </div>
                    </div>
                </div>
                <!-- <a href="#" class="btn btn-primary">{{ __('Go Linked')}}</a> -->
                <div class="card-footer">
                    <div class="row">
                        <form action="{{ route('tagbox.new',$myChanpionData->id) }}" method="get" class="col-md-3 p-0 m-0 border border-dark">
                            @csrf
                            <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                <i class="fas fa-bookmark fa-2x fa-fw"></i>Tag
                            </button>
                        </form>

                        <form action="{{ route('skills.index',[$myChanpionData->id,]) }}" method="get" class="col-md-3 p-0 m-0 border border-dark">
                            @csrf
                            <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                <i class="fas fa-star fa-2x fa-fw"></i></i>Skill
                            </button>
                        </form>

                        <form action="{{ route('chanpions.edit',$myChanpionData->id) }}" method="get" class="col-md-3 p-0 m-0 border border-dark">
                            @csrf
                            <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                <i class="fas fa-edit fa-2x fa-fw"></i>Edit
                            </button>
                        </form>

                        <form action="{{ route('chanpions.delete',$myChanpionData->id) }}" method="post" class="col-md-3 p-0 m-0 border border-dark">
                            @csrf
                            <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;" onclick="return confirm('本当に削除しますか？');">
                                <i class="fas fa-trash fa-2x fa-fw"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!--card -->
        </div>
        @endforeach
    </div>
</div>
@parent
@endsection
@endsection