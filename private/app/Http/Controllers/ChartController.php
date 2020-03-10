<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PuntoAcceso;
use App\Conexion;
use App\Charts\UserChart;
use App\Charts\PuntoAccesoChart;
use App\Charts\ConexionChart;
use Charts;


class ChartController extends Controller
{
    public function index()
    {
        //Conexiones por mes
        $pas = PuntoAcceso::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('fechaalta', date('Y'))
                    ->groupBy(\DB::raw("Month(fechaalta)"))
                    ->pluck('count');

        $chart = new PuntoAccesoChart;
        $chart->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiempre', 'Octubre', 'Noviembre', 'Diciembre']);
        $chart->dataset('Número de puntos de acceso creados por mes', 'bar', $pas)->options([
            'fill' => 'true',
            'borderColor' => '#71A7D4',
            'backgroundColor' => '#3FB8E1'
        ]);
        
        // Conexiones por mes
        $con = Conexion::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('fecha', date('Y'))
                    ->groupBy(\DB::raw("Month(fecha)"))
                    ->pluck('count');

        $chart2 = new ConexionChart;
        $chart2->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiempre', 'Octubre', 'Noviembre', 'Diciembre']);
        $chart2->dataset('Número de conexiones por mes', 'line', $con)->options([
            'fill' => 'true',
            'borderColor' => '#71A7D4',
            'backgroundColor' => '#3FB8E1'
        ]);

        // Conexiones por punto de acceso 
        $users = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');

        $chart3 = new ConexionChart;
        $chart3->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiempre', 'Octubre', 'Noviembre', 'Diciembre']);
        $chart3->dataset('Número de usuarios por mes', 'line', $users)->options([
            'fill' => 'true',
            'borderColor' => '#71A7D4',
            'backgroundColor' => '#3FB8E1'
        ]);
        
        $cp = Conexion::select(\DB::raw("COUNT(*) as count"))
                    ->groupBy(\DB::raw("idpuntoacceso"))
                    ->pluck('count');
        
        $chart4 = new ConexionChart;
        $chart4->labels(['1', '2' , '3' ,'4','5','6','8','9','10','11']);
        $dataset = $chart4->dataset('Número de conexiones por punto de acceso', 'pie', $cp);
        $dataset->backgroundColor(collect(['#7158e2','#3ae374', '#ff3838', '#9ad115', '#927e60', '#123b23', '#97acf2', '#9c2e6f', '#d0fbdc']));
        // $dataset->color(collect(['#7d5fff','#32ff7e', '#ff4d4d']));

        return view('charts.user', compact('chart', 'chart2', 'chart3', 'chart4'));
    }
    
}