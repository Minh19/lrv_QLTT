@extends('layouts.admin')
@section('main')

  <!-- Content Wrapper. Contains page content -->
<div class="content p-5">
    <div class="row px-5 my-1" style="font-family: Mulish;font-style: normal;font-weight: bold;font-size: 15px;line-height: 20px;letter-spacing: 0.2px;color: #7B7C84;">
        <div class="col-6">Ấn phẩm cuộc thi học thuật Global Talent 2021</div>
        <div class="col-3">18 / 09 / 2021</div>
        <div class="col-1"></div>
        <div class="col-2">Khoa CNTT-KD</div>
    </div>
    <div class="card ">
        <div class="row">
            <div class="col-6"><p class=" m-3 badge bg-success" style="height:20px">Duyệt thành công</p></div>
        </div>
        <div class="card mb-4">
            <div class="card-body py-0">
                <table class="table p-0">
                    <tr>
                      <th class="col-3">Loại văn bản</th>
                      <td>Ấn phẩm cuộc thi</td>
                    </tr>
                    <tr>
                      <th>Mô tả ngắn gọn</th>
                      <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui, non pulvinar lorem felis nec erat</td>
                    </tr>
                    <tr>
                      <th>Tệp tin gửi duyệt </th>
                      <td style="font-style:italic;"><i class="fas fa-file-download mr-1"></i>  Nhấn vào đây để tải xuống </td>
                    </tr>
                </table>
            </div>
            <div class="card-body row p-0"></div>
        </div>
        <div class="card mb-10">
            <div class="row">
                <div class="col-12">
                    <p class="mt-2 mb-1 mb-3 mx-4" style="position: absolute;height: 30px;font-family: Mulish;font-style: normal;font-weight: bold;font-size: 24px;line-height: 30px;letter-spacing: 0.4px;color: #173F7C;">Bình luận/ Đánh giá</p>
                </div>
                <div class="col-12"><p class="mt-6 mx-7">0 bình luận</p></div>
            </div>
            <div class="card-body ">
                <div class="row mx-2" id="phantudiv">
                    <div class=" col-8">
                        <textarea rows="2" cols="60" id="texterea" placeholder="Nhập bình luận/Đánh giá"></textarea>
                    </div>
                    <div class="col-4">
                        <section class="overlay">
                        <button type="submit" class="btn btn-info btn-sm mb-4"  style="color: #0016DF; font-weight: bold;">GỬI ĐÁNH GIÁ</button>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ml-0 pl-0 mr-5">
                    <div class="typing text-success"></div>
                    <ul class="comment__box">
                        <li class="comment" style="list-style-type: none">
                            <div class="mb-2 ml-3 mr-9" style="background-color: #f2f2f2">
                                <div class="card-body">
                                    <h6 style="font-weight: bold;">John Doe</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur itaque,
                                        exercitationem fuga sint enim non cupiditate deserunt soluta consequuntur
                                        blanditiis!</p>
                                    <div>
                                        <i class="far fa-clock"></i>
                                        <small>11:30 PM</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</div>



@stop()