@extends('backend.master')

@section('title')
    {{__('Thêm Khóa Học')}}
@endsection

@section('brecrum')
    {{__('Khóa Học')}}
@endsection

@section('content')

    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{__('Thêm Khóa Học')}}</h3>
                    </div>
                    <form action="" multiple="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label>{{__('Tên Khóa Học')}}:</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{old('name')}}">
                                @if($errors->has('name'))
                                    <p style="color: red"> {{$errors->first('name')}} </p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>{{__('Trạng Thái')}}:</label>
                                <select name="status" class="form-control">
                                    <option value="">{{__('-- Chọn Trạng Thái --')}}</option>
                                    <option
                                        value="0" @if (old('status') == "0") {{ 'selected' }} @endif>
                                        {{__('Enable')}}
                                    </option>
                                    <option
                                        value="1" @if (old('status') == "1") {{ 'selected' }} @endif>
                                        {{__('Disable')}}
                                    </option>

                                </select>
                            </div>
                            @if($errors->has('status'))
                                <p style="color: red"> {{$errors->first('status')}} </p>
                        @endif
                        <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">{{__('Thêm Khóa Học')}}</button>
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
