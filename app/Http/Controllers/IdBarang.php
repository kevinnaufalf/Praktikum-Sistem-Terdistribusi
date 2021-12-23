<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class IdBarang extends Controller
{
    public function getID(Request $request)
    {
        $id = $request->id;
        return DataBarang::find($id);
    }
}
?>