<?php
    include('../examples/api.php');
    function createUser(){
        if(isset($_POST['submit'])){
            $users = getUsersData();

            $newdata = array(
                "id" => $users[count($users)-1]["id"]+1,
                "name" => $_POST['fname']." ".$_POST['lname'],
                "username"=> $_POST['usename'],
                "email"=> $_POST['email'],
                "address" => array(
                  "street" =>$_POST['streets'],
                  "barangay"=> $_POST['barang'],
                  "city"=>$_POST['cities']
                )
            );

            $indic = 0;
            foreach($users as $use){
                if($use['email'] == $newdata['email']){
                    $indic = 1;
                    break;
                }
            }

            if($indic == 0){
                $users[] = $newdata;
                $realdata = json_encode($users);
                file_put_contents('../data/users.json',$realdata);

                return 1;
            }
            else{
                return 2;
            }

        }
    }

    function logmeIn(){
        if(isset($_POST["logsub"])){
            $allusers = getUsersData();
            foreach($allusers as $all){
                if($all["email"] == $_POST["logemail"]){
                    $logme = json_decode(file_get_contents("../data/holdlog.json"));
                    $nn = array(
                        "id" => $all["id"],
                        "name" => $all["name"],
                        "username"=> $all["username"],
                        "email"=> $all["email"],
                        "address" => array(
                          "street" =>$all["address"]["street"],
                          "barangay"=> $all["address"]["barangay"],
                          "city"=>$all["address"]["city"]
                        )
                    );
                    $logme[0] = $nn;
                    $ff = json_encode($logme);
                    file_put_contents("../data/holdlog.json",$ff);

                    return 1;
                }
            }
            return 2;
        }
    }

    function createPost(){
        $posts = json_decode(file_get_contents("../data/posts.json"));
        if(isset($_POST["subpost"])){
            $newdd = array(
                "uid" => (int)$_POST["useridd"], 
                "id" => ($posts[count($posts)-1]->id) + 1, 
                "title"=>$_POST["titlehold"], 
                "body"=>$_POST["bodyhold"]
            );

            $posts[count($posts)] = $newdd;

            file_put_contents("../data/posts.json",json_encode($posts));
            echo "<script>window.location.href = '../MyForumApp/afterlogin.php'</script>";
        }
    }

    function replybb(){
        $allrep = json_decode(file_get_contents("../data/comments.json"));

        if(isset($_POST["repnow"])){
            $newp= array(
                "postId"=> (int)$_POST["postid"],
                "id"=>($allrep[count($allrep)-1]->id)+1,
                "name"=> $_POST["name"],
                "email"=>$_POST["email"],
                "body"=>$_POST["comment"]
            );
            $allrep[count($allrep)] = $newp;

            file_put_contents("../data/comments.json",json_encode($allrep));
            echo "<script>window.location.href = '../MyForumApp/afterlogin.php'</script>";
        }
    }
    function deletepost(){
        $allpostl = json_decode(file_get_contents("../data/posts.json"));
        $allcom = json_decode(file_get_contents("../data/comments.json"));

        if(isset($_POST["delconfirm"])){
            $another = array();
            foreach($allpostl as $ap){
                if($ap->id == (int)$_POST["pid"]){
                }
                else{
                    array_push($another,$ap);
                }
            }
            $indme = 0;
            file_put_contents("../data/posts.json",json_encode($another));

            $forcom = array();
            foreach($allcom as $ac){
                if($ac->postId == (int)$_POST["pid"]){

                }
                else{
                    echo $ac->postId;
                    array_push($forcom,$ac);
                }
            }

            file_put_contents("../data/comments.json",json_encode($forcom));
            echo "<script>window.location.href = '../MyForumApp/afterlogin.php'</script>";


        }
    }
    function repdel(){
        $showcom = json_decode(file_get_contents("../data/comments.json"));
        if(isset($_POST["commentdelconfirm"])){
            $newarr = array();
            foreach($showcom as $sc){
                if($sc->id == $_POST["cid"]){

                }
                else{
                    array_push($newarr,$sc);
                }
            }

            file_put_contents("../data/comments.json",json_encode($newarr));
            echo "<script>window.location.href = '../MyForumApp/afterlogin.php'</script>";
        }
    }

?>