<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Listing;

use App\Models\Notification;

use App\Models\ListingImage;

class ListingController extends Controller
{
    //

    public function all_listings(Request $request)
    {
        # code...

        if ($request->company_profile_id) {
            # code...

            $listings = Listing::with('images')->where('company_profile_id', $request->company_profile_id)->latest()->get();

            return $listings;

        }if($request->state){

            if ($reqest->state == 'sold') {
                # code...

                $listings = Listing::with('images')
                ->where('sold', 1)
                ->latest()->get();
    
                return $listings;
            }

            if ($reqest->state == 'booked') {
                # code...
                $listings = Listing::with('images')
                ->where('booked', 1)
                ->latest()->get();
    
                return $listings;
            }

            if ($reqest->state == 'recommended') {
                # code...
                $listings = Listing::with('images')
                ->where('recommended', 1)
                ->latest()->get();
    
                return $listings;
            }



        }if($request->search){

            $listings = Listing::with('images')
            ->where('title', 'like', '%'.$request->key.'%')
            ->orWhere('description', 'like', '%'.$request->key.'%')
            ->orWhere('location', 'like', '%'.$request->key.'%')
            ->orWhere('property_type', 'like', '%'.$request->key.'%')
            ->latest()->get();

            return $listings;



        }else {
            # code...

            $listings = Listing::with('images')->where('sold', 0)->latest()->get();

            return $listings;

        }


       
    }


}
