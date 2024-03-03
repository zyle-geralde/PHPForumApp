<!DOCTYPE html>
<html>
    <head>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <div style="display: flex; background-color: black; width:1900px; height:70px; flex-direction: row; justify-content:center; align-items:center;">
            <div style="display: flex; flex-direction: row; align-items:center; margin-right:500px;">
                <div style="margin-left: 20px; color: white;">Home</div>
                <div style="color: white;">Post</div>
            </div>
            <div style="display: flex; flex-direction: row; align-items:center;">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  LogIn
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LogIn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type = "text" placeholder = "Enter Email">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary subme">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupme">
  SignUp
</button>

<!-- Modal -->
<div class="modal fade" id="signupme" tabindex="-1" role="dialog" aria-labelledby="signupmelabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmelabel">Sign up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>First Name</div>
        <input type = "text" placeholder = "sign up" class = "First name">
        <div>Last Name</div>
        <input type = "text" placeholder = "sign up" class = "Last name">
        <div>Username</div>
        <input type = "text" placeholder = "sign up" class = "Username">
        <div>Email</div>
        <input type = "text" placeholder = "sign up" class = "Email">
        <div>Address</div>
        <div>Street</div>
        <input type = "text" placeholder = "sign up" class = "Street">
        <div>Barangay</div>
        <input type = "text" placeholder = "sign up" class = "Barangay">
        <div>City</div>
        <input type = "text" placeholder = "sign up" class = "City">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </div>
            
        </div>
        
        
        <div class="container">
            <?php
                include("api.php");
                $data = getPosts();
                echo $data;
            ?>    
        </div>
        <script>
            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })</script>
            
            $('#signupme').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })</script>
    </body>
    
    <?php
        if(isset($_POST["subme"])){
            
        }
    ?>
</html>
