@extends('layouts.app')
@section('title', 'Practice Test')
@section('content')
    <main id="main" class="main">

        <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
        <div>
            <livewire:question-component />
        </div>
    </main>
@endsection
