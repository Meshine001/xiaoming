<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>小明来推荐</title>

    <!-- MZUI CSS file -->
    <link href="dist/css/mzui.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="container fluid">
        <div class="row top-row">
          <div class="cell-4 menu"><button type="button" class="btn primary item buss">西安在线公交</button></div>
          <div class="cell-8 menu"><button type="button" class="btn yellow item chifan"  data-display="messager" data-content="还没开放好噢" data-type="danger">吃饭选择器</button></div>
        </div>
        <div class="row">
            <div class="cell-12 menu">
              <button type="button" class="btn green item ">其它推荐</button>
            </div>
        </div>
    </div>

    <!-- MZUI JS file -->
    <script src="dist/js/mzui.min.js"></script>
    <script type="text/javascript">
        $('.buss').click(function(){
            location.href="xabuss.php";
        });

    </script>
  </body>
</html>