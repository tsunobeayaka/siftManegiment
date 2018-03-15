<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset = "UTF-8"/>
		<!-- Bootstrap読み込み -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- BootstrapのCSS読み込み -->
	 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 <!-- jQuery読み込み -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <!-- BootstrapのJS読み込み -->
	 <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style/mgrMenu.min.css">
	</head>
	<body>
		<!-- ログインIDで名前判別 -->
		<h3><span class="label label-default">名前</span></h3>
		<div class="Container">
			<div class="btnList btnList--extend" role="group">
				<button type="button" class="btn btn--extend btn-default" onClick="siftClick()">シフト設定</button>
				<button type="button" class="btn btn-default memberBtn btn--extend" onClick="mbrClick()">メンバー設定</button>
				<button type="button" class="btn btn-default btn--extend">Excel印刷</button>
				<button type="button" class="btn btn-single">時間設定</button>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					直近のシフト予定
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>日付</th>
							<th>メンバー</th>
						</tr>
					</thead>
					<tbody>
						<?php
						// DB連動でメンバーを入れる。
						// リストごとにクリックしたらシフト設定画面(日にち詳細)に遷移するようにする
						 ?>
						 <tr>
						 <th>2016/3/24</th>
						 <th>田中・佐藤・鈴木・藤田</th>
						 </tr>
						 <tr>
							 <th>2016/3/25</th>
							 <th>どべ・藤田・坂田・鈴木</th>
						 </tr>
					</tbody>
			</div>
		</div>
		<script>
			function siftClick() {
				document.location.href = "calendarH.php";
			}

			function mbrClick() {
				document.location.href ="mbr_conf.php";
			}
		</script>
	</body>
</html>
