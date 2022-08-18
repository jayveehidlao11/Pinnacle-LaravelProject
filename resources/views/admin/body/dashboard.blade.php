@extends('admin.index')

@section('content')
   
   

   




    <script type="text/javascript">
      var analytics = <?php echo $gender; ?>
   
      google.charts.load('current', {'packages':['corechart']});
   
      google.charts.setOnLoadCallback(drawChart);
   
      function drawChart()
      {
       var data = google.visualization.arrayToDataTable(analytics);
       var options = {
        title : 'Percentage of Male and Female Applicants'
       };
       var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
       chart.draw(data, options);
      }
     </script>
   
              <div class='col-sm-10' id="pie_chart" style="width:70%;margin-left:20%;margin-top:2%; height:450px;">
         
              </div> 

    <div class="charts" style="width:70%; text-align: center;margin-top:2%; margin-left:22%">
   
      <div class="row">
         <div class="col-sm-12" >
            <div id="google-line-chart" style="width:100%; height: 500px"></div>
         
         </div>
      </div>
     
   </div>
  
      <script type="text/javascript">
         google.charts.load('current', {'packages':['corechart']});
           google.charts.setOnLoadCallback(drawChart);
    
           function drawChart() {
    
           var data = google.visualization.arrayToDataTable([
               ['Created', 'Applicants Count'],
    
                   @php
                     
                       foreach($lineChart as $d) {
                       echo "['".$d->month_name."', ".$d->count."],";
                   }
                   
                   @endphp
           ]);
    
           var options = {
             title: 'Daily Applicants Count ',
             curveType: 'function',
             legend: { position: 'bottom' }
           };
    
             var chart = new google.visualization.LineChart(document.getElementById('google-line-chart'));
    
             chart.draw(data, options);
           }
      </script>         



  
   
@endsection