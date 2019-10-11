@extends('master')
@section('content')

	<h4 > La résultat de recherche pour la  Catégorie : {{$categorie->name}} </h4>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Nombre des pages</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categorie->livres as $livre)
    <tr>
      <th scope="row">{{$livre->id}}</th>
      <td> {{$livre->titre}} </td>
      <td> {{$livre->auteur}} </td>
      <td> {{$livre->nbr_pages}} </td>
     
      <td>
        <a href="{{route('voir_livre', $livre->id)}}" class="btn btn-info">Voir</a>
     
        <a href=" {{route('edit_livre',$livre->id)}} " class="btn btn-success">Editer</a>
        <a href=" {{route('delete_livre', $livre->id)}} " class="btn btn-danger">Suprimer</a>
    
      </td>
    </tr>
  @endforeach
  </tbody>
</table>


@endsection