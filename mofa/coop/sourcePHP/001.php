<?php 
/*Title*/
$siteTitle = "建交合作字001號．月影天涯";
$siteSubtitle = '';
$navTitle = "尼滋馬拉城外務部";
$navEngTitle = "Ministry of Foreign Affairs Nizimala Town (N.Z.M.L.T.)";

$icon = "../../img/mofa-icon.png";
$description = "";
$style = "../../basic/style/style.css";

$siteHome = "../../mofa.html";

$content = '<p>本城於茲馬3年．西元2022年9月17日（六）下午02:26，與月影天涯建立合作關係，以下為「月影天涯」之簡介與連結：</p>

			<p>（你看到了一隻鴿子在敲窗戶 並且把他趕走後 發現鴿子走前掉了一封信 你講信大開）發現是一個類似小說草稿：</p>

			<p>月影天涯</p>

			<p>主角叫水月與他所創造的世界 大家在一個叫月影客棧裡小打小鬧 玩遊戲唱歌 討論著各種武功秘笈 甚至都差點開房間了？！ 客棧內十分熱鬧 並且有著五大門派 分別是 小暗 小雨 水月本人 （剩下兩大還在尋找管理員） 五大門派的長老都很熟識 但也很長吵架 五大門派分別都在找尋弟子 分別有著 月炎派 滅月門 跟影派（可能會改名 兩大門派還未決定） 據說客棧內還有一隻彩虹劍齒虎 跟一隻小小鯊魚 十分的兇猛 但卻是客棧裡的小寵物 還有些小道消息 其實小鯊魚是小雨長老變成的 而且世界目前也變得十分怪異如同開了一個通道 常常有奇裝異服的人到來……</p>

			<p>你看了看覺得這大綱真的太爛了 估計是哪個不暢銷小說的草稿 被作者丟了吧 你看完覺得無聊決定 睡一覺 眼睛閉上 畫面漸漸的暗了下來 再次睜開 就到了一個奇異的世界 腦袋裡有個聲音響起：「歡迎來到月影天涯」……</p>

			<p><a href="https://discord.gg/4CnGHunq78" target="_blank" class="noDeco">https://discord.gg/4CnGHunq78</a></p>

			<p>尼滋馬拉城第一共和政府 外國交流事務部 茲馬3年．西元2022年9月17日（六） 發布</p>

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