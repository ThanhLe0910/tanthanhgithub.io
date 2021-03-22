@extends('admin.v1.layout')

@section('content')
<div class="container">
    <div class="uk-section">
        <div class="uk-container uk-card uk-card-default uk-card-body">
            <ul class="uk-breadcrumb" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <li><a href="#">Form update user</a></li>
                <h2 style="color:red">Nhớ chọn hình ảnh lại</h2>
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
                    <!-- <div class="row mt-4">
                        <div class="col-sm-2"> Avatar<span class="text-danger"> *</span></div>
                        <div class="col-sm-10"><input type="text" name="avatar" class="form-control"
                                value="{{$user->avatar}}" /></div>
                    </div> -->
                    <div class="row mt-4">
                        <div class="col-sm-2"> Avatar<span class="text-danger"> *</span></div>
                        <div class="col-sm-10">
                            <div class="image-upload-one" style="margin-top: 15px;">
                                <div class="center">
                                    <div class="form-input">

                                        <img width="150px" id="thumbnailReview" src="<?php echo $user->avatar !== '' ? "
                                            http://localhost:8000/uploads/images/store/" . $user->avatar :
                                        '/image/4.jpg'; ?>" onclick="document.getElementById('file-ip-1').click()">
                                        <input style="display: none;" type="file" name="avatar" id="file-ip-1"
                                            accept="image/*" onchange="showPreviewOne(event);">
                                        <input type="hidden" name="thumbnail_url" id="thumbnail_url" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-2"> Scancode<span class="text-danger"> *</span></div>
                        <div class="col-sm-10">
                            <div class="row mt-4">
                            <img id="output_image" height=50px width=150px onclick="document.getElementById('file-ip-2').click()"
                                    src="<?php echo $user->scancode !== '' ? "
                                    http://localhost:8000/uploads/images/store/" . $user->scancode : '/image/4.jpg';
                                ?>"/>

                                <input style="display: none;" name="scancode" type="file" accept="image/*" onchange="preview_image(event)"
                                    id="file-ip-2">
                                
                                <input type="hidden" name="thumbnail_urlScancode" id="thumbnail_urlScancode" />
                            </div>
                        </div>
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

<script>
    function preview_image(event) {
        if (event.target.files.length > 0) {

            let src = URL.createObjectURL(event.target.files[0]);

            let preview = document.getElementById("output_image");

            preview.src = src;

            preview.style.display = "block";

            let form = new FormData();
            form.append('scancode', event.target.files[0]);
            $.ajax({
                url: "/admin/upload-image/scancode",
                type: "POST",
                data: form,
                processData: false,
                contentType: false,
                success: function (resp) {
                    $("#thumbnail_urlScancode").val(resp.fileUrl);
                    console.log(resp);
                },
                error: function (err) {
                }
            })
        }
    }
</script>
<script>
    function showPreviewOne(event) {

        if (event.target.files.length > 0) {

            let src = URL.createObjectURL(event.target.files[0]);

            let preview = document.getElementById("thumbnailReview");

            preview.src = src;

            preview.style.display = "block";

            let form = new FormData();
            form.append('avatar', event.target.files[0]);
            $.ajax({
                url: "/admin/upload-image",
                type: "POST",
                data: form,
                processData: false,
                contentType: false,
                success: function (resp) {
                    $("#thumbnail_url").val(resp.fileUrl);
                    console.log(resp);
                },
                error: function (err) {
                }
            })
        }
    }
</script>
@endsection