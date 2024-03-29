<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servie;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Servie::all();
        return view('service.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'small_desc'=>'required',
            'detail_desc'=>'required',
            'photo'=>'required',
        ]);

        if($request->hasFile('photo')){
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $imgPath = $request->file('photo')->storeAs('images', $fileName, 'public');
            //$requestData["photo"] = '/storage/'.$imgPath;

        }else{
           $imgPath="null";
        }
        
        $data=new Servie;
        $data->title=$request->title;
        $data->small_desc=$request->small_desc;
        $data->detail_desc=$request->detail_desc;
        $data->photo='/storage/'.$imgPath;
        $data->save();

        return redirect('admin/service/create')->with('success','Data has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Servie::find($id);
        return view('service.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Servie::find($id);
        return view('service.edit',['data'=>$data]);
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
        $request->validate([
            'title'=>'required',
            'small_desc'=>'required',
            'detail_desc'=>'required'
        ]);

       
        if($request->hasFile('photo')){
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $imgPath = $request->file('photo')->storeAs('images', $fileName, 'public');
            //$requestData["photo"] = '/storage/'.$imgPath;

        }else{
           $imgPath="null";
        }
        
        $data=Service::find($id);
        $data->title=$request->title;
        $data->small_desc=$request->small_desc;
        $data->detail_desc=$request->detail_desc;
        $data->photo='/storage/'.$imgPath;
        $data->save();

        return redirect('admin/service/'.$id.'/edit')->with('success','Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servie::where('id',$id)->delete();
        return redirect('admin/service')->with('success','Data has been deleted.');
    }
}