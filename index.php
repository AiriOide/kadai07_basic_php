<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>アンケート入力</h1>
        <form action="write.php" method="post">
            <label for="name">名前：</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email：</label>
            <input type="email" id="email" name="email" required>
            
            <label for="question">モチベーション：</label>
            <textarea id="question" name="question" rows="4" required></textarea>
            
            <input type="submit" value="送信">
        </form>
    </div>
</body>
</html>
