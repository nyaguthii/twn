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
                                PERMISSION
                                
                            </h2>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Create a Permission</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <form method="POST" action="{{route('permissions.store')}}">
                                         {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="name" type="text" class="form-control" placeholder="Name" />
                                            </div>
                                            @if ($errors->has('name'))
                                                <label id="email-error" class="error" for="email">{{ $errors->first('email') }}</label>
                                               
                                            @endif
                                        </div>
                                        <div class="form-group">
                                           
                                            <button type="submit" class="btn btn-primary waves-effect">SAVE</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
