<?php

namespace App\Model;

use App\Database;

use Illuminate\Database\Eloquent\Model as Model;

class Posts extends Model {

    # table name and visible output

    protected $table = "posts";

    protected $visible = ['id', 'author', 'body'];

    protected $fillable = ['author', 'body', 'updated_data', 'created_data'];

    # primary key convention

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'string';

    # dates auto generating

    public $timestamps = true;

    const CREATED_AT = 'created_data';

    const UPDATED_AT = 'updated_data';

}

?>
