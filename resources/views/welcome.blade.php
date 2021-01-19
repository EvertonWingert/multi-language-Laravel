@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-3">{{ __('Welcome') }}</h1>
    <h4>{{app()->getLocale()}}</h4>

</div>
@endsection