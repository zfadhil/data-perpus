<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class TaskRequest extends FormRequest
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
        $rute_task_unique = Rule::unique('tasks', 'task');
        if ($this -> method() !== 'POST'){
            $rute_task_unique -> ignore($this->route()->parameter('id'));
        }

        return [
            'task' => ['required', $rute_task_unique],
            'user' => ['required'],
            'statuss' => ['required']
        ];
    }

    public function messages()
    {
        return[
            'required' => 'deskripsi harus diisi', 
            'user.required' => 'judul harus diisi',
            'statuss.required' => 'status harus diisi'
        ];
    }
}
