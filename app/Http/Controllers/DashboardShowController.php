<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $invoices = Invoice::where('user_id', $request->user()->id)->get();
        
        return Inertia::render('Dashboard', [
            'invoices' => $invoices
        ]);
    }
}
