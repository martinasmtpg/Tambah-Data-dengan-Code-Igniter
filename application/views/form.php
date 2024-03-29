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
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
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
	<h1>Tambah Data Barang</h1>

	<div id="body">
		<form method="post">
			<table>
				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td><input type="text" name="nama_barang"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type="text" name="harga_barang"></td>
				</tr>
				<tr>
					<td>Jenis Barang</td>
					<td>:</td>
					<td><input type="radio" name="jenis_barang" value="elektronik">Elektronik&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="jenis_barang" value="alat mandi">Alat Mandi&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="jenis_barang" value="aksesoris">Aksesoris</td>
				</tr>
				<tr>
					<td>Pembayaran</td>
					<td>:</td>
					<td>
						<table>
							<tr>
								<td>
									<input type="checkbox" name="pembayaran[]" value="cash">Cash<br>
									<input type="checkbox" name="pembayaran[]" value="kredit">Kredit<br>
								</td>
								<td>
									<input type="checkbox" name="pembayaran[]" value="cod">COD<br>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
		</form>
	</div>
</div>

</body>
</html>