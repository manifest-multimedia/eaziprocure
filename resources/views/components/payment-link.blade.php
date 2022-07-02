    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row">
            @csrf
            @method('post')
                <input type="hidden" name="email" value="{{$email}}"> {{-- required --}}
                <input type="hidden" name="orderID" value="{{$order_id}}">
                <input type="hidden" name="amount" value="{{$amount}}"> {{-- required in kobo --}}
                <input type="hidden" name="quantity" value="{{$quantity}}">
                <input type="hidden" name="currency" value="{{$currency}}">
                <input type="hidden" name="metadata" value="{{ json_encode($array = ['commerbox_license' => 'subscription',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Get Started</button>
                    </div>
         
        </div>
    </form>