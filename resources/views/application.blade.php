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
      <header><u>Application Portal</u></header>
      <div >
        <form action="{{url('appsubmit')}}" class="form" method="POST" enctype="multipart/form-data">
          @csrf          
          <hr>
          <div>
            @foreach($result as $item)
            <div class="input-box" style=" width: 100%; justify-content: 20px">
              <div>
                <label>For the <u>position</u> of</label>
                <label><b>@php
                     echo $item->Position;
                @endphp
                </b></label>
                <label> at the <u>Department</u> of </label>
                <label><b>@php
                    echo $item->Department;
               @endphp
               </b></label>
               <label>, the Applicant's details are:</label>
              </div>              
            </div>
            <div class="input-box" style="display:flex; width: 100%; justify-content: 20px">
                <div>
                  <label>Full Name:</label>
                  <input type="text" name="Fname" placeholder="Full Name" required />              
                </div>
                <div style="padding-left:10%">
                  <label>Email:</label>
                  <input type="email" name="email" placeholder="Email" required />
                </div>
              </div>
              <div class="input-box" style="display:flex; width: 100%; justify-content: 20px">
                <div>
                  <label>Mailing Address:</label>
                  <input type="text" name="Maddress" placeholder="Mailing Address" required />              
                </div>
                <div style="padding-left:10%">
                  <label>Phone Number:</label>
                  <input type="number" name="phone" placeholder="Phone No." required />
                </div>
              </div>
              <div class="input-box" style="display:flex; width: 100%; justify-content: 20px">
                  <label style="padding-right: 20px;"><b>Attach CV: <br> (DOC/PDF)</b></label>
                  <input type="file" name="cv" accept=".docx, .pdf" required />
                  <input type="hidden" value="<?php echo $item->Position;?>" name="pos" />
                  <input type="hidden" value="<?php echo $item->Department;?>" name="dept" />                  
            @endforeach
              </div>
            <button>Submit</button>
        </form>
      </div>
    </section>
  </body>
</html>