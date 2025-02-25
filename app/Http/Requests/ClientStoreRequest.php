<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //you can call a policy here auth()->user()->can('policy_method', $this->$client) //if passed from the route model binding, if not passed: can('policy_method', Client::class)
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'nin' => ['required'],
            'dob' => ['required'],
            'contact' => ['required'],
            'occupation' => ['required'],
            'residence' => ['required'],
            'stage_name' => ['required'],
            'date_of_agreement' => ['required'],
            'father_name' => ['required'],
            'father_contact' => ['required'],
            'mother_name' => ['required'],
            'mother_contact' => ['required'],
            // ------------------------------
            'type' => ['required'],
            'make' => ['required'],
            'color' => ['required'],
            'chasis' => ['required'],
            'engine' => ['required'],
            'condition' => ['required'],
            'registration' => ['required'],
            'registered_names' => ['required'],
            // ------------------------------
            'referee_one_name' => ['required'],
            'referee_one_contact' => ['required'],
            'referee_one_relationship' => ['required'],
            'referee_two_name' => ['required'],
            'referee_two_contact' => ['required'],
            'referee_two_relationship' => ['required'],
            'stage_chairperson_name' => ['required'],
            'stage_chairperson_contact' => ['required'],
            'lc_chairperson_name' => ['required'],
            'lc_chairperson_contact' => ['required'],
            // --------------------------------
            'initial_deposit' => ['required'],
            'weekly_deposit' => ['required'],
            'agreed_months' => ['required'],
            'total_weeks' => ['required'],
            'selling_price' => ['required'],
            'starting_week_date' => ['required'],
            'agreement_place' => ['required'],
        ];
    }
}
