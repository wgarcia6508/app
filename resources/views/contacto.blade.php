@extends('plantillas')

@section('content')
<H1>Titulo de contacanos  </H1>
<form method="POST" action="{{route('contact')}}">
    <input name="name" placeholder="Nombre" > <br>
    <input name="email" placeholder="Email" ><br>
    <input name="Subjet" placeholder="Asunto" ><br>
    <textarea name=" content"placeholder="Mensaje" cols="30" rows="10"></textarea><br>
    
    <button>Enviar</button>
</form>




@endsection('content')
