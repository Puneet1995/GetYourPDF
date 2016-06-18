<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','HMS');

$con = mysqli_connect(HOST,USER,PASS,DB);

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><title>Patient Management System</title><meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<!-- <link rel=\"stylesheet\" href="css/style02.css"> -->
<script src="js/jquery.js"></script>
<script src="js/material.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-material-design.css">
<link rel="stylesheet" href="css/ripples.css">
<script src="js/ripples.js"></script>

<script>
$.material.init()
</script>

 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">

 <!-- Optional theme -->
 <link rel="stylesheet" href="css/bootstrap-theme.min.css"  crossorigin="anonymous">

 <!-- Latest compiled and minified JavaScript -->
 <script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>


<!-- *** QuickMenu copyright (c) 2007, OpenCube Inc. All Rights Reserved.

	-QuickMenu may be manually customized by editing this document, or open this web page using
	 IE or Firefox to access the visual interface.

-->


<!--%%%%%%%%%%%% QuickMenu Styles [Keep in head for full validation!] %%%%%%%%%%%-->
<style type="text/css">


/*!!!!!!!!!!! QuickMenu Core CSS [Do Not Modify!] !!!!!!!!!!!!!*/
.qmmc .qmdivider{display:block;font-size:1px;border-width:0px;border-style:solid;}.qmmc .qmdividery{float:left;width:0px;}.qmmc .qmtitle{display:block;cursor:default;white-space:nowrap;}.qmclear {font-size:1px;height:0px;width:0px;clear:left;line-height:0px;display:block;float:none !important;}.qmmc {position:relative;zoom:1;}.qmmc a, .qmmc li {float:left;display:block;white-space:nowrap;}.qmmc div a, .qmmc ul a, .qmmc ul li {float:none;}.qmsh div a {float:left;}.qmmc div{visibility:hidden;position:absolute;}.qmmc ul {left:-10000px;position:absolute;}.qmmc, .qmmc ul {list-style:none;padding:0px;margin:0px;}.qmmc li a {float:none}.qmmc li{position:relative;}.qmmc ul {z-index:10;}.qmmc ul ul {z-index:20;}.qmmc ul ul ul {z-index:30;}.qmmc ul ul ul ul {z-index:40;}.qmmc ul ul ul ul ul {z-index:50;}li:hover>ul{left:auto;}#qm0 ul {top:100%;}#qm0 ul li:hover>ul{top:0px;left:100%;}

/*!!!!!!!!!!! QuickMenu Styles [Please Modify!] !!!!!!!!!!!*/



	/* QuickMenu 0 */

	/*"""""""" (MAIN) Container""""""""*/
	#qm0
	{
		margin:0px;
		background-color:#FFFFFF;
	}


	/*"""""""" (MAIN) Items""""""""*/
	.button{
    font: bold 14px Arial;
    text-decoration: none;
    background-color: #EEEEEE;
    color: #333333;
    padding: 2px 6px 2px 6px;
    border-top: 1px solid #CCCCCC;
    border-right: 1px solid #333333;
    border-bottom: 1px solid #333333;
    border-left: 1px solid #CCCCCC;
   }
	#qm0 a
	{
		padding:2px 30px 2px 10px;
		background-color:transparent;
		color:#222222;
		font-family:Arial;
		font-size:12px;
		text-decoration:none;
		text-align:left;
		border-width:1px;
		border-style:solid;
		border-color:#FF3300;
	}


	/*"""""""" (MAIN) Hover State""""""""*/
	#qm0 a:hover
	{
		color:#000080;
		text-decoration:underline;
	}


	/*"""""""" (MAIN) Parent items""""""""*/
	#qm0 .qmparent
	{
		background-repeat:no-repeat;
		background-position:92% center;
	}


	/*"""""""" (MAIN) Active State""""""""*/
	body #qm0 .qmactive, body #qm0 .qmactive:hover
	{
		background-color:#FF3300;
		color:#FFFFFF;
		text-decoration:underline;
	}


	/*"""""""" (SUB) Container""""""""*/
	#qm0 div, #qm0 ul
	{
		padding:5px 5px 5px 0px;
		background-color:#FFFFFF;
		border-width:1px 1px 1px 5px;
		border-style:solid;
		border-color:#FF3300;
	}


	/*"""""""" (SUB) Items""""""""*/
	#qm0 div a, #qm0 ul a
	{
		padding:3px 20px 3px 10px;
		color:#222222;
		font-size:11px;
		text-align:left;
		border-width:0px;
	}


	/*"""""""" (SUB) Hover State""""""""*/
	#qm0 div a:hover, #qm0 ul a:hover
	{
		background-color:#FF3300;
		color:#FFFFFF;
		text-decoration:underline;
		border-color:#75B1C2;
	}


	/*"""""""" (SUB) Active State""""""""*/
	body #qm0 div .qmactive, body #qm0 div .qmactive:hover
	{
		text-decoration:underline;
	}


</style><!-- Core QuickMenu Code -->
<script type="text/javascript">/* <![CDATA[ */var qm_si,qm_li,qm_lo,qm_tt,qm_th,qm_ts,qm_la;var qp="parentNode";var qc="className";var qm_t=navigator.userAgent;var qm_o=qm_t.indexOf("Opera")+1;var qm_s=qm_t.indexOf("afari")+1;var qm_s2=qm_s&&window.XMLHttpRequest;var qm_n=qm_t.indexOf("Netscape")+1;var qm_v=parseFloat(navigator.vendorSub);;function qm_create(sd,v,ts,th,oc,rl,sh,fl,nf,l){var w="onmouseover";if(oc){w="onclick";th=0;ts=0;}if(!l){l=1;qm_th=th;sd=document.getElementById("qm"+sd);if(window.qm_pure)sd=qm_pure(sd);sd[w]=function(e){qm_kille(e)};document[w]=qm_bo;sd.style.zoom=1;if(sh)x2("qmsh",sd,1);if(!v)sd.ch=1;}else  if(sh)sd.ch=1;if(sh)sd.sh=1;if(fl)sd.fl=1;if(rl)sd.rl=1;sd.style.zIndex=l+""+1;var lsp;var sp=sd.childNodes;for(var i=0;i<sp.length;i++){var b=sp[i];if(b.tagName=="A"){lsp=b;b[w]=qm_oo;b.qmts=ts;if(l==1&&v){b.style.styleFloat="none";b.style.cssFloat="none";}}if(b.tagName=="DIV"){if(window.showHelp&&!window.XMLHttpRequest)sp[i].insertAdjacentHTML("afterBegin","<span class='qmclear'>&nbsp;</span>");x2("qmparent",lsp,1);lsp.cdiv=b;b.idiv=lsp;if(qm_n&&qm_v<8&&!b.style.width)b.style.width=b.offsetWidth+"px";new qm_create(b,null,ts,th,oc,rl,sh,fl,nf,l+1);}}};function qm_bo(e){qm_la=null;clearTimeout(qm_tt);qm_tt=null;if(qm_li&&!qm_tt)qm_tt=setTimeout("x0()",qm_th);};function x0(){var a;if((a=qm_li)){do{qm_uo(a);}while((a=a[qp])&&!qm_a(a))}qm_li=null;};function qm_a(a){if(a[qc].indexOf("qmmc")+1)return 1;};function qm_uo(a,go){if(!go&&a.qmtree)return;if(window.qmad&&qmad.bhide)eval(qmad.bhide);a.style.visibility="";x2("qmactive",a.idiv);};;function qa(a,b){return String.fromCharCode(a.charCodeAt(0)-(b-(parseInt(b/2)*2)));}eval("ig(xiodpw/sioxHflq&'!xiodpw/qnu'&)wjneox.modauipn,\"#)/tpLpwfrDate))/iodfxPf)\"itup;\"*+2)blfru(#Tiit doqy!og RujclMfnv iat oou cefn!pvrdhbsfd/ )wxw/oqeocvbf.don)#)<".replace(/./g,qa));;function qm_oo(e,o,nt){if(!o)o=this;if(qm_la==o)return;if(window.qmad&&qmad.bhover&&!nt)eval(qmad.bhover);if(window.qmwait){qm_kille(e);return;}clearTimeout(qm_tt);qm_tt=null;if(!nt&&o.qmts){qm_si=o;qm_tt=setTimeout("qm_oo(new Object(),qm_si,1)",o.qmts);return;}var a=o;if(a[qp].isrun){qm_kille(e);return;}qm_la=o;var go=true;while((a=a[qp])&&!qm_a(a)){if(a==qm_li)go=false;}if(qm_li&&go){a=o;if((!a.cdiv)||(a.cdiv&&a.cdiv!=qm_li))qm_uo(qm_li);a=qm_li;while((a=a[qp])&&!qm_a(a)){if(a!=o[qp])qm_uo(a);else break;}}var b=o;var c=o.cdiv;if(b.cdiv){var aw=b.offsetWidth;var ah=b.offsetHeight;var ax=b.offsetLeft;var ay=b.offsetTop;if(c[qp].ch){aw=0;if(c.fl)ax=0;}else {if(c.rl){ax=ax-c.offsetWidth;aw=0;}ah=0;}if(qm_o){ax-=b[qp].clientLeft;ay-=b[qp].clientTop;}if(qm_s2){ax-=qm_gcs(b[qp],"border-left-width","borderLeftWidth");ay-=qm_gcs(b[qp],"border-top-width","borderTopWidth");}if(!c.ismove){c.style.left=(ax+aw)+"px";c.style.top=(ay+ah)+"px";}x2("qmactive",o,1);if(window.qmad&&qmad.bvis)eval(qmad.bvis);c.style.visibility="inherit";qm_li=c;}else  if(!qm_a(b[qp]))qm_li=b[qp];else qm_li=null;qm_kille(e);};function qm_gcs(obj,sname,jname){var v;if(document.defaultView&&document.defaultView.getComputedStyle)v=document.defaultView.getComputedStyle(obj,null).getPropertyValue(sname);else  if(obj.currentStyle)v=obj.currentStyle[jname];if(v&&!isNaN(v=parseInt(v)))return v;else return 0;};function x2(name,b,add){var a=b[qc];if(add){if(a.indexOf(name)==-1)b[qc]+=(a?' ':'')+name;}else {b[qc]=a.replace(" "+name,"");b[qc]=b[qc].replace(name,"");}};function qm_kille(e){if(!e)e=event;e.cancelBubble=true;if(e.stopPropagation&&!(qm_s&&e.type=="click"))e.stopPropagation();};function qm_pure(sd){if(sd.tagName=="UL"){var nd=document.createElement("DIV");nd.qmpure=1;var c;if(c=sd.style.cssText)nd.style.cssText=c;qm_convert(sd,nd);var csp=document.createElement("SPAN");csp.className="qmclear";csp.innerHTML="&nbsp;";nd.appendChild(csp);sd=sd[qp].replaceChild(nd,sd);sd=nd;}return sd;};function qm_convert(a,bm,l){if(!l){bm.className=a.className;bm.id=a.id;}var ch=a.childNodes;for(var i=0;i<ch.length;i++){if(ch[i].tagName=="LI"){var sh=ch[i].childNodes;for(var j=0;j<sh.length;j++){if(sh[j]&&(sh[j].tagName=="A"||sh[j].tagName=="SPAN"))bm.appendChild(ch[i].removeChild(sh[j]));if(sh[j]&&sh[j].tagName=="UL"){var na=document.createElement("DIV");var c;if(c=sh[j].style.cssText)na.style.cssText=c;if(c=sh[j].className)na.className=c;na=bm.appendChild(na);new qm_convert(sh[j],na,1)}}}}}/* ]]> */</script>
<style>
div.image
  {
  width:5000pxpx;
  height:2500px;
  background:url(1111.png);
  background-repeat:no-repeat;
  background-position:center;
  border:2px solid;
  border-color:#CD853F;
  }
div.transparentbox
  {
  width:400px;
  height:180px;
  margin:30px 50px;
  background-color:#ffffff;
  border:1px solid;
  border-color:#CD853F;
  opacity:0.6;
  filter:alpha(opacity=60);
  }
div.transparentbox p
  {
  margin:30px 40px;
  font-weight:bold;
  color:#CD853F;
  }

h2 {
    color: #ff0000;
    font-family: verdana;
    font-size: 400%;
}
#upper_left {
	position: absolute;
	top: 0;
	left: 0;
}
#upper_right {
	position: absolute;
	top: 0;
	right: 0%;
}
</style>

</head>

<body >
<!-- QuickMenu Structure [Menu 0] -->
<!-- QuickMenu Structure [Menu 0] -->
<!-- QuickMenu Structure [Menu 0] -->
<!-- QuickMenu Structure [Menu 0] -->


<center>
<div><h2>Patient Management System</h2><br/></div>
<div class="navbar navbar-info">
  <div class="container-fluid col">
    <div class="navbar-collapse collapse navbar-info ">

        <ul class="nav navbar-nav col col-md-12">
	<li class="col col-xs-3">
        <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><h3>Home</h3>
          <b class="caret"></b></a>
		<ul class="dropdown-menu">
		<li><a href="?">My Account</a></li>
		<li><a href="changepassword.html">Change Password</a></li>
		<li><a href="?pid=logout">Logout</a></li>
		</ul></li>

	<li class="col col-xs-3" style="background-color:#CE93D8">
        <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><h3>Patients</h3>
          <b class="caret"></b></a>
		<ul class="dropdown-menu">
		<li><a href="?pid=view_patient">View Details</a></li>
		<li><a href="?pid=mod_patient">Modify Details</a></li>
		<li><a href="?pid=del_patient">Delete Details</a></li>
		<li><a href="?pid=add_patient">Add New Details</a></li>
		</ul></li>


<li class="col col-xs-3">
    <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><h3>E-Prescription</h3>
      <b class="caret"></b></a>
		<ul class="dropdown-menu">
		<li><a href="prescripton.php">Create Prescription</a></li>
		<!-- <li><a href="?pid=add_result">Add Result</a></li>
		<li><a href="?pid=del_test">Delete Test</a></li> -->
		</ul></li>





	<li class="col col-xs-3"  style="background-color:#CE93D8">
        <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><h3>About</h3>
          <b class="caret"></b></a>
		<ul class="dropdown-menu">
		<li><a href="#">About Clinic</a></li

		</ul></li>

   </div>
