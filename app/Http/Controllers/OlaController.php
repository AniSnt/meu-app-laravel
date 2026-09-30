<?php

//nde essa classe mora. É como um endereço, e bate com a pasta app/Http/Controllers
namespace App\Http\Controllers;

//Importa a classe Request, que representa a requisição HTTP (dados de formulário, query string etc.).
//  O Artisan coloca por padrão, mas nesse controller não vamos usar.
//  Pode apagar ou deixar; não quebra nada.
use Illuminate\Http\Request;

class OlaController extends Controller
{
public function index(string $nome = 'mundo')
{
    return view('ola', ['nome' => $nome]);
}
public function tchau (string $nome = 'mundo')
{
return view ('tchau', ['nome' => $nome]);
}
}