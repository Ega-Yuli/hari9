<?php
	include "controller/kalkulator.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Pertemuan Ke-9</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" scr="assets/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<!--CSS baru-->
<style type="text/css">
.media {
	overflow: hidden;
	color: afff;
	background color: blue; /* Falback value */

.huruf-besar{
	color: Yellow;
}

}
</style>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="#">Navbar</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="#">Link</a>
     			</li>
      			<li class="nav-item dropdown">
        			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="#">Action</a>
          					<a class="dropdown-item" href="#">Another action</a>
          					<div class="dropdown-divider"></div>
          						<a class="dropdown-item" href="#">Something else here</a>
        				</div>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      			</li>
   			 </ul>
    			<form class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    			</form>
  		</div>
	</nav>

<!-- finish navbar -->
<br> <!-- Spasi antara navbar dan content --> <br>
<!-- START CONTENT -->

<div class="container" style="padding-top: 40px;">
	<!-- deklarasi Variabel -->
	<?php
		$nama   ="Budi";
		$no_telp  ="083103552882";

	?>
	<!-- Finish Variabel -->

	<h1>Nama&nbsp;&nbsp;&nbsp; <?php echo $nama; ?></h1>
	<h1>Alamat&nbsp;&nbsp; <?php echo $alamat; ?></h1>

<br><br>
<hr>

	<?php
		$bilA =10;
		$bilB =7;
		$hasil =0;
		if (penjumlahn($bilA, $bilB)<=15) {
			$hasil="Nilai penjumlahan sedikit";
		}else{
			$hasil=penjumlahan($bilA, $bilB);
		}

	?>

	<h2>Nilai Bil. Pertama&nbsp; <? =$bilA; ?></h2>
	<h2>Nilai Bil. Kedua&nbsp; <? =$bilB; ?></h2>
	<h2>Hasil Penjumlahan&nbsp; <? =$bilA;, $
		bilB); ?></h2>

<!-- start form -->
	<form action="detail.php" method="post">
  		<div class="form-group">
    		<<br><br>
    		<hr>
    		<label for="exampleFormContolInput">Nama Lengkap</label>
    		<input type="text" class="form-control" id="exampleFormContolInput" name="nama" value="<?= $nama; ?>">
  		</div>

  		<div class="form-group">
    		<label for="exampleFormContolInput">Alamat</label>
    		<input type="text" class="form-control" id="exampleFormContolInput" name="alamat" value="<? $alamat; ?>">
  		</div>
  		
  			<button type="submit" class="btn btn-success">Simpan</button>

	</form>
<!-- FINISH FORM -->
<br><!-- Spasi antara form dengan tabel --><br>
<!-- Start Table -->

	<table class="table table-bordered table-dark">
	  <thead>
	    <tr>
	      <th width="15%">No</th>
	      <th width="20%">Nama</th>
	      <th width="20%">Kelas</th>
	      <th width="20%">Email</th>
	      <th width="25%">Alamat</th>
	    </tr>

	  </thead>
	  	<tbody>
	    	<tr>
	      		<td>1</td>
	      		<td>Nidya</td>
	      		<td>Jarkom 2</td>
	      		<td>Nindya@gmail.com</td>
	      		<td>Bangka Belitung</td>

		    </tr>
	    	<tr>
	      		<td>2</td>
	      		<td>Arinda</td>
	      		<td>Jarkom 2</td>
	      		<td>Arinda@gmail.com</td>
	      		<td>Riau</td>
	    	</tr>

	  </tbody>
	</table>

</div>

<!-- Finish Table -->


<br><!-- Spasi antara form dengan tabel --><br>


<!-- FINISH CONTENT -->



</body>
</html>