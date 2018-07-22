@extends('layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PERMISSIONS
                                
                            </h2>
                            
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{$permission->id}}</td>
                                        <td>{{$permission->name}}</td>
                                        <td>
                                         <div class="btn-group pull-right" role="group">
                                                <a href="{{route('permissions.edit',['permission'=>$permission->id])}}" class="btn btn-warning waves-effect">Edit</a>
                                                <form method="POST" action="{{route('permissions.destroy',['permission'=>$permission->id])}}">
                                                    {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger waves-effect"
                                                    >Delete</button>
                                               </form>
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
