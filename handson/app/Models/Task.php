<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'isDone',];

    public function getTaskFromId($id) {
        return Task::where('id', $id)->first();
    }

    public function done($id){
        Task::where('id', $id)
            ->first()
            ->update(['isDone' => true,]);
    }
}
