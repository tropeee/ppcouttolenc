<?php
namespace App\Traits;

use Jenssegers\Date\Date;

trait DatesTranslator{
    public function getCreatedAtAttribute($created_at){
        return new Date($created_at);
    }
}
?>