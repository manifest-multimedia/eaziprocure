<x-header>
    {{$title}}
</x-header>    
<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
<x-search> 
    Search Results
    {{-- <div class="d-flex m-b-30">
    <div class="avatar avatar-cyan avatar-icon">
        <i class="anticon anticon-file-excel"></i>
    </div>
    <div class="m-l-15">
        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
        <p class="m-b-0 text-muted font-size-13">by Finance</p>
    </div>
</div> --}}
</x-search>


<x-quickview /> 
<x-sidebar />

<!-- Page Container START -->
<div class="page-container">
    
    <!-- Content Wrapper START -->
    <div class="main-content">
{{$slot}}
</div>

<x-footer /> 
</div>

