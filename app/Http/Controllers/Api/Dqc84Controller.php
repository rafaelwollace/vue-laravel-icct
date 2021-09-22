<?php

namespace App\Http\Controllers\Api;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Dqc84;
use Illuminate\Http\Request;

class Dqc84Controller extends Controller
{

    public function index()
    {       
        $dqc = DB::table('dqcmodel')
        ->select('dqcmodel.MODEL as md', 
                 'dqc84.id as ID',
                 'FAT_PART_NO', 
                 'TOTAL_LOCATION', 
                 'CREATE_DT',
                 'UPDATE_DT')
        ->join('dqc84', 'dqcmodel.id', '=', 'dqc84.MODEL')
        ->get();
        return response()->json($dqc);
    }

    public function store(Request $request)
    {
        $dqc = Dqc84::create($request->post());
        return response()->json([
            'message'=>'Cadastro efetuado com Sucesso!!',
            'dqc'=>$dqc
        ]);
    }

    public function show($id)
    {
        $dqc = Dqc84::find($id);

        return response()->json($dqc);
    }


      public function update(Request $request, $id)
    {
        $dqc = Dqc84::find($id);
        $dqc->update($request->all());
        
        return response()->json([
            'status' => 'success',
            'dqc'   => $dqc
        ]);
    }

    public function destroy($id)
    {
        $qdc = Dqc84::find($id);
        $qdc->delete();

        return response()->json('Registro deletado com sucesso');
    }
}
