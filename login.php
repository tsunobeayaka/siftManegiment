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
		<link rel="stylesheet" type="text/css" href="style/login.min.css">
		<title>ログイン画面</title>
	</head>
	<body>
		<div class="container">
		<form class="form-horizontal form-horizontal--extend" method="post" action="mgrMenu.php">
			<div class="form-group form-group--extend row">
				<label class="col-sm-2 col-sm-2--extend control-label" for="InputLoginId">ログインID</label>
				<div class="col-sm-10 col-sm-10--extend">
					<input type="text" class="form-control form-control--extend" id="InputLoginId" placeholder="ログインID">
				</div>
			</div>
			<div class="form-group form-group--extend row">
				<label class="col-sm-2 col-sm-2--extend control-label" for="InputPassword">パスワード</label>
				<div class="col-sm-10 col-sm-10--extend">
					<input type="password" class="form-control form-control--extend" id="InputPassword" placeholder="パスワード">
				</div>
			</div>
			<div class="form-group form-group--extend">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">送信</button>
				</div>
			</form>
		</div>
	</div>
	</body>
</html>
