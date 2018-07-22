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
                                VEHICLES
                                
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST" action="{{route('vehicles.store',['user'=>$user->id])}}">
                                <h2 class="card-inside-title">Create a User</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        
                                             {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="registration" type="text" class="form-control" placeholder="Registration" value="{{old('registration')}}" />
                                                </div>
                                                @if ($errors->has('name'))
                                                    <label id="name-error" class="error" for="name">{{ $errors->first('registration') }}</label>
                                                   
                                                @endif
                                            </div>
                                            
                                    </div>
                                   
                                    <div class="col-md-3">
                                       <div class="form-group">
                                               
                                            <button type="submit" class="btn btn-primary waves-effect">SAVE</button>
                                        
                                        </div>

                                    </div>
                                    </div>

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
