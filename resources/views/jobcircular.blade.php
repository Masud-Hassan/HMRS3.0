<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>  
        .container {   
        display: grid;
        margin-right: 7%;  
        }  
        button {  
        background-color: lightblue;
        font-size: 25px;  
        margin: auto;
        border-color: rgb(134, 165, 175); 
        border-radius: 12px;
        cursor: pointer; 
        }  
        button:hover{
        background-color: rgb(112, 139, 148);
        transition: 0.3s;
        }
        button:active{
        background-color: rgb(81, 99, 105);    
        }
        p{  
        font-size: 25px;  
        } 
    </style> 
    <title>Document</title>
</head>
<body style="background-color: #826AFB">
    <div>
        <h1 style="text-align: center; color:antiquewhite; font-size:40px"><u>Job Circular</u></h1>
        <form action="{{url('apply')}}" method="POST">
            @csrf
            @foreach ($result as $item)
                <div style="width: 60%; height:10%; margin-left:19%; display:flex; padding: 10px 20px 10px 20px; border-radius: 20px; background-color: white">
                    <div style="margin-right: 10%;">
                        <div>
                            <h2>@php
                                echo $item->Title;
                            @endphp</h2>
                        </div>
                        <hr style="color:grey; width:100%; float: left;">
                        <br>
                        <div>
                            <p style="text-align: justify">@php
                                echo $item->Description; 
                            @endphp</p>
                        </div>
                    </div>
                    <div class="container">
                        <button style="height: 30%; width:auto" name="Button" value="<?php echo $item->Serial; ?>">Apply</button>
                    </div>
                </div>
                <br>
            @endforeach
        </form> 
        
        
        
    </div>
    
</body>
</html>