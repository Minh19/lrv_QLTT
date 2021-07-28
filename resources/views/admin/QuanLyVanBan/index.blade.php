@extends('layouts.admin')
@section('main')

<div class="content ">
    <div class="row mt-5 mx-5" style="font-family: Mulish;font-style: normal;font-weight: bold;font-size: 15px;line-height: 20px;letter-spacing: 0.2px;color: black;background-color: #E9EAEF; height: 50px">
        <div class="col-3  mt-1">
          <span class="badge bg-warning" style="width: 25px; height:15px;"> </span> 
          Hoạt động thường niên
        </div>
        <div class="col-3 mt-1">
          <span class="badge bg-primary" style="width: 25px; height:15px;"> </span> 
          Cuộc thi học thuật 
        </div>
        <div class="col-3 mt-1">
          <span class="badge bg-success" style="width: 25px; height:15px;"> </span> 
          Hoạt động phong trào</div>
        <div class="col-3 mt-1">
          <span class="badge bg-secondary" style="width: 25px; height:15px;"> </span> 
          HĐ/VB khác
        </div>
    </div>
    <div class="card mx-5 mr-5">
          <div class=" m-2 mx-3">
              <span class="badge bg-warning" style="width: 25px; height:15px;"> </span>
              <a href="#" style="color: black">Chiến dịch MHX</a>
              <div class="dropdown form-popup" style="float: right;">
                <i class="fa fa-ellipsis-v" style="color:gray; width: 30px; text-align:center"></i>
                <form class="form-container dropdown-content">
                  <button type="button" class="btn">Delete </button>
                  <button type="button" class="btn">Archieve</button>
                  <button type="button" class="btn">Mark as read/unread </button>
                  <button type="button" class="btn">Hide </button>
                </form>
              </div>
          </div>
    </div>         
</div>
@stop()