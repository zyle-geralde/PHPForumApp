<!DOCTYPE html>
<html>
    <head>
        <title>Forum App</title>
        <style>

        </style>
        <link rel='stylesheet' href='styles.css'>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body style=" background-color: rgb(253, 208, 215);">
        <div style="background-color: rgb(251, 78, 113); display: flex; flex-direction: row; align-items: center; justify-content: space-between;
        box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.401); margin-bottom: 40px;">
            <div style="display: flex; flex-direction: row; justify-content: center; align-items: center;">

                <div style="height: 125px;width: 125px; border-color: white; border-radius: 300px; 
                border-style: solid; position: relative; overflow: hidden;margin-top: 20px; margin-bottom: 20px; background-color: rgb(238, 130, 191);
                margin-left: 30px;">
                    <div style="position: absolute; height: 60px;width: 60px; border-color: white; border-radius: 300px;
                    border-style: solid; top: 10px; right: 30px;"></div>
                    <div style="position: absolute; height: 90px;width: 90px; border-color: white; border-radius: 300px;
                    border-style: solid; bottom: -45px; left: 15px;"></div>
                </div>

                <div style="display: flex; flex-direction: column; margin-left: 40px;">
                    <div style="display: flex; flex-direction: row; align-items: center; margin-left: 8px;
                    margin-bottom: 20px;">
                        <div style="color: rgb(255, 221, 227); font-size: 20px; font-weight: bold; margin-right: 20px;">Username: </div>
                        <div style="color: white;" class = "usernameh">jjjj</div>
                    </div>
                    <div style="display: flex; flex-direction: row; align-items: center; margin-left: 8px;">
                        <div style="color: rgb(255, 221, 227); font-size: 20px; font-weight: bold; margin-right: 20px;">UserId: </div>
                        <div style="color: white;" class = "idh">0001</div>
                    </div>
                </div>
            </div>
            <div style = "margin-right: 30px;">
                <div class = "btn btn-light">
                    <a href = "../MyForumApp/LogInandSignupForumApp.php" style = "text-decoration: none; color: black;">Log out</a>
                </div>
            </div>
        </div>

        <div style = "display: flex; flex-direction: row; justify-content: center; margin-bottom: 70px;">
            <div style="background-color: rgb(255, 139, 189); padding: 10px 30px; border-radius: 20px;">
                <div style="display: flex; flex-direction: row; justify-content: center;">
                    <form style="display: flex; flex-direction: column; align-items:center;" method="post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
                        <label>UserId: </label>
                        <input type = "text" class = "useridme" style="width: 30px;" style="margin-bottom: 10px;" readonly name = "useridd">
                        <label>Enter title: </label>
                        <input type = "text" name = "titlehold" class = "titleme" required style="margin-bottom: 10px;">

                        <label>Enter body: </label>
                        <textarea name="bodyhold" id="bodyme" cols="70" rows="5" placeholder="Enter text" required style="margin-bottom: 10px;"></textarea>

                        <button class = "btn btn-primary subbut" type = "submit" name = "subpost" >Submit</button>
                    </form>
                </div>
            </div>
        </div>

                <!-- Modal -->
<div class="modal fade" id="replymodal" tabindex="-1" role="dialog" aria-labelledby="repLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="repLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body" style="display: flex; flex-direction: column;">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style="display: flex; flex-direction: column;">
            <label>Post ID</label>
            <input type= text name = "postid" readonly class = "postidme"></input>

            <label>Name</label>
            <input type= text name = "name" readonly class = "postname"></input>

            <label>Email</label>
            <input type= text name = "email" readonly class = "postemail"></input>

            <label>Comment</label>
            <textarea name = "comment" required></textarea>

            <button type="submit" class="btn btn-primary come" name = "repnow">Submit</button>
        </form>
    </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="delmodel" tabindex="-1" role="dialog" aria-labelledby="delmodelModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delmodelModal">Delete Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style = "display: flex; flex-direction: column;">
            <label style="margin-bottom: 10px;">Post ID</label>
            <input type="text" name = "pid" id = "postdel" readonly style = "width: 30px; margin-bottom: 30px;">
            <button type="submit" name = "delconfirm" id = "delconfirm" class="btn btn-primary">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="repdelmodel" tabindex="-1" role="dialog" aria-labelledby="repdelmodelModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="repdelmodelModal">Delete Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" style = "display: flex; flex-direction: column;">
            <label style="margin-bottom: 10px;">Comment ID</label>
            <input type="text" name = "cid" id = "commentdel" readonly style = "width: 30px; margin-bottom: 30px;">
            <button type="submit" name = "commentdelconfirm" id = "commentdelconf" class="btn btn-primary">Confirm</button>
        </form>
      </div>
    </div>
  </div>
