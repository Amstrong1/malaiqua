<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke()
    {
        $structures = Structure::count();

        $structure = Auth::user()->structure;
        $rooms = $structure->rooms()->count();
        $equipment = $structure->equipments()->count();
        $condition = $structure->conditions()->count();
        $reservation = $structure->reservations()->count();

        return view('app.index', compact(
            'structures',
            'rooms',
            'equipment',
            'condition',
            'reservation',
        ));
    }
}
