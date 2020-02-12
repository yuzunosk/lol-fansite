@extends('layouts.app');


@section('content')
    @section('sidebar')
        <div class="col-10">    
            <div class="container">

            <div class="row">
                <div class="card-deck col-12 border border-dark p-0 ">
                <h1 class="col-12 text-center my-3">{{ $chanpion->name }}</h1>


                    @if($skillDatas->skill_type['Passive']);
                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Passive
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillDatas->skill_icon_1){{ asset('storage/'.$skillDatas->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <img src="@if($skillDatas->skill_icon_2){{ asset('storage/'.$skillDatas->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;">

                                <h5 class="card-title col-10">{{ $skillDatas->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillDatas->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillDatas->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillDatas->id) }}" method="get" class="col-md-3 p-0 m-0 ml-2">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillDatas->id) }}" method="post" class="col-md-3 p-0 m-0 ml-2">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                    @endif

                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Passive
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillDatas->skill_icon_1){{ asset('storage/'.$skillDatas->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <img src="@if($skillDatas->skill_icon_2){{ asset('storage/'.$skillDatas->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;">

                                <h5 class="card-title col-10">{{ $skillDatas->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillDatas->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillDatas->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillDatas->id) }}" method="get" class="col-md-3 p-0 m-0">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillDatas->id) }}" method="post" class="col-md-3 p-0 m-0">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>

                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Passive
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillDatas->skill_icon_1){{ asset('storage/'.$skillDatas->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <img src="@if($skillDatas->skill_icon_2){{ asset('storage/'.$skillDatas->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;">

                                <h5 class="card-title col-10">{{ $skillDatas->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillDatas->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillDatas->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillDatas->id) }}" method="get" class="col-md-3 p-0 m-0">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillDatas->id) }}" method="post" class="col-md-3 p-0 m-0">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>

                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Passive
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillDatas->skill_icon_1){{ asset('storage/'.$skillDatas->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <img src="@if($skillDatas->skill_icon_2){{ asset('storage/'.$skillDatas->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;">

                                <h5 class="card-title col-10">{{ $skillDatas->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillDatas->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillDatas->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillDatas->id) }}" method="get" class="col-md-3 p-0 m-0">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillDatas->id) }}" method="post" class="col-md-3 p-0 m-0">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>

                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Passive
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillDatas->skill_icon_1){{ asset('storage/'.$skillDatas->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <img src="@if($skillDatas->skill_icon_2){{ asset('storage/'.$skillDatas->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;">

                                <h5 class="card-title col-10">{{ $skillDatas->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillDatas->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillDatas->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillDatas->id) }}" method="get" class="col-md-3 p-0 m-0">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillDatas->id) }}" method="post" class="col-md-3 p-0 m-0">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>

                    
            </div>
            </div>
        </div>
        </div>
        @parent
        @endsection
@endsection