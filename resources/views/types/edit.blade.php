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
                                {{$paymentType->name}}
                                
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST" action="{{route('types.update',['paymentType'=>$paymentType->id])}}">
                                <h2 class="card-inside-title">Update a Payment Type</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        
                                             {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="name" type="text" class="form-control" value="{{$paymentType->name}}" />
                                                </div>
                                                @if ($errors->has('name'))
                                                    <label id="name-error" class="error" for="name">{{ $errors->first('name') }}</label>
                                                   
                                                @endif
                                            </div>
                                            
                                    </div>
                                     <div class="">
                                        <div class="row clearfix">
                                            
                                            <div class="col-md-3">
                                                <div class="demo-checkbox">
                                                    <input type="hidden"  name="is_active" value="0">
                                                     @if ($paymentType->is_active === 1)
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
                                               
                                            <button type="submit" class="btn btn-warning waves-effect">UPDATE</button>
                                        
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
