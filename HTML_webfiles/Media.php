<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Template for your web application</title>
    <link rel="stylesheet" type="text/css" href="FINALSTYLESHEET2.css" />
</head>

<style>
    #imgcontainers {
          display: flex;
          flex-wrap: wrap;
    }

    #imgcontainers .image {
          width: 50%;
    }

    #imgcontainers img {
           width: calc(100% - (20px * 2));
          margin: 20px;
     }
    #imgcontainers img:hover {
       transition: border-radius 1s ease;
       border-radius:50%;
       border: 3px solid black;
    }
     #home-pic	{
           margin:10px;
           width:90%;
           height:95%;
      }
      #quick{
           font-family: "Times New Roman", Times, serif;
           font-weight:bold;
        color:black;
         text-align:center;
         text-decoration:underline;
         border:none;
      }
      #quick:hover {
              color:white;
        }

</style>

<body bgcolor="ffffff" data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed=""> 

    <header id="top-page">
		
		<h2>InstaTok</h2>
		</header>

        <div class="navbar">
			<ul class="centeringNav">
                <li><a href="http://css1.seattleu.edu/~bphilipose/Main.html">Main Page</a></li>
				<li>
                    <div class="dropdown">
                        <button class="dropbtn">Relations</button>
                        <div class="dropdown-content">
                            <a href="http://css1.seattleu.edu/~bphilipose/User.php">User</a>
                            <a href="http://css1.seattleu.edu/~bphilipose/Playlist.php">Playlist</a>
                            <a href="http://css1.seattleu.edu/~bphilipose/Media.php">Media</a>
                            <a href="http://css1.seattleu.edu/~bphilipose/Tags.php">Tags</a>
                            <a href="http://css1.seattleu.edu/~bphilipose/Downloading.php">Downloading</a>
                            <a href="http://css1.seattleu.edu/~bphilipose/Explore_Page.php">Explore Page</a>
                            <a href="http://css1.seattleu.edu/~bphilipose/Linked_to.php">Linked to</a>
                            <a href="http://css1.seattleu.edu/~bphilipose/Comments.php">Comments</a>
                        </div>
                    </div>   
                </li>
				<li>
                <div class="dropdown">
                    <button class="dropbtn">Queries</button>
                    <div class="dropdown-content">
                        <a href="http://css1.seattleu.edu/~bphilipose/Query1.php">Query 1</a>
                        <a href="http://css1.seattleu.edu/~bphilipose/Query2.php">Query 2</a>
                        <a href="http://css1.seattleu.edu/~bphilipose/Query3.php">Query 3</a>
                        <a href="http://css1.seattleu.edu/~bphilipose/Query4.php">Query 4</a>
                        <a href="http://css1.seattleu.edu/~bphilipose/Query5.php">Query 5</a>
                    </div>
                </div>
                </li>
				<li><a href="https://css1.seattleu.edu/~bphilipose/ROC.php">Ad-hoc Query</a></li>
            </ul>
        </div>
<font face="times" size="3">
<hr noshade="noshade" size="2">


<b>Team Members:</b> &lt;Benjamin Philipose, Jared Callero, Dr. Pham, Khoa Nguyen&gt;<br>
<br>

<div id="main-container">
    <content class="content-container">
        <div id="miniexp">
			<div class="mini-header" style="font-size:40px;">Media Table</div>
            <?php include "media1.php"?>
        </div>
    </content>
</div>
</html>