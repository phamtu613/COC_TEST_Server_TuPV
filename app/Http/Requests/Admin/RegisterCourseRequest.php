<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCourseRequest extends FormRequest
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
		return [
			'name' => 'required|max:100',
			'birthday' => 'required',
			'address' => 'required',
			'tel' => ['required', 'regex:/^(0|\+84)(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-689])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/'],
			'email' => 'required',
			'avatar' => 'mimes:jpeg,jpg,png|max:10240',
			'start_date' => 'required',
			'start_study' => 'not_in:0',
			'duration' => 'required',
			'time_lesson' => 'required',
		];
	}
	public function messages()
	{
		return [
			'required' => 'Please enter :attribute',
			'max' => 'Please enter less than :max characters',
			'not_in' => 'Please choose :attribute',
			'mimes' => 'Please choose the correct format :attribute',
			'avatar.max' => 'Image size too large (>10MB)',
		];
	}
	public function attributes()
	{
		return [
			'name' => 'your name',
			'birthday' => 'date of birth',
			'address' => 'your address',
			'tel' => 'your phone number',
			'email' => 'your email',
			'avatar' => 'avatar',
			'avatar_update' => 'avatar',
			'start_date' => 'start date course',
			'start_study' => 'start time course',
		];
	}
}
