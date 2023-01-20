<?php 
/*Title*/
$siteTitle = "首頁";
$navTitle = "尼滋馬拉城外務部";
$navEngTitle = "Ministry of Foreign Affairs Nizimala Town (N.Z.M.L.T.)";

$icon = "img/mofa-icon.png";
$description = "";
$style = "basic/style/style.css";

$siteHome = "mofa.html";


$news = '
<div class="row">

	<!-- 複製這串 -->
	<div class="col-sm-6">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">有關大藍冰帝國合併之邀約，外務部回應。</h5>
				<p class="card-text">最後更新時間：2022-09-26 19:42</p>
				<a href="mofa/news/有關大藍冰帝國合併之邀約，外務部回應。.html" class="btn btn-secondary">閱讀更多 <i class="fa-solid fa-arrow-right"></i></a>
			</div>
		</div>
	</div>

</div>
';


$announce = '目前無內容';
$declare = '目前無內容';

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
						<a class="nav-link mR10" href="mofa/ministers.html"><i class="fa-solid fa-globe"></i> 歷任部長</a>
					</li>
					<li class="nav-item dropdown mR10">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
						<i class="fa-solid fa-newspaper"></i> 建交合作
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="mofa/coop/001.html">001．月影天涯</a></li>
                            <li><a class="dropdown-item" href="mofa/coop/002.html">002．達爾克達聯邦</a></li>
                            <li><a class="dropdown-item" href="mofa/coop/003.html">003．奧哈特人民共和國</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
</nav>

<body>
	<div class="banner mBtm30">
		<img src="img/banner/mofa-banner.png" class="img-fluid">
	</div>

	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
			<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" ><span class="tabText">最新消息</span></button>
			</li>
			<li class="nav-item" role="presentation">
			<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab"><span class="tabText">新聞澄清</span></button>
			</li>
			<li class="nav-item" role="presentation">
			<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab"><span class="tabText">外務部聲明</span></button>
			</li>
		</ul>


		<div class="tab-content" style="border: 1px solid lightgray; padding: 15px;" id="myTabContent">
			<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" tabindex="0"><?php echo($news);?></div>
			<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" tabindex="0"><?php echo($declare);?></div>
			<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" tabindex="0"><?php echo($announce);?></div>
		</div>
	</div>
</body>

<footer class="footer text-center text-bg-dark mTop30" style="padding: 10px">
copyright © <?php echo($navTitle);?> <script>document.write(new Date().getFullYear())</script>
</footer>