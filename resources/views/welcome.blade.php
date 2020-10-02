@extends('layouts.default')
@section('content')
     
    <h1>Ma boutique </h1>
    <h2>Une petite application qui permet de gerer une boutique</h2>

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show bg-success" role="alert">
            <strong>{{ session()->get('message') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- @if({{ flash() }})
        <div class="alert alert-success alert-dismissible fade show bg-success" role="alert">
            <strong>{{ flash('Message envoyé avec succèss !') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif --}}


@stop
