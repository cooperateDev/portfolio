<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TaskMNG extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'task_mngs';

    // protected $fillable = [
    //     'name', 'desc', 'url', 'category_id','link'
    // ];

    protected $guarded = ['id'];
   
}
