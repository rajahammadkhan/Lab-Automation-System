@extends('layouts.template')
@section('title')
     All Approved
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
                                    <h4 class="page-title">All Approved</h4>
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
                                        <th>Approved</th>

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
