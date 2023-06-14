@extends('app')

@section('content')
    <div id="app">
        <home-component></home-component>
    </div>

    <script src="{{ mix('js/home.js') }}"></script>
@endsection
