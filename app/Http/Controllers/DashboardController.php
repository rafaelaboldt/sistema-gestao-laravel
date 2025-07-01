<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProdutoCadastrado = $this->buscaTotalProdutoCadastrado();
        $totalClienteCadastrado = $this->buscaTotalClienteCadastrado();
        $totalVendaCadastrado = $this->buscaTotalVendaCadastrado();
        // $tatalUsuarioCadastrado = $this->buscaTotalUsuarioCadastrado();

        return view('pages.dashboard.dashboard', compact('totalProdutoCadastrado', 'totalClienteCadastrado', 'totalVendaCadastrado'));
    }

    public function buscaTotalProdutoCadastrado()
    {
        $findProduto = Produto::all()->count();

        return $findProduto;
    }

    public function buscaTotalClienteCadastrado()
    {
        $findCliente = Cliente::all()->count();

        return $findCliente;
    }

    public function buscaTotalVendaCadastrado()
    {
        $findVenda = Venda::all()->count();

        return $findVenda;
    }
}
