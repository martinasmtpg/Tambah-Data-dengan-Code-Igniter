<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tambah Data</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		font-family: sans-serif;
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	table {
		font-family: Arial, Helvetica, sans-serif;
		color: #666;
		text-shadow: 1px 1px 0px #fff;
		background: #eaebec;
		border: #ccc 1px solid;
	}

	table th {
		padding: 15px 35px;
		border-left:1px solid #e0e0e0;
		border-bottom: 1px solid #e0e0e0;
		background: #ededed;
	}
	
	table th:first-child{  
		border-left:none;
	}
	
	table tr {
		text-align: center;
		padding-left: 20px;
	}
	
	table td:first-child {
		text-align: left;
		padding-left: 20px;
		border-left: 0;
	}
 
	table td {
		padding: 15px 35px;
		border-top: 1px solid #ffffff;
		border-bottom: 1px solid #e0e0e0;
		border-left: 1px solid #e0e0e0;
		background: #fafafa;
		background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
		background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
	}
 
	table tr:last-child td {
		border-bottom: 0;
	}
 
	table tr:last-child td:first-child {
		-moz-border-radius-bottomleft: 3px;
		-webkit-border-bottom-left-radius: 3px;
		border-bottom-left-radius: 3px;
	}
 
	table tr:last-child td:last-child {
		-moz-border-radius-bottomright: 3px;
		-webkit-border-bottom-right-radius: 3px;
		border-bottom-right-radius: 3px;
	}
 
	table tr:hover td {
		background: #f2f2f2;
		background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
		background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Data Barang</h1>
	
	<div id="body">
			<table border=1 style="width:500px;">
				<tr>
					<th>No</th>
					<th>Nama Barang</th>
					<th>Jenis Barang</th>
					<th>Harga Barang</th>
					<th>Pembayaran</th>
				</tr>
				<?php 
					$i = 1;
					foreach($data as $row) : 
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row->nama_barang; ?></td>
					<td><?php echo $row->jenis_barang; ?></td>
					<td><?php echo $row->harga_barang; ?></td>
					<td><?php echo $row->pembayaran; ?></td>
				</tr>
				<?php
					$i++;
					endforeach;
				?>
			</table>
	</div>
	
	

	<p class="footer"><h1><a href="<?php echo base_url('tambahbarang/add'); ?>"><p align = "center">Tambah data barang</p></a></h1></p>
</div>

</body>
</html>