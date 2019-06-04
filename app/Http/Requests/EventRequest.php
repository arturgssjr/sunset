<?php

namespace Descolado\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
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
            'edition' => [
                'required',
                'numeric',
                Rule::unique('events', 'edition')->ignore($this->event,'id'),
            ],
            'name' => [
                'required',
                'string'
            ],
            'description' => [
                'required',
                'string'
            ],
            'event_day' => [
                'required',
                'date'
            ],
            'subscribe_begin' => [
                'required',
                'date'
            ],
            'subscribe_end' => [
                'required',
                'date'
            ],
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'edition' => 'Edição',
            'name' => 'Nome',
            'description' => 'Descrição',
            'event_day' => 'Data do Evento',
            'subscribe_begin' => 'Data Início das Inscrições',
            'subscribe_end' => 'Data Fim das Inscrições',
        ];
    }


}
