<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\TranslateClient;

class TranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     * github地址：  https://github.com/Stichoza/google-translate-php
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array = array(
            'rule-name' => 'custom-message',
        );
        $tr = new TranslateClient('en', 'zh-CN');
        $tr->setUrlBase('http://translate.google.cn/translate_a/single'); // Set Google Translate URL base (This is not necessary, only for some countries)
//        echo $tr->translate('Hello World!');
        foreach ($array as &$v){
            $v = $tr->translate($v);
        }
        dump($array);
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
