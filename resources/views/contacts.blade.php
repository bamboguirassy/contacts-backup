@extends('base')

@section('title',"Liste des contacts")

@section('body')
<div class="container bootstrap snippets bootdey">
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body p-t-0">
                <form action="{{ route('contact.search') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="motCle">Rechercher</label>
                        <input type="text" id="motCle" name="motCle" class="form-control" placeholder="Search">
                        <!--<span class="input-group-btn">
                            <button type="button" class="btn btn-effect-ripple btn-primary"><i class="fa fa-search"></i></button>
                        </span>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($contacts as $contact)
    <x-contact-item :contact="$contact" />
    @endforeach
</div>
</div>
@endsection
