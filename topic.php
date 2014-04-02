<?php
session_start();
// if(!isset($_SESSION['user']))
// {
// 	header("Location: login.php");
// 	exit(1);
// }

 	//$_SESSION['communityid']=$_GET['communityid'];
	//echo $_SESSION['communityid'];

$_SESSION['communityid']=1;
$_SESSION['user']="\"nswe@gmail.com\"" ;

include 'api.php';

$result1 = mysql_query("SELECT * from community where id =". $_SESSION['communityid']);
$row1 = mysql_fetch_array($result1);
if($row1)
{
    $communityname = $row[name];
}

if(isset($_POST['newtopic']))
{

  $name = $_POST['topic'];
  $communityid = $_SESSION['communityid'] ;
  $author = $_SESSION['user'];
  $result = mysql_query("INSERT into POSTS(name,communityid,author) values ('". $name ."',".$communityid.",".$author.")");
}

?>

 <html>
  <html>
    <head>
      <title>Geekster</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="style.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
      <script type="text/javascript" src="js/cufon-yui.js"></script>
      <script type="text/javascript" src="js/arial.js"></script>
      <script type="text/javascript" src="js/cuf_run.js"></script>

      <link rel="stylesheet" href="http://static1.meetupstatic.com/0560321913878657420/style/chapterbase.css" type="text/css" />
      <link rel="stylesheet" href="http://static2.meetupstatic.com/041222114214907467412/style/module.css" type="text/css" />
      <link rel="stylesheet" type="text/css" media="print" href="http://static1.meetupstatic.com/3625510117719833664301118/style/print.css" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.meetup.com/pinterestmeetup/events/rss/Silicon+Valley+Pinterest+Meetup/" />
    <link rel="stylesheet" href="http://static1.meetupstatic.com/449131316923795040/style/meetup_jquery_ui.css" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

    <style id="jsstyle" type="text/css"></style>

  </head>
  <body>

    <div class="main">
      <div class="main_resize">
        <div class="header">
          <div class="logo">
            <h1><a href="#"><span>Geek</span>Ster</a></h1>
            <h2>An online community for all the awesome geeks out there!</h2>        
          </div>

          <div class="hbg"><img src="img/geekgrp.jpg" width="400" height="120" alt="" align= "right"/></div>
          <div class="clr"></div>
          <div class="menu_nav">
            <ul>
              <li ><a href="newsfeed.php">NewsFeed</a></li>
              <li ><a href="profile.php">Profile</a></li>
              <li ><a href="findgroups.php">Find Groups</a></li>
              <li ><a href="creategroup.php">Create a Group</a></li>
              <li><a href="logout.php">Log out</a></li>
            </ul>
            <div class="clr"></div>
          </div>

          <div id="C_contextHead">
            <div id="C_contextHeadBody">
              <div class="hbg">
                <h1 id="bannerGroupName" width="923" height="291">
                  <span><?php echo $communityname;  ?></span>
                </h1>
              </div>
            </div>
          </div>

          <div class="clr"></div>
          <ul class="nav nav-tabs">
            <li ><a href="#about">About</a></li>
            <li class="active"><a href="#wall">Wall</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="leavegroup.php">Leave the Group</a></li>
          </ul>
          <div class="clr"></div>
          <br></br>

          <div>
            <form class="posttopic">
              <textarea name="topic" style="width: 65em;" title="What&#039;s on your mind?" placeholder="What&#039;s on your mind?" role="textbox" autocomplete="off" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead_list_uzxrovk15">What&#039;s on your mind?</textarea>
              <button type="submit" class="btn" href="#" name="newtopic">Post</button>
            </form>
          </div>
          <p></p>
          <h4>Discussion Topics</h4>
          <div>
            <?php

            $i=0;
            $result = mysql_query("select pt.content,p.firstname,p.lastname from topic t,posts pt,profile p where t.communityid =" . $_SESSION['communityid'] . " and t.author=p.email and t.topicid=pt.topicid Order by t.time DESC");
        

            while($row = mysql_fetch_array($result))
            {
              echo "<b>".$row[firstname]." ".$row[lastname]."</b>"."<br></br>";
              $_SESSION['topic']=$row[content];
              echo "<a href=\"topic.php\">".$row[content]."<br></br>"."<hr width=\"100%\" >"."</a>";
            }
  
          ?>
          </div>

      </div>
    </div>
  </div>
</body>
</html>