<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>アンケート結果</h1>
        <table>
            <tr>
                <th>名前</th>
                <th>Email</th>
                <th>モチベーション</th>
            </tr>
            <?php
            $data = file('data.csv', FILE_IGNORE_NEW_LINES);
            foreach ($data as $line) {
                list($name, $email, $question) = explode(',', $line);
                echo "<tr><td>$name</td><td>$email</td><td>$question</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
