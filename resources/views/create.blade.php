@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing</div>

                <div class="card-body">
                    <form action="{{ action('ListingController@store') }}" method="post">
                    	@csrf
					  <div class="form-group">
					    <input type="text" name="business_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Business Name">
					  </div>
					  <div class="form-group">
					    <input type="text" name="address" class="form-control" placeholder="Enter Address">
					  </div>
					  <div class="form-group">
					    <input type="text" name="website" class="form-control" aria-describedby="emailHelp" placeholder="Enter Website">
					  </div>
					  <div class="form-group">
					    <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
					  </div>
					  <div class="form-group">
					    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
					  </div>
					  <div class="form-group">
					    <button type="submit" class="btn btn-success">Submit</button>
					    <a class="btn btn-primary float-right" href="/larabiz/public/dashboard">Go Back</a>
					  </div>
					  
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection