<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'parent_id'
    ];

    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function getParent(){
        if(isset($this->parent_id))
        return Category::find($this->parent_id);
    }

    public function getParentTree(){
        $parentTree=array();

        /** @var Category $temp */
        $temp=$this;
        //array_push($parentTree,$temp->name);
        while($temp != null){
            array_push($parentTree,$temp->name);
            $temp=$temp->getParent();
        }
        $parentTree=array_reverse($parentTree);
        return $parentTree;

    }


}
