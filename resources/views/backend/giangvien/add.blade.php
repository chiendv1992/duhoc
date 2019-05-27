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
                    <form action="" multiple="" method="post">
                        {{csrf_field()}}
                        <div class="box-body">
                            <label>{{__('Lớp')}}:</label>
                            <select name="lop" class="form-control">
                                <option selected="">--- {{__('Chọn Lớp')}} --</option>
                                @foreach($lops as $lop)
                                    <option value="{{$lop['id']}}">{{$lop['name']}}</option>
                                @endforeach
                            </select>

                            <div class="form-group">
                                <label>{{__('Mã NV')}}:</label>
                                <input type="text" class="form-control" name="code" value="{{old('code',isset($customer) ? $customer['code'] : null)}}">
                                @if($errors->has('code'))
                                    <p style="color: red"> {{$errors->first('code')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Họ Tên')}}:</label>
                                <input type="text" class="form-control" name="name" value="{{old('name',isset($customer) ? $customer['fullname'] : null)}}">
                                @if($errors->has('name'))
                                    <p style="color: red"> {{$errors->first('name')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Ngày Sinh')}}  {{ '(mm : tháng, dd: Ngày, yyyy: năm)' }}:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control pull-right" name="ngaysinh" value="{{old('ngaysinh',isset($customer) ? $customer['birthday'] : null)}}">

                                </div>
                                @if($errors->has('ngaysinh'))
                                    <p style="color: red"> {{$errors->first('ngaysinh')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Địa Chỉ')}}:</label>
                                <input type="text" class="form-control" name="address" value="{{old('address',isset($customer) ? $customer['address'] : null)}}">
                                @if($errors->has('address'))
                                    <p style="color: red"> {{$errors->first('address')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Số Điện Thoại')}}:</label>
                                <input type="text" class="form-control" name="phone" value="{{old('phone',isset($customer) ? $customer['phone'] : null)}}">
                                @if($errors->has('phone'))
                                    <p style="color: red"> {{$errors->first('phone')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Số CMTND')}}:</label>
                                <input type="text" class="form-control" name="cmtnd" value="{{old('cmtnd',isset($customer) ? $customer['cmtnd'] : null)}}">
                                @if($errors->has('cmtnd'))
                                    <p style="color: red"> {{$errors->first('cmtnd')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">{{__('Avatar')}}</label>
                                <input type="file" name="images">
                                <p class="help-block">{{ 'Chọn file ảnh từ máy của bạn' }}.</p>
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
