<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        return view('index.index');
    }

    public function getJson(Request $request)
    {
        if ($request->ajax()) {
            return [
                ['title' => 'First', 'url' => 'https://first.com'],
                ['title' => 'Second', 'url' => 'https://second.com'],
            ];

        } else {
            response()->json(['error' => 'Error response', 'status' => 403]);
        }
    }

}
