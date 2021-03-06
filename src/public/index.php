<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>blog一覧</title>
</head>

<?php require_once(__DIR__ . '/../app/Lib/header.php'); ?>

<body>
  <div class="blogs__wraper bg-green-300 py-20 px-20">
    <div class="ml-8 mb-12">
      <h2 class="mb-2 px-2 text-6xl font-bold text-green-800">blog一覧</h2>
    </div>
    <form action="index.php" method="get">
      <div class="ml-8 mb-6">
        <input name="search_query" type="text" value="<?php echo $_GET['search_query'] ?? ""; ?>" placeholder="キーワードを入力" />
        <input type="submit" value="検索" />
      </div>
      <div class="ml-8">
        <label>
          <input type="radio" name="order" value="desc" class="">
          <span>新着順</span>
        </label>
        <label>
          <input type="radio" name="order" value="asc" class="">
          <span>古い順</span>
        </label>
      </div>
    </form>
  </div>
</body>

</html>