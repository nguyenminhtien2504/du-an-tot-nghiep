@extends('layout-admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div style="float:left;" class="col-sm-4"><h1>Quản lý tài khoản</h1></div>
                    <div class="col-sm-8 "><a href="{{route('admin.addMember')}}"><button type="button" class="btn btn-success"> Thêm hội viên</button></a></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý tài khoản</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5%">
                                STT
                            </th>
                            <th style="width: 15%">
                                Họ và tên
                            </th>
                            <th style="width: 15%">
                                Email
                            </th>
                            <th style="width: 10%">
                                Số điện thoại</th>
                            <th style="width:10%">
                                Avatar
                            </th>
                            <th style="width: 15%">
                                Địa chỉ
                            </th>
                            <th style="width:3%">
                                Quyền</th>
                            <th style="width:7%" class="text-center">
                                Trạng thái</th>
                            <th style="width: 20%" class="text-center">
                                Hành động
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <a>
                                    Lê Hữu Tú
                                </a>
                                <br />
                            </td>
                            <td>
                                <a>lehuutu99@gmail.com</a>
                            </td>
                            <td>
                                <a>0367361426</a>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <a>Đại Từ, phường Đại Kim, quận Hoàng Mai, Hà Nội</a>
                            </td>
                            <td class="project-state">
                                <a>1</a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('admin.editMember')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <a>
                                    Lê Hữu Tú
                                </a>
                                <br />
                            </td>
                            <td>
                                <a>lehuutu99@gmail.com</a>
                            </td>
                            <td>
                                <a>0367361426</a>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <a>Đại Từ, phường Đại Kim, quận Hoàng Mai, Hà Nội</a>
                            </td>
                            <td class="project-state">
                                <a>1</a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('admin.editMember')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <a>
                                    Lê Hữu Tú
                                </a>
                                <br />
                            </td>
                            <td>
                                <a>lehuutu99@gmail.com</a>
                            </td>
                            <td>
                                <a>0367361426</a>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <a>Đại Từ, phường Đại Kim, quận Hoàng Mai, Hà Nội</a>
                            </td>
                            <td class="project-state">
                                <a>1</a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('admin.editMember')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <a>
                                    Lê Hữu Tú
                                </a>
                                <br />
                            </td>
                            <td>
                                <a>lehuutu99@gmail.com</a>
                            </td>
                            <td>
                                <a>0367361426</a>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <a>Đại Từ, phường Đại Kim, quận Hoàng Mai, Hà Nội</a>
                            </td>
                            <td class="project-state">
                                <a>1</a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('admin.editMember')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <a>
                                    Lê Hữu Tú
                                </a>
                                <br />
                            </td>
                            <td>
                                <a>lehuutu99@gmail.com</a>
                            </td>
                            <td>
                                <a>0367361426</a>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <a>Đại Từ, phường Đại Kim, quận Hoàng Mai, Hà Nội</a>
                            </td>
                            <td class="project-state">
                                <a>1</a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('admin.editMember')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <a>
                                    Lê Hữu Tú
                                </a>
                                <br />
                            </td>
                            <td>
                                <a>lehuutu99@gmail.com</a>
                            </td>
                            <td>
                                <a>0367361426</a>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <a>Đại Từ, phường Đại Kim, quận Hoàng Mai, Hà Nội</a>
                            </td>
                            <td class="project-state">
                                <a>1</a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('admin.editMember')}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection