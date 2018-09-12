<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Declare table
     *
     * @var string $tabel table name
     */
    protected $table = 'role';
    protected $primaryKey = 'id_role';

    /**
     * Constant admin team
     * Set role admin 1
     * Set role member 2
     *
     * @var constants
     */
    const ROLE_ADMIN = 1;
    const ROLE_MEMBER = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name_role',
    ];

    /**
     * Relationship hasOne with User
     *
     * @return array
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
