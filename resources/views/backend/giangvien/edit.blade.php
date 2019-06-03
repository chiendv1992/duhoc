@extends('backend.master')

@section('title')
    {{__('Sửa Giảng Viên')}}
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
                    <form action="" multiple="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <label>{{__('Lớp')}}:</label>
                            <select name="lop" class="form-control">
                                <option value="">--- {{__('Chọn Lớp')}} --</option>
                                {{--                                @foreach($lops as $lop)--}}
                                {{--                                    <option value="{{$lop['id']}}">{{$lop['name']}}</option>--}}
                                {{--                                @endforeach--}}
                            </select>
                            {{--                            @if($errors->has('lop'))--}}
                            {{--                                <p style="color: red"> {{$errors->first('lop')}} </p>--}}
                            {{--                            @endif--}}

                            <div class="form-group">
                                <label>{{__('Mã NV')}}:</label>
                                <input type="text" class="form-control" name="code"
                                       value="{{old('code',isset($giangvien) ? $giangvien['code'] : null)}}">
                                @if($errors->has('code'))
                                    <p style="color: red"> {{$errors->first('code')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Họ Tên')}}:</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{old('name',isset($giangvien) ? $giangvien['fullname'] : null)}}">
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
                                    <input type="date" class="form-control pull-right" name="birthday"
                                           value="{{old('birthday',isset($giangvien) ? $giangvien['birthday'] : null)}}">

                                </div>
                                @if($errors->has('ngaysinh'))
                                    <p style="color: red"> {{$errors->first('ngaysinh')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Địa Chỉ')}}:</label>
                                <input type="text" class="form-control" name="address"
                                       value="{{old('address',isset($giangvien) ? $giangvien['address'] : null)}}">
                                @if($errors->has('address'))
                                    <p style="color: red"> {{$errors->first('address')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Số Điện Thoại')}}:</label>
                                <input type="text" class="form-control" name="phone"
                                       value="{{old('phone',isset($giangvien) ? $giangvien['phone'] : null)}}">
                                @if($errors->has('phone'))
                                    <p style="color: red"> {{$errors->first('phone')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Số CMTND')}}:</label>
                                <input type="text" class="form-control" name="cmtnd"
                                       value="{{old('cmtnd',isset($giangvien) ? $giangvien['cmtnd'] : null)}}">
                                @if($errors->has('cmtnd'))
                                    <p style="color: red"> {{$errors->first('cmtnd')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">{{__('Avatar')}}:</label><br/>
                                <img
                                    src="
                                        @if($giangvien->image)
                                            {{asset('backend/upload/giangvien/')}}/{{$giangvien->image}}
                                        @else
                                            {{url('noimage.png')}}
                                        @endif
                                    "
                                     width="200px">
                                <input type="hidden" name="img_curr" value="{{$giangvien->image}}">
                                <input type="file" name="images">
                                <p class="help-block">{{ 'Chọn file ảnh từ máy của bạn' }}.</p>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{__('Sửa Giảng Viên')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col -->
        @include('backend.template.thongke')
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection()
