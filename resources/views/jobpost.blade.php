<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <section class="container">
      <header><u>Job Post</u></header>
      <div style="overflow-y:scroll; overflow-x:hidden; max-height: 800px">
        <form action="{{url('register')}}" class="form" method="POST">
          @CSRF
          <div style="position:relative; left:43%">JOB DETAILS</div>            
          <br>
          <hr>
          <div>
            <div class="input-box" style="display:flexbox; width: 100%; justify-content: 20px">
              <div>
                <label>Job Title</label>
                <input type="text" name="title" placeholder="Job Title" required />              
              </div>
              <div style="display:flex;">
                    <div class="input-box">
                    <label>Position</label>
                    <input type="text" name="position" placeholder="Enter Job Position" required />
                    </div>
                    <div class="input-box" style="margin-left: 10%">
                    <label>Department</label>
                    <input type="text" name="department" placeholder="Enter Job Department" required />
                    </div>
              </div>
              <div class="input-box">
                <label>Description</label><br>
                <textarea name="desc" placeholder="Enter job description" required style="height: 150px; width:100%"></textarea>
              </div>                     
            </div>  
            <button>Submit</button>
        </form>
      </div>
    </section>
  </body>
</html>