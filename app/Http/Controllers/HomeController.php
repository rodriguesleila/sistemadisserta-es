<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Dissertacoes;
use App\Http\Controllers\DissertacoesControllerController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Dissertacoes::orderBy('data','dsc')->paginate(10);   
        $dados = ['lista'=>$data->getCollection(),'links'=>$data->links()];
      
        return view('dissertacoes.listagem')->with($dados);
        
    }
}
