@extends('master')
@section('content')

	<h5 > {{$livres->titre}} </h5>


	<div class="modal-body">
		<em>{{$livres->auteur}}</em>
	</div>
	
	<div class="modal-body">
		<strong>{{$livres->nbr_pages}}</strong>
	</div>

	<div class="modal-body">
		<p>{{$livres->description}}</p>
	</div>

	<div class="modal-footer">
		<a href="{{route('home')}}" class="btn btn-secondary" >Retour</a>
	</div>

@endsection