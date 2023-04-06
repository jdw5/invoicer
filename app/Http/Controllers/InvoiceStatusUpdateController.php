<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceStatusUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $invoice_id)
    {
        $request->user()->invoices()->where('reference', $invoice_id)->first();

        return redirect()->back();
    }
}
