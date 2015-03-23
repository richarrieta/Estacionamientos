<?php namespace Estacionamiento\Http\Controllers;

class GraficoBarraController extends Controller{

    public function getGraficar() {
        return view('chart');
    }
    
    public function getData(){
        
        /* Ejemplo con data de DB
        $range = CarbonCarbon::now()->subDays(30);

        $stats = DB::table('orders')
          ->where('created_at', '>=', $range)
          ->groupBy('date')
          ->orderBy('date', 'ASC')
          ->get([
            DB::raw('Date(created_at) as date'),
            DB::raw('COUNT(*) as value')
          ])
          ->toJSON();
         */
        $array[0] = new \stdClass();
        $array[0]->ano = '2014-02-01';
        $array[0]->valor = 10; 
        
        $array[1] = new \stdClass();
        $array[1]->ano = '2014-02-02';
        $array[1]->valor = 20; 
        
        $array[2] = new \stdClass();
        $array[2]->ano = '2016-08-08';
        $array[2]->valor = 10; 
        
        $array[3] = new \stdClass();
        $array[3]->ano = '2017-12-12';
        $array[3]->valor = 40;         
        
        return response()->json($array);
    }

}
