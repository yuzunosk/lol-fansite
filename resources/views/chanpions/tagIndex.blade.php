@extends('layouts.app');


@section('content')
        @section('sidebar')
        <div class="col-sm-12 col-md-9 col-lg-10">
        <div class="row">

            @foreach($tagsData AS $tagData)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card bg-white text-dark mb-4">
                              <div class="card-body py-2 px-1">
                                <p class="card-title text-center" style="font-size: 18px;">{{ $tagData -> name }}</p>
                                <p class="card-title text-center" style="font-size:14px;">{{ $tagData -> sub_name }}</p>

                                <div class="pr-1" style="display: flex; justify-content:flex-end; ">
                                        <form 
                                        action="{{ route('tags.edit',$tagData->id) }}" method="get">
                                        @csrf
                                        <button class="d-block btn-sm border-dark text-dark bg-white pt-2 p-0" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-2x fa-fw mx-1"></i>
                                        </button>
                                        </form>

                                        <form
                                        action="{{ route('tags.delete',$tagData->id) }}" method="post">
                                        @csrf
                                        <button class="d-block btn-sm border-dark text-dark bg-white pt-2 p-0" style="cursor:pointer;"
                                        onclick="return confirm('本当に削除しますか？');">
                                        <i class="fas fa-trash fa-2x fa-fw"></i>
                                        </button>
                                        </form>
                                </div>
                                </div>
                              </div>
                        </div>
            @endforeach
        <!-- </div> -->
                </div>
        </div>
            @parent
        @endsection
@endsection