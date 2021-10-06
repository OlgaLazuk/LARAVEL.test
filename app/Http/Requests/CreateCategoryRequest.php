<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
<<<<<<< HEAD
            'name' => 'required|max:255',
//            'title' => 'required|unique|email:rfc,dns'
        ];
    }
=======
            'name' =>'required|max:255',
            'title' =>'required|email:rfc,dns',
        ];
    }

>>>>>>> origin/master
    public function messages()
    {
        return [
            'name.required' => 'Сообщение 1',
<<<<<<< HEAD
            'name.max' => 'Сообщение 2: max',
            //'title.email' => __('validation.email'), //из файла resources.land.validation.php
        ];

    }


=======
            'name.max' => 'Сообщение 2',
            'name.email' => __('validation.accepted'),
        ];
    }
>>>>>>> origin/master
}
