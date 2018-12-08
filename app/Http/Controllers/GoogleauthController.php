<?php

namespace App\Http\Controllers;

use PragmaRX\Google2FA\Google2FA;
use Illuminate\Http\Request;

class GoogleauthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $google2Fa = new Google2FA();
        $google_key = $google2Fa->generateSecretKey('32');
        $companyName = 'ilvtian';
        $conpanyEmail = 'zlc@lvtian.vip';
        $qrCodeStr = $google2Fa->getQRCodeUrl($companyName,$conpanyEmail,$google_key);
        return view('auth.google',['qrCodeStr'=>$qrCodeStr,'google_key'=>$google_key]);
        //
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
        //
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
}
