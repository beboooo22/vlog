@extends('back-end.layout.app')

@php
    $module = "Category";
    $pageTitle = "Edit " . $module;
    $formTitle = "Edit " . $module;
    $formDesc = "Here you can add " . $module . " profile";
@endphp

@section('title')
    {{$pageTitle}}
@endsection

@section('content')
    @component('back-end.layout.header')
        @slot('nav_title')
            {{$pageTitle}}
        @endslot
    @endcomponent

    <div class="card-body">
        @if(count($errors))
            @include('layouts.errors')
        @endif
        <form action="{{ route('categories.update', $category->id) }}" method="POST" autocomplete="off">
            <input autocomplete="off" name="hidden" type="text" style="display:none;">
            @method('PATCH')
            @include('back-end.categories.form')
            <button type="submit" class="btn btn-primary pull-right">Edit {{ $module }}</button>
            <div class="clearfix"></div>
        </form>
    </div>

@endsection
