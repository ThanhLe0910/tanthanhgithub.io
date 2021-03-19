@extends('admin.v1.layout')

@section('content')
<div class="container">
            <div class="uk-section">
                <div class="uk-container uk-card uk-card-default uk-card-body">
                    <ul class="uk-breadcrumb" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                        <li><a href="#">Dashboard</a></li>
                    </ul>
                    <h1 class="uk-heading-line" uk-scrollspy="cls: uk-animation-slide-right; repeat: true"><span>Smart Card</span></h1>
                    <div class="box-content">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
@endsection