@extends('backend.master')
@section('title')
    {{__('D/S Giảng Viên')}}
@endsection
@section('brecrum')
    {{__('Giảng Viên')}}
@endsection
@section('content')
    <section class="content"> 
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-xs-12 col-sm-12col-md-12 col-lg-12">
            	<div class="box box-primary">
		            <div class="box-header">
		            	<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
		            		<h3 class="box-title">{{__('Danh Sách Giảng Viên')}}</h3>
		            	</div>
		            	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		            		<a href="{{route('backend.giangvien.create')}}" class="btn btn-danger">{{__('Thêm Giảng Viên')}}</a>
		            	</div>
		            </div>
            <!-- /.box-header -->
		            <div class="box-body">
		            	<table id="example1" class="table table-bordered table-striped">
		                <thead>
		                <tr>
		                	<th>{{__('STT')}}</th>                	
		                	<th>{{__('Mã GV')}}</th>
		                	<th>{{__('Tên Giảng Viên')}}</th>
		                	<th>{{__('Avatar')}}</th>
		                	<th>{{__('Ngày Sinh')}}</th>
		                	<th>{{__('Địa Chỉ')}}</th>
		                	<th>{{__('SDT')}}</th>
		                	<th>{{__('CMTND')}}</th>
		                	<th>{{__('Sửa')}}</th>
		                	<th>{{__('Xóa')}}</th>
		                	<th>{{__('Xem')}}</th>
		                </tr>
		                </thead>
		                <tbody>
		                	@foreach($giangvien as $teacher)
				                <tr>
				                  <td>{{$teacher['id']}}</td>
				                  <td>{{$teacher['code']}}</td>		                  
				                  <td>{{$teacher['fullname']}}</td>
				                  <td>{{$teacher['image']}}</td>
				                  <td>{{$teacher['birthday']}}</td>
				                  <td>{{$teacher['address']}}</td>
				                  <td>{{$teacher['phone']}}</td>
				                  <td>{{$teacher['cmtnd']}}</td>
				                  <td><a href="">{{__('Sửa')}}</a></td>
				                  <td><a href="">{{__('Xóa')}}</td>
				                  <td><a href="">{{__('Xem Chi tiết')}}</td>
				                </tr>
				            @endforeach
		                </tfoot>
		              </table>
		            </div>
		            <!-- /.box-body -->
		        </div>
            </div>
            <!-- /.col -->           
        </div>
        <!-- /.row -->
    </section>
@endsection()