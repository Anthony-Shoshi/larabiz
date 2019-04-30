<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listing = Listing::orderBy('created_at','desc')->get();
        return view('listings')->with('listing', $listing);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'business_name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $createList = new Listing();
        $createList->user_id = Auth()->user()->id;
        $createList->business_name = $request->input('business_name');
        $createList->address = $request->input('address');
        $createList->website = $request->input('website');
        $createList->email = $request->input('email');
        $createList->phone = $request->input('phone');

        $createList->save();

        return redirect('/dashboard')->with('success','Listing created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listings = Listing::find($id);
        return view('showlisting')->with('listings', $listings);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('editlisting')->with('listing', $listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'business_name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $listing = Listing::find($id);
        $listing->user_id = Auth()->user()->id;
        $listing->business_name = $request->input('business_name');
        $listing->address = $request->input('address');
        $listing->website = $request->input('website');
        $listing->email = $request->input('email');
        $listing->phone = $request->input('phone');

        $listing->save();

        return redirect('/dashboard')->with('success','Listing edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);

        $listing->delete();
        return redirect('/dashboard')->with('success','Listing deleted successfully!');
        //return 'delete';
    }
}
