<?php


namespace App\Http\Controllers;

use App\MobileTariffGroup;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(Request $request)
    {
        $table = MobileTariffGroup::all();
        return view('table.index',['table'=>$table]);
    }
}
