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
      <header><u>Register Employee</u></header>
      <div style="overflow-y:scroll; overflow-x:hidden; max-height: 800px">
        <form action="{{url('register')}}" class="form" method="POST">
          @CSRF
          <div style="position:relative; left:36%">PERSONAL INFORMATION</div>            
          <br>
          <hr>
          <div>
            <div class="input-box" style="display:flex; width: 100%; justify-content: 20px">
              <div>
                <label>Full Name</label>
                <input type="text" name="Fname" placeholder="Enter full name" required />              
              </div>
              <div style="padding-left:10%">
                <label>Email Address</label>
                <input type="text" name="Email" placeholder="Enter email address" required />
              </div>
            </div>
            
            <div class="column">
              <div class="input-box">
                <label>Phone Number</label>
                <input type="number" name="Phone" placeholder="Enter phone number" required />
              </div>
              <div class="input-box">
                <label>Birth Date</label>
                <input type="date" name="DOB" placeholder="Enter birth date" required />
              </div>
            </div>
            <div class="input-box">
              <label>Password</label>
              <input type="password" name="pass" placeholder="Enter Password" required>
            </div>
            <div class="gender-box">
              <h3>Gender</h3>
              <div class="gender-option">
                <div class="gender">
                  <input type="radio" id="check-male" name="gender" value="Male" >
                  <label for="check-male">Male</label>
                </div>
                <div class="gender">
                  <input type="radio" id="check-female" name="gender" value="Female">
                  <label for="check-female">Female</label>
                </div>
                <div class="gender">
                  <input type="radio" id="check-other" name="gender" value="Other">
                  <label for="check-other">Other</label>
                </div>
              </div>
            </div>
            <div class="input-box address">
              <label>Address</label>
              <input type="text" name="address" placeholder="Enter street address" required />
              <div class="column">
                <input type="text" name="city" placeholder="Enter your city" required />
                <input type="number" maxlength="4" name="postC" placeholder="Enter postal code" required />
                <input type="text" name="division" placeholder="Enter your division" required />
              </div>
            </div>
          </div>
          <br>
          <div style="position:relative; left:36%"><p>EMPLOYMENT INFORMATION</p></div>            
          <br>
          <hr>  
          <div class="input-box" style="display:flex; width: 100%; justify-content: 20px">
            <div>
              <label>Start Date:</label>
              <input type="date" name="StartDate" placeholder="Start Date" required />              
            </div>
            <div style="padding-left:10%">
              <label>Contract Deadline:</label>
              <input type="date" name="deadline" placeholder="Contract Deadline" required />
            </div>
          </div>
          <div class="input-box" style="display:flex; width: 88%; justify-content: 20px">
            <div>
              <label>Department:</label>
              <input type="text" name="department" placeholder="Department" required />              
            </div>
            <div style="padding-left:10%">
              <label>Position:</label>
              <input type="text" name="position" placeholder="Position" required />
            </div>
          </div>
          <div class="input-box" style="display:flex; width: 100%; justify-content: 20px">
            <div>
              <label>Experience: (yrs)</label>
              <input type="text" name="experience" placeholder="Experience" required />              
            </div>
            <div style="padding-left:10%">
              <label>Employment Status:</label>
              <select name="EmpStat">
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
              </select>

            </div>
          </div>
          <br>
          <div style="position:relative; left:36%"><p>BANK INFORMATION</p></div>            
          <br>
          <hr>
          <div class="input-box" style="display:flex; width: 100%; justify-content: 20px">
            <div>
              <label>Account Number:</label>
              <input type="number" name="AccNum" placeholder="Account No." required />              
            </div>
            <div style="padding-left:10%">
              <label>Bank Name:</label>
              <input type="text" name="BankName" placeholder="Bank Name" required />
            </div>
          </div>
          <div class="input-box" style="display:flex; width: 100%; justify-content: 20px">
            <div>
              <label>Branch:</label>
              <input type="text" name="BranchName" placeholder="Branch Name" required />              
            </div>
            <div style="padding-left:10%">
              <label>Salary:</label>
              <input type="number" name="Salary" placeholder="Salary" required />
            </div>
          </div>
            <button>Submit</button>
        </form>
      </div>
    </section>
  </body>
</html>