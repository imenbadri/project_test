@extends('master')
@section('content')

<form method="post" action="{{route('update_categorie',$categorie->id)}}">

    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nom Catégorie</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name" value=" {{old('name',$categorie->name)}} ">

                                  @if($errors->first('name'))
                        <p class="alert alert-danger">{{$errors->first('name') }}</p>
                        @endif
    
  </div>

  <div class="form-group form-check">
    <input type="submit" class="btn btn-primary" value="Modifier">
  </div>
</form>



@endsection