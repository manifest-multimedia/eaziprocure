<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class PdfController extends Controller
{
    public function generateInvoice(Request $request){

        $customer = new Buyer([
            'name'          => 'John Doe',
            'custom_fields' => [
                'email' => 'test@example.com',
            ],
        ]);

        $items=$request->invoice_items;

if(count($items)>0)
foreach ($items as $product) {

    $item = (new InvoiceItem())->title($product)->pricePerUnit(2);
    # code...
}

        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item);

        return $invoice->stream();
        
        

    }

    public function generateQuote(){

    }

    public function generateReceipt(){

    }

    public function generateContract(){

    }

    public function downloadQuote(){

    }
    
    public function downloadInvoice(){

    }

    public function downloadReceipt(){

    }

    public function downloadContract(){
        
    }

}
