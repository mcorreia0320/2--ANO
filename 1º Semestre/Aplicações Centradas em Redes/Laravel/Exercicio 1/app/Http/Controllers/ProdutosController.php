<?php 

    namespace App\Http\Controllers;
    use App\Models\Products;
    use Illuminate\Http\Request;

    class ProdutosController extends Controller{

        // const ARRAY_PRODUTOS = [
        //     ["id" => 1, "name" => "PC entry", "descricao" => "jdsnjd", "img" =>  "/img/produtos/1.jpg", "preco" => 1000],
        //     ["id" => 2, "name" => "PC mid", "descricao" => "jdidsd", "img" =>  "/img/produtos/2.jpg", "preco" => 2000],
        //     ["id" => 3, "name" => "PC top", "descricao" => "doksd", "img" => "/img/produtos/3.jpg" , "preco" => 1500],
        //     ["id" => 4, "name" => "PC gamer", "descricao" => "iejeehdo", "img" => "/img/produtos/4.jpg" , "preco" => 3200],
        //  ];

         function welcome(){
            return view('welcome');
         }

         function index(){
            $produtos = Products::all();
            return view('produtos', ['produtos' => $produtos]);
         }

         function show($id){
            $produto = Products::find($id);
            return view('detalhes', ['produto' => $produto]);
         }

         function create(){
            return view('create');
         }
        function store(Request $request){   

            $produto = new Products();
            $produto->name = request('name');
            $produto->descricao = request('desc');
            $produto->preco = request('price');

            // gravaçao de imagem
            if($request->has('img')){
                $image = $request->file('img');
                $folder = "/img/produtos/";
                $iname = 'prod_'.time();
                $fileName = $iname.".".$image->getClientOriginalExtension();
                $storagePath = $folder . $fileName;
                $filePath = "/storage" . $storagePath;

                $image->storeAs($folder, $fileName, 'public');

                $produto->img = $filePath;
            }

            $produto->save();

            return redirect('/produtos/create')->with('message', 'Produto Criado');

        }
        function destroy($id){
            $produto = Products::find($id);
            $produto->delete();
            return redirect('/produtos');
        }
    }
?>
