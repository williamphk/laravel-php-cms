<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypesController extends Controller
{
    //

    public function list()
    {
        return view('types.list',
            [
                'types' => Type::all()
            ]);
    }

    public function delete(Type $type)
    {
        $type->delete();

        return redirect('/console/types/list')
            ->with('message', 'Type has been deleted.');
    }
}
