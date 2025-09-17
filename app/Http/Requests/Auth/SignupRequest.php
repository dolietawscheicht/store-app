<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'email' => ['required', 'email', 'unique:users,email'],
			'password' => ['required', 'min:8'],
		];
	}

	/**
	 * Get custom messages for validator errors.
	 *
	 * @return array<string, string>
	 */
	public function messages(): array
	{
		return [
			'email.required' => 'Поле "Email" обязательно для заполнения',
			'email.email' => 'Введите корректный email адрес',
			'email.unique' => 'Пользователь с таким email уже существует',

			'password.required' => 'Поле "Пароль" обязательно для заполнения',
			'password.min' => 'Пароль должен содержать минимум 8 символов',
		];
	}
}
