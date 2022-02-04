<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //鍵取得
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    //
    public function getJWTCustomClaims() {
        return [];
    }

}
