<?php 
namespace rotha\LaravelTinypng\Facades;
use Illuminate\Support\Facades\Facade;
class Tinypng extends Facade {
	protected static function getFacadeAccessor(){
		return 'tinypng';
	}
}