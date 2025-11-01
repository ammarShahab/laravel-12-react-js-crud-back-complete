<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// 12. add fillable in a Model => Post file what i added in the schema i.e title and body in the db
class Post extends Model
{
    protected $fillable = ['title', 'body'];
    //
}

// 13. now to install api in terminal run "php artisan install:api" and in terminal when say "One new database migration has been published. Would you like to run all pending database migrations? (yes/no) [yes]"

// 14. a  file created in folder routes => api.php in folder and created an initial routes