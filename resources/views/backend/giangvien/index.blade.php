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
                    <div class="box-header col-xs-12 col-sm-12col-md-12 col-lg-12 ">
                        <div class="col-xs-8 col-sm-6 col-md-10 col-lg-10">
                            <h3 class="box-title">{{__('Danh Sách Giảng Viên')}}</h3>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-2 col-lg-2">
                            <a href="{{route('backend.giangvien.create')}}"
                               class="btn btn-danger">{{__('Thêm Giảng Viên')}}</a>
                        </div>
                    </div>
                    <div class="box-header col-xs-12 col-sm-12col-md-12 col-lg-12 ">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
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
                                    <td>
                                        @if($teacher['image'] != null)
                                            <img src="{{url('backend/upload/giangvien')}}/{{$teacher['image']}}" alt=""
                                                 width="100px">
                                        @else
                                            <img src="{{url('noimage.png')}}" alt="" width="100px">
                                        @endif
                                    </td>
                                    <td>{{$teacher['birthday']}}</td>
                                    <td>{{$teacher['address']}}</td>
                                    <td>{{$teacher['phone']}}</td>
                                    <td>{{$teacher['cmtnd']}}</td>
                                    <td><a href="{{route('backend.giangvien.edit',$teacher['id'])}}">{{__('Sửa')}}</a>
                                    </td>
                                    <td><a href="{{route('backend.giangvien.destroy',$teacher['id'])}}" onclick="xacnhanxoa()">{{__('Xóa')}}</a></td>
                                    <td><a href="{{route('backend.giangvien.edit',$teacher['id'])}}">{{__('Xem Chi tiết')}}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
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
