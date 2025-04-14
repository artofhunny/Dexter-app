<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\HotPick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotPickController extends Controller
{
    public function create()
    {
        $currentHotPicks = HotPick::with('app')
                            ->orderBy('position')
                            ->get()
                            ->keyBy('position');

        $hotPickApps = App::all(); // Or filter as needed

        return view('hot-picks.hot-picks-create', [  // your blade file
            'positions' => range(1, 5),
            'currentHotPicks' => $currentHotPicks,
            'hotPickApps' => $hotPickApps,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'positions' => 'required|array|size:5',
            'positions.*' => 'required|exists:apps,id'
        ]);

        HotPick::truncate(); // clear old picks

        DB::transaction(function () use ($request) {
            foreach ($request->positions as $position => $appId) {
                HotPick::create([
                    'app_id' => $appId,
                    'position' => $position + 1
                ]);
            }
        });

        return redirect()->route('home')
            ->with('success', 'Hot Picks updated successfully!');
    }
}
