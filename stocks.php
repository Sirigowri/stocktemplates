<!DOCTYPE HTML>
<html>

<head>
  <title>project on stock analysis</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
                   <h1><a href="stocks.php">SpEnD<span class="logo_colour">SmART</span></a></h1>
          <h2>SPENDING IS AN ART ....<span class="logo_colour">We predict UPs and DOWNs....</span></h2>
        </div>
		
    
    </div>
	<div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="stocks.php">Home</a></li>
          <li><a href="trending.php">Trending</a></li>
          <li><a href="datas.php">Stocks</a></li>
		   <li><a href="predict.php">Prediction</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    <div id="content_header"></div>
    <div id="site_content">
      
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Latest News</h3>
            <h4>Stock Market Predictor</h4>
            <h5></h5>
            <p>A systemized approach to analyse and predict the stock market for the users....<br /><a href="about.php">Read More.....</a></p> 
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>STOCKS</h3>
            <ul>
              <li><a href="airline.php">AARTHI XERTEL</a></li>
              <li><a href="axisline.php">BAXIS BANK</a></li>
              <li><a href="ciproline.php">CIPRO</a></li>
			  <li><a href="drsinhaline.php">DR SINHA'S LAB</a></li>
              <li><a href="genline.php">GENFOSYS</a></li>
              <li><a href="bseline.php">BSE SENSEX</a></li>
              <li><a href="Nseline.php">NSE SENSEX</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
       
      </div>
      <div id="content">
       <marquee direction='left'> <h1>Welcome to SpendSmart..... The stock market predictor :)</h1> </marquee>
	 
	   <marquee direction='right'> <a href="airbar.php">AARTHI XERTEL</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="axisbar.php">BAXIS BANK</a>&nbsp;&nbsp&nbsp;&nbsp;<a href="bnbbar.php">BNB</a>&nbsp;&nbsp&nbsp;&nbsp;<a href="ciprobar.php">CIPRO</a>&nbsp;&nbsp&nbsp;&nbsp;<a href="drsinhabar.php">DR SINHA'S LAB</a>&nbsp;&nbsp&nbsp;&nbsp;<a href="genbar.php">GENFOSYS</a>&nbsp;&nbsp&nbsp;&nbsp;<a href="relbar.php">RELEVANCE</a></marquee>
        <p><h2 id=one>SENSEX</h2><div><H3>
        <a href="second.php">BSE &nbsp;&nbsp;&nbsp;<span class="one2">33697.95</span></a></H3></div></p>	
<script src="Chart.js"></script>
<div class="chart-container" style="position:relative; height:30vh; width:40vw">
<canvas id="myChart" ></canvas></div>
<script id="one" >
var vhl = document.getElementById("myChart");
var datafirst={
            label: 'Volume',
            data: [10700,15500,8200,12200,14300,9300,17300,12700,9800,14600,10100,12900,11400,16400,15100,12300,19900,11100,9700,11000],
            lineTension:0.3,
			pointBackgroundColor:'blue',
			borderColor:'blue',
			backgroundColor:'transparent',
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
			backgroundColor:'transparent',
			pointStyle:'rectRounded',
            borderWidth: 3
           };
var datathird={
            label: 'low',
            data: [33037.48047,33256.42188,33468.16016,33722.96094,33580.69141,33637.28125,33119.92188,32856.53906,32810.85938,33070.53125,32963.30859,32483.83984,32515.16992,33077.12891,32917.66016,32917.66016,33153.82813,32972.55859,33267.85938,33501.37109],
            lineTension:0.3,
			borderColor:'red',
			pointBackgroundColor:'red',
			backgroundColor:'transparent',
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
         type:'line',
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
               },
			
            }			   
}); 
		  
</script>



      </div>
    </div>
	
	<div></div>
	<div></div>

    <div id="content_footer"></div>
    <div id="footer">
	   
      <p><a href="stocks.php">Home</a> | <a href="about.php">About</a></p>
      <p>Copyright &copy;SpEnDSmART </p>
    </div>
  </div>
</body>
</html>
