<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" type="text/css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}" type="text/css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
          <b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
          <b>Admin</b>FUNZONE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    {{--<img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <a href="#">
                        <i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Quản Lý Sản Phẩm</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/admin/clothes">
                                <i class="fa fa-circle-o"></i>Danh sách sản phẩm</a>
                        </li>
                        <li>
                            <a href="/admin/clothes/create">
                                <i class="fa fa-circle-o"></i>Thêm sản phẩm</a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Quản Lí danh mục</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/admin/category">
                                <i class="fa fa-circle-o"></i>Danh sách danh mục sản phẩm</a>
                        </li>
                        <li>
                            <a href="/admin/category/create">
                                <i class="fa fa-circle-o"></i>Thêm danh mục sản phẩm</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tạo mới sản phẩm
                <small>Admin Manager</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i> Home</a>
                </li>
                <li>
                    <a href="#">Forms</a>
                </li>
                <li class="active">General Elements</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm Sản Phẩm</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form action="/admin/clothes/{{$obj -> id}}" method="post">
                            @method('PUT')
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Tên Sản Phẩm</label>
                                    <input type="text" class="form-control" value="{{$obj->name}}" name="name">
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="number" class="form-control" value="{{$obj->price}}" name="price">
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input type="text" class="form-control" value="{{$obj->description}}" name="description">
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="categoryId" value="{{$obj->categoryId}}">
                                        <option value="1">Quần áo nam</option>
                                        <option value="2">Quần áo nữ</option>
                                        <option value="3">Quần áo trẻ em</option>
                                        <option value="4">Quần áo dã ngoại</option>
                                        <option value="5">Quần áo ngủ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tình trạng sản phẩm</label>
                                    <select name="status" value="{{$obj->status}}">
                                        <option value="1">Đang bán</option>
                                        <option value="2">Chưa bán</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh Sản Phẩm</label>
                                    <input type="text" name="images" value="{{$obj->images}}">
                                    {{--<span></span>--}}
                                    {{--<img id="preview" src="#" style="max-width: 200px; padding: 5px;">--}}
                                    {{--<input type="hidden" name="avatarUrl">--}}
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <input type="submit" value="Save">
                                <input type="reset" value="Reset">
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->

                </div>

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2017
            <a href="https://adminlte.io">Aptech FPT</a>.</strong> All rights reserved.
    </footer>
    <div class="modal modal-success fade" id="modal-success">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="modal-title">Thêm sản phẩm thành công!</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Ok</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
</body>

</html>