<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Emilie_DashBoard</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
    <!--<link href='https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>-->

    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABILAAASCwAAAAAAAAAAAADMzMz7xMTE/hISEv8BAQH/AQEB/wEBAf8GBgb/AQEB/wEBAf8BAQH/AQEB/zQ0NP8BAQH/AQEB/7q6uv7MzMz+zMzM+8zMzP8+Pj7/AAAA/wUFBf8YGBj/ISEh/xYWFv8AAAD/AAAA/wAAAP8AAAD/AAAA/xgYGP/MzMz/zMzM/8zMzPvMzMz/XFxc/wAAAP8nJyf/PT09/y4uLv9BQUH/AAAA/wAAAP8AAAD/AAAA/wAAAP9PT0//zMzM/8zMzP/MzMz7zc3N/2ZmZv8AAAD/RkZG/3Z2dv9ERET/bW1t/wAAAP8AAAD/AAAA/wAAAP8AAAD/pqam/83Nzf/MzMz/zMzM+9DQ0P9PT0//AAAA/1FRUf+srKz/gICA/5ubm/8AAAD/AAAA/wAAAP8AAAD/CAgI/9DQ0P/Q0ND/zMzM/83NzfvS0tL/c3Nz/wAAAP8vLy//iYmJ/1xcXP+6urr/AAAA/wAAAP8AAAD/AAAA/11dXf/Y2Nj/0tLS/83Nzf/Ozs771NTU/9nZ2f+urq7/dnZ2/52dnf+3t7f/8PDw/x4eHv8AAAD/BAQE/ysrK//IyMj/2tra/9TU1P/Ozs7/z8/P+9XV1f/b29v/4uLi/+jo6P9PT0//CwsL/7CwsP+SkpL/u7u7/+Li4v/o6Oj/4uLi/9vb2//V1dX/z8/P/8/Pz/vV1dX/29vb/+Li4v/Ly8v/CAgI/wAAAP8FBQX/9PT0//T09P/u7u7/6Ojo/+Li4v/b29v/1dXV/8/Pz//Ozs771NTU/9ra2v/g4OD/b29v/wAAAP8AAAD/AAAA/7Gxsf/x8fH/7Ozs/+bm5v/g4OD/2tra/9TU1P/Ozs7/zc3N+9LS0v/Y2Nj/3Nzc/wgICP8AAAD/AAAA/wAAAP8sLCz/7Ozs/+jo6P/j4+P/3t7e/9jY2P/S0tL/zc3N/8zMzPvQ0ND/1dXV/9DQ0P8AAAD/AAAA/wAAAP8AAAD/Li4u/+bm5v/j4+P/39/f/9ra2v/V1dX/0NDQ/8zMzP/MzMz7zc3N/9HR0f/Ozs7/AgIC/wAAAP8AAAD/AAAA/zIyMv/g4OD/3t7e/9ra2v/W1tb/0tLS/83Nzf/MzMz/zMzM+8zMzP/Ozs7/0dHR/0hISP8AAAD/AAAA/wEBAf+IiIj/2tra/9jY2P/V1dX/0tLS/87Ozv/MzMz/zMzM/8zMzPvMzMz/zMzM/83Nzf/Ly8v/kJCQ/4qKiv+vr6//1dXV/9TU1P/S0tL/0NDQ/83Nzf/MzMz/zMzM/8zMzP/MzMz5zMzM/MzMzPzMzMz8zMzM/M3NzfzOzs78z8/P/M/Pz/zOzs78zc3N/MzMzPzMzMz8zMzM/MzMzPzMzMz8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==" rel="icon" type="image/x-icon">

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.js"></script>
    <!--<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>-->


    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77550588-1', 'auto');
  ga('send', 'pageview');

    </script>

    <!-- Styles -->
    {{ Html::style('css/app.css') }}

</head>
<body id="app-layout">

    @include('partials.navigation')

    @yield('content')

</body>
</html>
