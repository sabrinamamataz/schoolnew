<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClsPeriod extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getStartEndTime($period)
    {
        if ($period == 1) {
            $period = '1st';
        } elseif ($period == 2) {
            $period = '2nd';
        } elseif ($period == 3) {
            $period = '3rd';
        } elseif ($period == 4) {
            $period = '4th';
        } elseif ($period == 5) {
            $period = '5th';
        } elseif ($period == 6) {
            $period = '6th';
        } elseif ($period == 7) {
            $period = '7th';
        } elseif ($period == 8) {
            $period = '8th';
        } else {
            $period = 'Break';
        }
        $data = ClsPeriod::where('period', $period)->first();

        $start = '--';
        $end = '--';
        if (isset($data->start_time) && isset($data->end_time)) {
            $start = date('h:i A', strtotime($data->start_time));
            $end = date('h:i A', strtotime($data->end_time));
        }
        return [
            'period' => $period,
            'start' => $start,
            'end' => $end,
        ];
    }
}
