<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\accommodation;
use App\Models\addons;
use App\Models\attachment;
use App\Models\destination;
use App\Models\itinerary;
use App\Models\program;
use App\Models\popularExperience;
use App\Models\specialOffer;
use App\Models\slider;
use App\Models\Tourcostsummary;
use App\Models\buyaddons;
use App\Models\socialmedia;
use App\Models\title;
use App\Models\accommodationInclusive;
use DB;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Wildlife Safaris';
         $safaris = program::join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
         ->select('Programs.*','attachments.attachment')
          ->where('attachments.type','Programs')
          ->where('programs.type','Wildlife Safaris')
          ->where('itineraries.tour_addon','Programs')
         ->get();

          $PostcategoryImage = title::where('title', $title)
          ->first();

        return view('website.programs.safaris',compact('safaris','title','PostcategoryImage'));
     }

     public function safarisSlider($x)
    {
           $sliders = slider::join('programs','programs.id','sliders.tour_id')
           ->where('programs.id',$x)
          ->get()->first();

         // dd($sliders);
          if($sliders->type=='Wildlife Safaris')
          {
             $title='Wildlife Safaris';
          }
          else if($sliders->type=='Hiking & trekking'){
             $title='Mt.Hiking & Trekking';
          }
           else if($sliders->type=='Beach Holiday'){
             $title='Beach Holidays';

          }
            else if($sliders->type=='Combined Tours'){
             $title='Combined Tours';

          }
            else if($sliders->type=='Day Tours'){
             $title='Day Tours';

          }
          else
          {
          $title='No Title';
          }


         $safaris = program::join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
         ->select('Programs.*','attachments.attachment')
          ->where('attachments.type','Programs')
          ->where('programs.type',$sliders->type)
          ->where('itineraries.tour_addon','Programs')
         ->get();

  $PostcategoryImage = title::where('title', $title)
          ->first();
           return view('website.programs.safaris-slider',compact('safaris','sliders','title','PostcategoryImage'));
     }

      public function trekking()    {
         $title="Mt.Hiking & Trekking";
         $safaris = program::join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
         ->select('Programs.*','attachments.attachment')
          ->where('attachments.type','Programs')
          ->where('programs.type','Hiking & Trekking')
          ->where('itineraries.tour_addon','Programs')
         ->get();


  $PostcategoryImage = title::where('title', $title)
          ->first();
          //  dd($PostcategoryImage);
         return view('website.programs.safaris',compact('safaris','title','PostcategoryImage'));
    }

    public function holiday()
    {
         $title='Beach Holiday';
         $safaris = program::
         join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
         ->select('Programs.*','attachments.attachment')
          ->where('attachments.type','Programs')
          ->where('programs.type','Beach Holidays')
          ->where('itineraries.tour_addon','Programs')
         ->get();
          $PostcategoryImage = title::where('title', $title)
          ->first();

    return view('website.programs.safaris',compact('safaris','title','PostcategoryImage'));
    }


     public function dayTours()    {
         $title="Day Tours";
         $safaris = program::join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
         ->select('Programs.*','attachments.attachment')
          ->where('attachments.type','Programs')
          ->where('programs.type','Day Tours')
          ->where('itineraries.tour_addon','Programs')
         ->get();

         $PostcategoryImage = title::where('title', $title)
          ->first();
            //dd($PostcategoryImage);
         return view('website.programs.safaris',compact('safaris','title','PostcategoryImage'));
    }

     public function combinedTours()    {
         $title="Combined Tours";
         $safaris = program::join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
         ->select('Programs.*','attachments.attachment')
          ->where('attachments.type','Programs')
          ->where('programs.type','Combined Tours')
          ->where('itineraries.tour_addon','Programs')
         ->get();


  $PostcategoryImage = title::where('title', $title)
          ->first();
         return view('website.programs.safaris',compact('safaris','title','PostcategoryImage'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $tourname=program::join('attachments','attachments.destination_id','programs.id')
        ->where('programs.id',$id)
        ->where('attachments.type','Programs')
        ->first();

        $related=program::join('attachments','attachments.destination_id','programs.id')
        ->where('programs.id','!=',$id)
        ->where('attachments.type','Programs')
        ->limit(5)
        ->get();

        $programs = program::
           join('itineraries','itineraries.program_id','programs.id')
            ->join('itinerary_days','itinerary_days.itinerary_id','itineraries.id')
            ->join('destinations','destinations.id','itinerary_days.destination_id')
            ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
            ->join('attachments','programs.id','attachments.destination_id')
            ->where('attachments.type','Programs')
            ->where('itineraries.tour_addon','programs')
            ->where('programs.id',$id)
            ->orderby('itinerary_days.day','ASC')
            ->select('programs.*','attachments.attachment','itineraries.*','itinerary_days.*','destinations.*','accommodations.*')
            ->get();

         $id = program::where('id',$id)->first();
         if($programs){
        return view('website.tour.tourSummary',compact('tourname','programs','related'));
         }
         else{
             return redirect()->back()->with('error','Sorry  we do not offer this package at the moment');
         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
