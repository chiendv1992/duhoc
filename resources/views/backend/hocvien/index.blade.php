@extends('backend.master')
@section('title')
    {{__('D/S Học Viên')}}
@endsection
@section('brecrum')
    {{__('Học Viên')}}
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
                            <h3 class="box-title">{{__('Danh Sách Học Viên')}}</h3>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-2 col-lg-2">
                            <a href="{{route('backend.hocvien.create')}}"
                               class="btn btn-danger">{{__('Thêm Học Viên')}}</a>
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
                                <th>{{__('Lớp Học')}}</th>
                                <th>{{__('Mã Học Viên')}}</th>
                                <th>{{__('Tên Học Viên')}}</th>
                                <th>{{__('Avatar')}}</th>
                                <th>{{__('Ngày Sinh')}}</th>
                                <th>{{__('Địa Chỉ')}}</th>
                                <th>{{__('SDT')}}</th>
                                <th>{{__('CMTND')}}</th>
                                <th>{{__('Sửa')}}</th>
                                <th>{{__('Xóa')}}</th>
                                <th>{{__('Xem')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hocvien as $hv)
                                <tr>
                                    <td>{{$hv['id']}}</td>
                                    <td>{{$hv->lop->name}}</td>
                                    <td>{{$hv['code']}}</td>
                                    <td>{{$hv['fullname']}}</td>
                                    <td>
                                        @if($hv['image'] != null)
                                            <img src="{{url('backend/upload/customer')}}/{{$hv['image']}}" alt=""
                                                 width="100px">
                                        @else
                                            <img src="{{url('noimage.png')}}" alt="" width="100px">
                                        @endif
                                    </td>
                                    <td>{{$hv['birthday']}}</td>
                                    <td>{{$hv['address']}}</td>
                                    <td>{{$hv['phone']}}</td>
                                    <td>{{$hv['cmtnd']}}</td>
                                    <td><a href="{{route('backend.hocvien.edit',$hv['id'])}}">{{__('Sửa')}}</a>
                                    </td>
                                    <td><a href="{{route('backend.hocvien.destroy',$hv['id'])}}"
                                           onclick="xacnhanxoa()">{{__('Xóa')}}</a></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter" onclick="$.del('{{$hv->id}}')">
                                            {{__('Xem Chi Tiêt')}}
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <label> name: </label><br>
                                                    <label> quê quán : 12222222 </label><br>
                                                    <label> sdt : 123</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        $( document ).ready(function() {
            $.del = function(id){
                $('#id').val(id);
                $('#del').modal();
            }
        });
    </script>

@endsection()
