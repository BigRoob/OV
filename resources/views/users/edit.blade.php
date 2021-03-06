@extends('layouts.page')
@section('title')
    {{$user->full_name}}
@endsection
@section('content')

    <!-- start: DIV -->
    <div style="margin: 15px 2px">

        <!-- start: PANEL -->
        <div class="panel">

            <!-- start: PANEL HEAD -->
            <div class="panel-head">

                <div class="col-lg-12 col-md-12">

                    <div class="col-lg-12 col-md-12">

                        <h2 class="table_title">Meu Cadastro<br>
                            <small style="color: #dddddd">Todas dados do seu cadastro</small>
                        </h2>

                        <hr class="custom_sep">

                    </div>

                </div>

            </div>
            <!-- end: PANEL HEAD -->

            <!-- start: BODY INFORMATION -->
            <div class="panel-body">

                @include('errors.list')

                {{ Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) }}
                @include('users.partials.form')
                {{ Form::close() }}

            </div>
            <!-- end: BODY INFORMATION -->

        </div>
        <!-- end: MAIN INFORMATION PANEL -->

    </div>
    <!-- end: DIV -->

@endsection
