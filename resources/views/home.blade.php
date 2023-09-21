@extends('layouts.standard') {{-- Elterntemplate wird verwendet --}}

{{-- Berich des Elterntemplates auswählen, in das man schreiben möchte --}}
@section('header')
<h1>{{ $title }}</h1>
@endsection

@section('main')
<p>{{ $info }}</p>
@endsection

@section('footer')
<p>Irgendwelche Infos</p>
@endsection