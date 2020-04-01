@extends('layouts.app')
<!-- ここでlayouts.app.blade.phpを呼び出す -->
@section('content')
<!-- @yield('content') - ここから -->

@section('sidebar')
<!-- 親要素のsidebar ここから -->

<div class="container">
    <div class="row">
        <div class="card-deck col-12 border border-dark p-0 ">
            <h3 class="col-12 text-center my-3">{{ $skillDatas->name }}</h3>

            <!-- passive card -->
            @foreach($skillDatas->skills as $skillData)
            @if($skillData->skill_type == 'Passive')
            <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                <h5 class="card-header">

                    Passive
                </h5>
                <div class="card-body p-0">

                    <!-- iconの有無で表示が変化する -->
                    @if ($skillData->skill_icon_1 != null)
                    <img src="{{ url('top/'.$skillData->skill_icon_1) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ url('top/img/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif

                    <!-- @if ($skillData->skill_icon_2 != null)
                    <img src="{{ secure_asset('storage/'.$skillData->skill_icon_2) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ secure_asset('/storage/img/etc/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif -->
                    <!-- iconの有無で表示が変化する end -->

                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->name }}</h5>
                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->na_name }}</h5>
                    <p class="card-text col-12" style="font-size: 9px;"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
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
                            <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;" onclick="return confirm('本当に削除しますか？');">
                                <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @break
            @else
            @if($loop->last)
            <!-- 最後のループ -->
            @include('form.noSkillData',['skill_type' => 'Passive'])
            @endif
            @endif
            @endforeach
            <!-- passive card END -->




            <!--  Qスキル card -->
            @foreach($skillDatas->skills as $skillData)
            @if($skillData->skill_type == 'Qスキル')
            <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                <h5 class="card-header">
                    Qスキル
                </h5>
                <div class="card-body p-0">
                    <!-- iconの有無で表示が変化する -->
                    @if ($skillData->skill_type == 'Qスキル' || $skillData->skill_icon_1 != null)
                    <img src="{{ url('top/'.$skillData->skill_icon_1) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ url('/top/img/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif

                    <!-- @if ($skillData->skill_type == 'Qスキル' ||$skillData->skill_icon_2 != null)
                    <img src="{{ secure_asset('storage/'.$skillData->skill_icon_2) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ secure_asset('/storage/img/etc/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif -->
                    <!-- iconの有無で表示が変化する -->

                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->name }}</h5>
                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->na_name }}</h5>
                    <p class="card-text col-12" style="font-size: 9px;"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
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
                            <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;" onclick="return confirm('本当に削除しますか？');">
                                <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @break
            @else
            @if($loop->last)
            <!-- 最後のループ -->
            @include('form.noSkillData',['skill_type' => 'Qスキル'])
            @endif
            @endif
            @endforeach
            <!--  Qスキル card END -->


            <!-- Wスキル card -->
            @foreach($skillDatas->skills as $skillData)
            @if($skillData->skill_type == 'Wスキル')
            <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                <h5 class="card-header">
                    Wスキル
                </h5>
                <div class="card-body p-0">
                    <!-- iconの有無で表示が変化する -->
                    @if ($skillData->skill_type == 'Wスキル' || $skillData->skill_icon_1 != null)
                    <img src="{{ url('top/'.$skillData->skill_icon_1) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ url('/top/img/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif

                    <!-- @if ($skillData->skill_type == 'Qスキル' ||$skillData->skill_icon_2 != null)
                    <img src="{{ secure_asset('storage/'.$skillData->skill_icon_2) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ secure_asset('/storage/img/etc/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif -->
                    <!-- iconの有無で表示が変化する -->


                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->name }}</h5>
                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->na_name }}</h5>
                    <p class="card-text col-12" style="font-size: 9px;"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
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
                            <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;" onclick="return confirm('本当に削除しますか？');">
                                <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @break
            @else
            @if($loop->last)
            <!-- 最後のループ -->
            @include('form.noSkillData',['skill_type' => 'Wスキル'])
            @endif
            @endif
            @endforeach
            <!-- Wスキル card END-->




            <!-- Eスキル card -->
            @foreach($skillDatas->skills as $skillData)
            @if($skillData->skill_type == 'Eスキル')
            <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                <h5 class="card-header">
                    Eスキル
                </h5>
                <div class="card-body p-0">

                    @if ($skillData->skill_type == 'Eスキル' || $skillData->skill_icon_1 != null)
                    <img src="{{ url('top/'.$skillData->skill_icon_1) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ url('/top/img/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif

                    <!-- @if ($skillData->skill_type == 'Qスキル' ||$skillData->skill_icon_2 != null)
                    <img src="{{ secure_asset('storage/'.$skillData->skill_icon_2) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ secure_asset('/storage/img/etc/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif -->
                    <!-- iconの有無で表示が変化する -->

                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->name }}</h5>
                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->na_name }}</h5>
                    <p class="card-text col-12" style="font-size: 9px;"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
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
                            <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;" onclick="return confirm('本当に削除しますか？');">
                                <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @break
            @else
            @if($loop->last)
            <!-- 最後のループ -->
            @include('form.noSkillData',['skill_type' => 'Eスキル'])
            @endif
            @endif
            @endforeach
            <!-- Eスキル card END -->



            <!-- Ultimaiteスキル card -->
            @foreach($skillDatas->skills as $skillData)
            @if($skillData->skill_type == 'Ultimate')
            <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                <h5 class="card-header">
                    Ultimate
                </h5>
                <div class="card-body p-0">
                    @if ($skillData->skill_type == 'Ultimate' || $skillData->skill_icon_1 != null)
                    <img src="{{ url('top/'.$skillData->skill_icon_1) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ url('top/img/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif

                    <!-- @if ($skillData->skill_type == 'Qスキル' ||$skillData->skill_icon_2 != null)
                    <img src="{{ secure_asset('storage/'.$skillData->skill_icon_2) }}" class="card-img" style="height:100px;object-fit:cover;">
                    @else
                    <img src="{{ secure_asset('/storage/img/etc/img_no.png') }}" class="card-img" style="height:100px;object-fit:cover;">
                    @endif -->
                    <!-- iconの有無で表示が変化する -->

                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->name }}</h5>
                    <h5 class="card-title col-10 m-0 mt-2 ml-2 p-0" style="font-size: 14px;">{{ $skillData->na_name }}</h5>
                    <p class="card-text col-12" style="font-size: 9px;"><small class="text-muted">Update / {{ $skillData->updated_at }}</small></p>
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
                            <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;" onclick="return confirm('本当に削除しますか？');">
                                <i class="fas fa-trash fa-lg fa-fw"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @break
            @else
            @if($loop->last)
            <!-- 最後のループ -->
            @include('form.noSkillData',['skill_type' => 'Ultimate'])
            @endif
            @endif
            @endforeach
            <!-- Ultimateスキル card END-->

        </div>
    </div>
    <!--div=row -->
</div> <!-- div=container -->


@parent
<!-- 親要素のsidebar ここから -->

@endsection
<!-- @yield('content') - ここまで -->