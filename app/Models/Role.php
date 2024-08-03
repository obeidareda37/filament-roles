<?php

namespace App\Models;

use Spatie\Permission\Models\Role as ModelsRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends ModelsRole
{
    use HasFactory;
}