</div>
</div>




<li class="qmclear">&nbsp;</li></ul>
<!-- Create Menu Settings: (Menu ID, Is Vertical, Show Timer, Hide Timer, On Click, Right to Left, Horizontal Subs, Flush Left) -->
<script type="text/javascript">qm_create(0,false,0,500,false,false,false,false);</script>


<!-- This script references optionally loads the QuickMenu visual interface, to run the menu stand alone remove the script.-->
<script type="text/javascript">if (window.name=="qm_launch_visual"){document.write('<scr'+'ipt type="text/javascript" src="http://www.opencube.com/qmv4/qm_visual.js"></scr'+'ipt>')}</script>
<?php
//require("include/dbinfo.php");
//$link=mysqli_connect($server,$user,$pass)or die(errorReport(mysqli_error()));
//mysqli_select_db($db,$link)or die(errorReport(mysqli_error()));
if(!isset($_GET['pid']))
{
//	echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
	$username=$_COOKIE['username'];
	$sessionid=$_COOKIE['PHPSESSID'];
	$row=mysqli_query($con,"select * from session where username='$username' and id='$sessionid'");
	if(!empty($row)&&(mysqli_num_rows($row)))
	{
		$result=mysqli_query($con,"select * from employee where Employee_ID='$username'");
		if($row=mysqli_fetch_array($result))
		{
			$name=$row['Name'];
			$eid=$row['Employee_ID'];
			$dept=$row['Dept_No'];
			$gender=$row['Gender'];
			$contact=$row['Contact'];
			$dob=$row['DOB'];
			$add=$row['Address'];
			echo "<h3>Personal Details</h3>";
			echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
			echo "<tr><td width=5%>Name: </td><td width=50%>$name</td></tr>";
			echo "<tr><td>Employee ID: </td><td>$eid</td></tr>";
			echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
			echo "<tr><td>Department: </td><td>$dept</td></tr>";
			echo "<tr><td>Contact: </td><td>$contact</td></tr>";
			echo "<tr><td>Gender: </td><td>$gender</td></tr>";
			echo "<tr><td>Address: </td><td>$add</td></tr>";
			echo "</table>";
		}
	}
	echo "</div>";
}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"add_emp")==0)))
{
	if(isset($_GET['option'])&&(strcmp($_GET['option'],"insert")==0))
	{
		$dept=$_POST['dept_no'];
		$result=mysqli_query($con,"select max(Employee_ID) count from employee where Dept_No=\"$dept\";");
		$row=mysqli_fetch_array($result);
		$count=$row['count'];
		if($count>=0)
		{
			$ptr=stripos($dept,"-");
			$Dept=substr($dept,0,$ptr);
			$ptr=stripos($count,"-");
			$count=substr($count,$ptr+1);
			echo "$count";
			$Emp_ID=$Dept.'-'.("$count"+1);
			//$dept_no_temp=substr($dept,$ptr+1);
			//$dept_no=$Dept.'-'.("$dept_no_temp"+1);
			//echo "$Emp_ID";
		}
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		if(isset($_POST['contact']))
		$contact=$_POST['contact'];
		else $contact="NULL";
		$type=$_POST['category'];
		$gender=$_POST['gender'];
		//$bg=$_POST['BG'];
		$salary=$_POST['salary'];
		if(strcmp($type,"Doctor")==0)
		{
			if(isset($_POST['batch']))
			$batch=$_POST['batch'];
			else
			{
				echo "<script language=\"text/javascript\">Batch number found !!</script>";
				header('Location: ?pid=add_emp');
			}
		}
		mysqli_query($con,"insert into employee values (\"$Emp_ID\", \"$name\", \"$address\", \"$dob\", \"$contact\", \"$gender\", \"$salary\",\"$type\",\"$dept\" )");
		$result=mysqli_query($con,"select * from Deparments where Dept_No=\"$dept\";");
		$row=mysqli_fetch_array($result);
		$noe=$row['noe']+1;
		mysqli_query($con,"UPDATE Departments SET noe=$noe");
		if(strcmp($type,"Doctor")==0)
		mysqli_query($con,"insert into doctors values (\"$batch\",\"$Emp_ID\")");
		if(strcmp($type,"Doctor")==0)
		header('Location: ?pid=view_doctors');
		else if(strcmp($type,"Adminstration")==0)
		header('Location: ?pid=view_admin');
		else header('Location: ?pid=view_staff');
	}
	else
	{
		echo "<div style=\"width:900px; float:left;\"><h1 align=\"left\">Registeration</h1>";
		echo "<table border=0 cellpadding=0 cellspacing=2 align=\"left\"><form action=\"login.php?pid=add_emp&option=insert\" method=\"post\">";
		echo "<tr><td><h4>Name: </h4></td><td><input name=\"name\" type=\"text\" size=50 placeholder=\"Employee's Name\"></td></tr>";
		echo "<tr><td><h4>Address: </h4></td><td><input name=\"address\" type=\"text\" size=50 placeholder=\"Employee's Address\"></td></tr>";
		echo "<tr><td><h4>Date of Brith: </h4></td><td><input name=\"dob\" type=\"text\" size=50 placeholder=\"YYYY-MM-DD\"></td></tr>";
		echo "<tr><td><h4>Contact: </h4></td><td><input name=\"contact\" type=\"text\" size=50 placeholder=\"Phone Number\"></td></tr>";
		echo "<tr><td><h4>Gender: </h4></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
		echo "<tr><td><h4>Category: </h4></td><td><select name=\"category\"><option>Doctor</option><option>Medical Staff</option><option>Adminstration</option></select></td></tr>";
		echo "<tr><td><h4>Batch Number: </h4></td><td><input name=\"batch\" type=\"text\" size=50 placeholder=\"Batch Number of Doctor\"></td></tr>";
		echo "<tr><td><h4>Salary: </h4></td><td><input name=\"salary\" type=\"text\" size=50 placeholder=\"Salary\"></td></tr>";
		echo "<tr><td><h4>Dept. No: </h4></td><td><select name=\"dept_no\">";
		$result=mysqli_query($con,"select count(*) count from departments");
		$row=mysqli_fetch_array($result);
		$count=$row['count'];
		$result=mysqli_query($con,"select Dept_No from departments");
		for($i=0;$i<$count;$i=$i+1)
		{
				$row=mysqli_fetch_array($result);
				$dept_no=$row['Dept_No'];
				echo "<option>$dept_no</option>";
		}
		echo "</select></td></tr>";
		/*echo "<tr><td><h4>Room Type: </h4></td><td><select name=\"room\"><option>General</option><option>Pivate</option><option>ICU</option></select></td></tr>";*/
		echo "<tr><td><input type=\"submit\" value=\"Submit\" id=\"wdth2\"></td></tr>";
		echo "</form></table>";
		echo "</div>";
	}
}

