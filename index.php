<?php 
/*Title*/
$siteTitle = "首頁";
$navTitle = "尼滋馬拉城政府";
$navEngTitle = "the Governemnt of the Nizimala Town (N.Z.M.L.T.)";

$icon = "img/icon.png";
$description = "";
$style = "basic/style/style.css";

?>
<!DOCTYPE html>
<?php include "basic/head.php"?>

<!-- NAVBAR -->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark" style="padding-top:2vh;">
	<div class="container">

		<div class="row align-items-bottom mBtm10">
			<div class="col-sm-2">
				<a class="navbar-brand" href="<?php echo($siteHome);?>">
					<img src="<?php echo($icon);?>" height="55" class="hidden-mobile"/>
				</a>
			</div>
			<div class="col-sm-5 align-self-end">
			    <a class="navbar-brand" href="<?php echo($siteHome);?>">
			    	<span class="navTitle"><?php echo($navTitle);?></span><br/>
			    	<span class="navEngTitle hidden-mobile"><?php echo($navEngTitle);?></span>
				</a>
			</div>
		</div>	

	    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#NavToggler">
	    	<span class="navbar-toggler-icon"></span>
	    </button>
		<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="NavToggler">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="NavToggler"><?php echo($navTitle);?></h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
			</div>
			<div class="offcanvas-body">
				<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">


					
					<li class="nav-item">
						<a class="nav-link active mR10" href="index.html"><i class="fa-solid fa-globe"></i> 歷任部長</a>
					</li>
					<!-- Nav Items
					<li class="nav-item dropdown mR10">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
						<i class="fa-solid fa-newspaper"></i> 下拉選單
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">選項一</a></li>
                            <li><a class="dropdown-item" href="#">選項二</a></li>
						</ul>
					</li>
					 -->

				</ul>
			</div>
		</div>
	</div>
</nav>

<body>
	<div class="banner mBtm30">
		<img src="img/banner/mofa-banner.png" class="img-fluid">
	</div>
</body>

<footer class="footer text-center text-bg-dark mTop30" style="padding: 10px">
copyright © <?php echo($navTitle);?> <script>document.write(new Date().getFullYear())</script>
</footer>