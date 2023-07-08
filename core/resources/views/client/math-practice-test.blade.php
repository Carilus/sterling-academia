@extends('layouts.app')
@section('title',$topic->name)
@section('content')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<div>
        <livewire:math-practice-test-component :topicSlug="$topicSlug" />
</div>
@endsection