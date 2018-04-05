<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Post extends Eloquent{
    public $name;
    
    public $timestamps = [];

    protected $fillable = ['author', 'title', 'text'];

}