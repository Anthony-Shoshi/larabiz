@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Business Listings</h3>
                    @if(count($listing))
                        <ul class="list-group">
                            @foreach($listing as $listings)
                              <li class="list-group-items"><a href="listing/{{$listings->id}}">{{$listings->business_name}}</a></li>  
                            @endforeach
                        </ul>
                    @else
                    <p>No Listings found!!!</p>  
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
