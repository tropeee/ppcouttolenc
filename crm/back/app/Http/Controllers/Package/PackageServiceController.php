<?php

namespace App\Http\Controllers\Package;

use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class PackageServiceController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Package $package)
    {
        $result = $package->services()
        ->with('item')
        ->get();
        return $this->showAll($result);
    }
}
