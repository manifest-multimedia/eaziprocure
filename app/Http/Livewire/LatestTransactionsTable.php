<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction;
use App\Models\User; 
use Auth; 

class LatestTransactionsTable extends Component
{
    public $user_id; 
    public $transactions; 
    public $customer_name; 
    public $transaction_date; 
    public $transaction_amount; 
    public $transaction_status;

    public function mount(){
        $this->user_id=Auth::user()->id; 
    }

    public function render()
    {
        $this->transactions=Transaction::where('id', $this->user_id)->get();

        return view('livewire.latest-transactions-table');
    }
}
