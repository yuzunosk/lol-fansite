                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        {{ $skill_type }}<span class="badge badge-danger py-1">未登録</span>
                        </h5>
                        <div class="card-body p-0" >
                                <!-- <img src="asset('/public/img_mini_no.png')" class="card-img" style="height:100px;object-fit:cover;"> -->
                                <h5 class="card-title col-10">No-DATA</h5>
                                <h5 class="card-title col-10">No-DATA</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / No-DATA</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.new') }}" method="get" class="col-md-3 p-0 m-0 ml-2">
                                        @csrf
                                        <input type="text" style="opacity:0;"
                                        name="skill_type"
                                        value="@if($skill_type == 'Passive') Passive
                                        @elseif($skill_type == 'Qスキル') Qスキル
                                        @elseif($skill_type == 'Wスキル') Wスキル
                                        @elseif($skill_type == 'Eスキル') Eスキル
                                        @else  Ultimate  @endif">

                                        <!-- <input type="text" style="opacity: 0;"
                                        name="chanpion"
                                        value=""
                                        > -->
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="far fa-file fa-lg fa-fw"></i>New
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>