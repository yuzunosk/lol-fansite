                    <div class="card  col-2 bg-dark text-light p-0 mb-5" style="box-sizing: border-box;">
                        <h5 class="card-header">
                        Passive
                        </h5>
                        <div class="card-body p-0" >
                                <img src="asset('storage/'.$skillDatas->skill_icon_1)" class="card-img" style="height:100px;object-fit:cover;">

                                <h5 class="card-title col-10">NoーName</h5>
                                <h5 class="card-title col-10">No-Name</h5>
                                <p class="card-text col-12"><small class="text-muted">Update / No-Data</small></p>
                        </div>
                        <div class="card-footer">
                                    <div class="row">
                                        <form action="{{ route('skills.edit', $skillDatas->id) }}" method="get" class="col-md-3 p-0 m-0 ml-2">
                                        @csrf
                                        <button class="btn-sm active border-dark text-dark bg-white" style="cursor:pointer;">
                                        <i class="fas fa-edit fa-lg fa-fw"></i>Edit
                                        </button>
                                        </form>
                                    </div>
                        </div>
                    </div>