<html>
<head>
<meta charset="UTF-8">
<title>php</title>
 
<script>


function tampilkan(){
 
  var $coba=document.getElementById("form1").select1.value;
  var p_kontainer=document.getElementById("container");
 
  if ($list=="smp")
    {
        p_kontainer.innerHTML="smp";
    }
  else if ($list=="sma")
    {
        p_kontainer.innerHTML="sma";
    }
  else if ($list=="smk")
    {
        p_kontainer.innerHTML="smk";
    }
}

</script>
</head>
<body>
<h2>Menampilkan Hasil Form </h2>
 
<form id="form1" name="form1" method="post" action="">

  <p>
    <select id="select1" name="select1">
      <option value="SMP">SMP</option>
      <option value="SMA">SMA</option>
      <option value="SMK">SMK</option>
    </select>
    <input type="submit" value="Tampilkan">
  </p>
  <p><br>
  </form>
    <?php
//
		$list = [
    [
        'SMP 01 Malang'        =>
        [
            'alamat' => 'Jl Mawar No 01',
            'tlp'    => '0341998822',
        ],
        'SMA 01 Malang'        =>
        [
            'alamat' => 'Jl SMA 01 No 41',
            'tlp'    => '0341872819',
        ],
        'SMA 02 Malang'        =>
        [
            'alamat' => 'Jl SMA 03 No 4',
            'tlp'    => '0341872819',
        ],
        'SMA 03 Malang'        =>
        [
            'alamat' => 'Jl SMA 04 No 1',
            'tlp'    => '0341872819',
            'siswa'  => [
                [
                    'nis'       => 'sma3001',
                    'nama'      => 'Muhammad',
                    'tgl_lahir' => '18 Januari 1996',
                ],
                [
                    'nis'       => 'sma3002',
                    'nama'      => 'Inayah',
                    'tgl_lahir' => '24 Januari 1994',
                ],
            ],
        ],
        'SMA 04 Malang'        =>
        [
            'alamat' => 'Jl SMA 04 No 3',
            'tlp'    => '0341872819',
            'siswa'  => [
                [
                    'nis'       => 'sma4001',
                    'nama'      => 'sutejo',
                    'tgl_lahir' => '18 Januari 1994',
                ],
                [
                    'nis'       => 'sma4002',
                    'nama'      => 'sutijan',
                    'tgl_lahir' => '24 Januari 1998',
                ],
            ],
        ],
        'SMA 05 Malang'        =>
        [
            'alamat' => 'Jl SMA 05 No 5',
            'tlp'    => '0341872819',
        ],
        'SMA 06 Malang'        =>
        [
            'alamat' => 'Jl SMA 06 No 8',
            'tlp'    => '0341872819',
        ],
        'SMA 07 Malang'        =>
        [
            'alamat' => 'Jl SMA 07 No 81',
            'tlp'    => '0341872819',
        ],
        'SMA 08 Malang'        =>
        [
            'alamat' => 'Jl SMA 08 No 11',
            'tlp'    => '0341872819',
        ],
        'SMA 09 Malang'        =>
        [
            'alamat' => 'Jl SMA 09 No 121',
            'tlp'    => '0341872819',
        ],
        'SMA 10 Malang'        =>
        [
            'alamat' => 'Jl SMA 10 No 451',
            'tlp'    => '0341872819',
        ],
        'SMK 01 Malang'        =>
        [
            'alamat' => 'Jl SMA 01 No 21',
            'tlp'    => '0341928192',
        ],
        'SMK 01 Malang'        =>
        [
            'alamat' => 'Jl SMK 01 No 11',
            'tlp'    => '0341928192',
        ],
        'SMK 02 Malang'        =>
        [
            'alamat' => 'Jl SMK 02 No 31',
            'tlp'    => '0341928192',
        ],
        'SMK 03 Malang'        =>
        [
            'alamat' => 'Jl SMK 03 No 21',
            'tlp'    => '0341928192',
        ],
        'SMK 04 Malang'        =>
        [
            'alamat' => 'Jl Panjaitan No 21',
            'tlp'    => '0341928192',
        ],
        'SMK 05 Malang'        =>
        [
            'alamat' => 'Jl Panjaitan No 21',
            'tlp'    => '0341928192',
            'siswa'  => [
                [
                    'nis'       => 'smk5001',
                    'nama'      => 'rani',
                    'tgl_lahir' => '18 Januari 1994',
                ],
                [
                    'nis'       => 'smk5002',
                    'nama'      => 'rahayu',
                    'tgl_lahir' => '24 Januari 1998',
                ],
            ],
        ],
        'SMK 06 Malang'        =>
        [
            'alamat' => 'Jl Panjaitan No 21',
            'tlp'    => '0341928192',
            'siswa'  => [
                [
                    'nis'       => 'smk6001',
                    'nama'      => 'sutejo',
                    'tgl_lahir' => '18 Januari 1994',
                ],
                [
                    'nis'       => 'smk6002',
                    'nama'      => 'sutijan',
                    'tgl_lahir' => '24 Januari 1998',
                ],
            ],
        ],
        'SMK Kesehatan Malang' =>
        [
            'alamat' => 'Jl Dr Soetomo No 25',
            'tlp'    => '0341587212',
        ],
        'SMP 02 Malang'        =>
        [
            'alamat' => 'Jl SMP 02 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 03 Malang'        =>
        [
            'alamat' => 'Jl SMP 03 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 04 Malang'        =>
        [
            'alamat' => 'Jl SMP 04 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 05 Malang'        =>
        [
            'alamat' => 'Jl SMP 05 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 06 Malang'        =>
        [
            'alamat' => 'Jl SMP 06 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 07 Malang'        =>
        [
            'alamat' => 'Jl SMP 07 No 25',
            'tlp'    => '034192812',
            'siswa'  => [
                [
                    'nis'       => 'smp7001',
                    'nama'      => 'Lala',
                    'tgl_lahir' => '18 Januari 1998',
                ],
                [
                    'nis'       => 'smp7002',
                    'nama'      => 'Luluk',
                    'tgl_lahir' => '24 Juli 1997',
                ],
            ],
        ],
        'SMP 08 Malang'        =>
        [
            'alamat' => 'Jl SMP 08 No 25',
            'tlp'    => '034192812',
            'siswa'  => [
                [
                    'nis'       => 'smp8001',
                    'nama'      => 'Ahmad',
                    'tgl_lahir' => '18 Januari 1994',
                ],
                [
                    'nis'       => 'smk8002',
                    'nama'      => 'Memel',
                    'tgl_lahir' => '21 Maret 1996',
                ],
            ],
        ],
        'SMP 09 Malang'        =>
        [
            'alamat' => 'Jl SMP 09 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 10 Malang'        =>
        [
            'alamat' => 'JL SMP 10 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 11 Malang'        =>
        [
            'alamat' => 'Jl SMP 11 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 12 Malang'        =>
        [
            'alamat' => 'Jl SMP 12 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 13 Malang'        =>
        [
            'alamat' => 'Jl SMP 13 No 25',
            'tlp'    => '034192812',
        ],
    ],
];
 
 $sma = isset($_POST["select1"]) ? $_POST["select1"]: "";
 
foreach($list as $key ){
  $data = [];
		foreach($key as $sekolah => $value) {
			$skl = substr($sekolah,0,3);
			
			if($skl == $sma){
				$alamat = [];
				$tlp = [];
				$siswa = [];
				foreach ($list as $data_sekolah ){
					$alamat = $data_sekolah[$sekolah]["alamat"];
					$tlp = $data_sekolah[$sekolah]["tlp"];
					$siswa = isset($data_sekolah[$sekolah]["siswa"])? $data_sekolah[$sekolah]["siswa"] : '';
				}
				echo " Sekolah : " . $sekolah . "<br>";
				echo " Alamat : ". $alamat . "<br>";
				echo " tlp : ". $tlp . "<br>";
				echo "<table border ='1'> <tr> <th> nis</th> <th> nama</th> <th>tanggal lahir</th> </tr>";
				if(!empty($siswa)){
				
				foreach ($siswa as $data_siswa){					
					echo "
					<tr>
					<td>".$data_siswa["nis"]."</td>
					<td>".$data_siswa["nama"]."</td>
					<td>".$data_siswa["tgl_lahir"]."</td>
					</tr>";				
				}
				
				}
				else{
					echo '<tr><td colspan="3">Data Kosong</td></tr>';
					
					
				}
			echo "</table>";
			}
		}
		
  }
  echo "</table>";
?>
    </p>

 

<p>&nbsp;</p>
<p id="container"></p>
 
</body>
</html>