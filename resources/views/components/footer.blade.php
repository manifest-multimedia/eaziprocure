 <!-- Footer START -->
 <footer class="footer">
   <div class="footer-content">
       <p class="m-b-0">Copyright © McCallys.</p>
       <span>
           <a href="/legal" class="text-gray m-r-15">Legal</a>
           <a href="/privacy" class="text-gray">Privacy &amp; Policy</a>
       </span>
    </div>

{{-- Scripts --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{-- Account Setup Next Button Script --}}
<script> 
$(document).ready(function(e) {
    $('.nextbtn').click(function(e){
        e.preventDefault();
        $('.nav-item > .active').parent().next('li').find('a').trigger('click');
                });

        $('.previousbtn').click(function(e){
        e.preventDefault();
        $('.nav-item > .active').parent().prev('li').find('a').trigger('click');
                });
});

</script> 

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
   
</footer>
<!-- Footer END -->

</div>

<!-- Page Container END -->


</body>

</html>