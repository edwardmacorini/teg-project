<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name'=> ['required', 'string', 'max:255'],
            'last_name'=> ['required', 'string', 'max:255'],
            'username'=> ['required', 'string', 'max:255', 'unique:users'],
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=> $this->passwordRules(),
            'team_id'=> ['nullable', 'numeric'],
            'privileges'=> ['required']
        ]);
        
        $auxString = $input['name']." ".$input['last_name'];
        $aux = $input['team_id'] ? $input['team_id'] : 0;

        return User::create([
            'name' =>  strtolower($auxString),
            'username' => strtolower($input['username']),
            'email' => strtolower($input['email']),
            'password' => Hash::make($input['password']),
            'team_id' => $aux,
            'privileges' => $input['privileges']
        ]);  
    }
}
