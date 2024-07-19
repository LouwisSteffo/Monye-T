<?php

namespace App\Http\Controllers;

use App\Models\Pencatatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class PencatatanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pencatatans = $user->pencatatans;

        // dd($pencatatans);

        // return view('pencatatan', compact('user', 'pencatatans'));
        return view('pencatatan');
    }

    // Untuk data table (View semua transaksi user)
    public function fetchData(Request $request)
   {
        $pencatatans = auth()->user()->pencatatans()
        ->join('dompets', 'pencatatans.dompets_id', '=', 'dompets.dompet_id')
        ->join('kategoris', 'pencatatans.kategoris_id', '=', 'kategoris.kategori_id') // Join with dompets table
        ->select('pencatatans.*', 'dompets.nama_dompet', 'kategoris.nama_kategori');

        // Filter by date range if min and max are provided
        if ($request->filled('min')) {
            $pencatatans->whereDate('date', '>=', $request->min);
        }

        if ($request->filled('max')) {
            $pencatatans->whereDate('date', '<=', $request->max);
        }

        if ($request->filled('age')) {
            $pencatatans->where('age', '=', $request->age);
            // dd($request->ageSelection);
        }

        return DataTables::of($pencatatans)
            ->make(true);
    }
}
