<?php namespace App\Http\Controllers;
use App\Dissertacoes;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class DissertacoesController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function lista(){
        $data = Dissertacoes::orderBy('data','dsc')->paginate(10);   
        $dados = ['lista'=>$data->getCollection(),'links'=>$data->links()];
      
        return view('dissertacoes.listagem')->with($dados);
    }

     public function publico(){
        $data = Dissertacoes::orderBy('data','asc')->paginate(5);   
        $dados = ['lista'=>$data->getCollection(),'links'=>$data->links()];
      
        return view('dissertacoes.listapublic')->with($dados);
    }

    public function formulario(){
        return view('formulario');
    }
    
    public function detalhar() {
        $id = Request::input('id_value');
        $data = DB::select('select resumo from dissertacoes where id= ?',[$id]);
        $my_json = json_encode($data);
        return $my_json;
    }
    public function cadastro(){
        $nome= Request::input('inputNome');
        $data = date('Y-m-d', strtotime(str_replace('/', '-', Request::input('inputData'))));
        $titulo = Request::input('inputTitulo');
        $orientador = Request::input('inputOrientador');
        $co_orientador = Request::input('inputCoorientador');
        $resumo = Request::input('inputResumo');
       

        DB::insert('insert into dissertacoes (nome, data, titulo, orientador, co_orientador, resumo) values (?,?,?,?,?,?)', array($nome, $data, $titulo, $orientador, $co_orientador, $resumo));
        return redirect()->action('DissertacoesController@lista');
}
    public function atualiza() {
        $id = Request::input('id');

        $nome=Request::input('nome');
        $data = date('Y-m-d', strtotime(str_replace('/', '-', Request::input('data'))));
        $titulo = Request::input('titulo');
        $orientador = Request::input('orientador');
        $co_orientador = Request::input('co_orientador');
        $resumo = Request::input('resumo');

        DB::table('dissertacoes')
                ->where('id',$id)
                ->update(array('nome' => $nome,
                          'data' => $data,
                          'titulo' => $titulo,
                          'orientador' => $orientador,
                          'co_orientador' => $co_orientador,
                          'resumo' => $resumo));
       return redirect()->action('DissertacoesController@lista');
    }

 public function editar($id) {
       $data = Dissertacoes::find($id); 
       return view('formulario_up')->with('d',$data);
     }
    public function deletar($id){
        $data = Dissertacoes::find($id);
        $data->delete();
        return redirect()->action('DissertacoesController@lista');
    }
    public function pesquisar(){
        $posts = DB::table('dissertacoes')
                ->where('nome','like','%'.Request::get('texto').'%')
                ->orwhere('titulo','like','%'.Request::get('texto').'%')
                ->orwhere('orientador','like','%'.Request::get('texto').'%')
                ->get();
        return view('dissertacoes.pesquisar')->with('posts',$posts);               
    }
    public function pesquisarlista(){
        $posts = DB::table('dissertacoes')
                ->where('nome','like','%'.Request::get('texto').'%')
                ->orwhere('titulo','like','%'.Request::get('texto').'%')
                ->orwhere('orientador','like','%'.Request::get('texto').'%')
                ->get();
        return view('dissertacoes.pesquisarlista')->with('posts',$posts);               
    }
}