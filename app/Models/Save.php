<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: WhiteBlue
 * Date: 15/7/9
 * Time: 上午10:28
 */
class Save extends Model
{

    protected $table = 'saves';


    public function sort()
    {
        //模型名 外键 本键
        return $this->hasOne('App\Models\Sort', 'id', 'sort_id');
    }

}