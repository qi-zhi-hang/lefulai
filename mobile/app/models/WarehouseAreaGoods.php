<?php
//zend by 旺旺ecshop2011所有  禁止倒卖 一经发现停止任何服务
namespace App\Models;

class WarehouseAreaGoods extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'warehouse_area_goods';
	protected $primaryKey = 'a_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'goods_id', 'region_id', 'region_sn', 'region_number', 'region_price', 'region_promote_price', 'region_sort', 'add_time', 'last_update', 'give_integral', 'rank_integral', 'pay_integral');
	protected $guarded = array();
}

?>
