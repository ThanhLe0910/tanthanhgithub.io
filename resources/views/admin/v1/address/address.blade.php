@extends('admin.v1.layout')

@section('content')
<div class="container">
            <div class="uk-section">
                <div class="uk-container uk-card uk-card-default uk-card-body">
                    <ul class="uk-breadcrumb" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                        <li><a href="#">Address</a></li>
                    </ul>
                    <div class="box-content">
                        <div class="form-group">
                            <lable for="exampleInputPassword1">Tỉnh Thành</lable>
                            <select class="form-control form-control-sm js_location" id="js_location" data-type="city">
                                <option>__ Mời bạn chọn tỉnh thành __</option>
                                @foreach($provinces as $province)
                                    <option id="class_province" value="{{$province->id}}">{{$province->name}}</option>
                                @endforeach()
                            </select>
                        </div>
                        <div class="form-group">
                            <lable for="exampleInputPassword1">Quận Huyện</lable>
                            <select class="form-control form-control-sm js_location" id="district" data-type="district">
                                <option>__ Mời bạn chọn tỉnh thành __</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <lable for="exampleInputPassword1">Phường Xá</lable>
                            <select class="form-control form-control-sm" id="wards">
                                <option>__ Mời bạn chọn tỉnh thành __</option>
                            </select>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
             $(document).ready(function($){
                    $(".js_location").change(function(event){
                        event.preventDefault();
                        let route = '{{ route('ajax_get_data')}}';
                        let $this = $(this);
                        let type = $this.attr('data-type'); // city
                        let parentID = $this.val(); // giá trị value select city
                        $.ajax({
                            method:"GET",
                            url:route,
                            data: {parent:parentID}
                        })
                        .done(function(msg){
                            if(msg.data)
                            {
                                let html = '';
                                let element = '';
                                if(type == 'city')
                                {
                                    html= "<option> __ Moi banj chon quan __</option>";
                                    element = '#district';
                                }else{
                                    html="<option> __ Moi banj chon phuong __</option>";
                                    element = '#wards';
                                }
                                $.each(msg.data, function(index,value){
                                    html += "<option value='"+value.id+"'>"+value.name+"</option>"
                                })
                                $(element).html('').append(html);
                            }
                        })
                    })
            });
        </script>
@endsection