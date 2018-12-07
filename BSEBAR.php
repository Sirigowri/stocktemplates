<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<style type="text/css">
.three{
	color:
	font-style:"Times New Roman";
	background-color:#00BFFF;
	text-align:center;
	}
</style>	
<title>charts</title></head> 
<body >
<h1 class="three"><marquee direction="right">BSE SENSEX</marquee></h1>
<marquee><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="bseline.php">LINE GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="BSEBAR.php">BAR GRAPH</a></span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="bseradar.php">RADAR GRAPH</a></span></marquee>
<script src="Chart.js"></script>
<div class="chart-container" style="position:relative; height:30vh; width:80vw">
<canvas id="myChart" ></canvas></div>
<script id="one" >
var vhl = document.getElementById("myChart");
var datafirst={
            label: 'Volume',
            data: [10700,15500,8200,12200,14300,9300,17300,12700,9800,14600,10100,12900,11400,16400,15100,12300,19900,11100,9700,11000],
            lineTension:0.3,
			pointBackgroundColor:'blue',
			borderColor:'blue',
			backgroundColor:'blue',
			pointRadius:5,
			pointHoverRadius:10,
			pointHitRadius:30,
			pointBorderWidth:2,
			pointStyle:'rectRounded',
            borderWidth: 3
			
           };
var datasecond={
            label: 'high',
            data: [33331.21094,33439.96875,33519.48828,33962.48047,34077.32031,33875.14844,33866.28125,33691.32031,33275.78906,33102.73828,33354.92969,33281.76953,32720.0293,33115.41016,33371.03906,33104.10938,33289.33984,33402.94141,33505.53125,33637.46094],
            lineTension:0.3,
			borderColor:'green',
			pointBackgroundColor:'green',
			pointRadius:5,
			pointHoverRadius:10,
			pointHitRadius:30,
			pointBorderWidth:2,
			backgroundColor:'green',
			pointStyle:'rectRounded',
            borderWidth: 3
           };
var datathird={
            label: 'low',
            data: [33037.48047,33256.42188,33468.16016,33722.96094,33580.69141,33637.28125,33119.92188,32856.53906,32810.85938,33070.53125,32963.30859,32483.83984,32515.16992,33077.12891,32917.66016,32917.66016,33153.82813,32972.55859,33267.85938,33501.37109],
            lineTension:0.3,
			borderColor:'red',
			pointBackgroundColor:'red',
			backgroundColor:'red',
			pointRadius:5,
			pointHoverRadius:10,
			pointHitRadius:30,
			pointBorderWidth:2,
			pointStyle:'rectRounded',
            borderWidth: 3
           };	
var vhldata={
            labels:["07-03-2018","08-03-2018","09-03-2018","12-03-2018","13-03-2018","14-03-2018","15-03-2018","16-03-2018","19-03-2018","20-03-2018","21-03-2018","22-03-2018","23-03-2018","26-03-2018","27-03-2018","28-03-2018","02-04-2018","03-04-2018","04-04-2018","05-04-2018"],	   
            datasets:[datafirst,datasecond,datathird]
			};
		
var lineChart= new Chart(vhl,{
         type:'bar',
		 data:vhldata,
		 options:{
		     scales:{
			     xAxes:[{
				      gridLines:{
					     drawOnChartArea:false,
						 drawBorder:false,
					  }
					}],
                 yAxes:[{
                      gridLines:{
					       drawOnChartArea:false,
                           drawBorder:false,
                         }
                       }]
               }
            }			   
}); 

           
    
</script>
</body>
</html>