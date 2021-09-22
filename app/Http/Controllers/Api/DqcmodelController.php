<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dqcmodel;

class DqcmodelController extends Controller
{


    public function index()
    {
        $model  = Dqcmodel::orderby('id', 'ASC')->get();
        return response()->json($model);
    }

    public function store(Request $request)
    {
        $model = Dqcmodel::create($request->post());
        return response()->json([
            'message'=>'Cadastro efetuado com Sucesso!!',
            'model'=>$model
        ]);
    }

    public function show($id)
    {
        $model = Dqcmodel::find($id);

        return response()->json($model);
    }


    public function update(Request $request, $id)
    {
        $model = Dqcmodel::find($id);
        $model->update($request->all());

        return response()->json([
            'status' => 'success',
            'model'   => $model
        ]);
    }

    public function destroy($id)
     {
         $dqcmodel = Dqcmodel::find($id);
         $dqcmodel->delete();

         return response()->json('Dqcmodel deletado com sucesso');
     }
}
