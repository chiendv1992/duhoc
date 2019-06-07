@extends('backend.master')

@section('title')
    {{__('Edit Lớp')}}
@endsection

@section('brecrum')
    {{__('Lớp')}}
@endsection

@section('content')

    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Edit Lớp')}}</h3>
                    </div>
                    <form action="" multiple="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <label>{{__('Chọn Khóa Hoc')}}:</label>
                            <select name="course" class="form-control">
                                @foreach($courses as $course)
                                    <option
                                        value="{{$course['id']}}"
                                    @if($lopId['couse_id'] == $course['id'])
                                        {{'selected'}}
                                        @endif
                                    >
                                        {{$course['name']}}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('lop'))
                                <p style="color: red"> {{$errors->first('lop')}} </p>
                            @endif
                            <div class="form-group">
                                <label>{{__('Tên Lớp')}}:</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{old('name',isset($lopId)?$lopId['name']:null)}}">
                                @if($errors->has('name'))
                                    <p style="color: red"> {{$errors->first('name')}} </p>
                                @endif
                            </div>
                            <label>{{__('Trạng Thái')}} :</label>
                            <select name="status" class="form-control">
                                <option
                                    value="0" @if($lopId['status'] == 0 ) {{'selected'}}@endif>{{__('Kết Thúc')}}</option>
                                <option
                                    value="1" @if($lopId['status'] == 1 ) {{'selected'}}@endif>{{__('Đang Diễn Ra')}}</option>
                                <option
                                    value="2" @if($lopId['status'] == 2 ) {{'selected'}}@endif>{{__('Sắp Diễn Ra')}}</option>
                            </select>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{__('Thêm Lớp')}}</button>
                            <button type="reset" class="btn btn-default">{{__('Nhập Lại')}}</button>
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
