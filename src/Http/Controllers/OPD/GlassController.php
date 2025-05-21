<?php

namespace XelentUmar\StaticPages\Http\Controllers\OPD;

use Inertia\Inertia;
use XelentUmar\StaticPages\Http\Controllers\Controller;
use XelentUmar\StaticPages\Http\Requests\OPD\GlassRequest;
use XelentUmar\StaticPages\Models\OPD\Glass;

class GlassController extends Controller
{
    public function index()
    {
        $donors = Glass::orderBy('created_at', 'desc');
        if(isset($_GET['search']) && $_GET['search'] != ''){
            $donors = $donors->where('name', 'LIKE', '%'.$_GET['search'].'%');
        }
        $donors = $donors->paginate(100);

        return Inertia::render('OPD/Glasses/Index', [
            'donors' => $donors,
            'filters' => request()->only(['search']),
        ]);
    }

    public function create()
    {
        return Inertia::render('OPD/Glasses/Create');
    }

    public function store(GlassRequest $request)
    {
        $donor = new Glass();
        $employeeDeductionData = $request->only($donor->getFillable());

        Glass::create($employeeDeductionData);

        return redirect()->route('glasses.index');
    }

}
