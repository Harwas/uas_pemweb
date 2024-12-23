<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class ProfileChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        // Fetch data from the database
        $salesData = DB::table('data_penjualans')->select('jumlah_penjualan', 'bulan')->get();

        // Extract months and sales as arrays
        $months = $salesData->pluck('bulan')->toArray(); // ['January', 'February', ...]
        $sales = $salesData->pluck('jumlah_penjualan')->toArray(); // [150, 200, ...]

        // Build the chart
        return $this->chart->lineChart()
            ->setTitle('Monthly Sales')
            ->setSubtitle('Sales Performance')
            ->addData('Sales', $sales) // Add sales data
            ->setXAxis($months) // Add month labels
            ->setHeight(300);
    }
}
