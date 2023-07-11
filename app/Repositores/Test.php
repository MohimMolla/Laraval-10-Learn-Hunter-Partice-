<?php
namespace App\Repositores;
use Illuminate\Support\Facades\Facade;
use App\Repositories\Hunter;


class Test extends Facade{
	protected static function getFacadeAccessor(){
		return 'Jogfol';
	}
}

?>