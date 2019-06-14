@extends('backend.master')

@section('title')
    {{__('Thêm Category')}}
@endsection

@section('brecrum')
    {{__('Category')}}
@endsection

@section('content')

    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Thêm Category')}}</h3>
                    </div>
                    <form action="" multiple="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <label>{{__('Category')}}:</label>
                                <select name="parent" class="form-control">
                                    <option value="0">--{{__('Root')}}--</option>
                                    {{ cate_parent($parent) }}
                                </select>
                            <div class="form-group">
                                <label>{{__('Tên')}}:</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{old('name')}}">
                                @if($errors->has('name'))
                                    <p style="color: red"> {{$errors->first('name')}} </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>{{__('Tiêu Đề')}}:</label>
                                <input type="text" class="form-control" name="title"
                                       value="{{old('title')}}">
                                @if($errors->has('title'))
                                    <p style="color: red"> {{$errors->first('title')}} </p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>{{__('Trạng Thái')}}:</label>
                                <select name="status" class="form-control">
                                    <option value="">{{__('Chọn Trạng Thái')}}</option>
                                    <option value="0" @if (old('status') == '0') {{ 'selected' }} @endif>{{__('Ẩn')}}</option>
                                    <option value="1" @if (old('status') == '1') {{ 'selected' }} @endif>{{__('Hiển Thị')}}</option>
                                </select>
                                @if($errors->has('status'))
                                    <p style="color: red"> {{$errors->first('status')}} </p>
                                @endif
                            </div>

                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Thêm Category')}}</button>
                            </div>
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
