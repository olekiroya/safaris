<?php

namespace App\Http\Controllers;

use App\Models\attachment;
use App\Models\destination;
use App\Models\location;
use Illuminate\Http\Request;

class destinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = destination::get();
        return view('admins.destinations.index',compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations=location::get();
        return view('admins.destinations.add',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $destinate = destination::create(
           [
            'destination_name'=>request('destination_name'),
            'category'=>request('category'),
            'popularity'=>request('popularity'),
            'destination_description'=>request('destination_description'),
            'seo'=>request('seo'),
             'location_id'=>request('location_id'),
            'user_id'=>auth()->id()
           ]
        );
        if(request('attachment')){
            $attach = request('attachment');
            foreach($attach as $attached){

                 // Get filename with extension
                 $fileNameWithExt = $attached->getClientOriginalName();
                 // Just Filename
                 $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                 // Get just Extension
                 $extension = $attached->getClientOriginalExtension();
                 //Filename to store
                 $imageToStore = $filename.'_'.time().'.'.$extension;
                 //upload the image
                 $path = $attached->storeAs('public/uploads/', $imageToStore);

        attachment::create(
            [
            'destination_id'=>$destinate->id,
            'attachment'=>$imageToStore,
            'type'=>'Destination'
            ]
            );
    }
}
        return redirect()->back()->with('success','Destination created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $destinations = destination::where('id',$id)->get();
        $attachments = attachment::where('destination_id',$id)->where('type','Destination')->get();
        return view('admins.Destinations.show',compact('destinations','attachments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
