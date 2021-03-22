@extends('admin.v1.layout')

@section('content')
<div class="container">
    <div class="uk-section">
        <div class="uk-container uk-card uk-card-default uk-card-body">
            <ul class="uk-breadcrumb" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <li><a href="#">Form create user</a></li>
            </ul>
            <div class="card-body">
                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                @if(session('create_password') && session('create_password') == 'successfully' )
                <p class="text-success"> You has been changed successfully </p>
                {{ session()->forget('create_password') }}
                @endif
                @if(session('create_password') && session('create_password') == 'failed' )
                <p class="text-danger"> You has been changed failed </p>
                {{ session()->forget('create_password') }}
                @endif
                <form method="post" action="{{ route('CreateUser')}}">
                    @csrf
                    <div class="row ">
                        <div class="col-sm-2"> Name<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="name" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Email<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="email" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Company<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="company" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Position<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="position" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Phone<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="phone" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Avatar<span class="text-danger"> *</span></div>
                        <div class="col-sm-10">
                            <div class="image-upload-one" style="margin-top: 15px;">
                                <div class="center">
                                    <div class="form-input">

                                        <img width="150px" id="thumbnailReview" src="/image/4.jpg"
                                            onclick="document.getElementById('file-ip-1').click()">
                                        <input style="display: none;" type="file" name="avatar" id="file-ip-1"
                                            accept="image/*" onchange="showPreviewOne(event);">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Scancode<span class="text-danger"> *</span></div>
                        <div class="col-sm-10">
                            <div class="row mt-4">
                                <img id="output_image" height=50px width=150px
                                    onclick="document.getElementById('file-ip-2').click()"
                                    src="/image/4.jpg"/>

                                <input style="display: none;" name="scancode" type="file" accept="image/*"
                                    onchange="preview_image(event)" id="file-ip-2">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Url_fb<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="url_fb" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Url_zalo<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="url_zalo" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Url_ins<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="url_ins" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Url_sky<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="url_sky" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2">Imagebackground<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="image_background" class="form-control" /></div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Status<span class="text-danger"> *</span></div>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" id="status">
                                <option value="1">
                                    Open</option>
                                <option value="0">
                                    Close
                                </option>
                            </select>
                        </div>
                    </div>
                    <input style="float:right" type="submit" class="btn btn-primary btn-block mt-4" value="Save" />
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function showPreviewOne(event) {

        if (event.target.files.length > 0) {

            let src = URL.createObjectURL(event.target.files[0]);

            let preview = document.getElementById("thumbnailReview");

            preview.src = src;

            preview.style.display = "block";
        }
    }
</script>
<script>
    function preview_image(event) {

        if (event.target.files.length > 0) {

            let src = URL.createObjectURL(event.target.files[0]);

            let preview = document.getElementById("output_image");

            preview.src = src;

            preview.style.display = "block";
        }
    }
</script>
@endsection