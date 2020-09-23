@extends('plantillas')
@section('content')
<H1>ELLAS MARICAS A </H1>
<ul>
    @if($PORTAFOLIO)
        @foreach($PORTAFOLIO as $PORTAFOLIOTtem)
        <li>{{$PORTAFOLIOTtem['title']}}</li>
        @endforeach
    @else
<H1>No hayq ue mOSTRASR </H1>

@endif
</ul>
@endsection('content')