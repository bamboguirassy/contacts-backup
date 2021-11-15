@extends('base')

@section('title',"Liste des contacts")

@section('body')
<div class="container bootstrap snippets bootdey">
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body p-t-0">
                <div class="input-group">
                    <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-effect-ripple btn-primary"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach ($contacts as $contact)
    <x-contact-item :contact="$contact" />
    @endforeach

    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
    <x-contact-item />
</div>
</div>
@endsection
