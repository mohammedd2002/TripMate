<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuideRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Image is required, must be an image file, max 2MB
            'name' => 'required|string|max:255', // Name is required, must be a string, max 255 characters
            'description' => 'required|string|max:1000', // Description is required, must be a string, max 1000 characters
            'email' => 'required|email', // Email is required, must be a valid email, and unique in the guides table
            'linkedin' => 'required|url|max:255', // LinkedIn is required, must be a valid URL, max 255 characters
        ];
    }

     /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'image.required' => 'An image is required for the guide.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image must not be larger than 2MB.',
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed 255 characters.',
            'description.required' => 'A description is required for the guide.',
            'description.max' => 'The description must not exceed 1000 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already in use.',
            'linkedin.required' => 'The LinkedIn profile URL is required.',
            'linkedin.url' => 'Please enter a valid URL for the LinkedIn profile.',
            'linkedin.max' => 'The LinkedIn URL must not exceed 255 characters.',
        ];
    }
}
