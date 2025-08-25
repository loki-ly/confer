<!DOCTYPE html>
<html>
<head>
    @include('products.css')
    <style type = 'text/css'>
        .table_deg
        {
            border: 2px solid white;
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 40px;
        }
        .th_deg
        {
            background-color: skyblue;
        }
        tr
        {
            border: 3px solid wheat;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('products.header')
    @include('products.sidebar')
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

    <h1>My file</h1>

<iframe style="height: 800px ; width :80%" src="/my_files/{{$my_file}}" frameborder="0"></iframe>
</div>
        </div>
      </div>

</body>
</html>