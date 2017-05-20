@extends('layouts.page')
@section('title', 'Convênio')
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: FORM -->
    {{ Form::open(['route' => 'dentalplans.store', 'class' => 'form']) }}

    @include('dentalplans.partials.form')

    {{Form::close()}}
    <!-- end: FORM -->

    </div>
    <!-- end: DIV -->

@endsection
