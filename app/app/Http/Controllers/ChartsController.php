<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ChartsController extends Controller
{

    public function getLineChart(Request $request)
    {
            return [
                'labels' => ['March', 'April', 'May', 'June'],
                'datasets' =>[
                    [
                        'label' => 'Sales',
                        'backgroundColor' => '#F26202',
                        'data' => [1500, 2000, 3500, 2300]
                    ]
                ]
            ];

    }

    public function getPieChart(Request $request)
    {
        return [
            'labels' => ['March', 'April', 'May', 'June'],
            'datasets' =>[
                [
                    'label' => 'Sales',
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        ],
                    'borderWidth' => 1,
                    'data' => [500, 1000, 2500, 3300]
                ]
            ]
        ];

    }

    public function getLineChartRandom()
    {
        return [
            'labels' => ['March', 'April', 'May', 'June'],
            'datasets' =>[
                [
                    'label' => 'First',
                    'backgroundColor' => '#800000',
                    'data' => [rand(0, 20000), rand(0, 20000), rand(0, 20000), rand(0, 20000)]
                ],
                [
                    'label' => 'Second',
                    'backgroundColor' => '#00ff00',
                    'data' => [rand(0, 30000), rand(0, 30000), rand(0, 30000), rand(0, 30000)]
                ]
            ]
        ];
    }

}