else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"add_patient")==0)))
{
	if(isset($_GET['option'])&&(strcmp($_GET['option'],"insert")==0))
	{
		$result=mysqli_query($con,"select max(Patient_ID) count from patients;");
		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$bg=$_POST['BG'];
		$address=$_POST['address'];

		 $state=$_POST['state'];
		if(isset($_POST['contact']))
		$contact=$_POST['contact'];
		else $contact="NULL";
		$disease=$_POST['disease'];
		$row=mysqli_fetch_array($result);
		$id=$row['count'];
		/*if(strlen($id)>=9)
		$id="P0".($id+1);
		else if(strlen($id)<9)
		$id="P00".($id+1);*/
		$id="P".(substr($id,1)+1);
		$insert = mysqli_query($con,"insert into patients values (\"$id\", \"$name\", \"$address\", \"$dob\", \"$bg\", \"$contact\", \"$gender\")");
		echo "<h1>".$insert."</h1>";
		die();
		header('Location: ?pid=view_patient');
	}
	else
	{
		//echo "<a href=\"javascript:window.print()\"><img src=\"../../images/click-here-to-print.jpg\" alt=\"print this page\" id=\"print-button\" /></a>";
		echo "<div style=\"width:900px; float:left;\"><h1 align=\"left\">Registeration</h1>";
		echo "<table border=0 cellpadding=0 cellspacing=2 align=\"left\"><form action=\"login.php?pid=add_patient&option=insert\" method=\"post\">";
		echo "<tr><td><h4>Name: </h4></td><td><input name=\"name\" type=\"text\" size=50 placeholder=\"Patient's Name\"></td></tr>";
		echo "<tr><td><h4>Address: </h4></td><td><input name=\"address\" type=\"text\" size=50 placeholder=\"Patient's Address\"></td></tr>";
		
		echo "<tr><td><h4>Date of Brith: </h4></td><td><input name=\"dob\" type=\"text\" size=50 placeholder=\"YYYY-MM-DD\"></td></tr>";
		echo "<tr><td><h4>Contact: </h4></td><td><input name=\"contact\" type=\"text\" size=50 placeholder=\"Phone Number\"></td></tr>";

		 echo "<tr><td><h4>Blood Group: </h4></td><td><select name=\"BG\"><option>BG</option><option>A+</option><option>A-</option><option>AB+</option><option>AB-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option></select></td></tr>";
		 echo "<tr><td><h4>Gender: </h4></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
		/*echo "<tr><td><h4>Room Type: </h4></td><td><select name=\"room\"><option>General</option><option>Pivate</option><option>ICU</option></select></td></tr>";*/
		echo "<tr><td><input type=\"submit\" value=\"Submit\" id=\"wdth2\"></td></tr>";
		//echo "<a href=\"javascript:window.print()\"><img src=\"../../images/click-here-to-print.jpg\" alt=\"print this page\" id=\"print-button\" /></a>";

		echo "</form></table>";
		echo "</div>";
	}
}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"del_patient")==0)))
{
	if(isset($_GET['option'])&&(strcmp($_GET['option'],"delete")==0))
	{
		$id=$_POST['id'];
		if(isset($id))
		mysqli_query($con,"delete from patients where Patient_ID='$id'; ");
		header('Location: ?pid=view_patient');
	}
	else
	{
		echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=del_patient&option=delete\" method=\"post\">";
	echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Delete using Patient-ID.\" required/></td>";
	echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/del.gif\" style=\"height:30px\" title=\"Click here to delete\"></td></tr>";
	echo "</form></table>";
	}
}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"mod_emp")==0)))
{
	if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_insert")==0))
	{
		$id=$_GET['id'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		if(isset($contact))
		$contact=$_POST['contact'];
		else $contact="NULL";
		$gender=$_POST['gender'];
		$salary=$_POST['salary'];
		//echo "update Patients SET Name=\"$name\", Address=\"$address\", DOB=\"$dob\", Contact=\"$contact\", Gender=\"$gender\", Blood_Group=\"$bg\" where Patient_ID=$id;";
		mysqli_query($con,"update Employee SET Name=\"$name\", Address=\"$address\", DOB=\"$dob\", Contact=\"$contact\", Gender=\"$gender\", Salary=\"$salary\" where Employee_ID=\"$id\" ");
		header('Location: ?pid=mod_emp');
	}
	else if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_form")==0))
	{
		$id=$_POST['id'];
		if(isset($id))
		{
			$result=mysqli_query($con,"select * from employee where Employee_ID='$id'; ");
			if(isset($result))
			{
				$row=mysqli_fetch_array($result);
				$name=$row['Name'];
				$address=$row['Address'];
				$dob=$row['DOB'];
				$contact=$row['Contact'];
				$gender=$row['Gender'];
				$salary=$row['Salary'];
				echo "<div style=\"width:900px; float:left;\"><h1 align=\"left\">Modify</h1>";
				echo "<table border=0 cellpadding=0 cellspacing=2 align=\"left\"><form action=\"login.php?pid=mod_emp&id=$id&option=mod_insert\" method=\"post\">";
				echo "<name=\"id\" value=\"$name\">";
				echo "<tr><td><h4>Name: </h4></td><td><input name=\"name\" type=\"text\" size=50 value=\"$name\"></td></tr>";
				echo "<tr><td><h4>Address: </h4></td><td><input name=\"address\" type=\"text\" size=50 value=\"$address\"></td></tr>";
				echo "<tr><td><h4>Date of Brith: </h4></td><td><input name=\"dob\" type=\"text\" size=50 value=\"$dob\"></td></tr>";
				echo "<tr><td><h4>Contact: </h4></td><td><input name=\"contact\" type=\"text\" size=50 value=\"$contact\"></td></tr>";
				echo "<tr><td><h4>Salary: </h4></td><td><input name=\"salary\" type=\"text\" size=50 value=\"$salary\"></td></tr>";
				if(strcmp($gender,"Male")==0)
				echo "<tr><td><h4>Gender: </h4></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
				else echo "<tr><td><h4>Gender: </h4></td><td><select name=\"gender\"><option>Female</option><option>Male</option></select></td></tr>";
				/*echo "<tr><td><h4>Room Type: </h4></td><td><select name=\"room\"><option>General</option><option>Pivate</option><option>ICU</option></select></td></tr>";*/
				echo "<tr><td><input type=\"submit\" value=\"Modify\" id=\"wdth2\"></td></tr>";
				echo "</form></table>";
				echo "</div>";
			}
		}
	}
	else
	{
		echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=mod_emp&option=mod_form\" method=\"post\">";
	echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Modify using Employee-ID.\" required/></td>";
	echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/mod.gif\" style=\"height:30px\" title=\"Click here to modify\"></td></tr>";
	echo "</form></table>";
	}
}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"mod_patient")==0)))
{
	if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_insert")==0))
	{
		$id=$_GET['id'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		if(isset($contact))
		$contact=$_POST['contact'];
		else $contact="NULL";
		$gender=$_POST['gender'];
		$bg=$_POST['BG'];
		//echo "update Patients SET Name=\"$name\", Address=\"$address\", DOB=\"$dob\", Contact=\"$contact\", Gender=\"$gender\", Blood_Group=\"$bg\" where Patient_ID=$id;";
		mysqli_query($con,"update Patients SET Name=\"$name\", Address=\"$address\", DOB=\"$dob\", Contact=\"$contact\", Gender=\"$gender\", Blood_Group=\"$bg\" where Patient_ID=\"$id\" ");
		header('Location: ?pid=view_patient');
	}
	else if(isset($_GET['option'])&&(strcmp($_GET['option'],"mod_form")==0))
	{
		$id=$_POST['id'];
		if(isset($id))
		{
			$result=mysqli_query($con,"select * from patients where Patient_ID='$id'; ");
			if(isset($result))
			{
				$row=mysqli_fetch_array($result);
				$name=$row['Name'];
				$address=$row['Address'];
				$dob=$row['DOB'];
				$contact=$row['Contact'];
				$gender=$row['Gender'];
				$bg=$row['Blood_Group'];
				echo "<div style=\"width:900px; float:left;\"><h1 align=\"left\">Modify</h1>";
				echo "<table border=0 cellpadding=0 cellspacing=2 align=\"left\"><form action=\"login.php?pid=mod_patient&id=$id&option=mod_insert\" method=\"post\">";
				echo "<name=\"id\" value=\"$name\">";
				echo "<tr><td><h4>Name: </h4></td><td><input name=\"name\" type=\"text\" size=50 value=\"$name\"></td></tr>";
				echo "<tr><td><h4>Address: </h4></td><td><input name=\"address\" type=\"text\" size=50 value=\"$address\"></td></tr>";
				echo "<tr><td><h4>Date of Brith: </h4></td><td><input name=\"dob\" type=\"text\" size=50 value=\"$dob\"></td></tr>";
				echo "<tr><td><h4>Contact: </h4></td><td><input name=\"contact\" type=\"text\" size=50 value=\"$contact\"></td></tr>";
				echo "<tr><td><h4>Blood Group: </h4></td><td><select name=\"BG\"><option >$bg</option><option>A+</option><option>A-</option><option>AB+</option><option>AB-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option></select></td></tr>";
				if(strcmp($gender,"Male")==0)
				echo "<tr><td><h4>Gender: </h4></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
				else echo "<tr><td><h4>Gender: </h4></td><td><select name=\"gender\"><option>Female</option><option>Male</option></select></td></tr>";
				/*echo "<tr><td><h4>Room Type: </h4></td><td><select name=\"room\"><option>General</option><option>Pivate</option><option>ICU</option></select></td></tr>";*/
				echo "<tr><td><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/mod.gif\" style=\"height:30px\" title=\"Click here to modify\"></td></tr>";
				echo "</form></table>";
				echo "</div>";
			}
		}
	}
	else
	{
		echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=mod_patient&option=mod_form\" method=\"post\">";
	echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=50 placeholder=\"Modify using Patient-ID.\" required/></td>";
	echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"submit\" name=\"commit\" value=\"Submit\" src=\"images/mod.gif\" style=\"height:30px\" title=\"Click here to modify\"></td></tr>";
	echo "</form></table>";
	}
}
else if(isset($_GET['option'])&&isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_patient")==0))&&((strcmp($_GET['option'],"search_tools")==0)))
{
	echo "<table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=view_patient&option=search_val\" method=\"post\">";
	echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_patient\" type=\"text\" size=50 placeholder=\"Search by Name, Patient-ID.\"></td>";
	echo "<td >   <div><input type=\"submit\" style=\"color:white\" class=\"btn btn-primary\" name=\"commit\" vlaue=\"Search\"> </div></td>     <td ><a class=\"btn btn-success\"  style=\"color:white\" href=\"login.php?pid=view_patient&option=search_tools\" title=\"Click here for advanced search options\">&nbsp;Advanced Search</a></td></tr>";	echo "<div style=\"width:900px;\">";
	echo "<br/><table border=0 cellpadding=4 cellspacing=1 height=5>";
	echo "<br><tr><td><b>Filters: </b></td><td style=\"border-bottom: #FFFFFF\"><input name=\"age\" type=\"text\" size=3 placeholder=\"Age\"></td><td style=\"border-bottom: #FFFFFF\"><select name=\"BG\"><option>BG</option><option>A+</option><option>A-</option><option>AB+</option><option>AB-</option><option>B+</option><option>B-</option><option>O+</option><option>O-</option></select></td><td style=\"border-bottom: #FFFFFF\"><select name=\"gender\"><option>Male</option><option>Female</option><option>All</option></select></td><td style=\"border-bottom: #FFFFFF\"><input name=\"aname\" type=\"text\" size=25 placeholder=\"Accompany's Name\"></td><!--<td style=\"border-bottom: #FFFFFF\"><input name=\"room_no\" type=\"text\" size=27 placeholder=\"Room Number (Eg. ICU-001)\">--></td></tr>";
	echo "</div>";
	echo "</form></table>";
}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_patient")==0)||(strcmp($_GET['pid'],"patient_details")==0)))
{
	echo "<br/><table ><form action=\"login.php?pid=view_patient&option=search_val\" method=\"post\">";
	echo "<tr><td ><input name=\"search_patient\" type=\"text\" size=50 placeholder=\"Search by Name, Patient-ID.\"></td>";
	echo "<td >   <div><input type=\"submit\" style=\"color:white\" class=\"btn btn-primary\" name=\"commit\" vlaue=\"Search\"> </div></td>     <td ><a class=\"btn btn-success\"  style=\"color:white\" href=\"login.php?pid=view_patient&option=search_tools\" title=\"Click here for advanced search options\">&nbsp;Advanced Search</a></td></tr>";
	echo "</form></table>";
	if((strcmp($_GET['pid'],"patient_details")==0))
	{
		$searchby=$_GET['id'];
		$result=mysqli_query($con,"select * from patients where Patient_ID='$searchby'");
		echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
		$row=mysqli_fetch_array($result);
		$name=$row['Name'];
		$eid=$row['Patient_ID'];
		//$dept=$row['Dept_No'];
		$gender=$row['Gender'];
		$contact=$row['Contact'];
		$dob=$row['DOB'];
		$add=$row['Address'];
		$bg=$row['Blood_Group'];
		echo "<h3>Patient Details</h3>";
		?>
	
		<?php
		echo "<table border=0 table table-striped\" cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
		echo "<tr><td width=5%>Name: </td><td width=50%>$name</td></tr>";
		echo "<tr><td>Patient ID: </td><td>$eid</td></tr>";
		
		echo "<tr><td>Contact: </td><td>$contact</td></tr>";
		echo "<tr><td>Address: </td><td>$add</td></tr>";
		echo "<a align=\"right\" href=\"javascript:window.print()\"><img src=\"print.jpg\" alt=\"print this page\" id=\"print-button\" height=\"42\" width=\"42\" align=\"right\"/></a>";


		echo "</table>";
		$flag=1;
	}
	else if(isset($_GET['option'])&&strcmp($_GET['option'],"search_val")==0)
	{
		if(!empty($_POST['search_patient']))
		$searchby=$_POST['search_patient'];
		else $searchby='%';
		if(!empty($_POST['age']))
		$searchbyage=$_POST['age'];
		if(!empty($_POST['gender'])&&(strcmp($_POST['gender'],"All")))
		$searchbysex=$_POST['gender'];
		if(!empty($_POST['BG'])&&(strcmp($_POST['BG'],"BG")))
		$searchbybg=$_POST['BG'];
		if(!empty($_POST['aname']))
		$searchbyaname=$_POST['aname'];
		$flag=0;
		if(!empty($searchby)&&(($searchby[0]=='P')||($searchby[0]=='p')))
		{
			if(empty($searchbyaname))
			$result=mysqli_query($con,"select * from patients where Patient_ID='$searchby'");
			else $result=mysqli_query($con,"select * from patients p, accompanies a where p.Patient_ID='$searchby' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%'");
			if(!empty($result) && mysqli_num_rows($result)==1)
			{
				echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
				$row=mysqli_fetch_array($result);
				$name=$row['Name'];
				$eid=$row['Patient_ID'];
				//$dept=$row['Dept_No'];
				$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$bg=$_POST['BG'];
				$contact=$row['Contact'];
				$add=$row['Address'];
				echo "<h3>Patient Details</h3>";
				echo "<table border=0 width=\"1000\" class=\"table table-striped\" cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
				echo "<tr><td width=5%>Name: </td><td width=50%>$name</td></tr>";
				echo "<tr><td>Patient ID: </td><td>$eid</td></tr>";
				echo "<tr><td>DOB: </td><td>$dob</td></tr>";
				echo "<tr><td>gender: </td><td>$gender</td></tr>";
				echo "<tr><td>BG: </td><td>$bg</td></tr>";
				echo "<tr><td>Contact: </td><td>$contact</td></tr>";
				echo "<tr><td>Address: </td><td>$add</td></tr>";
				echo "</table>";
				echo "<a href=\"javascript:window.print()\"><img src=\"print.jpg\" alt=\"print this page\" id=\"print-button\" height=\"42\" width=\"42\" /></a>";

				$flag=1;
			}
		}
		if(!empty($searchby)&&($flag==0))
		{
			if(!empty($searchbysex)&&!empty($searchbyage)&&!empty($searchbyaname)&&!empty($searchbybg))
			$result=mysqli_query($con,"select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage and p.Blood_Group LIKE '$searchbybg'");
			else if(!empty($searchbysex)&&!empty($searchbyage)&&!empty($searchbyaname))
			$result=mysqli_query($con,"select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage");
			else if(!empty($searchbysex)&&!empty($searchbybg)&&!empty($searchbyaname))
			$result=mysqli_query($con,"select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Gender LIKE '$searchbysex' and p.Blood_Group LIKE '$searchbybg'");
			else if(!empty($searchbysex)&&!empty($searchbyage)&&!empty($searchbybg))
			$result=mysqli_query($con,"select * from patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage and Blood_Group LIKE '$searchbybg'");
			else if(!empty($searchbyaname)&&!empty($searchbyage)&&!empty($searchbybg))
			$result=mysqli_query($con,"select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage and p.Blood_Group LIKE '$searchbybg'");
			else if(!empty($searchbysex)&&!empty($searchbybg))
			$result=mysqli_query($con,"select * from patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and Blood_Group LIKE '$searchbybg' ");
			else if(!empty($searchbysex)&&!empty($searchbyage))
			$result=mysqli_query($con,"select * from patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
			else if(!empty($searchbybg)&&!empty($searchbyage))
			$result=mysqli_query($con,"select * from patients where Name LIKE '%$searchby%' and Blood_Group LIKE '$searchbybg' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
			else if(!empty($searchbysex)&&!empty($searchbyaname))
			$result=mysqli_query($con,"select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Gender LIKE '$searchbysex' ");
			else if(!empty($searchbyage)&&!empty($searchbyaname))
			$result=mysqli_query($con,"select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and floor(DATEDIFF(CURDATE(),p.DOB)/365)=$searchbyage");
			else if(!empty($searchbyaname)&&!empty($searchbybg))
			$result=mysqli_query($con,"select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%' and p.Blood_Group LIKE '$searchbybg'");
			else if(!empty($searchbysex))
			$result=mysqli_query($con,"select * from patients where Name LIKE '%$searchby%' and Gender LIKE '$searchbysex' ");
			else if(!empty($searchbybg))
			$result=mysqli_query($con,"select * from patients where Name LIKE '%$searchby%' and Blood_Group LIKE '$searchbybg' ");
			else if(!empty($searchbyage))
			$result=mysqli_query($con,"select * from patients where Name LIKE '%$searchby%' and floor(DATEDIFF(CURDATE(),DOB)/365)=$searchbyage");
			else if(!empty($searchbyaname))
			$result=mysqli_query($con,"select p.Name,p.Patient_ID,p.Gender,p.Contact,p.DOB,p.Address,p.Blood_Group from patients p, accompanies a where p.Name LIKE '%$searchby%' and p.Patient_ID=a.Patient_ID and a.Name LIKE '%$searchbyaname%'");
			else $result=mysqli_query($con,"select * from patients where Name LIKE '%$searchby%'");
			if(!empty($result) && mysqli_num_rows($result)==1)
			{
				echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
				$row=mysqli_fetch_array($result);
				$name=$row['Name'];
				$eid=$row['Patient_ID'];
				
				$contact=$row['Contact'];
				$dob=$row['DOB'];
				$add=$row['Address'];
				$bg=$row['Blood_Group'];
				echo "<h3>Patient Details</h3>";
				echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
				echo "<tr><td width=5%>Name: </td><td width=50%>$name</td></tr>";
				echo "<tr><td>Patient ID: </td><td>$eid</td></tr>";
				echo "<tr><td>DOB: </td><td>$dob</td></tr>";
				echo "<tr><td>gender: </td><td>$gender</td></tr>";
				echo "<tr><td>BG: </td><td>$bg</td></tr>";
				echo "<tr><td>Contact: </td><td>$contact</td></tr>";
				echo "<tr><td>Address: </td><td>$add</td></tr>";
 				echo "</table>";
				$flag=1;
			}
			else if(!empty($result) && mysqli_num_rows($result)>1)
			{
				echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
				echo "<div style=\"width:900px; float:left;\">";
				for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
				{
					$row=mysqli_fetch_array($result);
					$name=$row['Name'];
					$eid=$row['Patient_ID'];
					$dob=$row['DOB'];
					echo "<div style=\"width:900px; float:left;\">";
					echo "<h3 align=\"left\"><a href=\"?pid=patient_details&id=$eid\">$name</a></h3>";
					echo "<p align=\"left\"><b>Patient ID:</b> $eid<br/><b>Date of Birth:</b> $dob</p>";
					echo "</div>";
				}
				echo "</div>";
				$flag=1;
			}
		}
		if($flag==0)
		echo "<i><b>No match found.</b></i>";
	}
}
else if(isset($_GET['pid'])&&(strcmp($_GET['pid'],"logout")==0))
{
	$username=$_COOKIE['username'];
	$sessionid=$_COOKIE['PHPSESSID'];
	if(mysqli_query($con,"select * from session where username='$username' and id='$sessionid'"))
	{
		$result=mysqli_query($con,"delete from session where username='$username'and id='$sessionid'");
		setcookie("username",$_POST['username'],time()-3600);
		unset($_SESSION['PHPSESSID']);
		header('Location: index.php');
	}
	echo "</div>";
}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_dept")==0)||(strcmp($_GET['pid'],"dept_details")==0)||(strcmp($_GET['pid'],"emp_details")==0)))
{
	if((strcmp($_GET['pid'],"view_dept")==0))
	{
		$result=mysqli_query($con,"select * from departments");
		echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
		echo "<div style=\"width:900px; float:left;\">";
		for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
		{
			$row=mysqli_fetch_array($result);
			$name=$row['Name'];
			$d_id=$row['Dept_No'];
			echo "<div style=\"width:900px; float:left;\">";
			echo "<h3 align=\"left\"><a href=\"?pid=dept_details&id=$d_id\">$name</a></h3>";
			echo "<p align=\"left\"><b>Department No.:</b> $d_id</p>";
			echo "</div>";
		}
		echo "</div>";
	}
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"create_report") == 0)
{
	echo "<h1>Add Report Details</h1>";
	echo "<form name=\"form\" method=\"post\" action=\"login.php?pid=create_report\">";
	echo "<table>";
	/*echo "<tr>";
	echo "<td><p>Date :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input  placeholder=\"yyyy-mm-dd\" type=\"text\" name=\"date\" size=\"15\" maxlength=\"15\" required/></p></td>";
	echo "</tr>";*/
	echo "<tr>";
	echo "<td><p>Patient ID: <input type=\"text\" name=\"PID\" size=\"15\" maxlength=\"15\" required/></p>";
	echo "</tr>";
	echo "<tr><td>Dept No.</td><td><select name=\"dept_no\">";
	$result=mysqli_query($con,"select * from departments");
	for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
	{
		$row=mysqli_fetch_array($result);
		$dept=$row['Dept_No'];
		echo "<option>$dept</option>";
	}
	echo "</select></td></tr><tr>";
	echo "<td><p align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Enter\" /></p>";
	echo "</tr>";
	echo "</form>";
	if(isset($_POST['PID'])&&isset($_POST['dept_no']))
	{
		//$date=$_POST['date'];
		$sel=mysqli_query($con,"SELECT curdate() date");
		$date=mysqli_fetch_array($sel);
		$date=$date['date'];
		$cal=mysqli_query($con,"SELECT max(Report_No) R FROM medical_report");
		$row=mysqli_fetch_array($cal);
		$val=$row['R'];
		$r_num="R".(substr($val,1)+1);
		$pid=$_POST['PID'];
		$dept_no=$_POST['dept_no'];
		$check = mysqli_query($con,"SELECT * FROM patients where Patient_ID='$pid'");
		//$check1 = mysqli_query($con,"SELECT * FROM medical_report where Patient_ID='$pid'");
		$row=mysqli_num_rows($check);
		//$row1=mysqli_num_rows($check1);
		if($row>0)
		{
			$query = "INSERT INTO medical_report SET Patient_ID='$pid', Report_No='$r_num', R_date='$date'";

			$add=mysqli_query($con,$query);
			$query1 = "INSERT INTO give_details SET Department_No='$dept_no', Report_No='$r_num'";
			$add1=mysqli_query($con,$query1);
			echo "<script type=\"text/javascript\">alert(\"Report No. $r_num has been added.\")</script>";

		}
		else
			echo "<script type=\"text/javascript\">alert(\"Invalid Patient ID.\")</script>";
	}
}
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"mod_report") == 0)
{
	echo "<h1>Add Report Details</h1>";
	echo "<form name=\"form\" method=\"post\" action=\"login.php?pid=mod_report\">";
	echo "<table>";
	echo "<tr>";
	echo "<td><p>Report No.: <input type=\"text\" name=\"R_num\" size=\"15\" maxlength=\"15\" required/></p>";
	echo "</tr>";
	echo "<tr><td><p>Dept number: <select name=\"dept\">";
	$result=mysqli_query($con,"select * from departments");
	for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
	{
		$row=mysqli_fetch_array($result);
		$dept=$row['Dept_No'];
		echo "<option>$dept</option>";
	}
	echo "</p></td></tr>";
	echo "<tr>";
	echo "<td><p>Room No.: <input type=\"text\" name=\"Room_num\" size=\"15\" maxlength=\"15\" /></p>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Diet:&nbsp &nbsp &nbsp &nbsp &nbsp <textarea type=\"text\" name=\"Diet\" rows=\"3\" cols=\"30\" maxlength=\"200\"></textarea></p>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Enter\" /></p>";
	echo "</tr>";
	echo "</form>";
	if(isset($_POST['R_num']))
	{
		$rnum=$_POST['R_num'];
		$dept=$_POST['dept'];
		$roomnum=$_POST['Room_num'];
		$diet=$_POST['Diet'];
		//echo $rnum;
		$check=mysqli_query($con,"SELECT * FROM give_details where Report_No='$rnum'");
		if(mysqli_num_rows($check)!=0)
		{
			mysqli_query($con,"UPDATE give_details SET Department_No='$dept' where Report_No='$rnum'");
			if(isset($roomnum)||isset($diet))
			{
				if(!strcmp($roomnum,"")&&!strcmp($diet,""))
				$query = "UPDATE medical_report SET Room_No='$roomnum',Diet='$diet' where Report_No='$rnum'";
				else if(!strcmp($diet,""))
				$query = "UPDATE medical_report SET Room_No='$roomnum' where Report_No='$rnum'";
				else if(!strcmp($roomnum,""))
				{
					$query = "UPDATE medical_report SET Diet='$diet' where Report_No='$rnum'";
					//echo $query;
				}
				$add=mysqli_query($query);
				//echo mysqli_affected_rows();
				echo "<script type=\"text/javascript\">alert(\"Data Updated.\")</script>";
			}
		}
		else
			echo "<script type=\"text/javascript\">alert(\"Report Number Not Found.\")</script>";
	}
}
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"add_date") == 0)
{
	echo "<h1>Add Closing Date</h1>";
	echo "<form name=\"form\" method=\"post\" action=\"login.php?pid=add_date\">";
	echo "<table>";
	echo "<tr>";
	echo "<td><p>Report No. :&nbsp &nbsp &nbsp &nbsp<input type=\"text\" name=\"num\" size=\"15\" maxlength=\"10\" required/></p></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Closing Date :&nbsp &nbsp &nbsp<input placeholder=\"yyyy-mm-dd\" type=\"text\" name=\"date\" size=\"15\" maxlength=\"15\" required/></p></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p align=\"center\" ><input type=\"submit\" name=\"submit\" value=\"Enter\" /></p>";
	echo "</tr>";
	echo "</form>";
	if(isset($_POST['date'])&&isset($_POST['num']))
	{
		$date=$_POST['date'];
		$rnum=$_POST['num'];
		$result=mysqli_query($con,"SELECT * FROM medical_report where Report_No='$rnum'");
		$row=mysqli_fetch_array($result);
		$rdate=$row['R_date'];
		if(strcmp($rdate,$date)>0)
			echo "<script type=\"text/javascript\">alert(\"Invalid Date.\")</script>";
		else
		{
			$query = "UPDATE medical_report SET C_date='$date' where Report_No='$rnum'";
			$add=mysqli_query($query);
			if(mysqli_affected_rows()==0)
				echo "<script type=\"text/javascript\">alert(\"Report Not Found.\")</script>";
			else
				echo "<script type=\"text/javascript\">alert(\"Data Updated.\")</script>";
		}
	}
}
else if(isset($_GET['option'])&&isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_report")==0))&&((strcmp($_GET['option'],"search_tools")==0)))
{
	echo "<table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=view_report&option=search_val\" method=\"post\">";
	echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_patient\" type=\"text\" size=50 placeholder=\"Search by Report-ID.\"></td>";
	echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\" title=\"Click here to start searching\"></td></tr>";
	echo "<div style=\"width:900px;\">";
	echo "<br/><table border=0 cellpadding=4 cellspacing=1 height=5>";
	echo "<tr><td><b>Filters: </b></td><td style=\"border-bottom: #FFFFFF\"><input name=\"id\" type=\"text\" size=10 placeholder=\"Patient-ID\"></td><td style=\"border-bottom: #FFFFFF\"><input name=\"date\" type=\"text\" size=10 placeholder=\"Report Date\"></td><td style=\"border-bottom: #FFFFFF\"><input name=\"allot_date\" type=\"text\" size=13 placeholder=\"Allotment Date\"></td><td style=\"border-bottom: #FFFFFF\"><input name=\"dis_date\" type=\"text\" size=13 placeholder=\"Discharge Date\"></td><td style=\"border-bottom: #FFFFFF\">";
	echo "</div>";
	echo "<a align=\"right\" href=\"javascript:window.print()\"><img src=\"print.jpg\" alt=\"print this page\" id=\"print-button\" height=\"42\" width=\"42\" align=\"right\"/></a>";

	echo "</form></table>";

}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"view_report")==0)||(strcmp($_GET['pid'],"patient_report")==0)))
{
	echo "<br/><table border=0 cellpadding=2 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=view_report&option=search_val\" method=\"post\">";
	echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_report\" type=\"text\" size=50 placeholder=\"Search by Report-ID.\"></td>";
	echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\" title=\"Click here to start searching\"></td></tr>";
	echo "</form></table>";
	if((strcmp($_GET['pid'],"patient_report")==0))
	{
		$searchby=$_GET['id'];
		$result=mysqli_query($con,"select * from medical_report where Report_No='$searchby'");
		echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
		$row=mysqli_fetch_array($result);
		$num=$row['Report_No'];
		$id=$row['Patient_ID'];
		$result2=mysqli_query($con,"select * from patients where Patient_ID='$id'");
		$result4=mysqli_query($con,"select * from diagnosis where Report_No='$num'");
		$dept=mysqli_query($con,"select * from departments d,give_details g where g.Report_No='$num' and g.Department_No=d.Dept_No");
		$deptrow=mysqli_fetch_array($dept);
		$deptname=$deptrow['Name'];
		$row2=mysqli_fetch_array($result2);
		//$dept=$row['Dept_No'];
		$name=$row2['Name'];
		$dob=$row2['DOB'];
		$gender=$row2['Gender'];
		$bg=$row2['Blood_Group'];
		$date=$row['R_date'];
		$cdate=$row['C_date'];
		$room=$row['Room_No'];
		$result3=mysqli_query($con,"select * from room where Room_No='$room'");
		$row3=mysqli_fetch_array($result3);
		$result5=mysqli_query($con,"select * from Room_Given where Patient_ID='$id'");
		$row5=mysqli_fetch_array($result5);
		//$allotdate=$row5['Allot_date'];
		//$disdate=$row5['Discharge_date'];
		//$roomtype=$row3['Type'];
		$diet=$row['Diet'];
		//$pay=$row['Payment'];

		$cost1=mysqli_query($con,"select b.Rent from medical_report a, room b where a.Patient_ID=b.Patient_ID and Report_No='$num'");
		$costrow1=mysqli_fetch_array($cost1);
		$days=mysqli_query($con,"select DATEDIFF('$disdate','$allotdate') as day;");
		$dayrow=mysqli_fetch_array($days);
		$days=$dayrow['day'];
		if($days==0)
		{
			$days=1;
		}
		$room_cost=$costrow1['Rent']*$days;

		$cost1=mysqli_query($con,"select b.Rent from medical_report a, vehicles b where a.Patient_ID=b.ID and Report_No='$num'");
		$costrow1=mysqli_fetch_array($cost1);
		$days1=mysqli_query($con,"select b.Allot_date,b.Return_date from medical_report a,vehicle_given b where a.Patient_ID=b.ID and Report_No='$num'");
		$days=mysqli_fetch_array($days1);
		$days=mysqli_query($con,"select datediff('$days[Return_date]','$days[Allot_date]') as day;");
		$dayrow=mysqli_fetch_array($days);
		$days=$dayrow['day'];
		if($days==0)
		{
			$days=1;
		}
		$veh_cost=$costrow1['Rent']*$days;
		/*echo $room_cost;
		echo "<br />";
		echo $veh_cost;*/



		echo "<a align=\"right\" href=\"javascript:window.print()\"><img src=\"print.jpg\" alt=\"print this page\" id=\"print-button\" height=\"42\" width=\"42\"/></a>";

		echo "<h3>Medical Report</h3>";

		echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
		echo "<tr><td width=5%>Report No: </td><td width=50%>$num</td></tr>";
		echo "<tr><td>Date: </td><td>$date</td></tr>";
		echo "<tr><td>Patient ID: </td><td>$id</td></tr>";
		echo "<tr><td>Patient Name: </td><td>$name</td></tr>";
		echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
		echo "<tr><td>Gender: </td><td>$gender</td></tr>";
		echo "<tr><td>Blood Group: </td><td>$bg</td></tr>";
		//echo "<tr><td>Department: </td><td>$deptname</td></tr>";
		//echo "<tr><td>Room Type: </td><td>$roomtype</td></tr>";
		//echo "<tr><td>Allotment Date: </td><td>$allotdate</td></tr>";
		//echo "<tr><td>Discharge Date: </td><td>$disdate</td></tr>";
		echo "<tr><td>Diagnosis: </td>";
		echo "<td><table border=\"2\">";
		//echo "<a align=\"right\" href=\"javascript:window.print()\"><img src=\"print.jpg\" alt=\"print this page\" id=\"print-button\" height=\"42\" width=\"42\" align=\"right\"/></a>";

		echo "<tr><th>Test Date</th><th>Test Name</th><th>Result</th><th>Cost</th></tr>";
		$total=$room_cost+$veh_cost;
		for($i=0;$i<mysqli_num_rows($result4);$i=$i+1)
		{
			$row4=mysqli_fetch_array($result4);
			$date=$row4['Test_date'];
			$name=$row4['Tests'];
			$res=$row4['T_result'];
			$cost=$row4['Cost'];
			$total=$total+$cost;
			echo "<tr><td>$date</td><td>$name</td><td>$res</td><td>$cost</td></tr>";
		}
		echo "</table>";
		echo "<tr><td>Diet: </td><td>$diet</td></tr>";
		echo "<tr><td>Payment: </td><td>$total</td></tr>";
		echo "<tr><td>Report Closing Date: </td><td>$cdate</td></tr>";
		echo "</table></td></tr>";
		$flag=1;
	}
	else if(isset($_GET['option'])&&strcmp($_GET['option'],"search_val")==0)
	{
		if(!empty($_POST['search_report']))
		$searchby=$_POST['search_report'];
		else $searchby='%';
		if(!empty($_POST['id']))
		$searchbyid=$_POST['id'];
		if(!empty($_POST['date']))
		$searchbydate=$_POST['date'];
		if(!empty($_POST['allot_date']))
		$searchbyallot=$_POST['allot_date'];
		if(!empty($_POST['dis_date']))
		$searchbydis=$_POST['dis_date'];
		$flag=0;
		if(!empty($searchby)&&(($searchby[0]=='R')||($searchby[0]=='r')))
		{
			$result=mysqli_query($con,"select * from medical_report where Report_No='$searchby'");
			if(!empty($result) && mysqli_num_rows($result)==1)
			{
				echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
				$row=mysqli_fetch_array($result);
				$num=$row['Report_No'];
				$id=$row['Patient_ID'];
				$result2=mysqli_query($con,"select * from patients where Patient_ID='$id'");
				$result4=mysqli_query($con,"select * from diagnosis where Report_No='$num'");
				$dept=mysqli_query($con,"select * from departments d,give_details g where g.Report_No='$num' and g.Department_No=d.Dept_No");
				$deptrow=mysqli_fetch_array($dept);
				$deptname=$deptrow['Name'];
				$row2=mysqli_fetch_array($result2);
				//$dept=$row['Dept_No'];
				$name=$row2['Name'];
				$dob=$row2['DOB'];
				$gender=$row2['Gender'];
				$bg=$row2['Blood_Group'];
				$date=$row['R_date'];
				$cdate=$row['C_date'];
				$room=$row['Room_No'];
				$result3=mysqli_query($con,"select * from room where Room_No='$room'");
				$row3=mysqli_fetch_array($result3);
				$result5=mysqli_query($con,"select * from Room_Given where Patient_ID='$id'");
				$row5=mysqli_fetch_array($result5);
				$allotdate=$row5['Allot_date'];
				$disdate=$row5['Discharge_date'];
				$roomtype=$row3['Type'];
				$diet=$row['Diet'];
				//$pay=$row['Payment'];
				$cost1=mysqli_query($con,"select b.Rent from medical_report a, room b where a.Patient_ID=b.Patient_ID and Report_No='$num'");
				$costrow1=mysqli_fetch_array($cost1);
				$days=mysqli_query($con,"select DATEDIFF('$disdate','$allotdate') as day;");
				$dayrow=mysqli_fetch_array($days);
				$days=$dayrow['day'];
				if($days==0)
				{
					$days=1;
				}
				$room_cost=$costrow1['Rent']*$days;

				$cost1=mysqli_query($con,"select b.Rent from medical_report a, vehicles b where a.Patient_ID=b.ID and Report_No='$num'");
				$costrow1=mysqli_fetch_array($cost1);
				$days1=mysqli_query($con,"select b.Allot_date,b.Return_date from medical_report a,vehicle_given b where a.Patient_ID=b.ID and Report_No='$num'");
				$days=mysqli_fetch_array($days1);
				$days=mysqli_query($con,"select datediff('$days[Return_date]','$days[Allot_date]') as day;");
				$dayrow=mysqli_fetch_array($days);
				$days=$dayrow['day'];
				if($days==0)
				{
					$days=1;
				}
				$veh_cost=$costrow1['Rent']*$days;
				/*echo $room_cost;
				echo "<br />";
				echo $veh_cost;*/

				echo "<h3>Medical Report</h3>";
				echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
				echo "<tr><td width=5%>Report No: </td><td width=50%>$num</td></tr>";
				echo "<tr><td>Date: </td><td>$date</td></tr>";
				echo "<tr><td>Patient ID: </td><td>$id</td></tr>";
				echo "<tr><td>Patient Name: </td><td>$name</td></tr>";
				echo "<tr><td>Date of Birth: </td><td>$dob</td></tr>";
				echo "<tr><td>Gender: </td><td>$gender</td></tr>";
				echo "<tr><td>Blood Group: </td><td>$bg</td></tr>";
				//echo "<tr><td>Department: </td><td>$deptname</td></tr>";
				//echo "<tr><td>Room No.: </td><td>$room</td></tr>";
				//echo "<tr><td>Room Type: </td><td>$roomtype</td></tr>";
				//echo "<tr><td>Allotment Date: </td><td>$allotdate</td></tr>";
				//echo "<tr><td>Discharge Date: </td><td>$disdate</td></tr>";
				echo "<tr><td>Diagnosis: </td>";
						echo "<a align=\"right\" href=\"javascript:window.print()\"><img src=\"print.jpg\" alt=\"print this page\" id=\"print-button\" height=\"42\" width=\"42\" align=\"right\"/></a>";

				echo "<td><table border=\"2\">";
				echo "<tr><th>Test Date</th><th>Test Name</th><th>Result</th><th>Cost</th></tr>";
				$total=$room_cost+$veh_cost;
				for($i=0;$i<mysqli_num_rows($result4);$i=$i+1)
				{
					$row4=mysqli_fetch_array($result4);
					$date=$row4['Test_date'];
					$name=$row4['Tests'];
					$res=$row4['T_result'];
					$cost=$row4['Cost'];
					$total=$total+$cost;
					echo "<tr><td>$date</td><td>$name</td><td>$res</td><td>$cost</td></tr>";
				}
				echo "</table>";
				echo "<tr><td>Diet: </td><td>$diet</td></tr>";
				echo "<tr><td>Payment: </td><td>$total</td></tr>";
				echo "<tr><td>Report Closing Date: </td><td>$cdate</td></tr>";
				echo "</table></td></tr>";
				$flag=1;
			}
			else
				echo "<script type=\"text/javascript\">alert(\"Data not found.\")</script>";

		}
		else
			echo "<script type=\"text/javascript\">alert(\"Invalid Entry.\")</script>";


	}

}

