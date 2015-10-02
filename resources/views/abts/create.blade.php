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
	padding: 2px;
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
	background-image: url('/home/jojo/nhub/1.png');
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
	background: 5;
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

#address {
	color: #00008B;
	background-color: white;
	border: 1px inset #00008B;
	width: 200px;
}

#male {
	color: #00008B;
	background-color: white;
	border: 1px inset #00008B;
	width: 40px;
}

#female {
	color: #00008B;
	background-color: white;
	border: 1px inset #00008B;
	width: 40px;
}

form div {
clear: left;
margin: 0;
padding: 0;
padding-top: 12px;
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
					<legend>New Passenger</legend>

					<div>
					<label for="surname">Surname:</label>
					<input type="text" name="surname" id="surname" class="txt" />
					</div>

					<div>
					<label for="fname">First name:</label>
					<input type="text" name="fname" id="fname" class="txt" />
					</div>

					<div>
					<label for="sex">Gender: </label>
					<input type="radio" name="sex" id="male" value="male" class="txt" />Male
					<input type="radio" name="sex" id="female" value="female" class="txt" />Female
					</div>

					<div>
					<label for="pnum">Phone Number:</label>
					<input type="text" name="pnum" id="pnum" class="txt" />
					</div>

					<div>
					<label for="address">Address:</label>
					<textarea name="address" rows="4" cols="27" id="address"></textarea>
					</div>

					<div>

					<label for="bnum">Bus Number:</label>

					<select name="bnum">

					<option value="bbt1">BBT1</option>

					<option value="bbt2">BBT2</option>

					<option value="bbt3">BBT3</option>

					<option value="bbt4">BBT4</option>

					<option value="bbt5">BBT5</option>

					</select>

					</div>

					<div>

					<label for="snum">Seat Number:</label>

					<select name="snum">

					<option value="seat1">Seat 1</option>

					<option value="seat2">Seat 2</option>

					<option value="seat3">Seat 3</option>

					<option value="seat4">Seat 4</option>

					<option value="seat5">Seat 5</option>

					</select>

					</div>

					<div>

					<label for="dtime">Departure Time:</label>

					<select name="dtime">

					<option value="6">6am</option>

					<option value="7">7am</option>

					<option value="8">8am</option>

					<option value="9">9am</option>

					<option value="10">10am</option>

					</select>

					</div>

					<div>
					<label for="nokname">Next of Kin Fullname:</label>
					<input type="text" name="noknamee" id="nokname" class="txt" />
					</div>

					<div>
					<label for="nokpnum">Next of Kin Phone Number:</label>
					<input type="text" name="nokpnum" id="nokpnum" class="txt" />
					</div>

					</fieldset>

					<div>

					<center>
					<input type="submit" name="btnSubmit" id="btnSubmit" value="Sign Up!" class="btn" />
					<input type="reset" value="Start Over" id="btnReset" class="btn">
					</center>

					</div>

					</form>
				</center>
			</div><!--End of content-->
		</div><!--End of wrapper-->
	</body>
</html>