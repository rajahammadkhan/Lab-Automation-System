@extends('layouts.tester-template')
@section('title')
    User Detail
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
                                    <h4 class="page-title">User Detail</h4>
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
                                        <th>UserId</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class="w-25">Actions</th>

                                    </tr>
                                    </thead>
                                    <?php
                                    $count=1
                                    ?>
                                    @foreach($data as $row)
                                        <tr>
                                            <th scope="row">{{$count++}}</th>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>
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
                                                                <form action="{{route('user-detail.destroy',$row->id)}}" method="post">
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