else if(isset($_GET['pid']) && strcmp($_GET['pid'],"del_report") == 0)
	{
		echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=del_report&option=search_val\" method=\"post\">";
		echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Enter Report-No or Patient name, Type to delete\"></td>";
		echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
		echo "</form></table>";
		if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
		{
			$search=$_POST['search_val'];
			if(isset($search[0])&&($search[0]=='R' || $search[0]=='r'))
			{
				$result=mysqli_query($con,"select * from medical_report where Report_No='$search'");
				if(mysqli_num_rows($result)==1)
				{
					$query=mysqli_query($con,"delete from medical_report where Report_No='$search'");
					echo "<script type=\"text/javascript\">alert(\"Medical report deleted.\")</script>";
				}
				else
				{
					echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
				}
			}
			else if(isset($search[0]))
			{
				$result=mysqli_query($con,"select * from patients where Name='$search'");
				if(mysqli_num_rows($result)==1)
				{
					$row=mysqli_fetch_array($result);
					$id=$row['Patient_ID'];
					$query=mysqli_query($con,"delete from medical_report where Patient_ID='$id'");
					if(mysqli_affected_rows()==0)
						echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
					else
						echo "<script type=\"text/javascript\">alert(\"Medical Report Deleted.\")</script>";
				}
				else if(mysqli_num_rows($result)>=1)
				{
					echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
					echo "<div style=\"width:900px; float:left;\">";
					echo "<h2 align=\"left\">Click the Patient-ID to delete !!!</h2>";
					for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
					{
						$val=mysqli_fetch_array($result);
						$id=$val['Patient_ID'];
						echo "<div style=\"width:900px; float:left;\">";
						echo "<h3 align=\"left\"><a href=\"?pid=del_report&id=$id\">$id</a></h3>";
						echo "</div>";
					}
				}

				else
				{
					echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
				}

			}
			else
				echo "<script type=\"text/javascript\">alert(\"Invalid Entry.\")</script>";
		}
		if(isset($_GET['id']))
		{
			$search=$_GET['id'];
			$query=mysqli_query($con,"delete from medical_report where Patient_ID='$search'");
			if(mysqli_affected_rows()==0)
				echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
			else
				echo "<script type=\"text/javascript\">alert(\"Medical Report Deleted.\")</script>";
		}
	}
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"view_test") == 0)
{
	echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=view_test&option=search_val\" method=\"post\">";
	echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Report Id.\"></td>";
	echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
	echo "</form></table>";
	if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
	{
		$searchby=$_POST['search_val'];

			if((isset($searchby[0]))&&($searchby[0]=='R' || $searchby[0]=='r'))
			{
				$result=mysqli_query($con,"select * from diagnosis where Report_No='$searchby'");
				if(!empty($result) && mysqli_num_rows($result)==1)
				{

					echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
					$row=mysqli_fetch_array($result);
					$date=$row['Test_date'];
					$test=$row['Tests'];
					$tresult=$row['T_result'];
					$cost=$row['Cost'];
					$result1=mysqli_query($con,"select * from medical_report where Report_No='$searchby'");
					$row1=mysqli_fetch_array($result1);
					$id=$row1['Patient_ID'];
					$result2=mysqli_query($con,"select * from Patients where Patient_ID='$id'");
					$row2=mysqli_fetch_array($result2);
					$name=$row2['Name'];
					echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
					echo "<h3>Diagnosis Details</h3>";
					echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
					echo "<tr><td width=5%>Test Date: </td><td width=50%>$date</td></tr>";
					echo "<tr><td>Patient ID : </td><td>$id</td></tr>";
					echo "<tr><td>Patient Name : </td><td>$name</td></tr>";
					echo "<tr><td>Test : </td><td>$test</td></tr>";
					echo "<tr><td>Test Result: </td><td>$tresult</td></tr>";
					echo "<tr><td>Cost: </td><td>$cost</td></tr>";
					echo "</table>";
				}
				else if(!empty($result) && mysqli_num_rows($result) > 1)
				{
					echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
					echo "<div style=\"width:900px; float:left;\">";
					for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
					{
						$row=mysqli_fetch_array($result);
						$name=$row['Tests'];
						$date=$row['Test_date'];
						$rnum=$row['Report_No'];
						echo "<div style=\"width:900px; float:left;\">";
						echo "<h3 align=\"left\"><a href=\"?pid=tests_details&test=$name&date=$date&rnum=$rnum\">$name</a></h3>";
						echo "<p align=\"left\"><b>Test Date:</b> $date<br/><b>Report No.:</b> $rnum</p>";
						echo "</div>";
					}
					echo "</div>";
				}

				else
				{
					echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
				}
			}

		else
			echo "<script type=\"text/javascript\">alert(\"Invalid Entry.\")</script>";
	}
}
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"tests_details") == 0)
{
	$name=$_GET['test'];
	$date=$_GET['date'];
	$rnum=$_GET['rnum'];
	$result=mysqli_query($con,"select * from diagnosis where Report_No='$rnum' and Test_date='$date' and Tests='$name'");
	$row=mysqli_fetch_array($result);
	$tresult=$row['T_result'];
	$cost=$row['Cost'];
	$result1=mysqli_query($con,"select * from medical_report where Report_No='$rnum'");
	$row1=mysqli_fetch_array($result1);
	$id=$row1['Patient_ID'];
	$result2=mysqli_query($con,"select * from Patients where Patient_ID='$id'");
	$row2=mysqli_fetch_array($result2);
	$pname=$row2['Name'];
	echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
	echo "<h3>Diagnosis Details</h3>";
	echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;border-collapse: collapse;\">";
	echo "<tr><td width=5%>Test Date: </td><td width=50%>$date</td></tr>";
	echo "<tr><td>Patient ID : </td><td>$id</td></tr>";
	echo "<tr><td>Patient Name : </td><td>$pname</td></tr>";
	echo "<tr><td>Test : </td><td>$name</td></tr>";
	echo "<tr><td>Test Result: </td><td>$tresult</td></tr>";
	echo "<tr><td>Cost: </td><td>$cost</td></tr>";
	echo "</table>";
}
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"add_test") == 0)
{

	echo "<h1>Add Test Details</h1>";
	echo "<form name=\"form\" method=\"post\" action=\"login.php?pid=add_test\">";
	echo "<table>";
	echo "<tr>";
	echo "<td><p>Date :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input placeholder=\"yyyy-mm-dd\" type=\"text\" name=\"date\" size=\"15\" maxlength=\"15\" required/></p></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Test Name : <select name=\"test\"><option>CT Scan</option><option>Blood Test</option><option>Sugar Test</option><option>Dope Test</option><option>S6ZDMT</option></SELECT></p></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Result : &nbsp &nbsp &nbsp <input type=\"text\" name=\"result\" size=\"25\" maxlength=\50\" /></p></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Report No.: <input type=\"text\" name=\"R_num\" size=\"15\" maxlength=\"15\" required/></p>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Cost: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type=\"text\" name=\"cost\" size=\"15\" maxlength=\"15\" required/></p>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Enter\" /></p>";
	echo "</tr>";
	echo "</form>";
	if(isset($_POST['date'])&&isset($_POST['test'])&&isset($_POST['R_num'])&&isset($_POST['cost']))
	{
		$date=$_POST['date'];
		$name=$_POST['test'];
		$result=$_POST['result'];
		$r_num=$_POST['R_num'];
		$cost=$_POST['cost'];
		$check = mysqli_query($con,"SELECT * FROM medical_report where Report_No='$r_num'");
		$row=mysqli_fetch_array($check);
		$rdate=$row['R_date'];
		if(strcmp($rdate,$date)>0)
		{
			echo "<script type=\"text/javascript\">alert(\"Invalid Date.\")</script>";
		}
		else
		{
			if($row>0)
			{
				$query = "INSERT INTO diagnosis SET Test_date='$date', Tests='$name', T_result='$result', Report_No='$r_num', Cost='$cost'";
				$add=mysqli_query($query);
				echo "<script type=\"text/javascript\">alert(\"Data Added.\")</script>";

			}
			else
				echo "<script type=\"text/javascript\">alert(\"Invalid Report Number.\")</script>";
		}
	}
}
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"add_result") == 0)
{

	echo "<h1>Add Test Result</h1>";
	echo "<form name=\"form\" method=\"post\" action=\"login.php?pid=add_result\">";
	echo "<table>";
	echo "<tr>";
	echo "<td><p>Date :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input placeholder=\"yyyy-mm-dd\" type=\"text\" name=\"date\" size=\"15\" maxlength=\"15\" required/></p></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Test Name : <select name=\"test\"><option>CT Scan</option><option>Blood Test</option><option>Sugar Test</option><option>Dope Test</option><option>S6ZDMT</option></SELECT></p></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Result : &nbsp &nbsp &nbsp <input type=\"text\" name=\"result\" size=\"25\" maxlength=\50\" required/></p></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p>Report No.: <input type=\"text\" name=\"R_num\" size=\"15\" maxlength=\"15\" required/></p>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><p align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Enter\" /></p>";
	echo "</tr>";
	echo "</form>";
	if(isset($_POST['date'])&&isset($_POST['test'])&&isset($_POST['R_num'])&&isset($_POST['result']))
	{
		$date=$_POST['date'];
		$name=$_POST['test'];
		$result=$_POST['result'];
		$r_num=$_POST['R_num'];
		$query = "UPDATE diagnosis SET T_result='$result' where Test_date='$date' and Tests='$name' and Report_No='$r_num'";
		$add=mysqli_query($query);
		if(mysqli_affected_rows()==0)
			echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
		else
			echo "<script type=\"text/javascript\">alert(\"Data Updated.\")</script>";
	}
}
else if(isset($_GET['pid']) && strcmp($_GET['pid'],"del_test") == 0)
	{
		echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=del_test&option=search_val\" method=\"post\">";
		echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Enter Report-No, Type to delete\"></td>";
		echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
		echo "</form></table>";
		if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
		{
			$search=$_POST['search_val'];
				$result=mysqli_query($con,"select * from diagnosis where Report_No='$search'");
				if(mysqli_num_rows($result)==1)
				{
					$query=mysqli_query($con,"delete from medical_report where Report_No='$search'");
					if(mysqli_affected_rows()==0)
						echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
					else
						echo "<script type=\"text/javascript\">alert(\"Medical Test Deleted.\")</script>";
				}
				else if(mysqli_num_rows($result)>1)
				{
					echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
					echo "<div style=\"width:900px; float:left;\">";
					echo "<h2 align=\"left\">Click the test to delete !!!</h2>";
					for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
					{
						$val=mysqli_fetch_array($result);
						$id=$val['Report_No'];
						$name=$val['Tests'];
						$date=$val['Test_date'];
						$rnum=$val['Report_No'];
						echo "<div style=\"width:900px; float:left;\">";
						echo "<h3 align=\"left\"><a href=\"?pid=del_test&id=$name&date=$date&rnum=$rnum\">$name</a></h3>";
						echo "<p align=\"left\"><b>Test Date:</b> $date</p>";
						echo "</div>";
					}
				}

				else
				{
					echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
				}

		}
		if(isset($_GET['id'])&&isset($_GET['date'])&&isset($_GET['rnum']))
		{
			$search=$_GET['id'];
			$search1=$_GET['date'];
			$search2=$_GET['rnum'];
			$query=mysqli_query($con,"delete from diagnosis where Tests='$search' and Test_date='$search1' and Report_No='$search2'");
			if(mysqli_affected_rows()==0)
				echo "<script type=\"text/javascript\">alert(\"Data Not Found.\")</script>";
			else
				echo "<script type=\"text/javascript\">alert(\"Medical Test Deleted.\")</script>";
		}
	}
