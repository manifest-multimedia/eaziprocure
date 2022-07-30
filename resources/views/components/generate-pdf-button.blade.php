<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <form action="invoice/preview" method="post">
        @method('post')
        @csrf

        <input type="hidden" value="{{$organization}}" name="org_id">
        <input type="hidden" value="{{$customer}}" name="customer">

        {{-- @dd($items); --}}
        @foreach ($items as $item)
            <input type="hidden" value="{{$item['item_name']}}" name="invoice_items[]">
            <input type="hidden" value="{{$item['item_quantity']}}" name="invoice_quantities[]">
            <input type="hidden" value="{{$item['item_description']}}" name="invoice_descriptions[]">
            <input type="hidden" value="{{$item['item_price']}}" name="invoice_prices[]">
        @endforeach

        <button type="submit" class="btn btn-success col-12">Download PDF</a>

    </form>
</div>