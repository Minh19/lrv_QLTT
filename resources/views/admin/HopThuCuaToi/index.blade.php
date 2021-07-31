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
                      
                      <th style="padding-right:0px">Tiêu đề văn bản</th>
                      <th style="padding-right:0px;padding-left:0px">Đơn vị gửi duyệt</th>
                      <th style="padding-right:0px;padding-left:0px">Ngày gửi duyệt</th>
                      <th style="padding-right:0px">Trạng thái</th>
                      <th style="padding-right:20px;padding-left:0px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $HTCT)
                    <tr>
                      
                      <td><a href="{{route('CTHD',$HTCT->id_dtlactiv )}}"style="color: black">{{$HTCT->dtlactivTitle}}</a></td>
                      <td style="padding-right:0px;padding-left:0px">{{$HTCT->username}}</td>
                      <td style="padding-right:0px;padding-left:0px">{{$HTCT->f_activCreateDate}}</td>                      
                      <td>
                        @if($HTCT->id_status == 1)
                          <span class="badge bg-secondary">{{$HTCT->sttname}}</span>
                        @elseif($HTCT->id_status == 2)
                        <span class="badge bg-warning">{{$HTCT->sttname}}</span>
                        @elseif($HTCT->id_status == 3)
                        <span class="badge bg-success">{{$HTCT->sttname}}</span>
                        @else
                        <span class="badge bg-danger">{{$HTCT->sttname}}</span>
                        @endif
                      </td>
                      <td style="padding-right:20px;padding-left:0px">
                        <div class="dropdown form-popup">
                            <i class="fa fa-ellipsis-v" style="color:gray; width: 30px; text-align:center"></i>
                            <form id="form-delete" method="POST" action="" class="form-container dropdown-content">
                             @csrf @method('DELETE')
                              <a href="{{route('HopThuCuaToi.destroy',$HTCT->id_dtlactiv)}}" class="btn btndelete">Delete </a>
                            </form>
                          </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div> 
            </div>
              <!-- /.card-body -->
            <br>
<div class="pagination pagination-sm float-right">
  {{$data->appends(request()->all())->links()}}
</div>
      </div>
  </div>

  <!-- /.content-wrapper -->
@stop()

@section('js')
<script>
    $('.btndelete').click(function(ev){
      ev.preventDefault();
      var _href = $(this).attr('href');
      $('form#form-delete').attr('action',_href)
      if(confirm('Bạn có muốn xóa không?'))
      $('form#form-delete').submit();
    })
  </script>
@stop()