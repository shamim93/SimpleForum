<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiscussion extends FormRequest
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

    
    public function rules()
    {
        return [
            'title' =>'required',
            'content'   =>'required',
            'channel'   =>'required'
        ];
    }
    public function messages()
    {
        return[
            'title.required'    =>'Title is required',
            'content.required'    =>'Content is required',
            'channel.required'    =>'Please select channel'
        ];
    }
}
