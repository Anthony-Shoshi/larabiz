@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Business Listing of <strong>{{$listings->business_name}}</strong><a class="btn btn-primary float-right" href="/larabiz/public/listing">Go Back</a></div>

                <div class="card-body">
                    <form>
                    	@csrf
					  <div class="form-group">
					    <input type="text" readonly name="business_name" value="{{$listings->business_name}}" class="form-control" aria-describedby="emailHelp" placeholder="Enter Business Name">
					  </div>
					  <div class="form-group">
					    <input type="text" readonly name="address" value="{{$listings->address}}" class="form-control" placeholder="Enter Address">
					  </div>
					  <div class="form-group">
					    <input type="text" readonly name="website" value="{{$listings->website}}" class="form-control" aria-describedby="emailHelp" placeholder="Enter Website">
					  </div>
					  <div class="form-group">
					    <input type="email" readonly name="email" value="{{$listings->email}}" class="form-control" placeholder="Enter Email Address">
					  </div>
					  <div class="form-group">
					    <input type="text" readonly name="phone" value="{{$listings->phone}}" class="form-control" placeholder="Enter Phone Number">
					  </div>
					  <div class="form-group">
					    
					  </div>
					  
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection