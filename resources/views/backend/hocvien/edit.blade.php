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
                                @foreach($lops as $lop)
                                    <option value="{{$lop['id']}}"
                                    @if ($hocVienId['class_id'] == $lop['id'])
                                        {{ 'selected' }}
                                        @endif>
                                        {{$lop['name']}}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('lop'))
                                <p style="color: red"> {{$errors->first('lop')}} </p>
                            @endif

                            <div class="form-group">
                                <label>{{__('Mã NV')}}:</label>
                                <input type="text" class="form-control" name="code"
                                       value="{{old('code',isset($hocVienId) ? $hocVienId['code'] : null)}}">
                                @if($errors->has('code'))
                                    <p style="color: red"> {{$errors->first('code')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Họ Tên')}}:</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{old('name',isset($hocVienId) ? $hocVienId['fullname'] : null)}}">
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
                                           value="{{old('birthday',isset($hocVienId) ? $hocVienId['birthday'] : null)}}">

                                </div>
                                @if($errors->has('birthday'))
                                    <p style="color: red"> {{$errors->first('birthday')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Địa Chỉ')}}:</label>
                                <input type="text" class="form-control" name="address"
                                       value="{{old('address',isset($hocVienId) ? $hocVienId['address'] : null)}}">
                                @if($errors->has('address'))
                                    <p style="color: red"> {{$errors->first('address')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Số Điện Thoại')}}:</label>
                                <input type="text" class="form-control" name="phone"
                                       value="{{old('phone',isset($hocVienId) ? $hocVienId['phone'] : null)}}">
                                @if($errors->has('phone'))
                                    <p style="color: red"> {{$errors->first('phone')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Số CMTND')}}:</label>
                                <input type="text" class="form-control" name="cmtnd"
                                       value="{{old('cmtnd',isset($hocVienId) ? $hocVienId['cmtnd'] : null)}}">
                                @if($errors->has('cmtnd'))
                                    <p style="color: red"> {{$errors->first('cmtnd')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">{{__('Avatar')}}:</label><br/>
                                <img
                                    src="
                                        @if($hocVienId->image)
                                    {{asset('backend/upload/customer/')}}/{{$hocVienId->image}}
                                    @else
                                    {{url('noimage.png')}}
                                    @endif
                                        "
                                    width="200px">
                                <input type="hidden" name="img_curr" value="{{$hocVienId->image}}">
                                <input type="file" name="images">
                                <p class="help-block">{{ 'Chọn file ảnh từ máy của bạn' }}.</p>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{__('Sửa Học Viên')}}</button>
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
