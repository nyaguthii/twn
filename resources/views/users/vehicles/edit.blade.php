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
                                {{$vehicle->registration}}
                                
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST" action="{{route('vehicles.update',['user'=>$user->id,'vehicle'=>$vehicle->id])}}">
                                <h2 class="card-inside-title">Update a vehicle</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        
                                             {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="registration" type="text" class="form-control" value="{{$vehicle->registration}}" />
                                                </div>
                                                @if ($errors->has('name'))
                                                    <label id="name-error" class="error" for="registration">{{ $errors->first('registration') }}</label>
                                                   
                                                @endif
                                            </div>
                                            
                                    </div>
                                     <div class="">
                                        <div class="row clearfix">
                                            
                                            <div class="col-md-3">
                                                <div class="demo-checkbox">
                                                    <input type="hidden"  name="is_active" value="0">
                                                     @if ($vehicle->is_active === 1)
                                                      <input name="is_active" value="1" type="checkbox" id="basic_checkbox_3" class="filled-in" checked/>
                                                    @else
                                                     <input name="is_active" value="1" type="checkbox" id="basic_checkbox_3" class="filled-in"/>
                                                    @endif
                                                    <label for="basic_checkbox_3">Is Active</label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                     </div>   
                                   
                                    <div class="col-md-3">
                                       <div class="form-group">
                                               
                                            <button type="submit" class="btn btn-warning waves-effect">SAVE</button>
                                        
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
