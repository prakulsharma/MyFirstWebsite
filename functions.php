


<!--....................................................ADD POSTS..............................-->

<?php
 include("header.php");

function add_post($userid,$body){
	global $con;
    $sql = "insert into posts (user_id, body, stamp) 
            values ($userid, '". mysqli_real_escape_string($con,$body). "',now())";
    $result = mysqli_query($con,$sql);
}


//......................................................SHOW POSTS.................................


function show_posts($userid){
	global $con;
    $posts = array();
 
    $sql = "select firstname,surname, body, stamp from posts
	JOIN users 
	on posts.user_id = users.user_id
     where users.user_id = '$userid' 
	 order by stamp desc";
    $result = mysqli_query($con,$sql);
 
    while($data = mysqli_fetch_object($result)){
        $posts[] = array(   'stamp' => $data->stamp, 
                            'userid' => $userid, 
							'firstname' => $data->firstname,
                            'body' => $data->body,
                            'surname' => $data->surname
                    );
    }
    return $posts;
}

//........................................................SHOW ALL THE USERS.................................

function show_users(){
	
	global $con;
    $users = array();
    $sql = "select user_id, firstname, surname from users where 1 order by user_id";
    $result = mysqli_query($con,$sql);
 
    while ($data = mysqli_fetch_object($result)){
        $users[] = array(	'user_id' => $data->user_id,
							'firstname' => $data->firstname,
                            'surname' => $data->surname
                    );
    }
    return $users;
}

//......................................................FOLLOWING..........................................
//...............this function just checks if user is in following or not and returns user_id in a array....
function following($userid){
	
	global $con;
    $users = array();
 
    $sql = "select distinct user_id from following
            where follower_id = '$userid'";
    $result = mysqli_query($con,$sql);
 
    while($data = mysqli_fetch_object($result)){
        array_push($users, $data->user_id);
 
    }
    return $users; 
}

//......................................................CHECK COUNT.................................

function check_count($first, $second){
	
	global $con;
    $sql = "select count(*) from following 
            where user_id='$second' and follower_id='$first'";
    $result = mysqli_query($con,$sql);
 
    $row = mysqli_fetch_row($result);
    return $row[0];
 
}
 
function follow_user($me,$them){
	
	global $con;
    $count = check_count($me,$them);
 
    if ($count == 0){
        $sql = "insert into following (user_id, follower_id) 
                values ($them,$me)";
 
        $result = mysqli_query($con,$sql);
    }
}
 
 
function unfollow_user($me,$them){
	
	global $con;
    $count = check_count($me,$them);
 
    if ($count != 0){
        $sql = "delete from following 
                where user_id='$them' and follower_id='$me'
                limit 1";
 
        $result = mysqli_query($con,$sql);
    }
}


//...................................................SHOW FOLLOWERS.......................................................

function show_followers($userid){
	
	global $con;
    $users = array();
    $sql = "select follower_id from following 
			where user_id=$userid";
    $result = mysqli_query($con,$sql);
	
	$sql2 = "select user_id, firstname, surname from users
			where user_id=";
 
    while ($data = mysqli_fetch_object($result)){
        $users[] = array(	'user_id' => $data->user_id,
							'firstname' => $data->firstname,
                            'surname' => $data->surname
                    );
    }
    return $users;
}


?>