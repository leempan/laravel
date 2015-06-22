<?php namespace App\UserType;

use Illuminate\Database\Eloquent\Model;
class Item extends Model {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'items';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name','price', 'discount', 'salenum','storeId','detail'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
