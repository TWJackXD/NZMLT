<?php 
/*Title*/
$siteTitle = "有關大藍冰帝國合併之邀約，外務部回應。";
$siteSubtitle = '最後更新時間：2022-09-26 19:42';
$navTitle = "尼滋馬拉城外務部";
$navEngTitle = "Ministry of Foreign Affairs Nizimala Town (N.Z.M.L.T.)";

$icon = "../../img/mofa-icon.png";
$description = "";
$style = "../../basic/style/style.css";

$siteHome = "../../mofa.html";

$content = '<p>茲馬3年．西元2022年9月6日，大藍冰帝國對我國提出《大藍冰帝國接收尼茲馬拉城主權暨管理及合作條約》，外務部說明如下：</p>

			<p>大藍冰帝國總理於今年7月6日對我國發出「接管政策」，期望將我國劃入其版圖，成立自治區。不過當時尼滋馬拉城不再進行任何微國上的活動，因此拒絕該邀約。</p>

			<p>而於今年8月14日，尼滋馬拉城宣布由「尼滋馬拉城第一臨時政府」恢復並統治，大藍冰帝國則於9月6日對我國再次提出合併邀約，並說明會給予「最高度的自治」與「保留外交權」，本國則於第一時間進行城民投票，由城民決定是否將本國併入「大藍冰帝國」之版圖。</p>

			<p>隨後，大藍冰帝國皇帝（原總理）向我國外交部發送邀約書，其中一度將我國名稱輸入錯誤，邀約合作書之檔案名稱亦將我國「尼滋馬拉城」之「滋」字，誤輸入為「茲」，我國簡稱之「尼滋」，也被誤植為「拉城」，因合作邀約之名稱並非我國名稱，故此邀約先行失效，再加上條文內容之不明確（例如：在「大藍冰帝國全球資訊網」上，並無看到《憲法》相關條文，在其他平台亦無），經討論後，相關人員皆無法接受。邦交國之合併亦非我國可決定事項，應由邦交國相關代表決定，我國相關人員認為該條規定不尊重我國邦交國，再次以「不同意」為結果。邀約書之「第8條」也無列入其中，我國認為大藍冰帝國並無尊重我國，在行政上過分草率，再加上城民投票結果以「不同意合併」居多，因此反駁本次邀約。

			<p>最終，我國於2022年9月24日向大藍冰帝國皇帝發送訊息：</p>

			<cite style="color:gray;">
			<p>您好，在本國建國初期，貴國竟願意伸出援手協助我國建設，並懷抱著博愛之心想更進一步協助我國併入貴國，本人代表全體國民表達感恩之意。惟本國政府高層舉辦之公民投票結果顯示不同意本國併入貴國，城長本人在此也深感遺憾！希望皆身為民主陣營的我們須知道民意乃為建國基礎，如無法取得全體國民之共識，則代表我們的想法恐不為民意所接受，望請諒解！</p>

			<p>我們尼滋馬拉城在此提出一個折衷的方案，又不會受民意所逼，就是本國與貴國可以考慮以建交方式來達成相互合作、扶持與成長，想請問貴國意下如何？</p>

			<p>— 尼滋馬拉城外務部 茲馬3．西元2022.09.24</p>
			</cite>

			<p>至今尚無回應。</p>

			<div class="alert alert-dark" role="alert">
				<i class="fa-solid fa-link">　相關附件</i>
			</div>

			<a href="https://i.imgur.com/hDDuL03.jpg" target="_blank">《大藍冰帝國接收尼茲馬拉城主權暨管理及合作條約》附圖<i class="fa-solid fa-arrow-up-right-from-square"></i></a>

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
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
						<i class="fa-solid fa-newspaper"></i> 建交合作
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="../coop/001.html">001．月影天涯</a></li>
                            <li><a class="dropdown-item" href="../coop/002.html">002．達爾克達聯邦</a></li>
                            <li><a class="dropdown-item" href="../coop/003.html">003．奧哈特人民共和國</a></li>
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