<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeadStoreRequest;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function create(){
        // mostrare il form
        return view('guest.pages.contact-us');
    }
    public function store(LeadStoreRequest $request){

    }
}
