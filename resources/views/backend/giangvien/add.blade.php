@extends('backend.master')
@section('title')
    {{__('Thêm Giảng Viên')}}
@endsection
@section('brecrum')
    {{__('Giảng Viên')}}
@endsection
@section('content')
    <section class="content">

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Thêm Giảng Viên')}}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{__('Địa chỉ Email')}} :</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{__('Mã NV')}}</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Date:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control pull-right" id="datepicker">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{__('Địa Chỉ')}}</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{__('Ngày Sinh')}}</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{__('Số Điện Thoại')}}</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">{{__('Số CMTND')}}</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Avatar</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Chọn file ảnh từ máy của bạn.</p>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{__('Thêm Giảng Viên')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Inventory</span>
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
                        <span class="info-box-text">Mentions</span>
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
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection()
