@extends('layouts.admin')
@section('main')

  <!-- Content Wrapper. Contains page content -->
<div class="content p-5">
    <div class="row px-5 my-1" style="font-family: Mulish;font-style: normal;font-weight: bold;font-size: 15px;line-height: 20px;letter-spacing: 0.2px;color: #7B7C84;">
        <div class="col-5">{{$data->activtypeTitle}}</div>
        <div class="col-3">{{$data->username}}</div>
        <div class="col-2">{{$data->f_activCreateDate}}</div>
        <div class="col-2"><a href="#">Xem chi tiết</a></div>
    </div>
    <div class="card ">
        <div class="row">
            <div class="col-6"><p class="my-3 mx-4" style="position: absolute;font-family: Mulish;font-style: normal;font-weight: bold;font-size: 19px;line-height: 24px;letter-spacing: 0.4px;color: #14151B;">{{$data->dtlactivTitle}}</p></div>
            <div class="col-6">
                <!-- <p class=" my-3 badge bg-success" style="height:20px">Duyệt thành công</p> -->
               
                        @if($data->sttname == "CHƯA DUYỆT")
                          <span class="my-3 badge bg-secondary">{{$data->sttname}}</span>
                        @elseif($data->sttname == "CHỜ DUYỆT")
                        <span class="my-3 badge bg-warning">{{$data->sttname}}</span>
                        @elseif($data->sttname == "DUYỆT THÀNH CÔNG")
                        <span class="my-3 badge bg-success">{{$data->sttname}}</span>
                        @else
                        <span class="my-3 badge bg-danger">{{$data->sttname}}</span>
                        @endif
                     
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body py-0">
                <table class="table p-0">
                    <tr>
                      <th class="col-3">Loại văn bản</th>
                      <td>{{$data->f_activTitle}}</td>
                    </tr>
                    <tr>
                      <th>Mô tả ngắn gọn</th>
                      <td>{{$data->f_activDescribe}}</td>
                    </tr>
                    <tr>
                      <th>Tệp tin gửi duyệt </th>
                      <td style="font-style:italic;"><i class="fas fa-file-download mr-1"></i>  Nhấn vào đây để tải xuống </td>
                    </tr>
                </table>
            </div>
            <div class="card-body row p-0">
                <div class="col-md-4"></div>
                    <section class="overlay">
                           <button type="submit" class="btn btn-info btn-sm" id="duyet" style="color: #0016DF; font-weight: bold;"> PHÊ DUYỆT</button>
                           <button type="submit" class="btn btn-info btn-sm m-4" id="choduyet" style="color: #F03434; font-weight: bold;">TỪ CHỐI</button>
                    </section>
              </div>
            </div>
            <div class="card mb-10">
                
               <?php use App\Http\Controllers\CommentController;
               echo CommentController::create($data); ?>

                <?php echo CommentController::index($data); ?>
                
                </div>  
            </div>
        </div>
    </div>
</div>


@stop()