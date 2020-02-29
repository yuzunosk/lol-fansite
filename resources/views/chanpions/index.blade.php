@extends('layouts.app')


@section('content')
        @section('sidebar')
        <div class="col-10">

        <div class="main_nav_Container" style="position: relative;">
            
            <form action="{{ route('ajax.sort') }}" method="POST">
                @csrf
                <div class="container row col-6 p-0" style="position: absolute;bottom:0; display:flex;align-items:end;font-size:9px;">
                    <div class="col-2 px-1">
                                    <select name="sort" id="js-sort-data" class="js-sort-data btn border-info py-1 px-2 rounded-0" style="max-width:100%;font-size:12px;">
                                        <option class="dropdown-item" value="" readonly>{{ __('Chanpion Sort') }}</option>
                                        <option class="dropdown-item" value="1" @if(old('sort') == "1") disabled @endif>新しく登録された順</option>
                                        <option class="dropdown-item" value="2" @if (old('sort') == "2") disabled @endif>古い順</option>
                                        <option class="dropdown-item" value="3" @if (old('sort') == "3") disabled @endif>攻撃力が高い順</option>
                                        <option class="dropdown-item" value="4" @if (old('sort') == "4") disabled @endif>魔力が高い順</option>
                                        <option class="dropdown-item" value="5" @if (old('sort') == "5") disabled @endif>耐久力が高い順</option>
                                        <option class="dropdown-item" value="6" @if (old('sort') == "6") disabled @endif>機動力が高い順</option>
                                        <option class="dropdown-item" value="7" @if (old('sort') == "7") disabled @endif>難易度の高い順</option>
                                        <option class="dropdown-item" value="8" @if (old('sort') == "8") disabled @endif>難易度の易しい順</option>
                                    </select>
                        </div>
                        
                        <div class="col-2 px-1">
                            <select name="tag"  id="js-roll-data" class="btn py-1 px-2 border-info rounded-0" style="max-width: 100%;font-size:12px;">
                                <option class="dropdown-item" value="" id="0" readonly>{{__('Search Tag')}}</option>
                                @foreach($tagDatas as $tagData)
                                <option class="dropdown-item text-truncate" value="{{ $tagData->name }}" @if(old('tag') == $tagData->name) disabled @endif>
                                {{ $tagData->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-2 px-1">
                                <select name="roll" id="js-tag-data" class="btn border-info py-1 px-2 rounded-0 text-truncate" style="max-width: 100%;font-size:12px;">
                                    <option class="dropdown-item text-truncate" value="" id="0" readonly>{{__('Search Roll')}}</option>
                                    @foreach($rollDatas as $rollData)
                                        <option class="dropdown-item" value="{{ $rollData->name }}" @if(old('roll') == $rollData->name) disabled @endif>
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

                <div class="col-md-3 col-12 mb-4">
                    <div class="card bg-dark text-white">
                        <div class="container p-0">
                      <img src="@if($chanpionData->chanpion_img)
                      {{ asset('storage/' .$chanpionData->chanpion_img) }}
                      @else{{ asset('storage/img/etc/img_no.png') }} @endif" class="card-img"
                      style="position:relative;height:300px;object-fit:cover">
                      <div class="card-img-overlay p-0">
                        <h3 class="card-title font-weight-boldre" 
                        style="position: absolute;top:5%;box-shadow:inset 0px 0px 12px 14px #2c29c354;padding: 0 25px 0 10px;border-radius: 5%;">
                        {{ $chanpionData -> name }}</h3>
                            <div class="card-text row ml-2" style="position: absolute;bottom:20%;font-size:.7rem;">
                                <p class="text-right bg-secondary p-0 px-2 font-weight-bold">Main Roll<span class="badge badge-dark ml-2">{{ $chanpionData->main_roll_id }}</span></p>
                                <p class="text-right bg-secondary p-0 px-2 font-weight-bold">Sub Roll<span class="badge badge-dark  ml-2">{{ $chanpionData->sub_roll_id }}</span></p>
                            </div>
                        </div>
                        </div>
                                <!-- <a href="#" class="btn btn-primary">{{ __('Go Linked')}}</a> -->
                                <div class="card-footer">
                                    <div class="row">
                                        @foreach($tagBoxDatas as $tagBoxData)
                                        <form 
                                        @if($tagBoxData->chanpion_id == $chanpionData->id)
                                        action="{{ route('tagbox.edit',$chanpionData->id) }}"
                                         @else
                                        action="{{ route('tagbox.new',$chanpionData->id) }}"
                                        @endif
                                        method="get" class="col-md-3 p-0 m-0 border border-dark">
                                        @endforeach
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-bookmark fa-2x fa-fw"></i>Tag
                                        </button>
                                        </form>

                                        <form action="{{ route('skills.index',$chanpionData->id) }}" method="get" class="col-md-3 p-0 m-0 border border-dark">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-star fa-2x fa-fw"></i></i>Skill
                                        </button>
                                        </form>

                                        <form action="{{ route('chanpions.edit',$chanpionData->id) }}" method="get" class="col-md-3 p-0 m-0 border border-dark">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-2x fa-fw"></i>Edit
                                        </button>
                                        </form>

                                        <form action="{{ route('chanpions.delete',$chanpionData->id) }}" method="post" class="col-md-3 p-0 m-0 border border-dark">
                                        @csrf
                                        <button class="btn-sm border-dark text-dark bg-white" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-2x fa-fw"></i>Delete
                                        </button>
                                        </form>
                                    </div>
                                </div>
                      </div>    <!--card -->
                </div>
            @endforeach
            </div>


        </div>
            @parent
        @endsection
@endsection