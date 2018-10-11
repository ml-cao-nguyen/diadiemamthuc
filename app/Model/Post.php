<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Declare table
     *
     * @var string $tabel table name
     */
    protected $table = 'post';
    protected $primaryKey = 'id_post';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'title',
       'location',
       'time_create',
       'preview',
       'detail',
       'image',
       'id_cat',
       'id_user',
    ];

    /**
     * Relationship belongsTo with User
     *
     * @return array
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    /**
     * Relationship belongsTo with Category
     *
     * @return array
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_cat');
    }
}
