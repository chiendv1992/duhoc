@extends('backend.master')
@section('title')
    {{__('D/S Category')}}
@endsection
@section('brecrum')
    {{__('Category')}}
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
                            <h3 class="box-title">{{__('Danh Sách Category')}}</h3>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-2 col-lg-2">
                            <a href="{{route('backend.category.create')}}"
                               class="btn btn-danger">{{__('Thêm Category')}}</a>
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
                                <th>{{__('Parent_id')}}</th>
                                <th>{{__('Tên Category')}}</th>
                                <th>{{__('Tiêu Đề')}}</th>
                                <th>{{__('Trạng Thái')}}</th>
                                <th>{{__('Sửa')}}</th>
                                <th>{{__('Xóa')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $cate)
                                <tr>

                                    <td>{{$cate['id']}}</td>
                                    <td>
                                        @if($cate['parent_id'] == 0)
                                            {{ 'Root' }}
                                        @else
                                            <?php
                                                $parent = DB::table('category')->where('id', $cate['parent_id'])->first();
//                                                 echo $parent->name;
                                            dd($parent->name)
                                            ?>
                                        @endif
                                    </td>
                                    <td>{{$cate['name']}}</td>
                                    <td>{{$cate['title']}}</td>
                                    <td>
                                        @if($cate['status']==1)
                                            {{ 'Hiển Thị' }}
                                        @else
                                            {{ 'Ẩn' }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('backend.category.edit',$cate['id'])}}">{{__('Sửa')}}</a>
                                    </td>
                                    <td><a href="{{route('backend.category.destroy',$cate['id'])}}"
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
        </div>
        <!-- /.row -->
    </section>
    <script type="text/javascript">
        $(document).ready(function () {
            $.del = function (id) {
                $('#id').val(id);
                $('#del').modal();
            }
        });
    </script>

@endsection()
