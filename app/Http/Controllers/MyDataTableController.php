<?php
use App\Models\Stuffs;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDataTableController extends Controller
{
    //
}

public function getDatatable()
{
    $data = Stuffs::select('*');
    return Datatables::of($data)->make(true);
}
