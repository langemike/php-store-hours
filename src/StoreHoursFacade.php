<?php namespace Langemike\StoreHours;

use Illuminate\Support\Facades\Facade;

class StoreHoursFacade extends Facade {
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'storehours';
	}
}