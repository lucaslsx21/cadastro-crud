<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-candidato', function (Request $informacoes) {
    Candidato::create([
        'nome' => $informacoes->nome_candidato,
        'telefone' => $informacoes->telefone_candidato,
        'email' => $informacoes->email_candidato,
        'endereco' => $informacoes->endereco_candidato,
        'bairro' => $informacoes->bairro_candidato,
        'cidade' => $informacoes->cidade_candidato,
        'uf' => $informacoes->estado_candidato,
        'limite_credito' => $informacoes->limite_candidato,
        'data_analise_credito' => $informacoes->data_candidato,
    ]);
    echo "Candidato Criado com Sucesso!";
});

Route::get('/mostrar-candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    echo $candidato->nome;
    echo "<br />";
    echo $candidato->telefone;
    echo "<br />";
    echo $candidato->email;
    echo "<br />";
    echo $candidato->endereco;
    echo "<br />";
    echo $candidato->bairro;
    echo "<br />";
    echo $candidato->cidade;
    echo "<br />";
    echo $candidato->estado;
    echo "<br />";
    echo $candidato->limite_credito;
    echo "<br />";
    echo $candidato->data_analise_credito;
});

Route::get('/editar-candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    return view('editar_candidato', ['candidato' => $candidato]);
});

Route::put('/atualizar-candidato/{id_do_candidato}', function (Request $informacoes, $id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->nome = $informacoes->nome_candidato;
    $candidato->telefone = $informacoes->telefone_candidato;
    $candidato->email = $informacoes->email_candidato;
    $candidato->endereco = $informacoes->endereco_candidato;
    $candidato->bairro = $informacoes->bairro_candidato;
    $candidato->cidade = $informacoes->cidade_candidato;
    $candidato->uf = $informacoes->estado_candidato;
    $candidato->limite_credito = $informacoes->limite_candidato;
    $candidato->data_analise_credito = $informacoes->data_candidato;
    $candidato->save();
    echo "Candidato Atualizado com Sucesso!";
});

Route::get('/excluir-candidato/{id_do_candidato}', function ($id_do_candidato) {
    $candidato = Candidato::findOrFail($id_do_candidato);
    $candidato->delete();
    echo "Candidato Excluído com Sucesso!";
});
