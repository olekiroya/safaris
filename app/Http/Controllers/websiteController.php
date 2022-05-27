<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use App\Models\destination;
use App\Models\popularExperience;
use App\Models\slider;
use App\Models\specialOffer;
use App\Models\departures;
use App\Models\program;
use App\Models\PostBody;
use App\Models\title;
use App\Models\quickLink;
use Carbon\Carbon;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//Code to check Status
   $start_date=Carbon::now();
   $_date=date('Y-m-d', strtotime($start_date));
//Update status of special_offers table
   $special_date = specialOffer::where('status','Active')
          ->where('offer_deadline','<',$_date)
           ->update([
            'status'=>'Inactive'
        ]);

           //Update status of departures table
          $departure_date = departures::where('status','Active')
          ->where('end_date','<',$_date)
           ->update([
            'status'=>'Inactive'
        ]);
       //End of Code to check Status

        $offers='offers';
        $offers_private = specialOffer::join('programs','programs.id','special_offers.tour_id')
        ->join('attachments','attachments.destination_id','programs.id')
        ->select('special_offers.id','special_offers.*','programs.tour_name','programs.days','programs.category','programs.type','programs.tour_code',
        'programs.price','programs.id as program_id','programs.physical_rating','attachments.attachment')
        ->where('special_offers.status','Active')
         ->where('programs.category','Private')
        ->where('attachments.type','programs')
        ->groupby('attachments.destination_id')
        ->limit(3)->latest()->get();


        $offers_group = specialOffer::join('programs','programs.id','special_offers.tour_id')
        ->join('attachments','attachments.destination_id','programs.id')
        ->join('departures','departures.tour_id','programs.id')
        ->select('special_offers.id','special_offers.*','departures.start_date','departures.end_date','programs.tour_name','programs.days','programs.category','programs.type',
        'programs.price','programs.id as program_id','programs.physical_rating','attachments.attachment')
       ->where('special_offers.status','Active')
       ->where('departures.status','Active')
       ->where('programs.category','Group')
        ->where('attachments.type','programs')
        ->groupby('attachments.destination_id')
        ->limit(3)->latest()->get();

        $programs= program::
        join('attachments','attachments.destination_id','programs.id')
        ->select('programs.price','programs.id','programs.currency','programs.days','programs.tour_name','programs.type','attachments.attachment')
        ->limit(6)
        ->orderby('programs.id','DESC')
        ->get();

  $popular_safari = program::
  join('attachments','attachments.destination_id','programs.id')
  ->select('programs.*','attachments.attachment')
  ->where('programs.popular_experience','Yes')
  ->where('attachments.type','programs')
  ->limit(3)->get();

//dd($popular_exp_safari);
   $popular_trekking = program::join('attachments','attachments.destination_id','programs.id')
 ->select('programs.*','attachments.attachment')
  ->where('programs.type','Hiking & Trekking')
 ->where('programs.popular_experience','Yes')
  ->where('attachments.type','programs')
  ->limit(1)->get()->first();

 $popular_holiday = program::join('attachments','attachments.destination_id','programs.id')
 ->select('programs.*','attachments.attachment')
->where('programs.type','Beach Holidays')
 ->where('programs.popular_experience','Yes')
  ->where('attachments.type','programs')
  ->limit(1)->get()->first();



    $scheduledGroupTours = departures::join('programs','departures.tour_id','programs.id')
       ->join('attachments','attachments.destination_id','programs.id')
        ->select('departures.*','programs.*','attachments.attachment')
        ->where('departures.status','Active')
        ->where('departures.group_tour_category','GS')
        ->where('attachments.type','programs')
        ->groupBy('departures.group_tour_category')
        ->get();

         $place_to_visit = program::join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
         ->select('programs.*','attachments.attachment')
          ->where('attachments.type','programs')
          ->where('programs.popular_experience','Yes')
           ->where('programs.category','Private')
          ->where('itineraries.tour_addon','programs')
          ->limit(6)->latest()->get();

          $sliders = slider::join('programs','programs.id','sliders.tour_id')->where('status',1)
          ->get();
       //dd($sliders);
          $welcome_message = PostBody::join('attachments','post_bodies.id','attachments.destination_id')
            //->select('post_bodies.*','attachments.attachment')
           ->where('attachments.type','Posts')
          ->limit(1)->get();

         $testimonies = Testimony::join('attachments','attachments.destination_id','testimonies.id')
        ->select('testimonies.*','attachments.attachment')
        ->where('attachments.type','Testimonies')
        // ->where('Testimonies.status','1')
        ->limit(8)->latest()->get();

  //Seach Engine

       // $seo = title::where('title','What We Offer')->first();
       $title = "Wildquest Tour Tanzania";
       $description = "";
       $keywords = "";


//Quick Link
       $datasLink = quickLink::
   limit(3)->get();
     $datasLinkf = quickLink::offset(3)
   ->limit(3)->get();
     $datasLinkff = quickLink::offset(6)
   ->limit(3)->get();

   //Contacts
    $contacts = PostBody::where('category','Contact')
       ->first();

       //dd($contacts);
        //End of Search Engine
         return view('website.home.index',compact('offers_private','offers_group','popular_safari','popular_holiday','popular_trekking','place_to_visit','sliders','testimonies','offers','welcome_message','scheduledGroupTours','datasLink','datasLinkf','datasLinkff','title','description','keywords','contacts','programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Fction to read the tours according the circuit zone
    public function circuitTour($circuit_name)
    {

        $circuitTour = program::join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
           ->join('departures','departures.tour_id','programs.id')
         ->select('programs.*','attachments.attachment')
          ->where('attachments.type','programs')
          ->where('programs.tour_circuit',$circuit_name)
           ->where('programs.category','Group')
          ->where('itineraries.tour_addon','programs')
          ->where('departures.status','Active')
         ->get();

    $circuitTour = program::join('attachments','programs.id','attachments.destination_id')
         ->join('itineraries','programs.id','itineraries.program_id')
         ->select('programs.*','attachments.attachment')
          ->where('attachments.type','programs')
          ->where('programs.tour_circuit',$circuit_name)
           ->where('programs.category','Private')
          ->where('itineraries.tour_addon','programs')
         ->get();
      // dd($circuitTour);
        return view('website.circuitTour.circuitTour',compact('circuitTour','circuit_name'));

    }

     public function popularExperienceClient()
    {

   $popularExperiences = program::
  join('attachments','attachments.destination_id','programs.id')
  ->select('programs.*','attachments.attachment')
   ->where('programs.popular_experience','Yes')
  ->where('attachments.type','programs')
  ->get();

   $PostcategoryImage = title::where('title','Popular Experience')
          ->first();

  //dd($popularExperiences);
    return view('website.popularExperiences.popularExperience',compact('popularExperiences','PostcategoryImage'));
    }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
