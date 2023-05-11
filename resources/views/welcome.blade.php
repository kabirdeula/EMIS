@extends('components.footer')

@extends('layouts.app')

@section('title', 'UniLink')

@section('content')

@include('components.hero')
{{-- @include('components.clients') --}}
@include('components.about')
{{-- @include('components.counts') --}}
{{-- @include('components.services') --}}
{{-- @include('components.more') --}}
{{-- @include('components.features') --}}
{{-- @include('components.testimonials') --}}
{{-- @include('components.portfolio') --}}
{{-- @include('components.team') --}}
{{-- @include('components.pricing') --}}
{{-- @include('components.faq') --}}
@include('components.contact')

@endsection

@extends('components.header')
