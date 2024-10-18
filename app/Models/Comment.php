<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'comments';
    public $guarded = [];


    public function uniqueIds(): array
    {
        return ['id', 'comments'];
    }


    public $timestamps = false;

    protected $attributes = [
        'options' => '[]',
        'delayed' => false,
    ];
      
}