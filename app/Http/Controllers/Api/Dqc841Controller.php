<?php

namespace App\Http\Controllers\Api;
use DB;
use App\Http\Controllers\Controller;
use App\Models\Dqc841;
use Illuminate\Http\Request;

class Dqc841Controller extends Controller
{


    public function index()
    {       
        $dqc841 = DB::table('dqc84')
        ->select('dqc841.id as ID', 
                 'dqc841.PARTS_NO',
                 'dqc841.UNT_USG',
                 'dqc841.DESCRIPTION',
                 'dqc841.REF_DESIGNATOR',
                 'dqc841.UPDATE_DT',
                 'dqc84.FAT_PART_NO as FAT_PART_NO')
        ->join('dqc841', 'dqc84.id', '=', 'dqc841.FAT_PART_NO')
        ->orderBy('ID', 'ASC')
        ->get();
        return response()->json($dqc841);
    }

    public function store(Request $request)
    {
        $dqc841 = Dqc841::create($request->post());
        return response()->json([
            'message'=>'Cadastro efetuado com Sucesso!!',
            'dqc841'=>$dqc841
        ]);
    }

    public function show($id)
    {
        $dqc841 = Dqc841::find($id);
        return response()->json($dqc841);
    }


      public function update(Request $request, $id)
    {
        $dqc841 = Dqc841::find($id);
        $dqc841->update($request->all());
        
        return response()->json([
            'status' => 'success',
            'dqc841'   => $dqc841
        ]);
    }

    public function destroy($id)
    {
        $dqc841 = Dqc841::find($id);
        $dqc841->delete();

        return response()->json('Registro deletado com sucesso');
    }
}

