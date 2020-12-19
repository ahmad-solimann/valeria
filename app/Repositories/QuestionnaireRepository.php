<?php


namespace App\Repositories;


use App\Models\Questionnaire;

class QuestionnaireRepository
{
    public function delete (Questionnaire $questionnaire){
        $questionnaire->delete();
    }

}