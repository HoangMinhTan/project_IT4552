<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Chart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $array=[0,0,0,0,0,0,0,0,0,0,0,0];
        $count_customer = DB::table('users')->where('role',2)->get();
        foreach ($count_customer as $key)
        {
            $month= Carbon::parse($key->created_at)->month;
            $array[$month-1]++;
        }
        return Chartisan::build()
            ->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'])
            ->dataset('Sample', $array);
    }
}