@extends('admin.v1.layout')

@section('content')
<div class="container">
    <div class="uk-section">
        <div class="uk-container uk-card uk-card-default uk-card-body">
            <ul class="uk-breadcrumb" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <li><a href="#">Form update user</a></li>
            </ul>
            <div class="card-body">
                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                @if(session('update_password') && session('update_password') == 'successfully' )
                <p class="text-success"> You has been changed successfully </p>
                {{ session()->forget('update_password') }}
                @endif
                @if(session('update_password') && session('update_password') == 'failed' )
                <p class="text-danger"> You has been changed failed </p>
                {{ session()->forget('update_password') }}
                @endif
                <form method="post" action="{{ route('UpdateUser') }}">
                    @csrf
                    <div class="row ">
                        <div class="col-sm-2"> Name<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="name" class="form-control"
                                value="{{$user->name}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Email<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="email" class="form-control"
                                value="{{$user->email}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Company<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="company" class="form-control"
                                value="{{$user->company}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Position<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="position" class="form-control"
                                value="{{$user->position}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Phone<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="phone" class="form-control"
                                value="{{$user->phone}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Avatar<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="avatar" class="form-control"
                                value="{{$user->avatar}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Scancode<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="scancode" class="form-control"
                                value="{{$user->scancode}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Url_fb<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="url_fb" class="form-control"
                                value="{{$user->url_fb}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Url_zalo<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="url_zalo" class="form-control"
                                value="{{$user->url_zalo}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Url_ins<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="url_ins" class="form-control"
                                value="{{$user->url_ins}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Url_sky<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="url_sky" class="form-control"
                                value="{{$user->url_sky}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">Imagebackground<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="image_background" class="form-control"
                                value="{{$user->image_background}}" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Status<span class="text-danger"> *</span></div>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" id="status">
                                @if($user->status ==='1')
                                <option value="1">
                                    Open</option>
                                <option value="0">
                                    Close
                                </option>
                                @else
                                <option value="0">
                                    Close
                                </option>
                                <option value="1">
                                    Open</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <input style="float:right" type="submit" class="btn btn-primary btn-block mt-4" value="Save" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection