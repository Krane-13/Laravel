<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
    {
//     //
//     public function index(){
//         //poderia criar logica, verificar e buscar dados

//         //     $nome = 'teste';
//         //     $sobrenome = 'Oliveira';
//         //     $idade = 36;
//         //     $aniver = '13/05/2005';

//         //     $data = ['apelido_nome' => $nome,
//         //     'idade' => $idade,
//         //     'sobrenome' => $sobrenome,
//         //     'aniver' =>$aniver,
//         //     'html' =>'<b style="color:red">Negrito</b>'
//         //     ];
//         // $qualquer = ['ingredientes' =>[
//         //     'farinha',
//         //     'ovo',
//         //     'farinha 2',
//         //     'ovo 2']];



//         //     return view('bemvindo',
//         //         $data, $qualquer);
//         $pessoas = [
//             [
//                 'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
//                 'nome' => 'Matheus',
//                 'birth' => '13/05/2005',
//                 'idade' => 17],
//                 [
//                     'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
//                     'nome' => 'Lari',
//                     'birth' => '13/05/2004',
//                     'idade' => 18],
//                 [
//                     'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
//                     'nome' => 'Fulano',
//                     'birth' => '13/07/2006',
//                     'idade' => 16],
//         ];

//         $dados['pessoas'] = $pessoas;

//         return view('bemvindo', $dados);
//     }
//     public function index2(){
//         return view('include');
//     }

//     public function exercicio2(){
//         $numero = 1;

//         $url = 'https://i.pravatar.cc/150?img='.$numero;

//         $dados['url'] = $url;

//         return view('exercise', $dados);
//     }

//     public function exit(){
//         return view('sair');
//     }

//     public function users(Request $r){
//         $data = [
//             'quantidade' => $r->qnt
//         ];
//         return view('usuarios', $data);
//     }

//     public function coment(){
//         return view('comentarios');
//     }

//     public function component(){
//         return view('comp');
//     }
    public function layout(){
        return view('site');
    }

    public function layout2(){
        return view('pagina2');
    }
}
