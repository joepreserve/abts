<!DOCTYPE html>
<html>
    <head>
        <title>ABTS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

body {
	background: #382E31;
	font: white;
}

h1 {
	font-size: 2em;
	font-style: algerian;
	margin: auto;
	color: black;
	text-align: center;
	vertical-align: bottom;
}

h2 {
	color: #57574c;
	border-bottom: solid 1px #000000;
	font-size: 1em;

}

h3 {
	font-size: 1.7em;
	font-style: algerian;
	margin: 4px auto;
	color: #101410;
	text-align: center;
}

h4 {
	border-bottom: solid 1px #ffffff;
	text-align: center;
	font-weight: bold;
	padding: 3px;
}

h5 {
	padding: 0px;
}

p {
	font-family: "Times New Roman";
	text-align: left;
	font-size: 12pt;
	text-indent: 30px;
	color: #000000;
}

#wrapper{
	width: 960px;
	height: auto;
	background: #c4c4c4;
	margin: 0px auto;
	border: solid 2px #ffffff;
	overflow: auto;
	padding: 10px;
} 
#header {
	width: 100%;
	height: 80px;
	border-bottom: solid 2px #ffffff;
}

#sidebar {
	width: 275px;
	height: 100%;
	background-color: white;

}

#menu ul {
	width: 200px;
	float: left;
	height: auto;
	color: black;
}

#menu ul li {
	list-style: none;
	padding: 5px;
	text-align: center;

}

#menu ul li a {
	background: ;
	color: black;
	text-decoration: none;
	padding: 10px, 0px;
	display: block;
	border: solid 2px #ffffff
}

#menu ul li a:hover {
	color: #fff;
}

#menu ul li a:active {
	background-color:white ;
	color: black;
	text-decoration: none;
	padding: 10px, 0px;
	display: block;
}


#menu ul ul {
	position: absolute;
	visibility: hidden;
}

#menu ul li:hover ul {
	visibility: visible;
}
#content {
	float: left;
	width: 655px;
	height: 100%;
	padding-left: 15px;
	border-left: solid 2px #ffffff;
	letter-spacing: 1;
	color: black;
}

input.txt {
color: #00008B;
background-color: white;
border: 1px inset #00008B;
width: 200px;
}

input.btn {
color: #00008B;
background-color: white;
border: 1px outset #00008B;
}

#btnSubmit {
color: #00008B;
background-color: white;
border: 1px outset #00008B;
width: 40px;
}

#address {
	color: #00008B;
	background-color: white;
	border: 1px inset #00008B;
	width: 200px;
}

form div {
clear: left;
margin: 0;
padding: 0;
padding-top: 15px;
}

form div label {
float: left;
text-align: right;
width: 250px;
font: bold 0.9em Arial, Helvetica, sans-serif;
}

fieldset {
border: 1px solid white;
margin-top: 1.4em;
padding: 0.6em;
}

legend {
font: bold 1em Arial, Helvetica, sans-serif;
color: black;
border: 1px solid white;
font-weight: bold;
}

</style>
    </head>
    	<body>
    	<div id="wrapper">
			<div id="header">
				<h1>BLUEWHALES ENTERPRISE NIGERIA.</h1>
				<h3> AUTOMATED BUS TRANSPORT SYSTEM </h3>
			</div><!--End of header-->
			<div id="sidebar">
				<div id="menu">
					<ul>
						<fieldset><legend>Booking</legend><li><h2><a href="/create"> New Passenger</a></h2>
						<li><h2><a href="/checking"> Existing Passenger</a></h2></fieldset>
						<li><h2><a href="#"> View List</a></h2></li>
						<li><h2><a href="#"> View List As At </a></h2></li>
						<li><h2><a href="#"> Help </a></h2></li>
						<li><h2><a href="/login"> Log Out </a></h2></li>
						<li><h2><a href="/"> Quit </a></h2></li>
					</ul>
				</div> <!--End of menu-->
			</div><!--End of sidebar-->
			<div id="content">
				<h4>Registration Portal</h4>
				<center>
					<form method="" action=" ">
					<fieldset>
					<legend>ENTER PHONE NUMBER</legend>

						<div title="Phone Number">
							<input type="text" name="phone" id="phone" class="txt" placeholder="Enter Passenger's Phone Number" />
						</div>

						
						<div>
							<a href="/existing" title="Go to Existing passenger">
							<input type="submit1" name="btnSubmit" id="btnSubmit" value="Enter!" class="btn">
							</a>
						</div>

					</form>
				</center>
			</div><!--End of content-->
		</div><!--End of wrapper-->
	</body>
</html>