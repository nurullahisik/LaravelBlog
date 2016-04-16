<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	/**
	 * @return Bu sayfayı yazan kullanıcıyı getirir
	 */
	public function user() {
		return $this->belongsTo('App\User', 'user_id'); //foreign key pages tablosunda
	}
}
