@extends('layouts.tester-template')
@section('title')
    Testing Request
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
                                    <h4 class="page-title">Testing Request</h4>
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
                                        <th>View Detail</th>
                                        <th>Approved</th>
                                        <th>Rejected</th>

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
                                            <td>
                                                <button type="button" class="btn bg-purple btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1{{$row->id}}">
                                                    <i class="fas fa-arrow-right"></i>
                                                </button>
                                                @if($row->erp_request_type=='Request')
                                                <div class="modal fade" id="exampleModal1{{$row->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="formModal">{{$row['UserName']->name}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="header">
                                                                            <label for="email_address1"><b>Testing Request</b></label>
                                                                            <p>{!!$row->erp_testing_request!!}</p><br>
                                                                    </div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @elseif($row->erp_request_type=='Suggestion')
                                                    <div class="modal fade" id="exampleModal1{{$row->id}}" tabindex="-1" role="dialog"
                                                         aria-labelledby="formModal" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="create_questions">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="formModal">{{$row['UserName']->name}}</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="card">
                                                                        <div class="header">
                                                                            <label for="email_address1"><b>Suggestion</b></label>
                                                                            <br><br>
                                                                            <div class="form-group">
                                                                            <label for="formGroupExampleInput">Suggestion on Categories?</label>
                                                                                <p>{{$row->erp_suggestion_category}}</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="formGroupExampleInput" >Suggestion on Products?</label>
                                                                            <p>{{$row->erp_suggestion_product}}</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="formGroupExampleInput" >Requirements and Needs</label>
                                                                            <p>{{$row->erp_requirement_need}}</p>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="formGroupExampleInput" >General Feedback</label>
                                                                            <p>{{$row->erp_general_feedback}}</p>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        </div></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter45{{$row->id}}">Approved
                                                </button>
                                                <div class="modal fade" id="exampleModalCenter45{{$row->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Approved
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

                                                                <button type="" class="btn btn-danger waves-effect"
                                                                        data-dismiss="modal">Cancel</button>
                                                                <form action="{{route('testing.update',$row->id)}}" method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <input type="hidden" value="{{$row->erp_status}}" name="erp_status">
                                                                    <input type="hidden" value="{{$row->erp_category_name}}" name="erp_category_name">
                                                                    <input type="hidden" value="{{$row->erp_product_name}}" name="erp_product_name">
                                                                    <input type="hidden" value="{{$row->erp_request_type}}" name="erp_request_type">
                                                                    <input type="hidden" value="approved" name="erp_hidden_type">
                                                                    <input type="hidden" value="{{$row->erp_suggestion_category}}" name="erp_suggestion_category">
                                                                    <input type="hidden" value="{{$row->erp_suggestion_product}}" name="erp_suggestion_product">
                                                                    <input type="hidden" value="{{$row->erp_requirement_need}}" name="erp_requirement_need">
                                                                    <input type="hidden" value="{{$row->erp_general_feedback}}" name="erp_general_feedback">
                                                                    <input type="hidden" value="{{$row->erp_testing_request}}" name="erp_testing_request">
                                                                    <button type="submit" class="btn btn-info waves-effect">Approved</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2{{$row->id}}">Rejected
                                                </button>
                                                <div class="modal fade" id="exampleModalCenter2{{$row->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Action Performed By Tester
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('testing.update',$row->id)}}" method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="Request">
                                                                        <input type="hidden" value="{{$row->erp_status}}" name="erp_status">
                                                                        <input type="hidden" value="{{$row->erp_category_name}}" name="erp_category_name">
                                                                        <input type="hidden" value="{{$row->erp_product_name}}" name="erp_product_name">
                                                                        <input type="hidden" value="{{$row->erp_request_type}}" name="erp_request_type">
                                                                        <input type="hidden" value="rejected" name="erp_hidden_type">
                                                                        <input type="hidden" value="{{$row->erp_suggestion_category}}" name="erp_suggestion_category">
                                                                        <input type="hidden" value="{{$row->erp_suggestion_product}}" name="erp_suggestion_product">
                                                                        <input type="hidden" value="{{$row->erp_requirement_need}}" name="erp_requirement_need">
                                                                        <input type="hidden" value="{{$row->erp_general_feedback}}" name="erp_general_feedback">
                                                                        <input type="hidden" value="{{$row->erp_testing_request}}" name="erp_testing_request">
                                                                        <textarea name="erp_rejected"  class="form-control ckeditor" id="comment_text" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                    <div class="text-right mt-2">
                                                                    <button type="" class="btn btn-danger waves-effect" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-info waves-effect">Rejected</button>
                                                                    </div>
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
