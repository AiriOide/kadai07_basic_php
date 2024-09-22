<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    
    $data = "$name,$email,$question\n";
    file_put_contents('data.csv', $data, FILE_APPEND);
    
    header("Location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ登録</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE6F2;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .message {
            background-color: #FFF0F5;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 {
            color: #FF69B4;
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>データが登録されました</h1>
        <p>3秒後に結果表示ページに移動します...</p>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = 'read.php';
        }, 3000);
    </script>
</body>
</html>
