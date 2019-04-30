@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="listing/create" class="btn btn-primary btn-sm">Create</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your Listings</h3>
                    @if(count($Listing))
                        <table class="table table-striped">
                            <tr>
                                <th>Business Name</th>
                                <th>Address</th>
                                <th>Website</th>
<!--                                 <th>Email Address</th>
 -->                                <th>Phone Number</th>
                                <th colspan="2">Action</th>
                            </tr>
                    @foreach($Listing as $Listings)
                            <tr>
                                <td>{{$Listings['business_name']}}</td>
                                <td>{{$Listings['address']}}</td>
                                <td>{{$Listings['website']}}</td>
<!--                                 <td>{{$Listings['email']}}</td>
 -->                                <td>{{$Listings['phone']}}</td>
                                <td><a href="listing/{{$Listings->id}}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                                <td>
                                    <form action="{{action('ListingController@destroy',['id'=>$Listings->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" class="btn btn-primary btn-sm" value="Delete" onclick="return confirm('Are you sure to delete?')">
                                    </form>
                                   
                                </td>
                            </tr>
                    @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
