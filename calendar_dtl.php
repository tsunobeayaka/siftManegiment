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
<link rel="stylesheet" type="text/css" href="style/calendar_dtl.min.css">
</head>
<body>
  <h3><span class="label label-default">名前</span></h3>
  <!-- 日付クリック どべができたら合わせる-->
  <form class="form-inline">
    <label class="sr-only" for="InputEvent">予定</label>
    <!-- textを送信しても消えないようにする -->
    <!-- 送信したとき一般画面に反映 -->
    <input type="text" class="form-control" id="InputEvent" placeholder="今日の予定">
    <button type="submit" class="btn btn-default">送信</button>
  </form>
  <div class="table-responsive">
    <table class="table">
    <tr>
      <th>名前</th>
      <?php
      // 設定した時間を表示
       ?>
    </tr>
    <?php
    // 出勤する人を表示
     ?>
  </table>
  <!-- clickしたら追加していく -->
  <button type="button" class="btn btn-default">追加</button>
</div>
</body>
</html>
