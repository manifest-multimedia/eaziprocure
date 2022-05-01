<x-neptune-layout>  
<x-slot name="title"> 
    Eazibusiness &mdash; Dashboard
</x-slot>

    <!-- Content Wrapper START -->
        <div class="row">
            <x-net-revenue-widget />
            <x-bounce-rate-widget /> 
            <x-orders-widget /> 
            <x-total-expense-widget /> 
        </div>

        <x-overal-rating-widget /> 
        <x-total-overview-widget />    
    </div>
    
    <x-latest-transactions />       
    
</x-neptune-layout>