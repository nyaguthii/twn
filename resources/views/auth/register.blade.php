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
                                USERS
                                
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST" action="/register">
                                <h2 class="card-inside-title">Create a User</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        
                                             {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="name" type="text" class="form-control" placeholder="Name" value="{{old('name')}}" />
                                                </div>
                                                @if ($errors->has('name'))
                                                    <label id="name-error" class="error" for="name">{{ $errors->first('name') }}</label>
                                                   
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="email" type="text" class="form-control" placeholder="Email" value="{{old('email')}}" />
                                                </div>
                                                @if ($errors->has('email'))
                                                    <label id="name-error" class="error" for="name">{{ $errors->first('email') }}</label>
                                                   
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="member_no" type="text" class="form-control" placeholder="Member Number" value="{{old('member_no')}}" />
                                                </div>
                                                @if ($errors->has('member_no'))
                                                    <label id="name-error" class="error" for="name">{{ $errors->first('member_no') }}</label>
                                                   
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="password" type="text" class="form-control"  placeholder="Password" value="{{old('password')}}" />
                                                </div>
                                                @if ($errors->has('password'))
                                                    <label id="name-error" class="error" for="password">{{ $errors->first('password') }}</label>
                                                   
                                                @endif
                                            </div>
                                             <div class="form-group">
                                                <div class="form-line">
                                                    <input name="password_confirmation" type="text" class="form-control"  placeholder="Confirm Password" />
                                                </div>
                                                @if ($errors->has('password_confirmation'))
                                                    <label id="name-error" class="error" for="name">{{ $errors->first('password_confirmation') }}</label>
                                                   
                                                @endif
                                            </div>
                                    </div>
                                    <div class="">
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                Mobile Phone Number
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone_iphone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input name="contact" type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00" value="{{old('contact')}}">
                                                    </div>
                                                    @if ($errors->has('contact'))
                                                        <label id="name-error" class="error" for="name">{{ $errors->first('contact') }}</label>
                                                       
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="demo-checkbox">
                                                    <input type="hidden"  name="is_member" value="0">
                                                    <input name="is_member" value="1" type="checkbox" id="basic_checkbox_1" class="filled-in"/>
                                                    <label for="basic_checkbox_1">Is Member</label>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="demo-checkbox">
                                                    <input type="hidden"  name="is_staff" value="0">
                                                    <input name="is_staff" value="1" type="checkbox" id="basic_checkbox_2" class="filled-in" />
                                                    <label for="basic_checkbox_2">Is Staff</label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                     </div>   
                                    <div class="row clearfix">
                                   
                                    
                                    <div class="col-md-3">
                                        <p>
                                            Roles
                                        </p>
                                        <select name="role[]" class="form-control show-tick" multiple>
                                             @foreach($roles as $role)
                                               <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>

                                    @if ($errors->has('role'))
                                                <label id="name-error" class="error" for="role">{{ $errors->first('role') }}</label>
                                               
                                     @endif

                                    </div>
                                </div>
                                <div class="row clearfix">
                                   
                                    
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
