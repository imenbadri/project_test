@extends('master')
@section('content')


<form method="post" action="{{route('ajouter_categorie')}}">

    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nom Catégorie</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name" value=" {{old('name')}} ">

                                  @if($errors->first('name'))
                        <p class="alert alert-danger">{{$errors->first('name') }}</p>
                        @endif
    
  </div>
  

  <div class="form-group form-check">
    <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
</form>


<h1>Liste des Catégories </h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom catégorie</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
 @foreach($categories as $categorie)
 
    <tr>
      <th scope="row">{{$categorie->id}}</th>
      <td> {{$categorie->name}} </td>

      <td>
        <a href=" {{route('voir_categorie',$categorie->id)}} " class="btn btn-info">Voir</a>
     
        <a href=" {{route('update_categorie', $categorie->id)}} " class="btn btn-success">Editer</a>
        <a href=" {{route('delete_categorie', $categorie->id)}} " class="btn btn-danger">Suprimer</a>
    
      </td>
    </tr>
  @endforeach
  </tbody>
</table>


@endsection