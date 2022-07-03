@extends('layouts.app')

@section('header')
<div id="header">
    <header-component></header-component>
</div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="app">
                <search-component></search-component>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ mix('js/header.js') }}"></script>
<script src="{{ mix('js/search.js') }}"></script>
@endsection