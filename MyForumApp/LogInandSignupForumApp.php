<!DOCTYPE html>
<html>
    <head>
        <title>
            Forum App
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <style>
            .regist{
                height: 500px; 
                width: 800px; 
                background-color: white; 
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                box-shadow: -10px -10px 10px rgba(0, 0, 0, 0.486);
            }
            .signdiv{
                flex: 1; 
                background-color:violet;
                box-shadow: inset 0px 100px 150px rgb(228, 127, 183); 
                height: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .opensign{
                background-color: rgb(114, 63, 176);
                color: white;
                transition: 0.2s;
            }
            .opensign:hover{
                background-color: rgb(158, 109, 218);
            }
            .mm{
                margin-top: 10%;
            }
            #firstname,#lastname,#username,#emailadd{
                border-color: rgb(210, 207, 207);
                border-width: 1px;
                border-style: solid;
                border-radius: 3px;
                padding: 5px 8px;
            }
            #street,#barangay,#city{
                width: 100px;
                border-color: rgb(210, 207, 207);
                border-width: 1px;
                border-style: solid;
                border-radius: 3px;
                padding: 5px 8px;
            
            }
            #street,#barangay{
                margin-right: 20px;
            }
            .succ{
                position: absolute;
                height: 75px;
                width: 250px;
                background-color: rgb(255, 255, 255);
                top: -200px;
                box-shadow: inset 10px 10px 5px rgb(249, 249, 249);
                border-radius: 15px;
                border-style: solid;
                border-color: rgb(189, 189, 189);
                /*animation-name: flow;*/
                animation-duration: 1.5s;
                color: black;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                font-size: 15px;
                font-weight: bold;
            }
            @keyframes flow{
                0%{
                    top: -200px;
                }
                25%{
                    top: 50px;
                }
                50%{
                    top: 50px;
                }
                100%{
                    top: -200px
                }
            }
            #emaillog{
                border-style: solid;
                border-color: rgb(188, 188, 188);
                border-width: 1px;
                padding: 3px 10px;
                width: 200px;
                border-top: none;
                border-right: none;
                border-left: none;
            }
            #Logmenow{
                margin-top: 20px;
                background-color: rgb(114, 63, 176);
                color: white;
                transition: 0.2s;
            }
            #Logmenow:hover{
                background-color: rgb(158, 109, 218);
            }
        </style>

    </head>
    <body style="background-color: rgb(251, 78, 161); position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px;
        display: flex; flex-direction: row; align-items: center; justify-content: center; font-family: 'Dosis', 
        sans-serif; color: white; box-shadow: inset 0px 300px 500px rgb(251, 78, 113);">
        <div class = regist>
            <div class = signdiv>
                <div style="font-size: 30px; font-weight: bold;">Welcome to the App</div>
                <div style="height: 125px;width: 125px; border-color: white; border-radius: 300px; 
                    border-style: solid; position: relative; overflow: hidden;margin-top: 40px; margin-bottom: 40px;">
                    <div style="position: absolute; height: 60px;width: 60px; border-color: white; border-radius: 300px;
                        border-style: solid; top: 10px; right: 30px;"></div>
                    <div style="position: absolute; height: 90px;width: 90px; border-color: white; border-radius: 300px;
                        border-style: solid; bottom: -45px; left: 15px;"></div>
                </div>
                <div style="font-size: 18px; margin-bottom: 20px;">Become a registered user. Sign up now.</div>

                <button type="button" class="btn opensign" data-toggle="modal" data-target="#exampleModal">
                    Sign Up
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                style="color: black;">
                    <div class="modal-dialog mm" role="document">
                        <div class="modal-content" style="width: 550px;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">REGISTRATION FORM</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                    <div style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">PERSONAL INFORMATION</div>
                                    <div>
                                        <label for="firstname" style="color: black;">First Name: </label>
                                        <input type="text" id="firstname" placeholder = "ex. John" name = "fname" required>

                                        <label for="lastname" style="color: black; margin-left: 30px; margin-bottom: 25px;">Last Name: </label>
                                        <input type="text" id="lastname" placeholder = "ex. De La Cruz" name = "lname" required>

                                        <label for="username" style="color: black; margin-right: 4px;">Username: </label>
                                        <input type="text" id="username" placeholder = "ex. jonh34yp" name = "usename" required>

                                        <label for="emailadd" style="color: black; margin-left: 30px; margin-right: 30px;">Email: </label>
                                        <input type="text" id="emailadd" placeholder = "ex. john@mmm.com" name = "email" required>
                                    </div>

                                    <div style="font-size: 20px; font-weight: bold; margin-bottom: 10px; margin-top: 20px;">ADDRESS</div>
                                    <div>
                                        <label for="street" style="color: black;">Street: </label>
                                        <input type="text" id="street" placeholder = "ex. Aquino" name = "streets" required>

                                        <label for="barangay" style="color: black;">Barangay: </label>
                                        <input type="text" id="barangay" placeholder = "ex. Mango" name = "barang" required>

                                        <label for="city" style="color: black;">City: </label>
                                        <input type="text" id="city" placeholder = "ex. Cebu" name = "cities" required>

                                    </div>
                                    <div class="modal-footer" style="margin-top: 20px;">
                                        <button type="submit" name = "submit" class="btn btn-primary subme">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="flex: 1; height: 100%; display:flex; flex-direction: column; justify-content: center; position: relative;
            overflow: hidden;">
                <div style="margin-bottom: 30px;">
                    <div style="color: black; margin-left: 30px; font-size: 20px; font-weight: bolder;">
                        Log In Form
                    </div>
                    <div style="width: 60px; height: 3px; background-color: rgb(114, 63, 176); margin-left: 30px;"></div>
                </div>
                <div style="display: flex; flex-direction: column; align-items: center;">
                    <form style="display: flex; flex-direction: column; align-items: center; justify-content: center;"
                    method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
                            <label style="height:100%; ">
                                <div style="height: 100%; width: 35px; background-color: pink;position: relative; overflow: hidden;
                                background-color: rgb(114, 63, 176); border-radius: 2px; margin-right: 10px;">
                                    <div style="position: absolute; height: 16px;width: 16px; border-color: white; border-radius: 300px;
                                        border-style: solid; top: 4px; right: 10px; border-width: 2px;"></div>
                                    <div style="position: absolute; height: 23px;width: 23px; border-color: white; border-radius: 300px;
                                        border-style: solid; bottom: -13px; left: 5px; border-width: 2px;"></div>
                                </div>
                            </label>
                            <input type="text" id="emaillog" placeholder = "Enter email address" name = "logemail"required>
                        </div>
                        <div>
                            <button type = "submit" id = "Logmenow" class = "btn" name = "logsub">Log In</button>
                        </div>
                    </form>
                    <div style="color: rgb(253, 94, 200); pointer-events: none; margin-top: 20px;">Don't have an account? Sign up now</div>
                </div>
                <div style="position: absolute; height: 200px; width: 200px; background-color: rgb(251, 78, 113); top:-100px;
                    border-radius: 500px; left: 100px;">
                </div>
                <div style="width: 400px; height: 10px; background-color: rgb(251, 78, 113);
                bottom: 10px; position: absolute;">
                </div>
            </div>

            <div class = "succ">
                
            </div>
        </div>
        

        <?php
            include('myapi.php');
            $ind = createUser();
            if($ind == 1){
                echo "<script>$('.succ').css({'animation-name':'flow'});
                $('.succ').text('Sign Up Successful');</script>";
            }
            else if($ind == 2){
                echo "<script>$('.succ').css({'animation-name':'flow'});
                $('.succ').text('Email is Present');</script>";
            }

            $ind =logmeIn();
            if($ind == 1){
                echo "<script>$('body').text('');var dd = document.querySelector('body')
                dd.style = ''; window.location.href = '../MyForumApp/afterlogin.php'</script>";
            }
            else if($ind == 2){
                echo "<script>alert('Invalid email')</script>";
            }
        ?>

        <script>
            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })
            
        </script>
    </body>
</html>