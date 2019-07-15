<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGameRequest extends FormRequest
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
         'team_one_score' => 'required|int|min:0',
         'team_two_score' => 'required|int|min:0',
         'winner_team_id' => 'required'
        ];
    }

    /**
     * Override some default validation messages.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'team_one_score.required' => 'The team score is required.',
            'team_one_score.integer' => 'The team score should be a number.',
            'team_one_score.min' => 'The team score should be >= 0.',
            'team_two_score.required' => 'The team score is required.',
            'team_two_score.integer' => 'The team score should be a number.',
            'team_two_score.min' => 'The team score should be >= 0.',
            'winner_team_id.required' => 'The winnder team is required'
        ];
    }
}
