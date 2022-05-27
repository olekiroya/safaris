<?php

namespace App\Http\Controllers;


use App\Models\addons;

use App\Models\Tour;
use App\Models\accommodation;
use App\Models\attachment;
use App\Models\destination;
use App\Models\itinerary;
use App\Models\program;
use App\Models\popularExperience;
use App\Models\specialOffer;
use App\Models\slider;
use App\Models\Tourcostsummary;
use App\Models\buyaddons;
use App\Models\itinerary_day;
use DB;
use Illuminate\Http\Request;

class addonshowController extends Controller
{
    public function index()
    {
         $addons = addons::join('attachments','addons.id','attachments.destination_id')         
          ->where('attachments.type','addon')
           ->select('addons.*','attachments.attachment','attachments.destination_id')
         ->get(); 
          
           $addons_accom = itinerary_day::join('itineraries','itineraries.id','itinerary_days.itinerary_id')
           ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
           ->join('attachments','attachments.destination_id','itineraries.program_id')
         ->where('attachments.type','Accommodation')
         ->select('accommodations.*','attachments.attachment','attachments.destination_id')
              ->get();

        return view('website.buyaddons.showaddon',compact('addons','addons_accom'));
    }

      public function show($id)          
         {
        $tour_addon='addon';
        $programs = addons::
           join('itineraries','itineraries.program_id','addons.id')
        ->join('attachments','addons.id','attachments.destination_id')
        ->where('attachments.type','addon')
        ->where('itineraries.tour_addon','addon')
         ->where('addons.id',$id)->first();
   
       $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')

        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('addons','addons.id','itineraries.program_id')
        ->join('attachments','attachments.destination_id','accommodations.id')
        ->orderby('itinerary_days.id','ASC')
        ->where('itineraries.tour_addon','addon')
        ->where('itineraries.program_id',$id)
        ->where('attachments.type','Accommodation')
        ->select('accommodations.accommodation_name','attachments.attachment','accommodations.accommodation_descriptions','accommodations.category','destinations.destination_name','itineraries.*','addons.addon_name','itinerary_days.*')
        ->get();
     
         if($datas == "[]"){
            $programs = addons::where('id',$id)->first();
            $accommodations = accommodation::get();
            $destinations = destination::get();
            return view('admins.itinerary.add',compact('programs','accommodations','destinations','tour_addon'));
        };

         $buyaddons= buyaddons::join('programs','programs.id','buyaddons.program_id')
          ->where('buyaddons.program_id',$id)
         ->get();

   $addons = addons::
      join('attachments','attachments.destination_id','addons.id')
   ->select('addons.*','attachments.attachment')
    ->where('attachments.type','addon')
       ->get();

        $addonscosts = addons::
      where('addons.id',$id)
       ->get();
      
        return view('website.buyaddons.addonSummary',compact('datas','id','programs','buyaddons','addons','addonscosts'));
    }
}
