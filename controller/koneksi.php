<? php
	$server ="localhost";
	$user	="root"
	$password ="";
	$nama_db ="registrasi";

	$db=mysqli_connect($server, $user, $password, $registrasi);

	if (mysqli_connect_errno()){
		echo "Koneksi database gagal :" . mysqli_connect_error(
			);
	}else{
		echo "Database berhasil tersambung.";
	}

?>