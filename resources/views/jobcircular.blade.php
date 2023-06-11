<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #826AFB">
    <div>
       @foreach ($result as $item)
            <div style="width: 80%; height:50%; padding: 40px; display: flex; position: absolute; bottom: 10%; left: 8%; border-radius: 20px; background-color: white">
                <h2>@php
                    echo $item->Title;
                @endphp</h2><br>
                <p>@php
                    echp $item->Description; 
                @endphp</p>
            </div>
       @endforeach
        
        
    </div>
    
</body>
</html>