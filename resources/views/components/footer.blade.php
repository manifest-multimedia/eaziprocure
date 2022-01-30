 <!-- Footer START -->
 <footer class="footer">
   <div class="footer-content">
       <p class="m-b-0">Copyright © McCallys.</p>
       <span>
           <a href="/legal" class="text-gray m-r-15">Legal</a>
           <a href="/privacy" class="text-gray">Privacy &amp; Policy</a>
       </span>
   </div>
</footer>
<!-- Footer END -->

</div>

<!-- Page Container END -->
{{-- Load Search  --}}
{{-- Load Quick View --}}

</div>
</div>
<!-- Sweet Alert --> 
@include('sweetalert::alert')
<!-- Sweet Alert --> 
<!-- Core Vendors JS -->
<script src="{{asset('js/vendors.min.js')}}" defer></script>

<!-- page js -->
<script src="{{asset('vendors/chartjs/Chart.min.js')}}" defer></script>
<script src="{{asset('js/pages/dashboard-default.js')}}" defer></script>

<!-- Core JS -->
<script src="{{asset('js/app.min.js')}}" defer></script>

@stack('modals')
@livewireScripts



</body>

</html>