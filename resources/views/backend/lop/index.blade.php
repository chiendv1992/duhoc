@extends('backend.master')
@section('title')
    {{__('D/S Lớp Học')}}
@endsection
@section('brecrum')
    {{__('Lớp Học')}}
@endsection
@section('content')
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="box box-primary">
                    <div class="box-header col-xs-12 col-sm-12col-md-12 col-lg-12 ">
                        <div class="col-xs-8 col-sm-6 col-md-10 col-lg-10">
                            <h3 class="box-title">{{__('Danh Sách Lớp Học')}}</h3>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-2 col-lg-2">
                            <a href="{{route('backend.course.create')}}"
                               class="btn btn-danger">{{__('Thêm Lớp Học')}}</a>
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
                                <th>{{__('Tên Khóa Học')}}</th>
                                <th>{{__('Tên Lớp Học')}}</th>
                                <th>{{__('Trạng Thái')}}</th>
                                <th>{{__('Sửa')}}</th>
                                <th>{{__('Xóa')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lops as $lop)
                                <tr>
                                    <td>{{$lop['id']}}</td>
                                    <td>{{$lop['couse_id']}}</td>
                                    <td>{{$lop['name']}}</td>
                                    <td>@if($lop['status'] ==0)
                                            {{__('Kết Thúc')}}
                                        @elseif($lop['status'] ==1)
                                            {{__('Đang Học') }}
                                        @else
                                            {{__('Sắp Bắt đầu')}}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('backend.course.edit',$lop['id'])}}">{{__('Sửa')}}</a>
                                    </td>
                                    <td><a href="{{route('backend.course.destroy',$lop['id'])}}"
                                           onclick="xacnhanxoa()">{{__('Xóa')}}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">{{__('Tổng Số Khóa Học')}}</span>
                        <span class="info-box-number">5,200</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                50% Increase in 30 Days
            </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">{{__('Khóa Đang Học')}}</span>
                        <span class="info-box-number">92,050</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                20% Increase in 30 Days
            </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Downloads</span>
                        <span class="info-box-number">114,381</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                70% Increase in 30 Days
            </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Direct Messages</span>
                        <span class="info-box-number">163,921</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                40% Increase in 30 Days
            </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

        </div>
        <!-- /.row -->
    </section>
@endsection()
