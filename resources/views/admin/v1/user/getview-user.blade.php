@extends('admin.v1.layout')

@section('content')
<meta id="form_send_url" content="{{$getuser->id}}">
<div class="container">
    <div class="uk-section">
        <div class="uk-container uk-card uk-card-default uk-card-body">
            <ul class="uk-breadcrumb" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <li><a href="#">View user</a></li>
            </ul>
            <div class="card-body">
                <div id="email">Email: {{$getuser->email}} </div>
                <div>Name: {{$getuser->name}} </div>
                <div>Company: {{$getuser->company}} </div>
                <div>Phone: {{$getuser->phone}} </div>
                <div>Position: {{$getuser->position}} </div>
            </div>
            <div class="inline-block">
                <p class="text-danger" id="message_content"></p>
            </div>
            Content send mess: <textarea id="content" style="height: 100px;width:100%"></textarea >
					
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-block" style="width:20%"
                        onclick="adminSendMess();">Send</button>
            </div>
            <div class="mt-5 " >
                @foreach($Send as $item)
                <div class="p-1" style="border: 1px solid #ccc;background-color:rgba(204, 204, 204, 0.288) ">
                    @if ($item['email'] == 'tanthanhle0910@gmail.com')
                    <div class="mt-1 mb-4 text-success"><span uk-icon="user"></span> {{$item['email']}}</div>
                    @endif

                    @if($item['email'] !== 'tanthanhle0910@gmail.com')
                    <div class="mt-1 mb-4 text-danger"><span uk-icon="user"></span> {{$item['email']}}</div>
                    @endif
                    <div class="mt-4 mb-4"><span uk-icon="minus"></span> {{ucwords($item->content)}}</div>
                    <div class="mt-4"><span uk-icon="clock"></span> {{$item->created_at}}</div>
                </div>

                @endforeach()
            </div>
        </div>
    </div>
</div>
<input id="id_send_mess" type="hidden" value="{{$getuser->id}}" >
@endsection