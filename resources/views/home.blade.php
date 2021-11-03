@extends('layouts.app')

@section('content')
<div class="sidebar">

@include('layouts/sidebar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="row align-items-center">
                    <div class="col-md-4 ">
                    <img src={{url('/images/login.png')}} width="420px" height="250px" alt=""/>

                    </div>


                
                <div class="col-md-8">
                <h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue"></div>
						</h4>
						<p class="font-18 max-width-600">To the Manager/Supervisor Dashboard</p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
