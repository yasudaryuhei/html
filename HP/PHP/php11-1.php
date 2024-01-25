<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello PHP World</h1>
  <?php
  class Post{

    public function __construst($text){
      $this -> text = $text;
    }

    public function show(){
      printf('%s<br>', $this -> text);
    }
  }
  $posts[0] = new post("佐藤 一郎","25");
  $posts[0] = new post("佐藤 一郎","25");
  $posts[0] = new post("佐藤 一郎","25");

  function All

  $posts[0]->show();
  $posts[1]->show();
  $posts[2]->show();
?>
</body>
</html>