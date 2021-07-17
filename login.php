<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>登入畫面</title>
</head>
<body>
  <div class="main">
    <form method="post">
      <h1>使用者登入</h1>
      <div class="main">
        <label>帳號：</label>
        <input type="email"  class="form-control" name="email" placeholder="請輸入帳號">
      </div>
      <div class="main">
        <label>密碼：</label>
        <input type="password" class="form-control" name="password" placeholder="請輸入密碼">
      </div>
      <div class="main">
        <button type="submit" class="btn btn-default" name="login">登入</button>
      </div>
      <div class="main">
        <input class="linkb" type="button" value="使用者註冊" onclick="location.herf='newber.php'">
      </div>
    </form>
  </div>
  </main>
</body>
</html>