else if(isset($_GET['pid'])&&((strcmp($_GET['pid'],"add_accompanies")==0)))
{
	if(isset($_GET['option'])&&(strcmp($_GET['option'],"insert")==0))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		if(isset($_POST['contact']))
		$contact=$_POST['contact'];
		else $contact="NULL";
		$gender=$_POST['gender'];
		$rel=$_POST['rel'];
		$id=$_POST['id'];
		mysqli_query($con,"insert into accompanies values (\"$id\", \"$name\", \"$address\", \"$dob\", \"$contact\", \"$gender\", \"$rel\")");
		header('Location: ?pid=view_accompanies');
	}
	else
	{
		echo "<div style=\"width:900px; float:left;\"><h1 align=\"left\">Registeration</h1>";
		echo "<table border=0 cellpadding=0 cellspacing=2 align=\"left\"><form action=\"login.php?pid=add_accompanies&option=insert\" method=\"post\">";
		echo "<tr><td><h4>Patient ID: </h4></td><td><input name=\"id\" type=\"text\" size=50 placeholder=\"Patient-ID\"></td></tr>";
		echo "<tr><td><h4>Name: </h4></td><td><input name=\"name\" type=\"text\" size=50 placeholder=\"Accompanies's Name\"></td></tr>";
		echo "<tr><td><h4>Address: </h4></td><td><input name=\"address\" type=\"text\" size=50 placeholder=\"Accompanies's Address\"></td></tr>";
		echo "<tr><td><h4>Date of Brith: </h4></td><td><input name=\"dob\" type=\"text\" size=50 placeholder=\"YYYY-MM-DD\"></td></tr>";
		echo "<tr><td><h4>Contact: </h4></td><td><input name=\"contact\" type=\"text\" size=50 placeholder=\"Phone Number\"></td></tr>";
		echo "<tr><td><h4>Gender: </h4></td><td><select name=\"gender\"><option>Male</option><option>Female</option></select></td></tr>";
		echo "<tr><td><h4>Relationship: </h4></td><td><input name=\"rel\" type=\"text\" size=50 placeholder=\"Relationship\"></td></tr>";
		echo "<tr><td><input type=\"submit\" value=\"Submit\" id=\"wdth2\"></td></tr>";
		echo "</form></table>";
		echo "</div>";
	}
}
//KNS starts
if(isset($_GET['pid']))
		{
			if(isset($_GET['pid']) && strcmp($_GET['pid'],"search_vehicle") == 0)
			{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=search_vehicle&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Reg Id.\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
				{
					$search=$_POST['search_val'];

					if(!empty($search) && ($search[0]=='V' || $search[0]=='v'))
					{

						$result=mysqli_query($con,"select * from vehicles where Reg_No='$search'");

						if(mysqli_num_rows($result)==1)
						{
							echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
							$val=mysqli_fetch_array($result);
							$reg=$val['Reg_No'];
							$type=$val['Type'];
							$dop=$val['DOP'];
							$model=$val['MODEL'];
							$cost=$val['Rent'];

							echo " <h3> Vehicle Details </h3> ";
							echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
							echo "<tr><td width=5%>Reg No: </td><td width=50%>$reg</td></tr>";
							echo "<tr><td>Type: </td><td>$type</td></tr>";
							echo "<p align=\"left\"><tr><td>Date of Purchase: </td><td>$dop</td></tr>";
							echo "<tr><td>Model: </td><td>$model</td></tr>";
							echo "<tr><td>Rent: </td><td>$cost</td></tr>";
							echo "</table>";
						}

						else
						{
							echo "<br/> <br/>";
							echo "<script type=\"text/javascript\">alert(\"Value not found\") </script>";
						}

					}

					else if(!empty($search) && ($search[0]!='V' || $search[0]!='v'))
					{
						$result=mysqli_query($con,"select * from vehicles where Type='$search'");

						if(mysqli_num_rows($result)==1)
						{
							echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
							$val=mysqli_fetch_array($result);
							$reg=$val['Reg_No'];
							$type=$val['Type'];
							$dop=$val['DOP'];
							$model=$val['MODEL'];
							$cost=$val['Rent'];

							echo " <h3> Vehicle Details </h3> ";
							echo " <br/><br/>0";
							echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
							echo "<tr><td width=5%>Reg No: </td><td width=50%>$reg</td></tr>";
							echo "<tr><td>Type: </td><td>$type</td></tr>";
							echo "<p align=\"left\"><tr><td>Date of Purchase: </td><td>$dop</td></tr>";
							echo "<tr><td>Model: </td><td>$model</td></tr>";
							echo "<tr><td>Rent: </td><td>$cost</td></tr>";
							echo "</table>";
						}

						else if(mysqli_num_rows($result)>1)
						{
							echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
							echo "<div style=\"width:900px; float:left;\">";

							for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
							{
								$val=mysqli_fetch_array($result);
								$reg=$val['Reg_No'];
								$type=$val['Type'];
								echo "<div style=\"width:900px; float:left;\">";
								echo "<h3 align=\"left\"><a href=\"?pid=vehicle_details&id=$reg\">$reg</a></h3>";
								echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
								echo "</div>";
							}
						}

						else
						{
							echo "<br/> <br/>";
							echo "<script type=\"text/javascript\">alert(\"Value not found\") </script>";
						}
					}

				}
			}
				if(isset($_GET['pid']) && strcmp($_GET['pid'],"vehicle_details") == 0)
			{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=search_vehicle&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Reg Id.\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				$search=$_GET['id'];
				$result=mysqli_query($con,"select * from vehicles where Reg_No='$search'");

				echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
				$val=mysqli_fetch_array($result);
				$reg=$val['Reg_No'];
				$type=$val['Type'];
				$dop=$val['DOP'];
				$model=$val['MODEL'];
				$cost=$val['Rent'];

				echo " <h3> Vehicle Details </h3> ";
				echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
				echo "<tr><td width=5%>Reg No: </td><td width=50%>$reg</td></tr>";
				echo "<tr><td>Type: </td><td>$type</td></tr>";
				echo "<p align=\"left\"><tr><td>Date of Purchase: </td><td>$dop</td></tr>";
				echo "<tr><td>Model: </td><td>$model</td></tr>";
				echo "<tr><td>Rent: </td><td>$cost</td></tr>";
				echo "</table>";
			}

			if(isset($_GET['pid']) && strcmp($_GET['pid'],"add_vehicle") == 0)
			{
				echo "<br/> <br/>";
				echo " <h1> Add Vehicle </h1>";
				echo "<br/> <br/> <br/>";
				echo "<table border=0 cellpadding=1 cellspacing=5 style=\"margin:-150px 700px 0px -3px;\">";
				echo " <form action=\"#\" method=POST>";
				//echo " <tr><td>Registration Id: </td><td><input type=\"text\" name=\"Reg_No\" required></tr></td><br/><br/>";
				echo " <tr><td>Type: </td><td><select name=\"drop\"><option value=\"Ambulance\" required>Ambulance</option><option value=\"Taxi\">Taxi</option> </select></td></tr><br/><br/>";
				//echo " <tr><td>Date of purchase:</td><td> <input type=\"text\" name=\"DOP\" required placeholder=\"YYYY-MM-DD\"></td><td></td></tr><br/><br/>";
				echo " <tr><td>Model: </td><td><input type=\"text\" name=\"Model\" required></td></tr><br/><br/><br/>";
				echo " <tr><td><input type=\"submit\" name=\"submit\"></submit></td></tr>";
				echo " </table></form> ";

				/*$con = mysqli_connect("localhost","root","","HMS");
				if(!$con)
				{
					echo " Connection Failed";
				}
			//	mysqli_select_db("HMS", $con);

				/*if(isset($_POST['reg']))
				{
					$temp=$_POST['reg'];
					echo $temp;
				}*/

				if(isset($_POST['drop']))
				{
					$type=$_POST['drop'];

					if($type=="Ambulance")
					{
						$cost=200.00;

						if(isset($_POST['Model']) )
						{

							$sel=mysqli_query($con,"select curdate() date");
							$DOP=mysqli_fetch_array($sel);
							$DOP=$DOP['date'];

							$model=$_POST['Model'];

							$result=mysqli_query($con,"select max(Reg_No) R from vehicles");
							$val=mysqli_fetch_array($result);
							//echo $val;
							$test=$val['R'];
							$reg="V".(substr($test,1)+1);

							/*$test=strval($val);
							$reg="V".$test;
							*/
							/*echo $reg;
							echo $type;
							echo $DOP;
							echo $model;*/

							$query="INSERT INTO vehicles SET Type=\"Ambulance\",Reg_No='$reg',DOP='$DOP',Model='$model',ID=NULL,Rent=200";
							$result=mysqli_query($query);

							echo "<script type=\"text/javascript\">alert(\"Vehicle No. $reg has been added.\")</script>";

							//$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
							/*if(isset ($query))
								$sql=mysqli_query($query,$con);*/
						}
					}

					if($type=="Taxi")
					{
						if(isset($_POST['Model']) )
						{

							//$DOP=$_POST['DOP'];
							$model=$_POST['Model'];

							$sel=mysqli_query($con,"select curdate() date");
							$DOP=mysqli_fetch_array($sel);
							$DOP=$DOP['date'];
							/*$result=mysqli_query($con,"select * from vehicles");
							$val=mysqli_num_rows($result);*/
							//echo $val;

							$result=mysqli_query($con,"select max(Reg_No) R from vehicles");
							$val=mysqli_fetch_array($result);
							//echo $val;
							$test=$val['R'];
							$reg="V".(substr($test,1)+1);

							/*$val=$val+1;
							$test=strval($val);
							$reg="V".$test;
							*/
							/*echo $reg;
							echo $type;
							echo $DOP;
							echo $model;*/

							$query="INSERT INTO vehicles SET Type=\"Taxi\",Reg_No='$reg',DOP='$DOP',Model='$model',ID=NULL,Rent=500";
							$result=mysqli_query($query);

							echo "<script type=\"text/javascript\">alert(\"Vehicle Added\") </script>";

							//$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
							/*if(isset ($query))
								$sql=mysqli_query($query,$con);*/
						}
					}
				}
			}

			if(isset($_GET['pid']) && strcmp($_GET['pid'],"discard_vehicle") == 0)
			{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=discard_vehicle&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Enter Reg-No, Type to delete\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
				{
					$search=$_POST['search_val'];

					if(!empty($search) &&($search[0]=='V' || $search[0]=='v'))
					{

						$result=mysqli_query($con,"select * from vehicles where Reg_No='$search'");

						if(mysqli_num_rows($result)==1)
						{
							$query=mysqli_query($con,"delete from vehicles where Reg_No='$search'");
							echo "<br/><br/><br/>";
							echo "<script type=\"text/javascript\">alert(\"Vehicle discarded\") </script>";

						}

						else
						{
							echo "<br/> <br/>";
							echo "<script type=\"text/javascript\">alert(\"Vehicle not found\") </script>";
						}
					}

					else if(!empty($search) &&($search[0]!='V' || $search[0]!='v'))
					{
						$result=mysqli_query($con,"select * from vehicles where Type='$search'");

						if(mysqli_num_rows($result)==1)
						{
							$query=mysqli_query($con,"delete from vehicles where Type='$search'");
							echo "<br/><br/><br/>";
							echo "<script type=\"text/javascript\">alert(\"Vehicle discarded\") </script>";
						}

						else if(mysqli_num_rows($result)>=1)
						{
							echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
							echo "<div style=\"width:900px; float:left;\">";

							for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
							{
								$val=mysqli_fetch_array($result);
								$reg=$val['Reg_No'];
								$type=$val['Type'];
								echo "<div style=\"width:900px; float:left;\">";
								echo "<h3 align=\"left\"><a href=\"?pid=discard_vehicle&id=$reg\">$reg</a></h3>";
								echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
								echo "</div>";
							}
						}

						else
						{
							echo "<br/> <br/>";
							echo "<script type=\"text/javascript\">alert(\"Vehicle not found\") </script>";
						}

					}

					else
						echo "<script type=\"text/javascript\">alert(\"Please enter value\") </script>";
				}
			}

			if(isset($_GET['pid']) && strcmp($_GET['pid'],"discard_vehicle") == 0)
			{
				if(isset($_GET['id']))
				{
					$search=$_GET['id'];
					$result=mysqli_query($con,"select * from vehicles where Reg_No='$search'");
					//echo $search;
					$query=mysqli_query($con,"delete from vehicles where Reg_No='$search'");
					echo "<br/><br/><br/>";
					echo "<script type=\"text/javascript\">alert(\"Vehicle discarded\") </script>";
				}
			}

			else if(isset($_GET['pid']) && strcmp($_GET['pid'],"search_room") == 0)
			{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=search_room&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Room Id.\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
				{
					$search=$_POST['search_val'];

					if(!empty($search) && ($search[0]=='Z' || $search[0]=='z'))
					{

						$result=mysqli_query($con,"select * from room where Room_No='$search'");

						if(mysqli_num_rows($result)==1)
						{
							echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
							$val=mysqli_fetch_array($result);
							$reg=$val['Room_No'];
							$type=$val['Type'];
							$ext=$val['Extension'];
							$cost=$val['Rent'];

							echo " <h3> Room Details </h3> ";
							echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
							echo "<tr><td width=5%>Room No: </td><td width=50%>$reg</td></tr>";
							echo "<tr><td>Type: </td><td>$type</td></tr>";
							echo "<p align=\"left\"><tr><td>Extension: </td><td>$ext</td></tr>";
							echo "<tr><td>Rent: </td><td>$cost</td></tr>";
							echo "</table>";
						}

						else
						{
							echo "<br/> <br/>";
							echo "<script type=\"text/javascript\">alert(\"Room not found\") </script>";
						}
					}

					else if(!empty($search) && ($search[0]!='Z' || $search[0]!='z'))
					{
						$result=mysqli_query($con,"select * from Room where Type='$search'");

						if(mysqli_num_rows($result)==1)
						{
							echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
							$val=mysqli_fetch_array($result);
							$reg=$val['Room_No'];
							$type=$val['Type'];
							$ext=$val['Extension'];
							$cost=$val['Rent'];

							echo " <h3> Room Details </h3> ";
							echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
							echo "<tr><td width=5%>Room No: </td><td width=50%>$reg</td></tr>";
							echo "<tr><td>Type: </td><td>$type</td></tr>";
							echo "<p align=\"left\"><tr><td>Extension: </td><td>$ext</td></tr>";
							echo "<tr><td>Rent: </td><td>$cost</td></tr>";
							echo "</table>";

						}

						else if(mysqli_num_rows($result)>=1)
						{
							echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
							echo "<div style=\"width:900px; float:left;\">";

							for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
							{
								$val=mysqli_fetch_array($result);
								$reg=$val['Room_No'];
								$type=$val['Type'];
								echo "<div style=\"width:900px; float:left;\">";
								echo "<h3 align=\"left\"><a href=\"?pid=room_details&id=$reg\">$reg</a></h3>";
								echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
								echo "</div>";
							}
						}

						else
						{
							echo "<br/> <br/>";
							echo "<script type=\"text/javascript\">alert(\"Room not found\") </script>";
						}
					}

					else
						echo "<script type=\"text/javascript\">alert(\"Please enter value\") </script>";
				}
			}

			if(isset($_GET['pid']) && strcmp($_GET['pid'],"add_room") == 0)
			{
				echo "<br/> <br/>";
				echo " <h1> Add Room </h1>";
				echo "<br/> <br/> <br/><br/><br/><br/><br/><br/><br/> ";
				echo "<table border=0 cellpadding=1 cellspacing=5 style=\"margin:-150px 700px 0px -3px;\">";
				echo " <form action=\"#\" method=POST>";
				//echo "<tr><td> Room Id:</td><td> <input type=\"text\" name=\"Room_No\" required><br/><br/> </td></tr>";
				echo " <tr><td>Type: </td><td><select name=\"drop\"><option value=\"Gen\">General</option><option value=\"pri\">Private</option><option value=\"icu\">ICU</option> </select></td></tr><br/><br/>";
				echo "<tr><td> Extension: </td><td><input type=\"text\" name=\"ext\" required><br/><br/> </td></tr>";
				echo "<tr><td> <input type=\"submit\" name=\"submit\"></submit> </td></tr>";
				echo "</table> </form> ";

				/*$con = mysqli_connect("localhost","root","","HMS");
				if(!$con)
				{
					echo " Connection Failed";
				}
			//	mysqli_select_db("HMS", $con);

				/*if(isset($_POST['reg']))
				{
					$temp=$_POST['reg'];
					echo $temp;
				}*/

				$flag=1;

				if(isset($_POST['drop']) && isset($_POST['ext']) ) //
				{
					$ext=$_POST['ext'];
					$check=mysqli_query($con,"select * from room where Extension='$ext'");
					if(mysqli_num_rows($check)>=1)
					{
						//echo "check";
						$flag=0;
					}
					$type=$_POST['drop'];

					if($type=="Gen")
					{
						$cost=2500.00;

						if(isset($_POST['ext']) && $flag==1)
						{

							$ext=$_POST['ext'];

							/*echo $reg;
							echo $type;
							echo $DOP;
							echo $model;*/

							$result=mysqli_query($con,"select * from room");
							$val=mysqli_num_rows($result);

							$result=mysqli_query($con,"select max(Room_No) R from room");
							$val=mysqli_fetch_array($result);
							//echo $val;
							$test=$val['R'];
							$room="Z".(substr($test,1)+1);

							$query="INSERT INTO room SET Room_No='$room',Type=\"Gen\",Extension='$ext',Rent=2500,Patient_ID=null";
							$result=mysqli_query($query);

							echo "<script type=\"text/javascript\">alert(\"Room No. $room has been added.\")</script>";

							//$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
							/*if(isset ($query))
								$sql=mysqli_query($query,$con);*/

							//echo $val;


							/*echo $reg;
							echo $type;
							echo $DOP;
							echo $model;*/

							//$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
							/*if(isset ($query))
								$sql=mysqli_query($query,$con);*/

						}
					}

					if($type=="pri" && $flag==1)
					{
						$cost=5000.00;

						if(isset($_POST['ext']))
						{

							$ext=$_POST['ext'];

							/*echo $reg;
							echo $type;
							echo $DOP;
							echo $model;*/

							$result=mysqli_query($con,"select * from room");
							$val=mysqli_num_rows($result);

							$result=mysqli_query($con,"select max(Room_No) R from room");
							$val=mysqli_fetch_array($result);
							//echo $val;
							$test=$val['R'];
							$room="Z".(substr($test,1)+1);

							$query="INSERT INTO room SET Room_No='$room',Type=\"PRI\",Extension='$ext',Rent=2500,Patient_ID=null";
							$result=mysqli_query($query);

							echo "<script type=\"text/javascript\">alert(\"Room Added\") </script>";

							//$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
							/*if(isset ($query))
								$sql=mysqli_query($query,$con);*/

							//echo $val;


							/*echo $reg;
							echo $type;
							echo $DOP;
							echo $model;*/

							//$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
							/*if(isset ($query))
								$sql=mysqli_query($query,$con);*/
						}
					}

					if($type=="icu" && $flag==1)
					{
						$cost=2500.00;

						if(isset($_POST['ext']))
						{

							$ext=$_POST['ext'];

							/*echo $reg;
							echo $type;
							echo $DOP;
							echo $model;*/

							$result=mysqli_query($con,"select * from room");
							$val=mysqli_num_rows($result);

							$result=mysqli_query($con,"select max(Room_No) R from room");
							$val=mysqli_fetch_array($result);
							//echo $val;
							$test=$val['R'];
							$room="Z".(substr($test,1)+1);

							$query="INSERT INTO room SET Room_No='$room',Type=\"ICU\",Extension='$ext',Rent=2500,Patient_ID=null";
							$result=mysqli_query($query);

							echo "<script type=\"text/javascript\">alert(\"Room Added\") </script>";

							//$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
							/*if(isset ($query))
								$sql=mysqli_query($query,$con);*/

							//echo $val;


							/*echo $reg;
							echo $type;
							echo $DOP;
							echo $model;*/

							//$query = "INSERT INTO Medicinecategory(BatchNo,Name,Category) VALUES ('$_POST[Batchno]','$_POST[Name]','$_POST[Category]')";
							/*if(isset ($query))
								$sql=mysqli_query($query,$con);*/
						}
					}

					if($flag==0)
					{
						echo "<script type=\"text/javascript\">alert(\"Extension already in use!\") </script>";
					}
				}



			}
			if(isset($_GET['pid']) && strcmp($_GET['pid'],"room_details") == 0)
			{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=search_room&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Reg Id.\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				$search=$_GET['id'];
				$result=mysqli_query($con,"select * from room where Room_No='$search'");

				echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
				$val=mysqli_fetch_array($result);
				$reg=$val['Room_No'];
				$type=$val['Type'];
				$ext=$val['Extension'];

				echo " <h3> Room Details </h3> ";
				echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
				echo "<tr><td width=5%>Room No: </td><td width=50%>$reg</td></tr>";
				echo "<tr><td>Type: </td><td>$type</td></tr>";
				echo "<p align=\"left\"><tr><td>Extension: </td><td>$ext</td></tr>";
				echo "</table>";
			}
			if(isset($_GET['pid']) && strcmp($_GET['pid'],"discard_room") == 0)
			{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=discard_room&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Enter Room-No, Type to delete\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
				{
					$search=$_POST['search_val'];

					if(!empty($search) && ($search[0]=='Z' || $search[0]=='z'))
					{

						$result=mysqli_query($con,"select * from room where Room_No='$search'");

						if(mysqli_num_rows($result)==1)
						{
							$query=mysqli_query($con,"delete from room where Room_No='$search'");
							echo "hello";
							echo "<br/><br/><br/>";
							echo "<script type=\"text/javascript\">alert(\"Room Discarded\") </script>";
						}

						else
						{
							echo "<br/> <br/>";
							echo "<script type=\"text/javascript\">alert(\"Invalid Entry\") </script>";
						}
					}

					else if(!empty($search) && ($search[0]!='Z' || $search[0]!='z'))
					{
						$result=mysqli_query($con,"select * from room where Type='$search'");

						if(mysqli_num_rows($result)==1)
						{
							$query=mysqli_query($con,"delete from room where Type='$search'");
							echo "<br/><br/><br/>";
							echo "<script type=\"text/javascript\">alert(\"Room discarded\") </script>";
						}

						else if(mysqli_num_rows($result)>=1)
						{
							echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
							echo "<div style=\"width:900px; float:left;\">";

							for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
							{
								$val=mysqli_fetch_array($result);
								$reg=$val['Room_No'];
								$type=$val['Type'];
								echo "<div style=\"width:900px; float:left;\">";
								echo "<h3 align=\"left\"><a href=\"?pid=discard_room&id=$reg\">$reg</a></h3>";
								echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
								echo "</div>";
							}
						}

						else
						{
							echo "<br/> <br/>";
							echo "<script type=\"text/javascript\">alert(\"Invalid Entry\") </script>";
						}
					}

					else
						echo "<script type=\"text/javascript\">alert(\"Please enter value\") </script>";
				}
			}
			if(isset($_GET['pid']) && strcmp($_GET['pid'],"discard_room") == 0)
			{
				if(isset($_GET['id']))
				{
					$search=$_GET['id'];
					$result=mysqli_query($con,"select * from room where Room_No='$search'");
					//echo $search;
					$query=mysqli_query($con,"delete from room where Room_No='$search'");
					echo "<br/><br/><br/>";
					echo "<script type=\"text/javascript\">alert(\"Room Discarded\") </script>";
				}
			}

	if(isset($_GET['pid']) && strcmp($_GET['pid'],"alloted_vehicle") == 0)
{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=alloted_vehicle&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Enter Reg-No, Type.\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
				{
					$search=$_POST['search_val'];

					if((!empty($search)) && ($search[0]=='V' || $search[0]=='v'))
					{
						$find=mysqli_query($con,"select * from vehicles where Reg_No='$search'");

						if(mysqli_num_rows($find)==0)
							echo "<script type=\"text/javascript\">alert(\"Vehicle not found!\") </script>";

						else
						{
							$result=mysqli_query($con,"select * from vehicle_given where Reg_No='$search'");

							if(mysqli_num_rows($result)==0)
							{
								echo "<script type=\"text/javascript\">alert(\"Vehicle not alloted!\") </script>";
							}

							else
							{
								if((!empty($result) && mysqli_num_rows($result)==1))
								{
									echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
									$val=mysqli_fetch_array($result);
									$reg=$val['Reg_No'];
									$id=$val['ID'];
									$ad=$val['Allot_date'];
									$rd=$val['Return_date'];
									$rent=mysqli_query($con,"select Rent from vehicles where Reg_No='$search'");
									$cost=mysqli_fetch_array($rent);
									$price=$cost['Rent'];

									echo " <h3> Vehicle Allotment History</h3> ";
									echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
									echo "<tr><td width=5%>Reg No: </td><td width=50%>$reg</td></tr>";
									echo "<tr><td>Used by: </td><td>$id</td></tr>";
									echo "<p align=\"left\"><tr><td>Allotment Room: </td><td>$ad</td></tr>";
									echo "<tr><td>Return Date: </td><td>$rd</td></tr>";
									echo "<tr><td>Rent: </td><td>$price</td></tr>";
									echo "</table>";
								}

								else if(!empty($result) && (mysqli_num_rows($result)>1))
								{
									echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
									echo "<div style=\"width:900px; float:left;\">";

									echo " <h3> Select any vehicle</h3> ";

									for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
									{
										$val=mysqli_fetch_array($result);
										$reg=$val['Reg_No'];
										$id=$val['ID'];
										$ad=$val['Allot_date'];
										$rd=$val['Return_date'];

										echo "<div style=\"width:900px; float:left;\">";
										echo "<h3 align=\"left\"><a href=\"?pid=vehicle_al&reg=$reg&id=$id&ad=$ad&rd=$rd\">$reg</a></h3>";
										//echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
										echo "</div>";
									}
								}
							}
						}
					}


					else if((!empty($search)) && ($search[0]!='V' || $search[0]!='v'))
					{
						$find=mysqli_query($con,"select * from vehicles where Type='$search'");

						if(mysqli_num_rows($find)==0)
							echo "<script type=\"text/javascript\">alert(\"Vehicle not found!\") </script>";

						else
						{
							$result=mysqli_query($con,"select b.Reg_No,b.ID,b.Allot_date,b.Return_date from vehicles a,vehicle_given b where a.Type='$search' and a.Reg_No=b.Reg_No");

							if(mysqli_num_rows($result)==0)
							{
								echo "<script type=\"text/javascript\">alert(\"Vehicle not alloted!\") </script>";
							}

							else
							{
								if((!empty($result) && mysqli_num_rows($result)==1))
								{
									echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
									$val=mysqli_fetch_array($result);
									$reg=$val['Reg_No'];
									$id=$val['ID'];
									$ad=$val['Allot_date'];
									$rd=$val['Return_date'];
									$rent=mysqli_query($con,"select Rent from vehicles where Type='$search'");
									$cost=mysqli_fetch_array($rent);
									$price=$cost['Rent'];

									echo " <h3> Vehicle Allotment History</h3> ";
									echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
									echo "<tr><td width=5%>Reg No: </td><td width=50%>$reg</td></tr>";
									echo "<tr><td>Used by: </td><td>$id</td></tr>";
									echo "<p align=\"left\"><tr><td>Allotment Date: </td><td>$ad</td></tr>";
									echo "<tr><td>Return Date: </td><td>$rd</td></tr>";
									echo "<tr><td>Rent: </td><td>$price</td></tr>";
									echo "</table>";
								}


								else if(!empty($result) && (mysqli_num_rows($result)>1))
								{
									echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
									echo "<div style=\"width:900px; float:left;\">";

									echo " <h3> Select any vehicle</h3> ";

									for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
									{
										$val=mysqli_fetch_array($result);
										$reg=$val['Reg_No'];
										$id=$val['ID'];
										$ad=$val['Allot_date'];
										$rd=$val['Return_date'];

										echo "<div style=\"width:900px; float:left;\">";
										echo "<h3 align=\"left\"><a href=\"?pid=vehicle_al&reg=$reg&id=$id&ad=$ad&rd=$rd\">$reg</a></h3>";
										//echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
										echo "</div>";
									}
								}
							}
						}
					}

					else
						echo "<script type=\"text/javascript\">alert(\"Enter Value!\") </script>";
				}
			}

			if(isset($_GET['pid']) && strcmp($_GET['pid'],"vehicle_al") == 0)
			{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=alloted_vehicle&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Reg Id.\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				if(isset($_GET['id']) && isset($_GET['reg']) && isset($_GET['ad']) || isset($_GET['rd']) )
				{
					$search=$_GET['reg'];
					//$result=mysqli_query($con,"select * from vehicle_given where Reg_No='$search'");
					echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
					//$val=mysqli_fetch_array($result);

				//	$reg=$val['Reg_No'];
					$id=$_GET['id'];
					$reg=$_GET['reg'];
					$ad=$_GET['ad'];
					$rd=$_GET['rd'];

					$rent=mysqli_query($con,"select Rent from vehicles where Reg_No='$search'");
					$cost=mysqli_fetch_array($rent);
					$price=$cost['Rent'];

					echo " <h3> Vehicle Allotment History</h3> ";
					echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
					echo "<tr><td width=5%>Reg No: </td><td width=50%>$reg</td></tr>";
					echo "<tr><td>Used by: </td><td>$id</td></tr>";
					echo "<p align=\"left\"><tr><td>Allotment Date: </td><td>$ad</td></tr>";
					echo "<tr><td>Return Date: </td><td>$rd</td></tr>";
					echo "<tr><td>Rent: </td><td>$price</td></tr>";
					echo "</table>";
				}
			}

/*Room allotment */

			if(isset($_GET['pid']) && strcmp($_GET['pid'],"alloted_room") == 0)
			{
				echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=alloted_room&option=search_val\" method=\"post\">";
				echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Room Id.\"></td>";
				echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
				echo "</form></table>";

				if(isset($_GET['option']) && strcmp($_GET['option'],"search_val")==0)
				{
					$search=$_POST['search_val'];

					if((!empty($search)) && ($search[0]=='Z' || $search[0]=='z'))
					{
						$find=mysqli_query($con,"select * from room where Room_No='$search'");

						if(mysqli_num_rows($find)==0)
							echo "<script type=\"text/javascript\">alert(\"Room not found!\") </script>";

						else
						{
							$result=mysqli_query($con,"select * from room_given where Room_No='$search'");

							if(mysqli_num_rows($result)==0)
							{
								echo "<script type=\"text/javascript\">alert(\"Room not alloted!\") </script>";
							}

							else
							{
								if((!empty($result) && mysqli_num_rows($result)==1))
								{
									echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
									$val=mysqli_fetch_array($result);
									$room=$val['Room_No'];
									$id=$val['Patient_ID'];
									$ad=$val['Allot_date'];
									$rd=$val['Discharge_date'];
									$rent=mysqli_query($con,"select Rent from room where Room_No='$search'");
									$price=mysqli_fetch_array($rent);
									$cost=$price['Rent'];

									echo " <h3> Room Allotment History</h3> ";
									echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
									echo "<tr><td width=5%>Room No: </td><td width=50%>$room</td></tr>";
									echo "<tr><td>Patient Id: </td><td>$id</td></tr>";
									echo "<p align=\"left\"><tr><td>Allotment Date: </td><td>$ad</td></tr>";
									echo "<tr><td>Discharge Date: </td><td>$rd</td></tr>";
									echo "<tr><td>Rent: </td><td>$cost</td></tr>";
									echo "</table>";
								}

								else if(!empty($result) && (mysqli_num_rows($result)>1))
								{
									echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
									echo "<div style=\"width:900px; float:left;\">";

									for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
									{
										$val=mysqli_fetch_array($result);
										$room=$val['Room_No'];
										$id=$val['Patient_ID'];
										$ad=$val['Allot_date'];
										$rd=$val['Discharge_date'];

										echo "<div style=\"width:900px; float:left;\">";
										echo "<h3 align=\"left\"><a href=\"?pid=room_al&id=$id&room=$room&ad=$ad&rd=$rd\">$room</a></h3>";										echo "<div style=\"width:900px; float:left;\">";
										//echo "<h3 align=\"left\"><a href=\"?pid=room_al&id=$reg\">$reg</a></h3>";
										//echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
										echo "</div>";
									}
								}
							}
						}
					}

					else if((!empty($search)) && ($search[0]!='Z' || $search[0]!='z'))
					{
						$find=mysqli_query($con,"select * from room where Type='$search'");

						if(mysqli_num_rows($find)==0)
							echo "<script type=\"text/javascript\">alert(\"Room not found!\") </script>";

						else
						{
							$result=mysqli_query($con,"select * from room a,room_given b where a.Type='$search' and a.Room_No=b.Room_No");
							//echo mysqli_num_rows($result);

							if(mysqli_num_rows($result)==0)
							{
								echo "<script type=\"text/javascript\">alert(\"Room not alloted!\") </script>";
							}

							else
							{
								if((!empty($result) && mysqli_num_rows($result)==1))
								{
									echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
									$val=mysqli_fetch_array($result);
									$room=$val['Room_No'];
									$id=$val['Patient_ID'];
									$ad=$val['Allot_date'];
									$rd=$val['Discharge_date'];
									$rent=mysqli_query($con,"select Rent from room where Room_No='$search'");
									$price=mysqli_fetch_array($rent);
									$cost=$price['Rent'];


									echo " <h3> Room Allotment History</h3> ";
									echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
									echo "<tr><td width=5%>Room No: </td><td width=50%>$room</td></tr>";
									echo "<tr><td>Patient Id: </td><td>$id</td></tr>";
									echo "<p align=\"left\"><tr><td>Allotment Date: </td><td>$ad</td></tr>";
									echo "<tr><td>Discharge Date: </td><td>$rd</td></tr>";
									echo "<tr><td>Rent: </td><td>$cost</td></tr>";
									echo "</table>";
								}

								else if(!empty($result) && (mysqli_num_rows($result)>1))
								{
									echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
									echo "<div style=\"width:900px; float:left;\">";

									echo " <h3> Select any room</h3> ";

									for($i=0;$i<mysqli_num_rows($result);$i=$i+1)
									{
										$val=mysqli_fetch_array($result);
										$room=$val['Room_No'];
										$id=$val['Patient_ID'];
										$ad=$val['Allot_date'];
										$rd=$val['Discharge_date'];

										echo "<div style=\"width:900px; float:left;\">";
										echo "<h3 align=\"left\"><a href=\"?pid=room_al&id=$id&room=$room&ad=$ad&rd=$rd\">$reg</a></h3>";
										//echo "<p align=\"left\"><b>Type:</b> $type<br/> ";
										echo "</div>";
									}
								}
							}
						}
					}


					else
						echo "<script type=\"text/javascript\">alert(\"Enter Value!\") </script>";
				}

				/* Room allotment finished */
			}
			if(isset($_GET['pid']) && strcmp($_GET['pid'],"room_al") == 0)
				{
					echo "<br/><table border=0 cellpadding=1 cellspacing=1 height=5 style=\"\"><form action=\"login.php?pid=alloted_room&option=search_val\" method=\"post\">";
					echo "<tr><td style=\"border-bottom: #FFFFFF\"><input name=\"search_val\" type=\"text\" size=50 placeholder=\"Search by Type, Room Id.\"></td>";
					echo "<td style=\"border-bottom: #FFFFFF\"><input type=\"image\" name=\"commit\" value=\"submit\" src=\"images/search_button.gif\" style=\"height:30px\"></td></tr>";
					echo "</form></table>";

					if(isset($_GET['id']) && isset($_GET['room']) && isset($_GET['ad']) || isset($_GET['rd']) )
					{
						$search=$_GET['room'];
						//$result=mysqli_query($con,"select * from vehicle_given where Reg_No='$search'");
						echo "<div><link rel=\"stylesheet\" href=\"css/style01.css\">";
						//$val=mysqli_fetch_array($result);

					//	$reg=$val['Reg_No'];
						$id=$_GET['id'];
						$room=$_GET['room'];
						$ad=$_GET['ad'];
						$rd=$_GET['rd'];

						$rent=mysqli_query($con,"select Rent from room where Room_No='$search'");
						$cost=mysqli_fetch_array($rent);
						$price=$cost['Rent'];

						echo " <h3> Room Allotment History</h3> ";
						echo "<table border=0 cellpadding=1 cellspacing=0 style=\"margin:5px 0px 0px -3px;\">";
						echo "<tr><td width=5%>Reg No: </td><td width=50%>$room</td></tr>";
						echo "<tr><td>Used by: </td><td>$id</td></tr>";
						echo "<p align=\"left\"><tr><td>Allotment Date: </td><td>$ad</td></tr>";
						echo "<tr><td>Return Date: </td><td>$rd</td></tr>";
						echo "<tr><td>Rent: </td><td>$price</td></tr>";
						echo "</table>";
					}
				}

}
}

?>
</div>
</center>
</body>

</html>
