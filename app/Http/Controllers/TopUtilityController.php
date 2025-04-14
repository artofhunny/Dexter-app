<?php
// app/Http/Controllers/TopUtilityController.php
namespace App\Http\Controllers;

use App\Models\App;
use App\Models\TopUtility;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TopUtilityController extends Controller
{
    public function create()
    {
        $currentTopUtilities = TopUtility::with('app')
                                ->orderBy('position')
                                ->get()
                                ->keyBy('position');

        $utilityApps = App::All();

                                
        // $utilityApps = App::where('app_category', 'Utilities')
        //                 ->orderBy('app_name')
        //                 ->get();

        return view('Toputility.topUtility', [
            'positions' => range(1, 5),
            'currentTopUtilities' => $currentTopUtilities,
            'utilityApps' => $utilityApps
        ]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'positions' => 'required|array|size:5',
            'positions.*' => 'required|exists:apps,id'
        ]);
        
        TopUtility::truncate();
    
        DB::transaction(function () use ($request) {
   
    
            foreach ($request->positions as $position => $appId) {
                TopUtility::create([
                    'app_id' => $appId,
                    'position' => $position + 1
                ]);
            }
        });
    
        return redirect()->route('home')
            ->with('success', 'Top Utilities updated successfully!');
    }
}