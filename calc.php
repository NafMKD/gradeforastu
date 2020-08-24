<?php
session_start();

$maths = $_POST['maths'];
$chem = $_POST['chem'];
$phy = $_POST['phy'];
$eng = $_POST['eng'];
$civ = $_POST['civ'];
$cse = $_POST['cse'];
$emaila =$_POST['email'];




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
	echo '



';
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


$ma = point_return( $maths);
$ca = point_return( $chem);
$py = point_return($phy);
$en = point_return($eng);
$ci = point_return( $civ);
$cs = point_return( $cse);

$ma1 = grade_return($maths);
$ca1 = grade_return($chem);
$py1 = grade_return($phy);
$en1 = grade_return($eng);
$ci1 = grade_return($civ);
$cs1 = grade_return($cse);


$mao = 4 * $ma ;
$cao = 3 * $ca ; 
$pyo = 3 * $py ; 
$eno = 3 * $en ; 
$cio = 3 * $ci ; 
$cso = 3 * $cs ; 

$tot = $mao + $cao + $pyo + $eno + $cio + $cso;

$out = round($tot / 19, 2)  ;

echo '
<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">Grade Result</h3>
</div>

<div class="row" style="margin-top:20px;">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="row">
			<div class="col-md-6">
				Maths
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$ma1.'
			</div>

			<div class="col-md-6">
				Chemistry
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$ca1.'
			</div>

			<div class="col-md-6">
				Physics
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$py1.'
			</div>

			<div class="col-md-6">
				English
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$en1.'
			</div>

			<div class="col-md-6">
				Civics
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$ci1.'
			</div>

			<div class="col-md-6">
				CSE
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				'.$cs1.'
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
';
