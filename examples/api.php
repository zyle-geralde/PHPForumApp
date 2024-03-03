<?php


// users JSON
$usersJSON = '../data/users.json';

// posts JSON
$postsJSON = '../data/posts.json';

// comments JSON
$commentsJSON = '../data/comments.json';



// function get users from json
function getUsersData() {
    global $usersJSON;
    if (!file_exists($usersJSON)) {
        echo 1;
        return [];
    }

    $data = file_get_contents($usersJSON);
    return json_decode($data, true);
}

// function get posts from json
function getPostsData() {
    global $postsJSON;
    if (!file_exists($postsJSON)) {
        echo 1;
        return [];
    }

    $data = file_get_contents($postsJSON);
    return json_decode($data, true);
}

// function get comments from json
function getCommentsData() {
    global $commentsJSON;
    if (!file_exists($commentsJSON)) {
        echo 1;
        return [];
    }

    $data = file_get_contents($commentsJSON);
    return json_decode($data, true);
}


function getPosts(){

    $userlogged = json_decode(file_get_contents("../data/holdlog.json"));
    $reallof = $userlogged[0]->name;
    $realluse = $userlogged[0]->username;
    
    $users = getUsersData();
    
    $posts = getPostsData();
    
    $comments = getCommentsData();
    
    $postsarr = array();
    
    foreach($posts as $post){
        foreach($users as $user){
            if($user['id'] == $post['uid']){
                $post['uid'] = $user;
                
                break;
            }
        }
        $post['comments'] = array();
        foreach($comments as $comment){
            if($post['id']==$comment['postId']){
                $post['comments'][] = $comment;
            }
        }
        $postarr[] = $post;
    }
    $suredel= "";
    $suredlerep = "";
    $str = "";
    foreach($postarr as $parr){
        if($reallof == $parr['uid']['name']){
            $suredel = '<button type="button" class="btn btn-primary repme" data-toggle="modal" data-target="#replymodal" style = "margin-right: 10px;">
                    Reply
                </button>
                <button type="button" class="btn btn-primary delpp" data-toggle="modal" data-target="#delmodel">
                    Delete Post
            </button>';
        }
        else{
            $suredel = '<button type="button" class="btn btn-primary repme" data-toggle="modal" data-target="#replymodal">
                    Reply
                </button>';
        }
 $str.='<!-- start of post -->
    <div class="row">
        <div class="col-md-12">
            <div class="post-content">

              <div class="post-container">
                <img src="https://ui-avatars.com/api/?rounded=true&name='.$parr['uid']['name'].'" alt="user" class="profile-photo-md pull-left">
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.html" class="profile-link">'. $parr['uid']['name'] .'</a></h5>
                  </div>
                  <div class="reaction">
                    <!--<a class="btn text-green"><i class="fa fa-thumbs-up"></i> 13</a>
                    <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>-->
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <div class = postid style = "color:white;">'.$parr['id'].'</div>
                    <h3>'.$parr['title'].'</h3>
                    <p>'.$parr['body'].'</p>
                    <!-- Button trigger modal -->
                    <div style = "display: flex; flex-direction: row;" class = "appme">'.$suredel.'
                        <!--<button type="button" class="btn btn-primary repme" data-toggle="modal" data-target="#replymodal">
                            Reply
                        </button>
                        <button type="button" class="btn btn-primary delpp" data-toggle="modal" data-target="#delmodel">
                            Delete Post
                        </button>-->
                    </div>
                  </div>
                  <div class="line-divider"></div>';
        foreach($parr['comments'] as $comm){
                if($comm['name'] == $realluse){
                    $suredlerep = '<button type="button" class="btn btn-primary repdel" data-toggle="modal" data-target="#repdelmodel">
                    Delete Reply
                </button>';
                }
                else{
                    $suredlerep = "<div></div>";
                }
                $str .=  '<div class="post-comment">
                    <img src="https://ui-avatars.com/api/?rounded=true&name='.$comm['name'].'" alt="" class="profile-photo-sm">
                    <p style = "margin-right: 10px;">'.$comm['body'].'</p>'.$suredlerep.'
                    <div style = "opacity: 0;">'.$comm['id'].'</div>
                  </div>';
        }     
                  
    $str.='</div>
              </div>
            </div>
        </div>
    </div>';
    }
return $str;
}

?>