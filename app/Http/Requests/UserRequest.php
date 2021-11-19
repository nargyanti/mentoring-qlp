<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => 'required|string|max:255|min:4',                    
                    'email' => 'required|string|email|max:255|unique:users',   
                    'password' => 'string|min:8|confirmed',
                    'profile_picture' => 'mimes:jpg,png,jpeg|max:5120',
                    'linkedin' => 'string',
                    'total_client' => 'integer|min:1',
                    'rating' => 'string',
                    'profile' => 'text',
                    'education_backgroound' => 'text',
                    'job_backgroound' => 'text',
                    'award' => 'text',
                    'one_on_one_link' => 'string',
                    'one_to_many_link' => 'string',

                ];
                break;
            case 'PUT':
                return [
                    'name' => 'required|string|max:255|min:4',
                    'username' => 'required|string|max:255|min:4|unique:users,username,' . $this->user,
                    'email' => 'required|string|email|max:255|unique:users,email,' . $this->user,
                    'level' => 'required',
                ];
                break;
            default:
                return [];
                break;
        }
    }

    public function messages()
    {
        return [
            "name.required" => "Isikan nama user",
            "name.max" => "Nama user tidak boleh melebihi 255 huruf",
            "name.min" => "Nama user harus melebihi 4 huruf",
            "username.required" => "Isikan user ID",
            "username.max" => "User ID tidak boleh melebihi 255 huruf",
            "username.min" => "User ID harus melebihi 4 huruf",
            "username.unique" => "User ID sudah ada",
            "email.required" => "Isikan email user",
            "email.string" => "Email user harus berupa huruf",
            "email.email" => "Email user harus berformat email",
            "email.max" => "Email user tidak boleh melebihi 255 huruf",
            "email.unique" => "Email user sudah ada",
            "password.required" => "Isikan password user",
            "password.string" => "Password user harus berupa huruf",
            "password.min" => "Password user harus lebih dari 8 huruf",
            "password.confirmed" => "Pastikan konfirmasi password sama",
            "confirmation_password.required" => "Isikan password user",
            "confirmation_password.string" => "Password user harus berupa huruf",
            "confirmation_password.min" => "Password user harus lebih dari 8 huruf",
            "confirmation_password.confirmed" => "Pastikan konfirmasi password sama",
            "level.required" => "Isikan hak akses usern"
        ];
    }
}
