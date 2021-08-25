<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function parent(){
        return $this->hasMany(self::class, 'parent_id')->where('parent_id',null)->with('parent');
    }

    public function children()
	{
	    return $this->hasMany(self::class,'parent_id')->with('children');
	}
}
