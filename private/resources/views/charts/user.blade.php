@extends('layouts.app')

@section('content')
    
    
    <div class="ypt" style="width: 50%;margin: 0 auto;">
        <a class="btn btn-secondary" href="{{ route('puntoacceso.index') }}">Volver</a>
        {!! $chart->container() !!}
    </div>
    <div class="mt-5 ypt" style="width: 50%;margin: 0 auto;">
        {!! $chart2->container() !!}
    </div>
    
    <div class="mt-5 ypt" style="width: 50%;margin: 0 auto;">
        <!--{!! $chart3->container() !!}-->
    </div>
    
    <div class="mt-5 ypt" style="width: 50%;margin: 0 auto;">
        <h4>Conexiones por punto de acceso</h4>
        {!! $chart4->container() !!}
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $chart->script() !!}
    {!! $chart2->script() !!}
    {!! $chart3->script() !!}
    {!! $chart4->script() !!}
@stop