<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table='records';
    function scopeWithQuiz($query){
        return $query->join('quizzes','records.quiz_id','=','quizzes.id')
        ->select('quizzes.quiz','records.*');
    }
}
