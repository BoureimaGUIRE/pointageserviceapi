<?php

namespace App\Http\Controllers;

use App\Models\Pointage;



class PointageController extends Controller
{

    public function index()
    {
        $pointages = Pointage::all();
        return $this->successResponse($pointages);
    }

    public function show($id)
    {
        $pointage = Pointage::findOrFail($id);
        return $this->successResponse($pointage);
    }

}