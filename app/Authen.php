<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Authen extends Authenticatable
{
    use Notifiable;
    public $table = "authen";
}
