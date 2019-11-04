<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TablesController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $data = Table::all();

        return view('tables.first-table', compact('data'));
    }

    public function create()
    {
        return view('tables.create');
    }

    public function store(Request $request)
    {
        $table = new Table();
        $data = $request->except(['_token']);

        DB::beginTransaction();
        try {
            $table->create($data);
            DB::commit();
//            return response(['success' => 'All ok'], 201);
            return redirect()->route('table.index');

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage());
            return response(['error' => $exception->getMessage()], 401);
        }


    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
