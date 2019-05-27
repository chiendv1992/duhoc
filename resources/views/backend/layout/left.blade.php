<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Name</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN MENU</li>
            <li class="{{ url()->current()== route('backend.dashboard.list')?'active':''}} treeview">
                <a href="{{route('backend.dashboard.list')}}">
                    <i class="fa fa-dashboard"></i> 
                    <span>{{__('Bảng Quản Trị')}}</span>
                </a>                
            </li>
            <li class="
                {{
                    url()->current()== route('backend.giangvien.list')||
                    url()->current()== route('backend.giangvien.create')
                    ?'active':''
                }}
                treeview"
            >
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>{{__('Quản Lý Nội Bộ')}}</span>
                    <span class="pull-right-container">
                        <span class="label label-primary pull-right">4</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('backend.giangvien.list')}}"><i class="fa fa-circle-o"></i> {{__('Khóa Học')}}</a></li>
                    <li><a href="{{route('backend.giangvien.list')}}"><i class="fa fa-circle-o"></i> {{__('Lớp Học')}}</a></li>
                    <li><a href="{{route('backend.giangvien.list')}}"><i class="fa fa-circle-o"></i> {{__('Giảng Viên')}}</a></li>
                    <li><a href="{{route('backend.giangvien.list')}}"><i class="fa fa-circle-o"></i> {{__('Học Viên')}}</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('backend.giangvien.list')}}">
                    <i class="fa fa-th"></i> <span>{{__('Quản Lý Điểm')}}</span>
                </a>
            </li>            
            <li>
                <a href="{{route('backend.giangvien.list')}}">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="{{route('backend.giangvien.list')}}">
                    <i class="fa fa-folder"></i> <span>{{__('Quản Lý Tin Tức')}}</span></i>
                </a>
            </li>            
            
            <li><a href="{{route('backend.giangvien.list')}}"><i class="fa fa-book"></i> <span>{{__('Quản Lý Banner')}}</span></a></li>

            <li class="header">{{__('Khác')}}</li>
            <li><a href="{{route('backend.giangvien.list')}}"><i class="fa fa-circle-o text-red"></i> <span>{{__('Hướng Dẫn')}}</span></a></li>
            <li><a href="{{route('backend.giangvien.list')}}"><i class="fa fa-circle-o text-yellow"></i> <span>{{__('Cảnh Báo')}}</span></a></li>
            <li><a href="{{route('backend.giangvien.list')}}"><i class="fa fa-circle-o text-aqua"></i> <span>{{__('Thông Tin')}}</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
