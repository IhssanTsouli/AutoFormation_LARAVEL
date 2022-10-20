afficher={{$age=NULL}}

@if($age ==1)
<H1>HELLO IHSSAN</H1>
@else
<h2>NULL</h2>
@endif

@isset($age)
<h2>Age is {{$age}}</h2>
@endisset

@empty($age)
<h2>age is empty</h2>
@endempty

@php
$user = array("promo1","promo2","Promo3")
@endphp

@foreach($user as $value)
<p>User name : {{ strtoupper( $value) }} </p>

@endforeach



