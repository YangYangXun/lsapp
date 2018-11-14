<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $request->session()->regenerate();
        // 在 Session 中存储一条数据...
        session(['test' => 'aa']);
        session(['users' => 'kk']);
        $request->session()->put('key', 'mykey');
        $request->session()->put('key', 'mykey2');
        $request->session()->push('user.teams.kk', 'developers');
        $request->session()->forget('key');
        $request->session()->forget('user');
        //
        // $request->session()->put();
        $value = $request->session()->all();
        if ($request->session()->has('_previous')) {
            //
            $previous_url = $request->session()->get('_previous')['url']; // get previous url
            if($previous_url == "http://localhost/lsapp/public"){
                dump($request->session()->get('_previous')['url']);
            }
        }

        return view('test');

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
