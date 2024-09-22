<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE6F2;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #FF69B4;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #FFF0F5;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #FF69B4;
            text-align: left;
        }
        th {
            background-color: #FF69B4;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #FFB6C1;
        }
    </style>
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
