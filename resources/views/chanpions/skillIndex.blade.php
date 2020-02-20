@extends('layouts.app')


@section('content')
    @section('sidebar')
        <div class="col-10">
            <div class="container">
            <div class="row">
                <div class="card-deck col-12 border border-dark p-0 ">
                <h3 class="col-12 text-center my-3">{{ $skillDatas[0]->chanpion->name }}</h3>
<!-- passive card -->
            @foreach($skillDatas as $skillData)
                    @if($skillData->skill_type == 'passive')
                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Passive
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillData->skill_type == 'passive' || $skillData->skill_icon_1 != null){{ asset('storage/'.$skillData->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <!-- <img src="@if($skillData->skill_icon_2){{ asset('storage/'.$skillData->skill_icon_2) }}@endif" alt="アイコン2"
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;"> -->

                                <h5 class="card-title col-10">{{ $skillData->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillData->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillData->id) }}" method="get" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillData->id) }}" method="post" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                    @else
                        <!-- サブビュー受け渡し -->
                        <!-- @include('form.noSkillData',['skill_type' => 'passive']) -->
                    @endif
                @endforeach
<!-- passive card END -->

<!--  Qスキル card -->
                @foreach($skillDatas as $skillData)
                    @if($skillData->skill_type == 'Qスキル')
                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Qスキル
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillData->skill_type == 'Qスキル' || $skillData->skill_icon_1 != null){{ asset('storage/'.$skillData->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <!-- <img src="@if($skillData->skill_icon_2){{ asset('storage/'.$skillData->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;"> -->

                                <h5 class="card-title col-10">{{ $skillData->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillData->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillData->id) }}" method="get" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillData->id) }}" method="post" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                    @else
                        <!-- サイドビュー　受け渡し -->
                        <!-- @include('form.noSkillData',['skill_type' => 'Qスキル']) -->
                    @endif
                @endforeach
<!--  Qスキル card END -->



<!-- Wスキル card -->
            @foreach($skillDatas as $skillData)
                @if($skillData->skill_type == 'Wスキル')
                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Wスキル
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillData->skill_type == 'Wスキル' || $skillData->skill_icon_1 != null){{ asset('storage/'.$skillData->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <!-- <img src="@if($skillData->skill_icon_2){{ asset('storage/'.$skillData->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;"> -->

                                <h5 class="card-title col-10">{{ $skillData->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillData->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillData->id) }}" method="get" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillData->id) }}" method="post" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>

                    @else
                        <!-- サイドビュー　受け渡し -->
                        <!-- @include('form.noSkillData',['skill_type' => 'Wスキル']) -->
                    @endif
                @endforeach
<!-- Wスキル card END-->
                @foreach($skillDatas as $skillData)
                    @if($skillData->skill_type == 'Eスキル')
                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Eスキル
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillData->skill_type == 'Eスキル' || $skillData->skill_icon_1 != null){{ asset('storage/'.$skillData->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <!-- <img src="@if($skillData->skill_icon_2){{ asset('storage/'.$skillData->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;"> -->

                                <h5 class="card-title col-10">{{ $skillData->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillData->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillData->id) }}" method="get" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillData->id) }}" method="post" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                    @else
                        <!-- サイドビュー 受け渡し -->
                        <!-- @include('form.noSkillData',['skill_type' => 'Eスキル']) -->
                    @endif
                @endforeach
<!-- Eスキル card END -->

<!-- Ultimaiteスキル card -->
                @foreach($skillDatas as $skillData)
                    @if($skillData->skill_type == 'Ultimate')
                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Ultimate
                        </h5>
                        <div class="card-body p-0" >
                                <img src="@if($skillData->skill_type == 'Ultimate' || $skillData->skill_icon_1 != null){{ asset('storage/'.$skillData->skill_icon_1) }}@else{{ asset('storage/img/etc/img_no.png') }}@endif" alt="アイコン1" class="card-img" style="height:100px;object-fit:cover;">

                                <!-- <img src="@if($skillData->skill_icon_2){{ asset('storage/'.$skillData->skill_icon_2) }}@endif" alt="アイコン2" 
                                class="card-image-top" style="height:100px;object-fit:cover; display:none;"> -->

                                <h5 class="card-title col-10">{{ $skillData->name }}</h5>
                                <h5 class="card-title col-10">{{ $skillData->na_name }}</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillData->id) }}" method="get" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.delete', $skillData->id) }}" method="post" class="col-md-3 p-0 m-0 mr-1">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>
                    @else
                        <!-- サイドビュー 受け渡し -->
                        <!-- @include('form.noSkillData',['skill_type' => 'Ultimate']) -->
                    @endif
                @endforeach
<!-- Ultimateスキル card END-->

            </div>
            </div>
        </div>
        </div>
        @parent
        @endsection
@endsection