<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Nosotroscontroler extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
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
