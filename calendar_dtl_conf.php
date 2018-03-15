<html lang="ja">
<head>
  <meta charset="UTF-8"/>
  <!-- Bootstrap読み込み -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- BootstrapのCSS読み込み -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style/calendar_dtl_conf.min.css">
</head>
<body>
  <h3><span class="label label-default">名前</span></h3>
  <span class="label label-default">
    <?php
      // その日付をレスポンス
     ?>
  </span>
  <form class="form-horizontal">
    <div class="form-group row">
  		<label class="col-sm-2 col-sm-2--extend control-label" for="InputSelect">名前</label>
  		<div class="col-sm-10 col-sm-10--extend">
  			<select class="form-control form-name" id="InputSelect">
  				<option>つのべ</option>
  				<option>どべ</option>
  				<option>すずき</option>
          <option><?php //追加されてない人を全て選択肢に入れる。(ただし、その日に出勤と書いてなければ色を変えておく)
          ?></option>
  			</select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 control-label">時間帯希望</label>
        <div class="col-sm-10">
          <!-- 対象の時間帯希望を入れておく(但し書いてなければ記入しない) -->
          <p class="form-control-static">18:00~22:00</p>
        </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 control-label" for="InputTime">時間帯設定</label>
      <div class="col-sm-1 col-sm-1--extend">
  			<select class="form-control form-time from-time" id="InputSelect">
  				<option>7:00</option>
  				<option>8:00</option>
  				<option>9:00</option>
          <!-- 設定した時間帯の部分だけ表示 -->
  			</select>
  		</div>
      <div class="col-sm-1 col-sm-1--extend">
        <select class="form-control form-time to-time" id="InputSelect">
          <option>7:00</option>
          <option>8:00</option>
          <option>9:00</option>
          <!-- 設定した時間帯の部分だけ表示 -->
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">送信</button>
  </div>
</div>
  </form>
  <script>
  // 送信するときに時間帯が反対になっていないかなどをチェック。
  </script>
</body>
</html>
