
<div class="row">
    <div class="col-12">
        <p class="mt-2 mb-1 mb-3 mx-4" style="position: absolute;height: 30px;font-family: Mulish;font-style: normal;font-weight: bold;font-size: 24px;line-height: 30px;letter-spacing: 0.4px;color: #173F7C;">Bình luận/ Đánh giá</p>
    </div>
    <div class="col-12"><p class="mt-6 mx-7">{{$count_cmt}} bình luận</p></div>
</div>



<form action="{{route('comment.store')}}" method="post" role = "form">
    @csrf
    <div class="card-body ">
        <div class="row mx-2" id="phantudiv">
            <div hidden>
                <div class=" col-8">
                    <textarea name="id_dtlactiv" rows="2" cols="60" id="texterea" placeholder="Nhập bình luận/Đánh giá">{{$data->id_dtlactiv}}</textarea>
                </div>
                <div class=" col-8">
                    <textarea name="id_activ" rows="2" cols="60" id="texterea" placeholder="Nhập bình luận/Đánh giá">{{$data->id_activ}}</textarea>
                </div>
                <div class=" col-8">
                    <textarea name="id_user" rows="2" cols="60" id="texterea" placeholder="Nhập bình luận/Đánh giá">{{$data->id_user}}</textarea>
                </div>
            </div>
            <div class=" col-8">
                <textarea name="cmtContent" rows="2" cols="60" id="texterea" placeholder="Nhập bình luận/Đánh giá"></textarea>
            </div>
            <div class="col-4">
                <section class="overlay">
                <button type="submit" class="btn btn-info btn-sm mb-4"  style="color: #0016DF; font-weight: bold;">GỬI ĐÁNH GIÁ</button>
                </section>
            </div>
        </div>
    </div>
</form>