<?php include 'header.php'; ?>

<style type="text/css">
	body{
		font-size: 12.5px;
		/*font-weight: bold;*/
	}
</style>

<body>

<div class="container" style="margin-top: 25px;">
	
	<form class="form" id="inputForm" action="" method="POST">
		<table id="input" width="1132" border="0" cellspacing="5" cellpadding="5" class="none">
		  <tr>
		    <td width="72" rowspan="3">
			    <div align="center">
				    <button type="button" class="btn btn-default" id="btn_send" style="height:100px; width:80px">
					    <span class="glyphicon glyphicon-envelope" style="color: #337ab7; font-size: 18px; padding-bottom: 10px;"></span><br>
					    Send
				    </button>
			    </div>
		    </td>
		    <td width="81"><div align="right" style="padding-right: 10px;">To:</div></td>
		    <td width="683"><input class="form-control input-sm" type="text" name="to" id="to" /></td>
		    <td width="120"><div align="right" style="padding-right: 10px;">Report Type:</div></td>
		    <td width="126">
			    <select class="form-control input-sm" name="report_type" id="report_type">
			       <option value="inspection">Inspection</option>
		  	       <option value="incident">Incident</option>
			    </select>
		    </td>
		  </tr>
		  <tr>
		    <td><div align="right" style="padding-right: 10px;">Cc:</div></td>
		    <td><input class="form-control input-sm" type="text" name="cc" id="cc" /></td>
		    <td><div align="right" style="padding-right: 10px;">Pictures:</div></td>
		    <td>
			    <select class="form-control input-sm" name="attachment" id="attachment">
			      <option value="1">1</option>
			      <option value="4">4</option>
		  	      <option value="7">7</option>
		  	      <option value="10">10</option>
		  	      <option value="13">13</option>
		  	      <option value="16">16</option>
		  	      <option value="19">19</option>
		  	      <option value="22">22</option>
		  	      <option value="24">24</option>
			    </select>
		    </td>
		  </tr>
		  <tr>
		    <td height="26"><div align="right" style="padding-right: 10px;">Subject:</div></td>
		    <td><input class="form-control input-sm" type="text" name="subject" id="subject" /></td>
		  </tr>
		</table>
	</form>
	

	<div id="status" style="padding: 10px 0px 10px 0px; "></div>

	<hr>

	<table id="myTable" class="table table-bordered table-hover table-striped" cellspacing="0" width="100%">
		<thead align="center">
			<tr>
				<th class="success">&nbsp;</th>
				<th class="success">ID</th>
				<th class="success">DIVISION</th>
				<th class="success">DATE</th>
				<th class="success">COMPANY</th>
				<th class="success">FACILITY</th>
				<th class="success">LOCATION</th>
				<th class="success">REPORT</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	
	<hr>
	<div class="row">
	    <div class="col-lg-12">
	        <ul class="nav nav-pills nav-justified">
	            <li><a href="#"><span>© 2016 JEFFREY B. BALMES</span></a></li>
	            <!-- <li><a href="#">Terms of Service</a></li> -->
	            <!-- <li><a href="#">Privacy</a></li> -->
	        </ul>
	    </div>
	</div>

</div>

</body>
</html>




