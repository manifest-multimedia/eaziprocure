<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PaymentLink extends Component
{

    public $email;
    public $order_id;
    public $amount; 
    public $quantity;
    public $currency;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($email, $amount, $quantity)
    {
        $rate=getCurrentDollarRate('usdghs'); 
        
        $this->email=$email;
        $this->amount=$amount*$rate*(100);
        $this->quantity=$quantity;
        $this->currency="GHS";
        $this->order_id="generate_order_id";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.payment-link');
    }
}
