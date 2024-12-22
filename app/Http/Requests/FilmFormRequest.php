<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmFormRequest extends FormRequest
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
            'title' => ['required','string','min:1'],
            'image' => ['required','image','mimes:jpeg,png,jpg,webp','max:2048'],
            'date_heure_diffusion' => ['required','date'],
            'ticket_price' => ['required','integer'],
        ];
    }
}
