   <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
   <!-- Side Nav START -->
   <div class="app-menu">
       <ul class="accordion-menu">
           @can('isSuperAdmin')
               <li class="sidebar-title">
                   SUPER ADMIN
               </li>
               <li>
                   <a href="{{ url('admin-area') }}"><i
                           class="material-icons-two-tone">supervised_user_circle</i>Administration</a>
               </li>
           @endcan
           <li class="sidebar-title">
               NAVIGATION
           </li>
           <li>
               <a href="{{ URL::Route('dashboard') }}"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
           </li>

           <li>
               <a href="{{ url('organizations') }}"><i class="material-icons-two-tone">manage_accounts</i>Businesses</a>
           </li>

           <li>
               <a href="{{ URL::Route('shopping-area') }}"><i
                       class="material-icons-two-tone">shopping_cart_checkout</i>Shopping Area</a>
           </li>

           <li>
               <a href="#procurement"><i class="material-icons-two-tone"> dataset_linked</i>Procurement<i
                       class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
               <ul class="sub-menu" style="">
                   <li>
                       <a href="{{ url('tenders') }}">Tenders</a>
                   </li>

               </ul>
           </li>
           <li>
               <a href="#finance"><i class="material-icons-two-tone"> payments</i>Finance<i
                       class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
               <ul class="sub-menu" style="">
                   <li>
                       <a href="{{ url('quotes') }}">Quotes</a>
                   </li>
                   <li>
                       <a href="{{ url('invoices') }}">Invoices</a>
                   </li>
                   <li>
                       <a href="{{ url('payroll') }}">Payroll Management</a>
                   </li>
                   <li>
                       <a href="{{ url('finance-reports') }}">Reports</a>
                   </li>


               </ul>
           </li>
           <li>
               <a href="#warehousing"><i class="material-icons-two-tone"> width_normal</i>Warehousing<i
                       class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
               <ul class="sub-menu" style="">
                   <li>
                       <a href="{{ route('warehouse') }}">Overview</a>
                   </li>
                   <li>
                       <a href="{{ url('products') }}">Products</a>
                   </li>
                   <li>
                       <a href="{{ url('stock-management') }}">Stock Management</a>
                   </li>
                   <li>
                       <a href="{{ url('product-reports') }}">Reports</a>
                   </li>


               </ul>
           </li>
           <li>
               <a href="#crm"><i class="material-icons-two-tone">ads_click</i>CRM<i
                       class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
               <ul class="sub-menu" style="">
                   <li>
                       <a href="{{ url('contacts') }}">Contacts</a>
                   </li>
                   <li>
                       <a href="{{ url('sms') }}">SMS</a>
                   </li>
                   {{-- <li>
                                    <a href="{{url('user/profile')}}">User Profile</a>
                                </li>
                                <li>
                                    <a href="{{url('business-profiles')}}">Business Profiles</a>
                                </li> --}}

               </ul>
           </li>

           <li>
               <a href="#settings"><i class="material-icons-two-tone">settings</i>Settings<i
                       class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
               <ul class="sub-menu" style="">
                   <li>
                       <a href="{{ url('account-setup') }}">Account Setup</a>
                   </li>
                   <li>
                       <a href="{{ url('upgrade') }}">Upgrade</a>
                   </li>
                   <li>
                       <a href="{{ url('user/profile') }}">User Profile</a>
                   </li>
                   <li>
                       <a href="{{ url('business-profiles') }}">Business Profiles</a>
                   </li>

               </ul>
           </li>


           <li class="sidebar-title">
               LOGOUT
           </li>
           <li>
               <a href="#logout" onclick="event.preventDefault();logout()"><i
                       class="material-icons-two-tone">power</i>Logout</a>
           </li>

       </ul>
   </div>
