<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;
class AutocompletionController extends Controller
{
    
    //! ----------------------------------------------------------------------------------------------------------------- Autocompletion du champ name.
    public function autocomplete(Request $request)
    {

        $search = $request->get('term');
        $data = User::where('name', 'LIKE', '%'. $search. '%')->pluck('name');

        return response()->json($data);
    }

}
