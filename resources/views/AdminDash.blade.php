<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
</head>
<body style="background-color: #826AFB">
    <div>
        <div style="width:100%; height: 20%; display:inline-block; position:absolute; top: 0px; left: 0px; border-radius: 0 0 20px 20px; background-color: white">
                <div style="position:relative; top: 30%; left: 45%">
                    <h1>To be Added</h1> 
                </div>
        </div>

        <div style="width: 80%; height:50%; padding: 40px; display: flex; position: absolute; bottom: 10%; left: 8%; border-radius: 20px; background-color: white">
            <div style="width: 30%; height: 30%; border-width: 1px 3px 3px 1px; border-style: solid; border-color: #cacaca #826AFB #826AFB #cacaca; border-radius: 20px; text-decoration:none;">
                <a href="{{ url('/register') }}" style="justify-content: center; display: flex; font-size: 30px;">Add Employees</a>
            </div>
        
            <div style="width: 30%; height: 30%; border-width: 1px 3px 3px 1px; border-style: solid; border-color: #cacaca #826AFB #826AFB #cacaca; border-radius: 20px; text-decoration:none; margin-left: 4%;">
                <a href="{{ url('/jobpost') }}" style="justify-content: center; display: flex; font-size: 30px;">Publish Job</a>
            </div>
        </div>
        
    </div>
    
</body>
</html>