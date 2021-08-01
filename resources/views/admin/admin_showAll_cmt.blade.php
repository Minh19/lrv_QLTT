

<div class="row">
    <div class="col-md-12 ml-0 pl-0 mr-5">
        <div class="typing text-success"></div>
        @foreach($comments as $comment)
            <ul class="comment__box">
                <li class="comment" style="list-style-type: none">
                    <div class="mb-2 ml-3 mr-9" style="background-color: #f2f2f2">
                            <div class="card-body">
                                <h6 style="font-weight: bold;">{{$comment->username}}</h6>
                                <p>{{$comment->cmtContent}}</p>
                                <div>
                                    <i class="far fa-clock"></i>
                                    <small>{{$comment->created_at}}</small>
                                </div>
                            </div>
                        
                    </div>
                </li>
            </ul>
        @endforeach
        <div class="pagination pagination-sm float-right">
        {{$comments->appends(request()->all())->links()}}
          </div>
        </div>
    </div>
</div> 