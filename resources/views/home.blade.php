@extends('layouts.app')

@section('title', 'SunSight Energy — Powering Futures with Solar')

@section('content')
    @include('components.sections.announcement')
    @include('components.sections.hero')
    @include('components.sections.home-page-services')
    @include('components.sections.clients')
    @include('components.sections.features-general')
    @include('components.sections.features-tabs')
    @include('components.sections.testimonials')
    @include('components.sections.pricing')
    @include('components.sections.faq')
    @include('components.sections.hero-alt')
@endsection
