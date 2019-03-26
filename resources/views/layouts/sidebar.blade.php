<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('quan-tri')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Quản trị</div>
  </a>
   
@if( Auth::user()->level == 1)      {{-- Quản trị --}}

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Quản trị
    </div>

    <!-- Nav Item - Khóa học Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dstaikhoan')}}">
        <i class="fas fa-business-time"></i>
        <span>Quản lý tài khoản</span>
      </a>
    </li>
        
    <!-- Nav Item - Khóa học Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dskhoahoc')}}">
        <i class="fas fa-business-time"></i>
        <span>Quản lý khóa học</span>
      </a>
    </li>
        
    <!-- Nav Item - Phòng học Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dsphong')}}">
        <i class="fas fa-warehouse"></i>
        <span>Quản lý phòng</span>
      </a>
    </li>
    
    <!-- Nav Item - lớp học Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('dslop')}}">
        <i class="fas fa-user-graduate"></i>
        <span>Quản lý lớp học</span>
      </a>
    </li>

    <!-- Nav Item - Cán bộ Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dsgiaovien')}}">
        <i class="fas fa-users"></i>
        <span>Quản lý giáo viên</span>
      </a>
    </li>

    <!-- Nav Item - học sinh Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dshocsinh')}}">
        <i class="fas fa-user-graduate"></i>
        <span>Quản lý học sinh</span>
      </a>
    </li>
    
    <!-- Nav Item - Dạy Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dsthongbaotruong')}}">
        <i class="fas fa-graduation-cap"></i>
        <span>Quản lý dạy học</span>
      </a>
    </li>

    <!-- Nav Item - Thông báo Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dsthongbaotruong')}}">
        <i class="fas fa-bell"></i>
        <span>Quản lý thông báo trường</span>
      </a>
    </li>

    <!-- Nav Item - Thời khóa biểu Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#TKBCollapse" aria-expanded="true" aria-controls="TKBCollapse">
        <i class="fas fa-calendar-alt"></i>
        <span>Thời khóa biểu</span>
      </a>
      <div id="TKBCollapse" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Chỉnh sửa Thời khóa biểu</h6>
          <a class="collapse-item" href="#">Thêm Thời khóa biểu</a>
          <a class="collapse-item" href="#">Danh Thời khóa biểu</a>
        </div>
      </div>
    </li>


@endif
@if(Auth::user()->level == 2)     {{-- Giáo viên --}}

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Giáo Viên
    </div>

    <!-- Nav Item - Thông báo Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dsthongbaolop')}}">
        <i class="fas fa-bell"></i>
        <span>Quản lý thông báo lớp</span>
      </a>
    </li>

    <!-- Nav Item - điểm Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#DiemCollapse" aria-expanded="true" aria-controls="DiemCollapse">
        <i class="fas fa-award"></i>
        <span>Quản lý điểm</span>
      </a>
      <div id="DiemCollapse" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Danh sách lớp</h6>
          <a class="collapse-item" href="#">Lop 6a</a>
          <a class="collapse-item" href="#">Lop 7a</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Điểm danh Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dsthongbaolop')}}">
        <i class="far fa-list-alt"></i>
        <span>Điểm danh</span>
      </a>
    </li>

    <!-- Nav Item - vi phạm Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('dsthongbaolop')}}">
        <i class="fas fa-bell"></i>
        <span>Vi phạm</span>
      </a>
    </li>

    <!-- Nav Item - Thông báo Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dschude') }}">
        <i class="fas fa-comments"></i>
        <span>Quản lý góp ý</span>
      </a>
    </li>
@endif
@if(Auth::user()->level == 3)      {{-- Phụ huynh --}}

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Phụ huynh
    </div>

    <!-- Nav Item - Góp ý của HS - GV -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dschude') }}">
        <i class="fas fa-comments"></i>
        <span>Quản lý góp ý</span>
      </a>
    </li>
@endif
@if(Auth::user()->level == 4)      {{-- Học sinh --}}

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Học sinh
    </div>

    <!-- Nav Item - Thời khóa biểu của HS -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-bell"></i>
        <span>Thời khóa biểu</span>
      </a>
    </li>

    <!-- Nav Item - Điểm của HS -->
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-award"></i>
        <span>Điểm môn học</span>
      </a>
    </li>

    <!-- Nav Item - Góp ý của HS - GV -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dschude') }}">
        <i class="fas fa-comments"></i>
        <span>Quản lý góp ý</span>
      </a>
    </li>
@endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>