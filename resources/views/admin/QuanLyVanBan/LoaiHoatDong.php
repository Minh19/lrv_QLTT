@extends('layouts.admin')
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content">
    <div class="form-row col-md-12 mx-5 m-3">
        <div class="form-group col-md-4 topnav mt-2">
          <div class=" search-container " >
            <form action="#">
              <input type="text" placeholder="Search..." name="search">
              <button type="submit" class="ml-2 search-query"><i class="fa fa-search "></i></button>
            </form>
          </div>
        </div>
        <div class=" form-group col-md-2 mt-3" style="width: 200px">
            <!--  <label for="LoaiVanBan">Theo loại văn bản</label> -->
            <select class="form-control form-control-sm" id="LoaiVanBan">
              <option>Loại văn bản</option>
              <option>Kế hoạch</option>
              <option>Ấn phẩm</option>
              <option>Danh sách MSSV</option>
              <option>Hợp đồng</option>
            </select>
        </div>
        <div class=" form-group col-md-2 mt-3" style="width: 250px">
            <!--  <label for="DonVi">Theo chuỗi hoạt động</label> -->
            <select class="form-control form-control-sm" id="ChuoiHoatDong">
              <option>Chuỗi hoạt động</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
        </div>
        <div class=" form-group col-md-2 mt-3" style="width: 200px">
          <!--  <label for="DonVi">Theo Đơn Vị</label> -->
            <select class="form-control form-control-sm" id="DonVi">
              <option> Đơn vị</option>
              <option>Khoa CNTT-KD</option>
              <option>Khoa Tài Chính</option>
              <option>CLB Công Nghệ Kinh Tế</option>
              <option>Bell Club</option>
            </select>
        </div>
        <div class="form-group col-md-2 topnav mt-2">
          <div class=" search-container " >
            <form action="#">
              <button type="submit" class="ml-2">Filter</button>
            </form>
          </div>
        </div>
    </div>
    <div class="col-md-12 px-5 pb-5">
        <div class="card">
          <div class="card-body p-0">
            <table class="table">
              <thead >
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="padding-right:0px;padding-left:0px">Tiêu đề văn bản</th>
                  <th style="padding-right:0px;padding-left:0px">Đơn vị gửi duyệt</th>
                  <th style="padding-right:0px;padding-left:0px">Ngày bắt đầu</th>
                  <th style="padding-right:0px;padding-left:0px">Ngày kết thúc</th>
                  <th></th>
                </tr>
              </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>
                        <i class="fas fa-folder-open "></i>
                        <a class="ml-2" href="./QLVanBan/ChuoiHoatDong.html"style="color: black">Chiến dịch MHX</a></td>
                      <td style="padding-right:0px;padding-left:0px">Khoa CNTT-KD</td>
                      <td style="padding-right:0px;padding-left:0px">18 / 09 / 2021</td>   
                      <td style="padding-right:0px;padding-left:0px">30 / 09 / 2021</td>                   
                      <td>
                          <div class="dropdown form-popup">
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
  <!-- /.content-wrapper -->

@stop()