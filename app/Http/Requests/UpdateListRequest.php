<?php

namespace App\Http\Requests;

use App\Helpers\Constant;
use Illuminate\Foundation\Http\FormRequest;

class UpdateListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('update', $this->route('list'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'list_type_id' => ['required', 'exists:list_types,id'],
            'range_start_time' => [request('list_type_id') == Constant::LIST_TYPE['goal'] ? 'required' : 'nullable'],
            'range_end_time' => [request('list_type_id') == Constant::LIST_TYPE['goal'] ? 'required' : 'nullable'],
        ];
    }
}
