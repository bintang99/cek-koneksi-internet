<?php
	function cek_internet(){
		$connected= @fsockopen("www.google.com", 80); // meminta akses ke domain
		if($connected){
			$is_conn = true; // jika terhubung beernilai true
			fclose($connected);
		}else{
			$is_conn = false; //jika tidak terhubung bernilai false
		}
		return $is_conn;
	}
?>

<?php 
	if(cek_internet()== true){
		?>
		<div style="padding:20px; background:#bfffda">
			<h2>Koneksi Internet Tersambung</h2>
		</div>
	<?php }else{?>
		<div style="padding:20px; background:#ff5a5a">
			<h2>Koneksi Internet Tersambung</h2>
		</div>
	<?php }
?>
