<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Declare table
     *
     * @var string $tabel table name
     */
    protected $table = 'category';
    protected $primaryKey = 'id_cat';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name_cat',
       'introduce',
    ];

    /**
     * Relationship hasMany with Post
     *
     * @return array
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'id_cat');
    }
}
