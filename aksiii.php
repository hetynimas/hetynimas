<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Diri</title>

	<style>
body {
		
			background-image:url('dinus.jpg')}
			h1 {
			color:white;
			text-align:center;
			}
			p {
			font-family: verdana;
			font-size: 20px;
			}	
			
	</style>
	
	
    <style>
     body { padding-top: 5rem; }
      .starter-template { padding: 3rem 1.5rem; text-align: center; }
    </style>
    
    <link href="css/bootstrap.css" rel="stylesheet"/>

  </head>

    <main role="main" class="container">
     
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning text-white"><b>Form Data Pembeli</b></div>
             
              <div class="card-body">
                <p class="card-text">
                  lengkapi form data anda,untuk mempermudah pengiriman
                  </p>
				  <!-- Start Data Diri-->
				 
	  <table border="0">
	 
<tr>
<th colspan="2">Form Data Pembeli</th>
</tr>

<tr>
<td class="title" colspan="2">NAMA</td>
<td>        :<?php echo $_POST['nama'];?></td>
</tr>

<tr>
<td class="title" colspan="2">ALAMAT</td>
<td>        :<?php echo $_POST['alamat'];?></td>
</tr>

<tr>
<td class="title" colspan="2">NOMOR HANDPHONE</td>
<td>        :<?php echo $_POST['nohp'];?></td>
</tr>

<tr>
<td class="title"  colspan="2">NOMOR KODE YANG DIPESAN</td>
<td>        :<?php echo $_POST['nomorkodeyangdipesan'];?></td>
</tr>

<tr>
<td class="title" colspan="2">PROVINSI DAN KOTA</td>
<td>        :<?php echo $_POST['provinsikotaa'];?></td>
</tr>

<tr>
<td class="title" colspan="2">KODE POS</td>
<td>        :<?php echo $_POST['kodeposasal'];?></td>
</tr>


<tr>
<td class="title" colspan="2">JENIS PRODUK TUPPERWARE YANG DIPESAN</td>
<td>      :<?php echo $_POST['jenisproduktupperwareyangdipesan'];?></td>
</tr>

<tr>
<td class="title" colspan="2">JUMLAH BARANG YANG DIPESAN</td>
<td>      :<?php echo $_POST['JUMLAHBARANGYANGDIPESAN'];?></td>
</tr>

<tr>
<td class="title" colspan="2">RINCIAN TRANSFER BANK</td>
<td>      :<?php echo $_POST['rinciantransfer'];?></td>
</tr>



</table>
 <br/>
<small><i><center><?php echo "Di Input Pada: " . date("d-m-Y h:i:sA"); ?></center></i></small>
 
<!-- End Data Diri-->

    </main><!-- /.container -->    
    <script src="./jquery.min.js" type="text/javascript"/>
    <script src="./js/bootstrap.js" type="text/javascript"/>
  </body>

</html>