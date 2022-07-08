<?php

namespace App\Http\Controllers\Cashier;

use App\Models\Table;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CashierController extends Controller
{
    // First Page of Cashier
    public function index(){
        $categories = Category::all();
        return view('cashier.index')->with('categories', $categories);
    }

    public function getTables(){
        $tables = Table::all();

        $html = '';

        foreach($tables as $table){
            $html .= '<div class="col-md-2">';
            $html .=
            '<button class="btn btn-outline-light">
            <img class="img-fluid" src="'.url('images/chair.png').'"/>
            <br>
            <span class="badge bg-dark">'.$table->name.'</span>
            </button>';
            $html .= '</div>';
        }
        return $html;
    }
}
