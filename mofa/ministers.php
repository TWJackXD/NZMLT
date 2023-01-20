<?php 
/*Title*/
$siteTitle = "歷任部長";
$siteSubtitle = '';
$navTitle = "尼滋馬拉城外務部";
$navEngTitle = "Ministry of Foreign Affairs Nizimala Town (N.Z.M.L.T.)";

$icon = "../img/mofa-icon.png";
$description = "";
$style = "../basic/style/style.css";

$siteHome = "../mofa.html";

?>
<!DOCTYPE html>
<?php include "../basic/head.php"?>

<!-- NAVBAR -->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
	<div class="container">

		<div class="row align-items-bottom mTop10 mBtm10">
			<div class="col-sm-2">
				<a class="navbar-brand" href="<?php echo($siteHome);?>">
					<img src="<?php echo($icon);?>" height="55" class="hidden-mobile"/>
				</a>
			</div>
			<div class="col-sm-5 mTop10">
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
						<a class="nav-link active mR10" href="ministers.html"><i class="fa-solid fa-globe"></i> 歷任部長</a>
					</li>
					
					<li class="nav-item dropdown mR10">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
						<i class="fa-solid fa-newspaper"></i> 建交合作
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="coop/001.html">001．月影天涯</a></li>
                            <li><a class="dropdown-item" href="coop/002.html">002．達爾克達聯邦</a></li>
                            <li><a class="dropdown-item" href="coop/003.html">003．奧哈特人民共和國</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
</nav>

<body>
	<div class="container-fluid" style="height: 40vh; background-color:gray; color:white;">
		<div class="row text-center">
			<div class="col" style="padding-top: 12.5vh;">
				<h2 class="mTop30"><?php echo($siteTitle); ?></h2>
				<span><?php echo($siteSubtitle); ?></span>
			</div>
		</div>
	</div>

	<div class="container mTop30">

		<div class="row justify-content-center text-center">

			<!-- 複製這串 -->
			<div class="col-sm-3">
				<div class="card">
					<img src="https://i.imgur.com/5G1N3wP.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">阿瑋R-Wei</h5>
						<p class="card-text">第一任部長 (2022~)<br>國家民眾黨籍</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>

<footer class="footer text-center text-bg-dark mTop30" style="padding: 10px">
copyright © <?php echo($navTitle);?> <script>document.write(new Date().getFullYear())</script>
</footer>