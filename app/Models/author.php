<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Author extends Model
{
protected $fillable = [
        'lastname', 'firstname', 'birthday', 'genres',];
public function books()
    {
        return $this->belongsToMany('App\Models\Book');
    }
}