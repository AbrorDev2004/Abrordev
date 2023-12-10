@extends('layouts.site')
@section('content')
    @include('layouts.header')

    @include('sections.about')
    @include('sections.resume')
    @include('sections.services')
    @include('sections.portfolio')
    @include('sections.contact')
@endsection
