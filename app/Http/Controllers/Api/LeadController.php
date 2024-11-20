<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeadStoreRequest;
use App\Mail\NewContactForm;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    public function store(LeadStoreRequest $request){
        $data = $request->validated();
        $lead = Lead::create($data);
        Mail::to('pippo.admin@gmail.com')->send(new NewContactForm($lead));
    }

}
