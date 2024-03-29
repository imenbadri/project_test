@extends('master')
@section('content')

<h1>Liste des Livres</h1>
<h4 class="text-muted"> {{$livres->count()}} {{__('message.Livres')}} / {{$livres->total()}} {{__('message.trouvés')}} : </h4>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Category</th>
      <th scope="col">Auteur</th>
      <th scope="col">Nombre des pages</th>
      <th scope="col">user</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($livres as $livre)
    <tr>
      <th scope="row">{{$livre->id}}</th>
      <td> {{$livre->titre}} </td>
      <td> {{$livre->category->name}} </td>
      <td> {{$livre->auteur}} </td>
      <td> {{$livre->nbr_pages}} </td>
      <td> {{$livre->user_id}} </td>
      <td>
        <a href="{{route('voir_livre', $livre->id)}}" class="btn btn-info">Voir</a>
     
        <a href=" {{route('edit_livre',$livre->id)}} " class="btn btn-success">Editer</a>
        <a href=" {{route('delete_livre', $livre->id)}} " class="btn btn-danger">Suprimer</a>
    
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$livres->links()}}
@endsection

