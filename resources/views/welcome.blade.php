@extends('layouts.app')

@section('content')

    @include('partials.nav')

    <main class="page">
        @include('partials.heroes')
        @include('partials.products')
        @include('partials.showcase')
    </main>

    @include('partials.footer')

@endsection

