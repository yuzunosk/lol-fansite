@extends('layouts.app')


@section('content')
        @section('sidebar')
        <div class="col-10">

        <div>
                        <!-- <div class="dropdown"> -->
                    <!-- <button class="btn border-0 dropdown-toggle pl-1 mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('Chanpion Sort') }}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button type="botton" class="dropdown-item">新しく登録された順</button>
                            <button type="botton" class="dropdown-item">古い順</button>
                            <button type="botton" class="dropdown-item">攻撃力が高い順</button>
                            <button type="botton" class="dropdown-item">魔力が高い順</button>
                            <button type="botton" class="dropdown-item">耐久力が高い順</button>
                            <button type="botton" class="dropdown-item">機動力が高い順</button>
                            <button type="botton" class="dropdown-item">難易度の高い順</button>
                            <button type="botton" class="dropdown-item">難易度の易しい順</button>
                        </div>
                </div>

                <div class="dropdown">
                    <button class="btn border-0 dropdown-toggle pl-1 mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('Search Roll') }}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->
                            <!-- <a href="" class="dropdown-item">{{ $rollData->name }}</a> -->
                        <!-- </div>
                </div>

                <div class="dropdown">
                    <button class="btn border-0 dropdown-toggle pl-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{  __('Search Tag') }}
                    </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->
                          <!-- <a class="dropdown-item" href="#">{{ $tagData->sub_name }} / {{ $tagData->name }}</a> -->
                         <!-- </div> -->
                <!-- </div> -->
        <sortdata-component rolls="{{ $rollDatas }}" tags="{{ $tagDatas }}"></sortdata-component>
                {{ $chanpionsData->onEachSide(5)->links() }}
        </div>


        <div class="row row-cols-1 row-cols-md-2">
                @foreach($chanpionsData AS $chanpionData)

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