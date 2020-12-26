<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use DateTimeZone;
use Carbon\Carbon;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';

    protected $fillable = [
        'name',
        'enddate'
    ];

    protected $appends = ['remaining_time'];

    public function getRemainingTimeAttribute()
    {
        $currentTime = $this->enddate;

        $date = Carbon::parse($currentTime);
        $now = Carbon::now('Europe/Istanbul');
        $date->locale('tr');

        if ($date >= $now) {
            $diff = $date->diffForHumans($now). " bitecek";
            return  $diff;
        } else {
            return $diff = $date->diffForHumans($now, ['long' => true, 'parts' => 4]). " gün önce bitti";
        }
    }
}
