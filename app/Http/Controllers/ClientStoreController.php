<?php

namespace App\Http\Controllers;
use App\Http\Requests\ClientStoreRequest;

class ClientStoreController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(ClientStoreRequest $request)
    {
        // generate a constant random timestamp before pushing data to the database
        $timestamp = now()->timestamp;
        $common_set_key = $request->user()->generateUniqueNumber($timestamp);//id allowing multiple docs toexist

        // Create Client
        $client = $request->user()->clients()->create([
            'name' => $request->name,
            'nin' => $request->nin,
            'dob' => $request->dob,
            'contact' => $request->contact,
            'occupation' => $request->occupation,
            'residence' => $request->residence,
            'stage_name' => $request->stage_name,
            'date_of_agreement' => $request->date_of_agreement,
            'father_name' => $request->father_name,
            'father_contact' => $request->father_contact,
            'mother_name' => $request->mother_name,
            'mother_contact' => $request->mother_contact,
            'user_id' => $request->user()->id, // Ensure mass assignment allows this
        ]);
        // Create Motor
        $client->motor()->create([
            'client_id' => $client->id, // Associate with client
            'type' => $request->type,
            'make' => $request->make,
            'color' => $request->color,
            'chasis' => $request->chasis,
            'engine' => $request->engine,
            'condition' => $request->condition,
            'registration' => $request->registration,
            'registered_names' => $request->registered_names,
            'common_set_key' => $common_set_key
        ]);
        // Create Referee
        $client->referee()->create([
            'client_id' => $client->id,
            'referee_one_name' => $request->referee_one_name,
            'referee_one_contact' => $request->referee_one_contact,
            'referee_one_relationship' => $request->referee_one_relationship,
            'referee_two_name' => $request->referee_two_name,
            'referee_two_contact' => $request->referee_two_contact,
            'referee_two_relationship' => $request->referee_two_relationship,
            'stage_chairperson_name' => $request->stage_chairperson_name,
            'stage_chairperson_contact' => $request->stage_chairperson_contact,
            'lc_chairperson_name' => $request->lc_chairperson_name,
            'lc_chairperson_contact' => $request->lc_chairperson_contact,
            'common_set_key' => $common_set_key
        ]);
        // Create Loan
        $client->loan()->create([
            'client_id' => $client->id,
            'initial_deposit' => $request->initial_deposit,
            'weekly_deposit' => $request->weekly_deposit,
            'agreed_months' => $request->agreed_months,
            'total_weeks' => $request->total_weeks,
            'selling_price' => $request->selling_price,
            'starting_week_date' => $request->starting_week_date,
            'agreement_place' => $request->agreement_place,
            'common_set_key' => $common_set_key
        ]);
        return back()->with('toast', 'Client created successfully!');
    }



}
