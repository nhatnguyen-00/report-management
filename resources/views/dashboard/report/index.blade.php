@extends('layouts.dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop
@vite(['resources/js/chart/reportChart.js'])

@section('content')
<p>Welcome to this beautiful admin panel.</p>
<canvas id="myChart"></canvas>
@stop