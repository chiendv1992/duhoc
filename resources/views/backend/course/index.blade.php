@extends('backend.master')
@section('title')
    {{__('D/S Khóa Học')}}
@endsection
@section('brecrum')
    {{__('Khóa Học')}}
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
                            <h3 class="box-title">{{__('Danh Sách Khóa Học')}}</h3>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-2 col-lg-2">
                            <a href="{{route('backend.giangvien.create')}}"
                               class="btn btn-danger">{{__('Thêm Khóa Học')}}</a>
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
                                <th>{{__('Tên Lớp')}}</th>
                                <th>{{__('Trạng Thái')}}</th>
                                <th>{{__('Sửa')}}</th>
                                <th>{{__('Xóa')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $khoahoc)
                                <tr>
                                    <td>{{$khoahoc['id']}}</td>
                                    <td>{{$khoahoc['name']}}</td>
                                    <td>{{$khoahoc['status']}}</td>
                                    <td>
                                        <a href="{{route('backend.giangvien.edit',$khoahoc['id'])}}">{{__('Sửa')}}</a>
                                    </td>
                                    <td><a href="{{route('backend.khoahoc.destroy',$khoahoc['id'])}}">{{__('Xóa')}}</a></td>
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
