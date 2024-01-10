<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Servie;
use App\Models\Testimonial;
use App\Models\Banner;
class HomeController extends Controller
{
    //
    public function home(){
        
        $roomTypes=RoomType::all();
        $service=Servie::all();
        $testimonials=Testimonial::all();
        return View('home',['roomTypes'=>$roomTypes,'services'=>$service,'testimonials'=>$testimonials]);
    }

    // Service Detail Page
    function service_detail(Request $request, $id){
        $service=Servie::find($id);
        return View('servicedetail',['service'=>$service]);
    }

    // Add Testimonial
    function add_testimonial(){
        return view('add-testimonial');
    }

    // Save Testimonial
    
    function save_testimonial(Request $request){
        
        $customerId=session('data')[0]->id;
        $data=new Testimonial;
        $data->customer_id=$customerId;
        $data->testi_cont=$request->testi_cont;
        $data->save();

        return redirect('customer/add-testimonial')->with('success','Data has been added.');
    }
}
