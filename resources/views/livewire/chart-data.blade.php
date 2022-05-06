<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    {{-- <script src="{{asset('js/pages/dashboard-crm.js')}}" defer></script> --}}
    <script> 
      document.addEventListener('livewire:load', function () {
  
      let currency = 'GHS'
      // Revenue
      let january_revenue = @this.january_revenue
      let february_revenue = '0'
      let march_revenue = '0'
      let april_revenue = '0'
      let may_revenue = '0'
      let june_revnue ='0'
      let july_revenue='0'
      let august_revenue='0'
      let september_revenue='0'
      let october_revenue='0'
      let nov_revenue='0'
      let dec_revenue='0'
      // Margins 
      let january_margin = '0'
      let february_margin = '0'
      let march_margin = '0'
      let april_margin = '0'
      let may_margin = '0'
      let june_margin ='0'
      let july_margin='0'
      let august_margin='0'
      let september_margin='0'
      let october_margin='0'
      let nov_margin='0'
      let dec_margin='0'
  
     console.log('february_revenue'+may_margin)
  
     let year="The year is outputting "+1 
  
  
  var options = {
              chart: {
                  height: 250,
                  type: 'bar',
              },
              colors: ['#886cff', '#f3f0ff'],
              plotOptions: {
                  bar: {
                      horizontal: false,
                      columnWidth: '55%',
                      endingShape: 'rounded',
                      borderRadius: 10

                  },
              },
              dataLabels: {
                  enabled: false
              },
              stroke: {
                  show: true,
                  width: 2,
                  colors: ['transparent']
              },
              series: [{
                  name: 'Revenue',
                  data: [
                      january_revenue, 
                      february_revenue, 
                      march_revenue, 
                      april_revenue, 
                      may_revenue,
                      june_revnue, 
                      july_revenue,
                      august_revenue,
                      september_revenue, 
                      october_revenue, 
                      nov_revenue, 
                      dec_revenue 
                  ]
              }, {
                  name: 'Margin',
                  data: [
                      january_margin, 
                      february_margin, 
                      march_margin, 
                      april_margin, 
                      may_margin, 
                      june_margin,
                      july_margin,
                      august_margin,
                      september_margin, 
                      october_margin,
                      nov_margin,
                      dec_margin
                  ]
              }],
              xaxis: {
                  categories: ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
              },        
              fill: {
                  opacity: 1
      
              },
              tooltip: {
                  y: {
                      formatter: function (val) {
                          return currency +" " + val
                      }
                  }
              }
          }
          var chart = new ApexCharts(
              document.querySelector("#apex3"),
              options
          );
      
          chart.render();
      })
      </script> 
</div>
