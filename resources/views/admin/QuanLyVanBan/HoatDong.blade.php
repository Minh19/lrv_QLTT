@extends('layouts.admin')
@section('main')
  
<!-- Content Wrapper. Contains page content -->
<div class="content p-5">
    <div class="row px-5 my-1" style="font-family: Mulish;font-style: normal;font-weight: bold;font-size: 15px;line-height: 20px;letter-spacing: 0.2px;color: #7B7C84;">
        <div class="col-5">[Cuộc thi học thuật] </div>
        <div class="col-5">[Cuộc thi Global Talents 2021]</div>
        <div class="col-2">[Khoa CNTT-KD]</div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-body p-0">
          <table class="table">
            <thead >
              <tr>
                <th style="width: 10px">#</th>
                <th>Tiêu đề văn bản</th>
                <th>Ngày gửi duyệt</th>
                <th>Trạng thái</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>
                  <i class="far fa-file mr-3" ></i>
                  <a href="../QLVanBan/ChiTietHoatDong.html"style="color: black">Kế hoạch Cuộc thi học thuật Global Talent 2021</a>
                </td>
                <td>18 / 09 / 2021</td>                      
                <td><span class="badge bg-success">Duyệt thành công</span></td>
                <td>
                  <div class="dropdown form-popup" style="float: right;">
                    <i class="fa fa-ellipsis-v" style="color:gray; width: 30px; text-align:center"></i>
                    <form class="form-container dropdown-content">
                      <button type="button" class="btn">Delete </button>
                      <button type="button" class="btn">Archieve</button>
                      <button type="button" class="btn">Mark as read/unread </button>
                      <button type="button" class="btn">Hide </button>
                    </form>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>
                  <i class="far fa-file mr-3" ></i>
                  <a href="../QLVanBan/ChiTietHoatDong.html"style="color: black">Hợp đồng tài trợ Cuộc thi học thuật Global Talent 2021</a>
                </td>
                <td>18 / 09 / 2021</td>                      
                <td><span class="badge bg-success">Duyệt thành công</span></td>
                <td>
                  <div class="dropdown form-popup" style="float: right;">
                    <i class="fa fa-ellipsis-v" style="color:gray; width: 30px; text-align:center"></i>
                    <form class="form-container dropdown-content">
                      <button type="button" class="btn">Delete </button>
                      <button type="button" class="btn">Archieve</button>
                      <button type="button" class="btn">Mark as read/unread </button>
                      <button type="button" class="btn">Hide </button>
                    </form>
                  </div>
                </td>
              </tr>
                          
            </tbody>
          </table>
        </div> 
      </div>
      <!-- /.card-body -->
      <br>
      <ul class="pagination pagination-sm float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div>
</div>
@stop()