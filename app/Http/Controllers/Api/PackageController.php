<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Package;

use Illuminate\Http\Request;

class PackageController extends Controller
{

    /**
     * Display a listing of the package.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package = Package::latest()->paginate(5);

        return $package->toJson();
    }
     /**
     * Created pacnage page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);   
        
        $data = $request->all();

        Package::create($data);

        return redirect()->route('users')
            ->with('success', 'User created successfully.');

    }
    
}
