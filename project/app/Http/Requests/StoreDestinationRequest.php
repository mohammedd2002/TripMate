<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationRequest extends FormRequest
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
            'name' => 'required|string|max:255', // الاسم مطلوب ويجب أن يكون نصيًا، ويجب ألا يتجاوز 255 حرفًا
            'date' => 'date', // التاريخ اختياري ويجب أن يكون تاريخًا صحيحًا
            'price' => 'required|numeric|min:0', // السعر مطلوب ويجب أن يكون رقمًا ويجب ألا يكون سالبًا
            'image' => 'required|mimes:jpg,jpeg,png', // الصورة اختيارية ويجب أن تكون صورة من الأنواع المحددة وبحجم لا يتجاوز 2 ميجابايت
        ];
    }
}
