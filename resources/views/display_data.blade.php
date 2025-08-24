<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1> Paper details</h1>
    <table border="1px solit black ">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>File</th>
            <th>Price</th>
            <th>Download</th>
            <th>View</th>



        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data-> title}}</td>
            <td>{{$data-> description}}</td>
            <td>{{$data-> file}}</td>
            <td>{{$data-> price}}</td>
            <td>
                <a href="{{url('my_download',$data-> file)}}">Download</a>
            </td>
            <td>
                <a href="{{url('view_file',$data-> file)}}">View</a>
            </td>

        </tr>
        
        @endforeach
    </table>
    
    
    
</body>
</html>

