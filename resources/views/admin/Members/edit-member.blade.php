@extends('layout-admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm mới tài khoản</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.listMember')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm mới tài khoản</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin cá nhân</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Họ và tên</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Email</label>
                            <input type="text" id="inputEmail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Số điện thoại</label>
                            <input type="number" max='11' min='10' id="inputPhone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Địa chỉ</label>
                            <textarea id="inputAddress" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputStatus">Trạng thái</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option selected disabled>Chọn</option>
                                <option>Hoạt động</option>
                                <option>Không hoạt động</option>
                                <!-- <option>Success</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputRole">Phân quyền</label>
                            <select id="inputRole" class="form-control custom-select">
                                <option selected disabled>Chọn</option>
                                <option>Hội viên</option>
                                <option>Nhân viên</option>
                                <option>Quản trị</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="col-2 container">
                    <a href="{{route('admin.listMember')}}" class="btn btn-secondary">Trở về</a>
                    <input type="submit" value="Thêm mới tài khoản" class="btn btn-success float-right">
                </div>

            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection