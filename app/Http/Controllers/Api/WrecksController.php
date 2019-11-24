<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WrecksResource;
use App\Wrecks;
use Illuminate\Http\Request;

class WrecksController extends Controller
{
    public function index(){
        return new WrecksResource(Wrecks::paginate());
    }
}
