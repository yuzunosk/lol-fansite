@extends('layouts.app');


@section('content')
        @section('sidebar')
        <div class="col-sm-12 col-md-9 col-lg-10">
        <div class="row">

            @foreach($rollsData AS $rollData)
            <div class="col-6 col-md-4 col-lg-2">
                            <div class="card bg-white text-dark mb-4">
                              <div class="card-body py-3 px-0">
                                <p class="card-title text-center" style="font-size:16px;">
                                {{ $rollData -> name }}</p>


                                    <div class="pr-1" style="display: flex; justify-content:flex-end; ">
                                        <form 
                                        action="{{ route('rolls.edit', $rollData->id) }}" method="get">
                                        @csrf
                                        <button class="d-block btn-sm border-dark text-dark bg-white pt-2 p-0" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-2x fa-fw mx-1"></i>
                                        </button>
                                        </form>

                                        <form
                                        action="{{ route('rolls.delete',$rollData->id) }}" method="post">
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
                </div>
        </div>
            @parent
        @endsection
@endsection