<?php


namespace App\Http\Controllers;

use App\MobileTariff;
use App\MobileTariffGroup;
use Illuminate\Http\Request;

class TableTariffsController extends Controller
{
    public function index(Request $request)
    {
        $table = MobileTariff::all();
        return view('table.tariffs',['table'=>$table]);
    }
}
