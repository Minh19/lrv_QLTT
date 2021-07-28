@extends('layouts.admin')
@section('main')

<!-- Content Wrapper. Contains page content -->
<div class="content p-5">
      <div class="col-md-12">
            <div class="card">
              <div class="card-body p-0">
                <table class="table">
                  <thead >
                    <tr>
                      <th style="width: 5px; padding-right:0px">#</th>
                      <th style="padding-right:0px">Tiêu đề văn bản</th>
                      <th style="padding-right:0px;padding-left:0px">Đơn vị gửi duyệt</th>
                      <th style="padding-right:0px;padding-left:0px">Ngày gửi duyệt</th>
                      <th style="padding-right:0px">Trạng thái</th>
                      <th style="padding-right:20px;padding-left:0px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td><a href="#"style="color: black">Kế hoạch Chiến dịch MHX</a></td>
                      <td style="padding-right:0px;padding-left:0px">Khoa CNTT-KD</td>
                      <td style="padding-right:0px;padding-left:0px">18 / 09 / 2021</td>                      
                      <td><span class="badge bg-success">Duyệt thành công</span></td>
                      <td style="padding-right:20px;padding-left:0px">
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
                    <tr>
                      <td>2.</td>
                      <td><a href="#"style="color: black">Kế hoạch Chiến dịch MHX</a></td>
                      <td style="padding-right:0px;padding-left:0px">Khoa Tài Chính </td>
                      <td style="padding-right:0px;padding-left:0px">18 / 09 / 2021</td>                      
                      <td><span class="badge bg-success">Duyệt thành công</span></td>
                      <td style="padding-right:20px;padding-left:0px">
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