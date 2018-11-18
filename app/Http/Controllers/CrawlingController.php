<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;

class CrawlingController extends Controller
{
    /**
     * Display a listing of the resource.
     * https://github.com/guzzle/guzzle
     * http://docs.guzzlephp.org/en/stable/request-options.html#ssl-key
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();

//        $res = $client->request('GET','http://discuz.lvtian.ren');
//        echo $res->getStatusCode();
//        echo $res->getHeaderLine('content-type');
//        echo $res->getBody();

        $request = new Psr7\Request('GET','https://www.psc.app');
        $promise = $client->sendAsync($request)->then(function ($response){
            echo $response->getBody();
        });
        $promise->wait();
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
