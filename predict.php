<!DOCTYPE HTML>
<html>
<head>
  <title>PREDICT HERE!!</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script type="text/javascript">
  function validate(val){
	  switch(val)
	  {
		  case 1:alert("Graph gradually increases and if the stocks are sold good prices  are obtained");
		         break;
		  case 2:alert("Graph Decreases and if the stocks can be bought at a lower price");
		         break;
		  case 3:alert("graph for a time span decreases but the company has a good value in global market so later the graph increases gradually. Do not sell your stocks");
		         break;
		  case 4:alert("graph exponentially decreases buy the stocks at the end of the month");
		         break;
		  case 5:alert("Cannot Predict");
		         break;
		  default:alert("Error");
		          break;
	  }
  }	 
  function validate1(val){
	  switch(val)
	  {
		  case 1:alert("Graph slightly increases and if the stocks are sold at the end of the month good prices  are obtained");
		         break;
		  case 2:alert("Graph Decreases and if the stocks can be bought at a lower price");
		         break;
		  case 3:alert("graph exponentially decreases buy the stocks at the end of the month");
		         break;
		  case 4:alert("Cannot Predict");
		         break;
		  default:alert("Error");
		          break;
	  }
  }	 
</script>  
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
          <li><a href="stocks.php">Home</a></li>
          <li><a href="trending.php">Trending</a></li>
          <li><a href="datas.php">Stocks</a></li>
		   <li class="selected"><a href="predict.php">Prediction</a></li>
          <li ><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
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
            <p>A systemized approach to analyse and predict the stock market for the users....Take a look around and let us know what you think.<br /><a href="about.php">Read more.......</a></p>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>STOCKS</h3>
            <ul>
              <li><a href="airbar.php">AARTHI XERTEL</a></li>
              <li><a href="axisbar.php">BAXIS BANK</a></li>
              <li><a href="ciprobar.php">CIPRO</a></li>
			  <li><a href="drsinhabar.php">DR SINHA'S LAB</a></li>
              <li><a href="genbar.php">GENFOSYS</a></li>
              <li><a href="BSEBAR.php">BSE SENSEX</a></li>
              <li><a href="nSEBAR.php">NSE SENSEX</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h1>PREDICTION</h1>
		<H3><strong>Case 1:</strong>When the graph is increasing eventually and one of the event occurs: </H3>
		
		  <div class="icons"> <a href="ciproline.php"><img src="cip.png" width="550" height="300"></a></div> 
          <form id="myform" action="">
		  <p>
		  <label><input type="radio" name="casename" checked="checked" value="1" onclick="validate(1)"/>
		  Global market, National Market and Internal Factors are going Good</label>
		  <br />
		  <label><input type="radio" name="casename" value="2" onclick="validate(2)"/>
		   Internal Factors of the comany is bad i.e; frauds within the company etc. </label>
		  <br />
		  <label><input type="radio" name="casename" value="3" onclick="validate(3)"/>
		  National Market is temporarily low.</label>
		  <br />
		  <label><input type="radio" name="casename" value="4" onclick="validate(4)"/>
		  Global market is low</label>
		  <br />
		  <label><input type="radio" name="casename" value="5" onclick="validate(5)"/>
		  Other cases</label>
		  <br />
		  </p>
		  </form>
		  <H3><strong>Case 2:</strong>When the graph is decreasing eventually and one of the event occurs: </H3>
           <div class="icons"> <a href="airline.php"><img src="air1.png" width="550" height="300"></a></div> 
           	<form id="myform" action="">
		  <p>
		  <label><input type="radio" name="casename" checked="checked" value="1" onclick="validate1(1)"/>
		  Global market, National Market and Internal Factors are going Good</label>
		  <br />
		  <label><input type="radio" name="casename" value="2" onclick="validate1(2)"/>
		   Internal Factors of the comany is bad i.e; frauds within the company etc. </label>
		  <br />
		  <label><input type="radio" name="casename" value="3" onclick="validate1(3)"/>
		  Global or National Market market is low</label>
		  <br />
		  <label><input type="radio" name="casename" value="4" onclick="validate1(4)"/>
		  Other cases</label>
		  <br />
		  </p>
		  </form>	
          <H3><strong>Case 3:</strong>When the graph is increases and eventually decreses one of the event occurs: </H3>
          <div class="icons"> <a href="bnbline.php"><img src="bnb1.png" width="550" height="300"></a></div> 
           <form id="myform" action="">
		  <p>
		  <label><input type="radio" name="casename" checked="checked" value="1" onclick="validate(1)"/>
		  Global market, National Market and Internal Factors are going Good</label>
		  <br />
		  <label><input type="radio" name="casename" value="2" onclick="validate(2)"/>
		   Internal Factors of the comany is bad i.e; frauds within the company etc. </label>
		  <br />
		  <label><input type="radio" name="casename" value="3" onclick="validate(3)"/>
		  National Market is temporarily low.</label>
		  <br />
		  <label><input type="radio" name="casename" value="4" onclick="validate(4)"/>
		  Global market is low</label>
		  <br />
		  <label><input type="radio" name="casename" value="5" onclick="validate(5)"/>
		  Other cases</label>
		  <br />
		  </p>
		  </form>
          <H3><strong>Case 4:</strong>When the graph is decreasing and eventually increases one of the event occurs: </H3>
           <div class="icons"> <a href="relline.php"><img src="rel1.png" width="550" height="300"></a></div> 
           	<form id="myform" action="">
		  <p>
		  <label><input type="radio" name="casename" checked="checked" value="1" onclick="validate1(1)"/>
		  Global market, National Market and Internal Factors are going Good</label>
		  <br />
		  <label><input type="radio" name="casename" value="2" onclick="validate1(2)"/>
		   Internal Factors of the comany is bad i.e; frauds within the company etc. </label>
		  <br />
		  <label><input type="radio" name="casename" value="3" onclick="validate1(3)"/>
		  Global or National Market market is low</label>
		  <br />
		  <label><input type="radio" name="casename" value="4" onclick="validate1(4)"/>
		  Other cases</label>
		  <br />
		  </p>
		  </form>			  
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="stocks.php">Home</a> | <a href="contact.php">Contact Us</a></p>
      <p>Copyright &copy; SpEnDSmART</p>
    </div>
  </div>
</body>
</html>
