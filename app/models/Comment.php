<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Comment extends Eloquent{
    public $name;
    
    public $timestamps = [];

    protected $fillable = ['post_id', 'author', 'text'];

}