<?php

namespace App\Models;

use App\Notifications\SubmittedQuestionnaire;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;

class Questionnaire extends Model
{
    use HasFactory;

    protected $fillable= [
        'project_name','project_description','project_address','budget_range','links'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function style(){
        return $this->belongsTo(Style::class);
    }

    protected static function booted()
    {
        static::created(function ($questionnaire) {
            $admins= User::where('user_role',User::ADMIN_ROLE)->get();
            Notification::send($admins,new SubmittedQuestionnaire($questionnaire));
        });
    }
}
