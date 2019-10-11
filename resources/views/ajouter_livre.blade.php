@extends('master')
@section('content')

<form method="post" action="{{route('ajouter_livre')}}">

  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Livre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="titre" value=" {{old('titre')}} ">

    @if($errors->first('titre'))
    <p class="alert alert-danger">{{$errors->first('titre') }}</p>
    @endif
    
  </div>

   <div class="form-group">
    <label for="exampleFormControlSelect1">Catégories</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
   
      @foreach($categories as $categorie)
      <option value="{{$categorie->id}}">{{$categorie->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group" >
    <label for="exampleInputEmail1">Auteur</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="auteur" value=" {{old('auteur')}} ">
  </div>

  <div class="form-group" >
    <label for="exampleInputEmail1">Nombre des pages</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nbr_pages" value=" {{old('nbr_pages')}} ">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" id="exampleInputPassword1" name="description">{{old('description')}}</textarea>
    
  </div>



  <div class="form-group form-check">
    <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
</form>

@endsection

