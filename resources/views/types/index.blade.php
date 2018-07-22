@extends('layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                 <a href="{{route('types.create')}}" class="btn btn-primary waves-effect">+ADD</a>
                               
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>STATUS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($paymentTypes as $paymentType)
                                    <tr>
                                        <td>{{$paymentType->id}}</td>
                                        <td>{{$paymentType->name}}</td>
                                        <td>
                                             @if($paymentType->is_active===1)
                                                <span class="label bg-green">Active</span>
                                                @else
                                                <span class="label bg-red">Inactive</span>
                                                @endif
                                        </td>
                                        <td>
                                        <div class="btn-group pull-right" role="group">
                                                <a href="{{route('types.edit',['paymentType'=>$paymentType->id])}}" class="btn btn-success waves-effect">Show</a>
                                                <a href="{{route('types.edit',['paymentType'=>$paymentType->id])}}" class="btn btn-warning waves-effect">Edit</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
