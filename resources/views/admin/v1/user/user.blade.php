@extends('admin.v1.layout')

@section('content')
<div class="container">
    <div class="uk-section">
        <div class="uk-container uk-card uk-card-default uk-card-body">
            <ul class="uk-breadcrumb" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <li><a href="#">User</a></li>
            </ul>
            <a href="{{asset('admin/create-user')}}" type="button" class="btn btn-success ml-3" href="">Create</a>
            <div class="card-body">
                <table id="myTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($User as $item)
                        <tr>
                            <td class="text-center">{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->company}}</td>
                            <td class="text-center">
                                <a href="{{asset('admin/form-update-user/'.$item->id)}}" type="button" class="btn btn-success" href="">Edit</a>

                                <a href="" onclick="return confirm('Bạn có muốn xóa không ?')" type="button"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
@endpush
@endsection