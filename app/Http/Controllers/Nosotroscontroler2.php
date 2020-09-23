<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Nosotroscontroler2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PORTAFOLIO=
        [
            ['title'=>'proyecto #1'],
            ['title'=>'proyecto #2'],
            ['title'=>'proyecto #3'],
            ['title'=>'proyecto #4'],
        ];
        return view ('nosotros', compact('PORTAFOLIO'));
    }

}

/****************************************************************************
 * 
 * 
 * 
 * 
 * 
 */
