<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
            'property_name' =>[
                'required',
                'string'
            ],
            'property_price' =>[
                'required',
                'numeric'
            ],
            'deposit_amount' =>[
                'required',
                'numeric'
            ],
            'property_address' =>[
                'required',
                'string'
            ],
            'offer_type' =>[
                'required',
                'string'
            ],
            'property_type' =>[
                'required',
                'string'
            ],
            'property_status' =>[
                'required',
                'string'
            ],
            'furnished_status' =>[
                'required',
                'string'
            ],
            'bhk' =>[
                'required',
                'string'
            ],
            'bedrooms' =>[
                'required',
                'string'
            ],
            'bathrooms' =>[
                'required',
                'string'
            ],
            'balconies' =>[
                'required',
                'string'
            ],
            'carpet_area' =>[
                'required',
                'integer'
            ],
            'property_age' =>[
                'required',
                'integer'
            ],
            'total_floor' =>[
                'required',
                'integer'
            ],
            'room_floor' =>[
                'required',
                'integer'
            ],
            'loan' =>[
                'required',
                'string'
            ],
            'description' =>[
                'required',
                
            ],
            'image_1' =>[
                'nullable',
                'mimes:jpg,jpeg,png'
            ],
            'image_2' =>[
                'nullable',
                'mimes:jpg,jpeg,png'
            ],
            'image_3' =>[
                'nullable',
                'mimes:jpg,jpeg,png'
            ],
            'image_4' =>[
                'nullable',
                'mimes:jpg,jpeg,png'
            ],
            'image_5' =>[
                'nullable',
                'mimes:jpg,jpeg,png'
            ]
        ];
    }
}
