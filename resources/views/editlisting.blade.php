@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing</div>

                <div class="card-body">
                    <form action="{{ action('ListingController@update',['id'=>$listing->id]) }}" method="post">
                    	@csrf
					  <div class="form-group">
					    <input type="text" name="business_name" value="{{$listing->business_name}}" class="form-control" aria-describedby="emailHelp" placeholder="Enter Business Name">
					  </div>
					  <div class="form-group">
					    <input type="text" name="address" value="{{$listing->address}}" class="form-control" placeholder="Enter Address">
					  </div>
					  <div class="form-group">
					    <input type="text" name="website" value="{{$listing->website}}" class="form-control" aria-describedby="emailHelp" placeholder="Enter Website">
					  </div>
					  <div class="form-group">
					    <input type="email" name="email" value="{{$listing->email}}" class="form-control" placeholder="Enter Email Address">
					  </div>
					  <div class="form-group">
					    <input type="text" name="phone" value="{{$listing->phone}}" class="form-control" placeholder="Enter Phone Number">
					  </div>
					  <input name="_method" type="hidden" value="PUT">
					  <div class="form-group">
					    <button type="submit" class="btn btn-success">Update</button>
					    <a class="btn btn-primary float-right" href="{{ url('dashboard') }}">Go Back</a>
					  </div>
					  
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection