@extends('layouts.app')

@section('content')


<div class="content">
    <div class="faq">
      <h2>Polecane narzędzia</h2>
      <div class="card-group" id="eleContainer">
        <!-- W tym miejscu za pomocą funckji loadTools() zostaną wygenerowane dynamicznie karty polecanych narzędzi-->
        <!-- karty mają gotowe style z bootstrapa -->
      </div>
    </div>
  </div>



@endsection

@section('styles')
    @parent
    <style>

    </style>
@endsection
