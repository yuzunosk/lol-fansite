@extends('layouts.app')


@section('content')
@section('sidebar')
<div class="col-sm-12 col-md-9 col-lg-10">

    <div class="d-none d-md-block main_nav_Container" style="position: relative;margin-bottom: 20px;">

        <form class="d-none d-lg-block" action="{{ route('chanpions.sort') }}" method="GET">
            @csrf
            <div class="container row col-6 p-0 " style="position: absolute;bottom:0; display:flex;align-items:end;font-size:9px;">
                <div class="col-2 px-1">
                    <select name="sort" id="js-sort-data" class="js-sort-data btn border-info py-1 px-2 rounded-0" style="max-width:100%;font-size:12px;">
                        <option class="dropdown-item" value="reset" @if (old('sort', session('sort'))=="reset" ) selected @endif>{{ __('Chanpion Sort') }}</option>
                        <option class="dropdown-item" value="1" @if (old('sort', session('sort'))=="1" ) selected @endif>新しく登録された順</option>
                        <option class="dropdown-item" value="2" @if (old('sort', session('sort'))=="2" ) selected @endif>古い順</option>
                        <option class="dropdown-item" value="3" @if (old('sort', session('sort'))=="3" ) selected @endif>攻撃力が高い順</option>
                        <option class="dropdown-item" value="4" @if (old('sort', session('sort'))=="4" ) selected @endif>魔力が高い順</option>
                        <option class="dropdown-item" value="5" @if (old('sort', session('sort'))=="5" ) selected @endif>耐久力が高い順</option>
                        <option class="dropdown-item" value="6" @if (old('sort', session('sort'))=="6" ) selected @endif>機動力が高い順</option>
                        <option class="dropdown-item" value="7" @if (old('sort', session('sort'))=="7" ) selected @endif>難易度の高い順</option>
                        <option class="dropdown-item" value="8" @if (old('sort', session('sort'))=="8" ) selected @endif>難易度の易しい順</option>
                    </select>
                </div>

                <!-- <div class="col-2 px-1">
                            <select name="tag"  id="js-roll-data" class="btn py-1 px-2 border-info rounded-0" style="max-width: 100%;font-size:12px;">
                                <option class="dropdown-item" value="" id="0" readonly>{{__('Search Tag')}}</option>
                                @foreach($tagDatas as $tagData)
                                <option class="dropdown-item text-truncate" value="{{ $tagData->name }}" @if(old('tag', session('tag')) == $tagData->name) selected @endif>
                                {{ $tagData->name }}</option>
                                @endforeach
                            </select>
                        </div> -->


                <div class="col-2 px-1">
                    <select name="roll" id="js-tag-data" class="btn border-info py-1 px-2 rounded-0 text-truncate" style="max-width: 100%;font-size:12px;">
                        <option class="dropdown-item text-truncate" value="reset" id="0" @if (old('roll', session('roll'))=="reset" ) selected @endif>{{__('Search Roll')}}</option>
                        @foreach($rollDatas as $rollData)
                        <option class="dropdown-item" value="{{ $rollData->name }}" @if (old('roll', session('roll'))==$rollData->name) selected @endif>
                            {{ $rollData->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-dark text-light py-1 px-2 rounded-0" style="font-size:12px;" type="submit">{{__('Go Seach')}}</button>

            </div>
        </form>
        {{ $chanpionsData->onEachSide(5)->links() }}
    </div>


    <div id="js-sort-chanpionsData" class="row row-cols-1 row-cols-md-2">
        @foreach($chanpionsData as $chanpionData)

        <div class="col-md-6 col-lg-3 mb-4" style="display:flex;justify-content: center;">
            <div class="card bg-dark text-white" style="width:270px;">

                @if ($chanpionData->chanpion_img)
                <img src="{{ url( $chanpionData->chanpion_img ) }}" class="card-img" style="position:relative;height:300px;object-fit:cover">

                @else
                <img src="{{ url('top/img/img_no.png') }}" class="card-img" style="position:relative;height:300px;object-fit:cover">

                @endif

                <div class="card-img-top">
                    <p class="card-title font-weight-boldre" style="position: absolute;top:5%;box-shadow:inset 0px 0px 12px 14px #2c29c354;padding: 0 25px 0 10px;border-radius: 5%;font-size:1.3rem;">
                        {{ $chanpionData -> name }}</p>
                    <div class="card-text row m-0" style="font-size:1rem;text-align:center;display:flex;width:100%;">
                        <p class="font-weight-bold m-0" style="flex:1">Main Roll<span class="badge ml-1" style="background-color: #3c80c3;font-size:9px;">{{ $chanpionData->main_roll_id }}</span></p>
                        <p class="font-weight-bold m-0" style="flex:1">Sub Roll<span class="badge ml-1" style="background-color: #3c80c3;font-size:9px;">{{ $chanpionData->sub_roll_id }}</span></p>
                    </div>
                </div>
                <div class="card-footer p-0" style="display:flex;max-width:100%;">
                    <form style="flex: 25%;align-self: stretch;" action="{{ route('tagbox.edit',$chanpionData->id) }}" method="get" class="m-0 border border-dark">
                        @csrf
                        <button class="btn-sm border-dark text-dark bg-white pt-2" style="cursor:pointer;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                            <i class="fas fa-bookmark fa-2x fa-fw row m-0 mr-0" style="display:flex;justify-content:center;"></i>Tag
                        </button>
                    </form>

                    <form style="flex: 25%;align-self: stretch;" action="{{ route('skills.index',$chanpionData->id) }}" method="get" class="m-0 border border-dark">
                        @csrf
                        <button class="btn-sm border-dark text-dark bg-white pt-2" style="cursor:pointer;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                            <i class="fas fa-star fa-2x fa-fw row m-0" style="display:flex;justify-content:center;"></i>Skill
                        </button>
                    </form>

                    <form style="flex: 25%;align-self: stretch;" action="{{ route('chanpions.edit',$chanpionData->id) }}" method="get" class="m-0 border border-dark">
                        @csrf
                        <button class="btn-sm border-dark text-dark bg-white pt-2" style="cursor:pointer;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                            <i class="fas fa-edit fa-2x fa-fw row m-0" style="display:flex;justify-content:center;"></i>Edit
                        </button>
                    </form>

                    <form style="flex: 25%;align-self: stretch;" action="{{ route('chanpions.delete',$chanpionData->id) }}" method="post" class="m-0 border border-dark">
                        @csrf
                        <button class="btn-sm border-dark text-dark bg-white pt-2" style="cursor:pointer;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;" onclick="return confirm('本当に削除しますか？');">
                            <i class="fas fa-trash fa-2x fa-fw row m-0" style="display:flex;justify-content:center;"></i>Delete
                        </button>
                    </form>

                    <!-- </div> -->
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