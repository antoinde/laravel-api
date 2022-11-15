<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    // titolo
    // contenuto
    // slug (serve per identificare la risorsa univocamente tramite url)
    protected $fillable=['title', 'content', 'slug'];
}
