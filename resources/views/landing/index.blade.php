@extends('layouts.app')

@section('content')
    @include('landing.partials.hero')
    @include('landing.partials.problems')
    @include('landing.partials.solutions')
    @include('landing.partials.services')
    @include('landing.partials.pricing')
    @include('landing.partials.comparison')
    @include('landing.partials.cta')
@endsection
