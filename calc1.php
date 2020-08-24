<?php
session_start();

$nsub1 = $_POST['nsub1'];
$nsub2 = $_POST['nsub2'];
$nsub3 = $_POST['nsub3'];
$nsub4 = $_POST['nsub4'];
$nsub5 = $_POST['nsub5'];
$nsub6 = $_POST['nsub6'];

$csub1 = $_POST['csub1'];
$csub2 = $_POST['csub2'];
$csub3 = $_POST['csub3'];
$csub4 = $_POST['csub4'];
$csub5 = $_POST['csub5'];
$csub6 = $_POST['csub6'];

$msub1 = $_POST['msub1'];
$msub2 = $_POST['msub2'];
$msub3 = $_POST['msub3'];
$msub4 = $_POST['msub4'];
$msub5 = $_POST['msub5'];
$msub6 = $_POST['msub6'];



function point_return($x){
	if($x >= 90 ){
		$gg = 4;
	}elseif ( $x >= 85 && $x <= 89) {
		$gg = 4;
	}elseif ( $x >= 80 && $x <= 84) {
		$gg = 3.75;
	}elseif ($x >= 75 && $x <= 79) {
		$gg = 3.5;
	}elseif ($x >= 70 && $x <= 74) {
		$gg = 3;
	}elseif ($x >= 65 && $x <= 69) {
		$gg = 2.75;
	}elseif ($x >= 60 && $x <= 64) {
		$gg = 2.5;
	}elseif ($x >= 50 && $x <= 59) {
		$gg = 2;
	}elseif ($x >= 45 && $x <= 49) {
		$gg = 1.75;
	}elseif ($x >= 40 && $x <= 44) {
		$gg = 1;
	}else{
		$gg = 0;
	}
		return $gg;
}

function grade_return($x){
	if($x >= 90 ){
		$go = "A +";
	}elseif ( $x >= 85 && $x <= 89) {
		$go = "A";
	}elseif ( $x >= 80 && $x <= 84) {
		$go = "A -";
	}elseif ($x >= 75 && $x <= 79) {
		$go = "B +";
	}elseif ($x >= 70 && $x <= 74) {
		$go = "B";
	}elseif ($x >= 65 && $x <= 69) {
		$go = "B -";
	}elseif ($x >= 60 && $x <= 64) {
		$go = "C +";
	}elseif ($x >= 50 && $x <= 59) {
		$go = "C";
	}elseif ($x >= 45 && $x <= 49) {
		$go = "C -";
	}elseif ($x >= 40 && $x <= 44) {
		$go = "D";
	}else{
		$go = "F";
	}
		return $go;
}

$msub1_1 = point_return($msub1) ;
$msub2_2 = point_return($msub2) ;
$msub3_3 = point_return($msub3) ;
$msub4_4 = point_return($msub4) ;
$msub5_5 = point_return($msub5) ;
$msub6_6 = point_return($msub6) ;

$msub1_1_g = grade_return($msub1) ;
$msub2_2_g = grade_return($msub2) ;
$msub3_3_g = grade_return($msub3) ;
$msub4_4_g = grade_return($msub4) ;
$msub5_5_g = grade_return($msub5) ;
$msub6_6_g = grade_return($msub6) ;
 
$msub1_1_t = $msub1_1 * $csub1 ;
$msub2_2_t = $msub2_2 * $csub2 ;
$msub3_3_t = $msub3_3 * $csub3 ;
$msub4_4_t = $msub4_4 * $csub4 ;
$msub5_5_t = $msub5_5 * $csub5 ;
$msub6_6_t = $msub6_6 * $csub6 ;

$total1  = $msub1_1_t + $msub2_2_t + $msub3_3_t + $msub4_4_t + $msub5_5_t + $msub6_6_t;
$total2  = $csub1 + $csub2 + $csub3 + $csub4 + $csub5 + $csub6;

$out = round($total1 / $total2, 2)  ;

echo '
<div class="box box-primary" >
<div class="box box-info">
<div class="box-header with-border">
            <h3 class="box-title">Grade Result</h3>

            
          </div>

<div class="row" style="margin-top:20px;">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-6" style="text-transform: capitalize;">
				'.$nsub1.'
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$msub1_1_g.'
			</div>

			<div class="col-md-6" style="text-transform: capitalize;">
				'.$nsub2.'
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$msub2_2_g.'
			</div>

			<div class="col-md-6" style="text-transform: capitalize;">
				'.$nsub3.'
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$msub3_3_g.'
			</div>

			<div class="col-md-6" style="text-transform: capitalize;">
				'.$nsub4.'
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$msub4_4_g.'
			</div>

			<div class="col-md-6" style="text-transform: capitalize;">
				'.$nsub5.'
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$msub5_5_g.'
			</div>

			<div class="col-md-6" style="text-transform: capitalize;">
				'.$nsub6.'
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$msub6_6_g.'
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

<div class="row" style="margin-top:20px;">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-6">
				GPA 
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$out.'
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
</div>
</div>
';
