<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css">
<title>入力フォーム</title>
</head>
<?php
/**
 * /app/View/Hello/index.ctp
 */
?>
<body>
    <form action="/cake/hello/other" method="POST">
    <div class="wrapper">
    <form method="post" action="check.php">

        <table class="table">
        <tr>
            <th>教会名</th>
            <td><input type="text" name="churchname" style="width:700px" placeholder="教会名を入力してください"></td>
        </tr>
        <tr>
            <th>牧師名</th>
            <td><input type="text" name="pastor's name" style="width:700px" placeholder="牧師名を入力してください"></td>
        </tr>
        <tr>
            <th>フリガナ</th>
            <td><input type="text" name="phonetic" style="width:700px" placeholder="フリガナを入力してください"></td>
        </tr>
        <tr>
            <th>郵便番号</th>
            <td><input type="text" name="postal code" style="width:700px" placeholder="郵便番号を入力してください"></td>    
        </tr>
        <tr>
            <th>住所</th>        
            <td><input type="text" name="prefectures" style="width:700px" placeholder="都道府県を入力してください"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="text" name="city" style="width:700px" placeholder="市区町村を入力してください"></td>
        </tr>  
        <tr> 
            <th></th>
            <td><input type="text" name="address" style="width:700px" placeholder="番地以降を入力してください"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="text" name="condominiumname" style="width:700px" placeholder="マンション名を入力してください"></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><input type="text" name="phone number" style="width:700px" placeholder="電話番号を入力してください"></td>
        </tr>
        </table>
        <div class="btn">
            <input type="submit" value="確認">
        </div>

</div>
</form>
</body>
</html>
