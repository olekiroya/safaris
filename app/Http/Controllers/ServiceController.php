<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\PostBody;
use App\Models\attachment;
use App\Models\title;
use DB;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Postcategory = service::get();
        return view('admins.themes.addWhatWeOffer',compact('Postcategory'));
    }


 //What We Offer
     public function whatWeOffer()
    {
     $Postcategory = service::where('category','What We Offer')
     ->get();
     return view('admins.themes.whatWeOffer',compact('Postcategory'));
    }


   //Edit Message intro
      public function editWhatWeOffer($id)
    {     
        $messageBody = service::where('id',$id)
        ->get()->first();
        return view('admins.themes.editWhatWeOffer',compact('messageBody'));
     }

      //What We Offer,Client view
     public function whatWeOfferClient()
    {     
       $title = title::where('title','What We Offer')->first();
       $description = title::where('title','What We Offer')->first();
       $keywords = title::where('title','What We Offer')->first();
       //dd($title);

          $Postcategory = service::join('attachments','attachments.destination_id','services.id')
        ->where('attachments.type','Service')
         ->get();   

         $PostcategoryImage = title::where('title','What We Offer')
          ->first();
      
        // dd($PostcategoryImage);
         return view('website.whatWeOffer.whatWeOfferClient',compact('Postcategory','PostcategoryImage','title','description','keywords'));
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
       
        $program =  service::UpdateOrCreate(
            ['id_unique'=> request('id_unique')],               
               
             ['category'=>request('post_category'),    
             'title'=>request('title'),
              'body'=>request('post_body'),  
               'user_id'=>auth()->id()
            
            ]);
         DB::statement("update services set id_unique=$program->id where id=$program->id");
     

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

            //$id = attachment::where()
            $id = attachment::where('destination_id', '=', $program->id)
            ->where('type','Service')
            ->get()->first();
           

             if($id !=null)
             {
            $toupdate = attachment::where('destination_id',$program->id)
             ->where('type','Service')
             ->update([
            'attachment'=>$imageToStore
        ]);
           }else
           {
           attachment::Create(
                [
                'destination_id'=>$program->id,
                'attachment'=>$imageToStore,
                'type'=>'Service'
                ]
                ); 
              
        }
         }
     }
         return redirect()->route('whatWeOffer')->with('success','Created successfuly');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

           $program =  service::UpdateOrCreate(
            ['category'=>request('post_category'),               
                
             'title'=>request('title'),
              'body'=>request('post_body'),  
               'user_id'=>auth()->id()
            
            ]);
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

            //$id = attachment::where()
            $id = attachment::where('destination_id', '=', $program->id)
            ->where('type','Service')
            ->get()->first();
           
             if($id !=null)
             {
            $toupdate = attachment::where('destination_id',$program->id)
             ->where('type','Service')
             ->update([
            'attachment'=>$imageToStore
        ]);
           }else
           {
           attachment::Create(
                [
                'destination_id'=>$program->id,
                'attachment'=>$imageToStore,
                'type'=>'Service'
                ]
                ); 
              
        }
           }
    }
      if($program->category=="Welcome message")
      {
       return redirect('/welcomeMessage')->with('success','Created successfuly');
      }
      else{
         return redirect()->back()->with('success','Created successfuly');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
}
