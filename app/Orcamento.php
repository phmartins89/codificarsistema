<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

}
//,'vendedor','data','desc','valor'
