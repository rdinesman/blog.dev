<?php 
	use Carbon\Carbon;

	class BaseModel extends Eloquent{
		public function getCreatedAtAttribute($value)
		{
		    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		    return $utc->setTimezone('America/Chicago')->diffForHumans();

		    // $date = Carbon::createFromFormat($value)->diffForHumans();
		    // return $date;
		}

		public function getUpdatedAtAttribute($value)
		{
		    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		    return $utc->setTimezone('America/Chicago')->diffForHumans();
		}
	}
 ?>