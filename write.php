<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    
    $data = "$name,$email,$question\n";
    file_put_contents('data.csv', $data, FILE_APPEND);
    # header("Location: read.php");
    # exit();

        // 処理成功のフラグ
        $success = true;
    } else {
        // 不正なアクセス
        $success = false;
    
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ登録</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="message">
    <?php if ($success): ?>
        <h1>データが登録されました</h1>
        <p>3秒後に結果表示ページに移動します...</p>
        <?php else: ?>
            <h1>エラーが発生しました</h1>
            <p>正しい方法でフォームを送信してください。</p>
            <a href="index.php">入力ページに戻る</a>
        <?php endif; ?>
    </div>
    <?php if ($success): ?>
    <script>
        setTimeout(function() {
            window.location.href = 'read.php';
        }, 3000);
    </script>
    <?php endif; ?>
</body>
</html>
