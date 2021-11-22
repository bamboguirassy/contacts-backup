@extends('base')

@section('title','Nouveau Contact')


@section('body')
@foreach ($errors->all() as $message )
{{ $message }}<br>
@endforeach
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body p-t-0">
                   <h1 align="center">Nouveau Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="card-body">
            <form  action="{{ route('contact.store') }}" method="POST">
                @method('POST')
                @csrf
                <div class="row">
                <div class=" col-12 col-md-6 col-lg-4">
                  <label for="name">Nom</label>
                  <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control @error('name') is invalid @enderror" required="required" placeholder="" aria-describedby="helpId">
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                  <label for="telephonePrimaire">Telephone Primaire</label>
                  <input type="text" value="{{ old('telephonePrimaire') }}" name="telephonePrimaire" id="telephonePrimaire" class="form-control @error('telephonePrimaire') is invalid @enderror" required="required" placeholder="" aria-describedby="helpId">
                    <!--La fonction old permet à laravel de recupére les valeurs précédentes des champs-->
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <label for="telephoneSecondaire">Telephone Secondaire</label>
                    <input type="text" value="{{ old('telephoneSecondaire') }}"  name="telephoneSecondaire" id="adresse" class="form-control @error('telephoneSecondaire') is invalid @enderror" placeholder="" aria-describedby="helpId">
                  </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <label for="email">Email</label>
                    <input type="text" value="{{ old('email') }}" name="email" id="email @error('email') is invalid @enderror" class="form-control " placeholder="" aria-describedby="helpId">
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <label for="adresse">Adresse</label>
                    <input type="text" value="{{ old('adresse') }}" name="adresse" id="adresse" class="form-control @error('adresse') is invalid @enderror" placeholder="" aria-describedby="helpId">
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <label for="profession">Profession</label>
                    <input type="text" value="{{ old('profession') }}" name="profession" id="profession" class="form-control @error('profession') is invalid @enderror" placeholder="" aria-describedby="helpId">
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <label for="entreprise">Entreprise</label>
                    <input type="text" value="{{ old('entreprise') }}" name="entreprise" id="entreprise" class="form-control @error('entreprise') is invalid @enderror" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-12 pt-2">
                    <button type="submit" class="btn  btn-primary float-right ml-2">Enregister</button>
                    <button type="reset" class="btn  btn-primary float-right">Vider .<i class="fa fa-refresh" aria-hidden="true"></i></button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

@endsection
