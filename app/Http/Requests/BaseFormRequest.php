<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return match ($this->method()) {
            'POST'       => $this->store(),
            'PUT' => $this->update(),
            'PATCH' => $this->translate(),
            'DELETE'     => $this->destory(),
            default      => $this->view()
        };
    }
    public function view()
    {
        return [];
    }
    public function store()
    {
        return [];
    }
    public function update()
    {
        return [];
    }
    public function translate()
    {
        return [];
    }
    public function destory()
    {
        return [];
    }
}