</div>

        <div style="width: 75%; margin:auto;">
            <?php
                include('../MyForumApp/myapi.php');
                echo getPosts();
                createPost();
                replybb();
                deletepost();
                repdel();
            ?>
        </div>
        

        <!--<div style="display: flex; flex-direction: column; align-items: center;">
            <div style="display: flex; flex-direction: column;">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
                    <button class = "btn btn-primary" name = "refresh">Refresh Posts</button>
                </form>
                <div style="background-color: white; width: 1000px;">
                    <div style="display: flex; flex-direction: row;">  
                        <div style="height: 70px;width: 70px; border-color: white; border-radius: 300px; 
                        border-style: solid; position: relative; overflow: hidden;margin-top: 10px; margin-bottom: 10px; background-color: rgb(238, 130, 191);
                        margin-left: 30px;">
                            <div style="position: absolute; height: 35px;width: 35px; border-color: white; border-radius: 300px;
                            border-style: solid; top: 5px; right: 15px;"></div>
                            <div style="position: absolute; height: 50px;width: 50px; border-color: white; border-radius: 300px;
                            border-style: solid; bottom: -30px; left: 8px;"></div>
                        </div>
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex; flex-direction: row;">
                                <div style="margin-right: 10px; font-size: 20px;">YOUR NAME</div>
                                <div>102</div>
                            </div>
                            <div>
                                This is a sample Post
                            </div>
                            <div>
                                This is the body
                            </div>
                            <div>
                                Replies
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <script>
            var indx = 0;
            var holde;
            $(document).ready(function(){
                $.ajax({
                    url:"../data/holdlog.json",
                    method:"POST",
                    success: function(e){
                        $(".usernameh").text(e[0]["username"].toString());
                        $(".idh").text(e[0]["id"].toString());
                        $(".useridme").val($(".idh").text());
                        holde = e[0]["email"];
                        var bb = document.querySelector("body")
                        bb.style = " background-color: rgb(253, 208, 215);";
                    }
                })

                $('#replymodal').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                })

                $.ajax({
                    url:"../data/holdlog.json",
                    method:"POST",
                    success:function(e){
                        console.log(e);
                        var holdpost= document.querySelectorAll(".profile-link");
                        var app = document.querySelectorAll(".appme");
                        for(bb of holdpost){
                            var grab = bb.parentElement.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.firstElementChild.innerText;
                            console.log(grab);
                            if(bb.innerText === e[0]["name"]){
                                /*var dvcc = document.createElement("button");
                                dvcc.type = "button";
                                dvcc.setAttribute("data-toggle","modal")
                                dvcc.setAttribute("data-target","#delmodel")
                                dvcc.setAttribute("class","btn");
                                dvcc.classList.add("btn-primary");
                                dvcc.classList.add("delpp")
                                dvcc.innerText = "Delete Now";
                                app[indx].append(dvcc)*/
                            }
                            else{
                            }
                            indx++;
                        }
                        indx = 0;
                        
                    }
                })

                $(".repme").click(function(){
                    console.log(this.parentElement.parentElement.firstElementChild);
                    $(".postidme").val(this.parentElement.parentElement.firstElementChild.innerText);
                    $(".postname").val($(".usernameh").text());
                    $(".postemail").val(holde);
                })

                $('#delmodel').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                })

                $('#repdelmodel').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                })

                $(".delpp").click(function(e){
                    console.log(this.parentElement.parentElement.firstElementChild.innerText)
                    $("#postdel").val(this.parentElement.parentElement.firstElementChild.innerText);
                })

                $(".repdel").click(function(e){
                    //console.log(this.nextElementSibling.innerText)
                    $("#commentdel").val(this.nextElementSibling.innerText)
                })

                /*for(bb of holdpost){
                    if(bb.innerText == )
                }*/
            })
        </script>
    </body>
</html>