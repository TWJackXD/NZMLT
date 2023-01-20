<?php 
/*Title*/
$siteTitle = "建交合作字002號．達爾克達聯邦";
$siteSubtitle = '';
$navTitle = "尼滋馬拉城外務部";
$navEngTitle = "Ministry of Foreign Affairs Nizimala Town (N.Z.M.L.T.)";

$icon = "../../img/mofa-icon.png";
$description = "";
$style = "../../basic/style/style.css";

$siteHome = "../../mofa.html";

$content = '<p>本城於茲馬4年．西元2023年1月12日（四）22:56，與達爾克達聯邦Federation of Darkda建立正式邦交關係，並祝貴國國運昌隆、國泰民安！</p>

			<p>達爾克達聯邦粉專：<a href="https://reurl.cc/bGpE8E" target="_blank" class="noDeco">https://reurl.cc/bGpE8E</a></p>

			<p>尼滋馬拉城第二共和政府 外國交流事務部 茲馬4年．西元2023年1月12日（四） 發布</p>

			';

?>
<!DOCTYPE html>
<?php include "../../basic/head.php"?>

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
						<a class="nav-link mR10" href="../../mofa/ministers.html"><i class="fa-solid fa-globe"></i> 歷任部長</a>
					</li>
					
					<li class="nav-item dropdown mR10">
						<a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
						<i class="fa-solid fa-newspaper"></i> 建交合作
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="001.html">001．月影天涯</a></li>
                            <li><a class="dropdown-item" href="002.html">002．達爾克達聯邦</a></li>
                            <li><a class="dropdown-item" href="003.html">003．奧哈特人民共和國</a></li>
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

		<div class="row justify-content-center">
			<div class="col-sm-8">
				
				<?php echo($content);?>

			</div>			
		</div>
	</div>
</body>

<footer class="footer text-center text-bg-dark mTop30" style="padding: 10px">
copyright © <?php echo($navTitle);?> <script>document.write(new Date().getFullYear())</script>
</footer>