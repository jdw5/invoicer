<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceStoreRequest;

class InvoiceStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(InvoiceStoreRequest $request)
    {
        $unique = false;
        $attempts = 0;

        while (!$unique && $attempts < 16) {
            $reference = Str::randomNumber(6, true);
            if (!Invoice::where('reference', $reference)->where('user_id', $request->user()->id)->exists()) {
                $unique = true;
            }
            $attempts++;
        }

        if (!$unique) {
            return redirect()->back()->withErrors(['reference' => 'Unable to generate a reference number. Please try again.']);
        }

        $request->user()->invoices()->create([
            'reference' => $reference,
            'name' => $request->name,
            'items' => $request->items,
        ]);

        return redirect()->route('invoices.show', $reference);
    }
}
