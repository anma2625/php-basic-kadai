<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>kadai_011</title>
</head>

<body>
  <?php
  $personal_data = [
    "name" => "玉ねぎ",
    "price" => "200",
    "location" =>"北海道"
  ];

  //キーを日本語でマッピング
  $key_mapping = [
    "name" => "名前",
    "price" => "値段",
    "location" => "産地"
  ];

  foreach ($personal_data as $key => $value) {
    //":"のフォーマットで出力
    echo "{$key_mapping[$key]}:{$value}<br>";
  }
  ?>
</body>
</html>