<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hostel;
use App\Http\Requests\Hostels\UpdateHostelsRequest;
use App\Http\Requests\Hostels\CreateHostelsRequest;
use Illuminate\Support\Facades\Auth;

class HostelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');
        if($search){
            $hostels = Hostel::where('location', 'LIKE', "%{$search}%")->paginate(6);
        }else{
            $hostels = Hostel::paginate(6);
        }
        return view('hostels.index')->with('hostels', $hostels);
    }

    /**
     * Display a listing of hostels form one user.
     *
     * @return \Illuminate\Http\Response
     */
    public function myhostels()
    {
        return view('hostels.myhostels')->with('hostels', Hostel::paginate(6));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hostels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHostelsRequest $request)
    {   
        $hostel = new Hostel();
        $hostel->name = $request->name;
        $hostel->location = $request->location;
        if($request->img1){
            $img1 = $request->img1->store('hostels');
            $hostel->img1 = $img1;
        }
        if($request->img2){
            $img2 = $request->img2->store('hostels');
            $hostel->img2 = $img2;
        }
        if($request->img3){
            $img3 = $request->img3->store('hostels');
            $hostel->img3 = $img3;
        }
        if($request->img4){
            $img4 = $request->img4->store('hostels');
            $hostel->img4 = $img4;
        }
        if($request->img5){
            $img5 = $request->img5->store('hostels');
            $hostel->img5 = $img5;
        }
        $hostel->user_id = Auth::id();
        $hostel->latitude = $request->latitude;
        $hostel->longitude = $request->longitude;
        $hostel->coordinates = $request->coordinates;
        $hostel->gender = $request->gender;
        $hostel->contact = $request->contact;
        $hostel->price = $request->price;
        $hostel->save();

        session()->flash('success', 'Hostel Created Successfully');

        return redirect(route('hostels.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hostel $hostel)
    {
        return view('hostels.hostel')->with('hostels', Hostel::All())->with('hostel', $hostel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hostel $hostel)
    {
        return view('hostels.create')->with('hostel', $hostel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHostelsRequest $request, Hostel $hostel)
    {
        $data = $request->only(['name', 'location', 'img1', 'latitude', 'longitude', 'img2','img3','img4','img5','delimg1','delimg2','delimg3','delimg4','delimg5','coordinates', 'contact', 'gender', 'price']);
        
        if($request->delimg1 ===  'true'){
            $hostel->deleteImg1();
            $data['img1'] = null;
        }

        if($request->delimg2 ===  'true'){
            $hostel->deleteImg2();
            $data['img2'] = null;
        }

        if($request->delimg3 ===  'true'){
            $hostel->deleteImg3();
            $data['img3'] = null;
        }

        if($request->delimg4 ===  'true'){
            $hostel->deleteImg4();
            $data['img4'] = null;
        }

        if($request->delimg5 ===  'true'){
            $hostel->deleteImg5();
            $data['img5'] = null;
        }

        if($request->hasFile('img1')){
            $img1 = $request->image->store('hostel');
            //delete old one
            $hostel->deleteImg1();

            $data['img1'] = $img1;
        }

        if($request->hasFile('img2')){
            $img2 = $request->img2->store('hostel');
            //delete old one
            $hostel->deleteImg2();

            $data['img2'] = $img2;
        }

        if($request->hasFile('img3')){
            $img3 = $request->img3->store('hostel');
            //delete old one
            $hostel->deleteImg3();

            $data['img3'] = $img3;
        }

        if($request->hasFile('img4')){
            $img4 = $request->img4->store('hostel');
            //delete old one
            $hostel->deleteImg4();

            $data['img4'] = $img4;
        }

        
        if($request->hasFile('img5')){
            $img1 = $request->img5->store('hostel');
            //delete old one
            $hostel->deleteImg5();

            $data['img5'] = $img5;
        }

        $hostel->update($data);

        session()->flash('success', 'Hostel Updated Successfully');

        return redirect(route('hostels.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hostel $hostel)
    {
        $hostel->deleteImg1();
        $hostel->deleteImg2();
        $hostel->deleteImg3();
        $hostel->deleteImg4();
        $hostel->deleteImg5();

        $hostel->delete();

        session()->flash('success', 'Hostel Deleted Successfully');

        return redirect(route('hostels.index'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function map()
    {
        return view('hostels.map')->with('hostels', Hostel::All());
    }
}
