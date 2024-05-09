@extends('layouts.template')
@section('title')
    All Rejected
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
                                    <h4 class="page-title">All Rejected</h4>
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
                                        <th>Product Name</th>
                                        <th>Rejected</th>
                                        <th>Reason</th>

                                    </tr>
                                    </thead>
                                    <?php
                                    $count=1
                                    ?>
                                    @foreach($data as $row)
                                        <tr>
                                            <th scope="row">{{$count++}}</th>
                                            <td>{{$row->erp_category_name}}</td>
                                            <td>{{$row->erp_product_name}}</td>
                                            <td>{{$row->erp_hidden_type}}</td>
                                            <td>  <button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1{{$row->id}}">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                                <div class="modal fade" id="exampleModal1{{$row->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="formModal">Rejected By Tester</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="header">
                                                                        <label for="email_address1"><b>Reason of Rejection</b></label>
                                                                        <p>{!!$row->erp_rejected!!}</p><br>
                                                                    </div></div>
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
