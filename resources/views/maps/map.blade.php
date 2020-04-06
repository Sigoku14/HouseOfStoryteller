@extends('template/template')

@section('title', 'Map生成')
@section('css', '/HouseOfStoryteller/public/css/map.css')
@include('template/header')

@section('content')

<article>
    <div>
        <select name="map_size" id="size" v-model="selected">
            <option disabled value="">Please select one</option>
            <option value="s1">20 × 20</option>
            <option value="s1">50 × 50</option>
            <option value="s1">100 × 100</option>
        </select>
    </div>
    <br />
    <span>Selected: {{ selected }}</span>
</article>

<script src="{{ mix('js/app.js') }}"></script>
@endsection