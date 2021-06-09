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
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'cedula' => ['required', 'integer', 'max:32000000'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'usuario' => ['required', 'string', 'max:255'],
            'estatus' => ['required', 'accepted'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',

            /*      'nombre' => 'required|max:24',
        'apellido' => 'required|max:24',
        'cedula' => 'required|max:24',
        'name' => 'required|integer|max:8',
        'email' => 'required|max:35',
        'usuario' => 'required|max:24',
        'estatus' => 'required|accepted',
        'password' => 'required|max:24'*/
        ])->validate();

        return User::create([
            'nombre' => $input['nombre'],
            'apellido' => $input['apellido'],
            'cedula' => $input['cedula'],
            'email' => $input['email'],
            'usuario' => $input['usuario'],
            'estatus' => $input['estatus'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
