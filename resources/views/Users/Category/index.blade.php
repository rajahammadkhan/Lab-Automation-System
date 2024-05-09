@extends('layouts.template')
@section('title')
    Category
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            @include('layouts.error')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <ul class="breadcrumb breadcrumb-style ">
                                <li class="breadcrumb-item">
                                    <h4 class="page-title">All Category</h4>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="{{url()->previous()}}">
                                <button type="button" class="btn btn-primary float-right mt-3"> Back
                                </button>
                            </a>
                        </div>

                    </div>
                    <div class="card">
                        <div class="header">
                            <div class="body table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Category Status</th>
                                        <th class="w-25">Actions</th>

                                    </tr>
                                    </thead>
                                    <?php
                                    $count=1
                                    ?>
                                    @foreach($data as $row)
                                        <tr>
                                            <th scope="row">{{$count++}}</th>
                                            <td>{{$row->erp_category_name}}</td>
                                            <td><label class="badge badge-{{$row->erp_status == '1' ? 'info':'danger'}}" data-toggle="modal" data-target="#active_inactive">{{$row->erp_status == '1' ? 'Enable':'Disable'}}</label>
                                            </td>
                                            <td>
                                                <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1{{$row->id}}">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <div class="modal fade" id="exampleModal1{{$row->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="formModal">Edit Category</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <form action="{{route('category.update',$row->id)}}" method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <label for="email_address1">Status</label>
                                                                            <div class="row">
                                                                                <div class="col-sm-3 col-lg-3">
                                                                                    <div class="form-check form-check-radio">
                                                                                        <label>
                                                                                            <input name="erp_status" {{$row->erp_status=='1'? 'checked': ''}} class="erp_status" type="radio" value="1" />
                                                                                            <span>Enable</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 col-lg-3x">
                                                                                    <div class="form-check form-check-radio">
                                                                                        <label>
                                                                                            <input name="erp_status" {{$row->erp_status=='0'? 'checked': ''}} class="erp_status" type="radio" value="0" />
                                                                                            <span>Disable</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <label for="email_address1">Category Name</label>
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" id="email_address1"
                                                                                           class="form-control" name="erp_category_name" value="{{$row->erp_category_name}}"
                                                                                           placeholder="Type Category Name Here">
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit"
                                                                                        class="btn btn-info waves-effect">Update Category</button>
                                                                            </div>
                                                                        </form>
                                                                    </div> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter2{{$row->id}}">
                                                    <i class="material-icons"> delete  </i>
                                                </button>
                                                <div class="modal fade" id="exampleModalCenter2{{$row->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure want to proceed this action?
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button type="submit" class="btn btn-danger waves-effect"
                                                                        data-dismiss="modal">Close</button>
                                                                <form action="{{route('category.destroy',$row->id)}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-info waves-effect">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            </td>
                            </tr>
                            @endforeach
                            <?php
                            $count++;
                            ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
