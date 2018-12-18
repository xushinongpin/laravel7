<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title','description'];
    //protected $guarded = [];//这个给权限太大，什么都能够获取处理
    //

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function addTask($task){
        $this->tasks()->create($task);
//        return Task::create([
//            'project_id' => $this->id,
//            'description' => $description,
//        ]);
    }
}
