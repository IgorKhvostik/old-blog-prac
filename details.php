<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIDEOSxLULZ</title>

<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/style6.css" />
<![endif]-->
    <!--[if IE 7]>
        <link href="css/style7.css" rel="stylesheet" type="text/css">
    <![endif]-->
<style type="text/css"> 
 
 /* Design by Studio7designs.com */
 
 /*
  USAGE:
  Copy and paste this one line into your site's CSS stylesheet.
  Add comma-separated CSS selectors / element names that have transparent PNGs.
  The path to the HTC is relative to the HTML file that includes it.
  See below for another method of activating the script without adding CSS here.
 */
 
 img, div, input { behavior: url("iepngfix.htc") }
</style>
<script type="text/javascript">
 //<![CDATA[
 
 // If you don't want to put nonstandard properties in your stylesheet, here's yet
 // another means of activating the script. This assumes that you have at least one
 // stylesheet included already in the document above this script.
 // To activate, delete the CSS rules above and uncomment below (remove /* and */ ).
 
 /*
 if (document.all && /MSIE (5\.5|6)/.test(navigator.userAgent) &&
  document.styleSheets && document.styleSheets[0] && document.styleSheets[0].addRule)
 {
  document.styleSheets[0].addRule('*', 'behavior: url(iepngfix.htc)');
  // Feel free to add rules for specific elements only, as above.
  // You have to call this once for each selector, like so:
  //document.styleSheets[0].addRule('img', 'behavior: url(iepngfix.htc)');
  //document.styleSheets[0].addRule('div', 'behavior: url(iepngfix.htc)');
 }
 */
 
 
 // Here's another script that disables all PNGs in IE when the page is printed.
 /*
 if (window.attachEvent  && /MSIE (5\.5|6)/.test(navigator.userAgent))
 {
  function printPNGFix(disable)
  {
   for (var  i = 0; i < document.all.length; i++)
   {
    var e = document.all[i];
    if (e.filters['DXImageTransform.Microsoft.AlphaImageLoader'] || e._png_print)
    {
     if (disable)
     {
      e._png_print = e.style.filter;
      e.style.filter = '';
     }
     else
     {
      e.style.filter = e._png_print;
      e._png_print = '';
     }
    }
   }
  };
  window.attachEvent('onbeforeprint',  function() { printPNGFix(1) });
  window.attachEvent('onafterprint',  function() { printPNGFix(0) });
 }
 */
 
 //]]>
 </script>
</head>
<body>
<!--wrapper starts-->
<div id="wrapper">
    <!--container starts-->
    <div id="container">
        <!--ltcontent starts-->
        <div id="ltcontent">
            <!--hdlogo starts-->
            <div  align="center">
                <a class="picture-logo" href="index.php"> <img id="mainpic" src="images/hipsterlogo.png" alt=""/></a>
            </div>
            <!--hdlogo ends-->
            <!--avout starts-->
            <div id="about">
                <div class="lthead" align="center"><span class="tphead">About Author Bio</span></div>
                <div class="ltdetail">
                    <span class="me">Ukrainian back-end developer , 21 y.o. , currently living in Kharkiv. </span>
                </div>
                <div id="social">
                    <div class="lthead"><span>my social networks</span></div>
                    <div class="icons">
                        <a  href="https://www.facebook.com" target="_blank"><img class="little-img" src="images/facebook.svg" alt="" /></a>
                        <a href="https://www.linkedin.com/" target="_blank"><img class="little-img linkedin" src="images/linkedin.svg" alt="" /></a>
                        <a href="https://twitter.com" target="_blank"><img class="little-img" src="images/twitter.svg" alt="" /></a>
                        <a href="https://vk.com/fxfxfxfxf" target="_blank"><img class="little-img vk" src="images/vk.png" alt="" /></a>
                    </div>
                </div>
            </div>
            <!--about ends-->
        </div>
            <!--ltcontent ends-->
            <!--rtcontent starts-->
            <div id="rtcontent">
           		
                <!--head starts-->
                <div class="head head-det">VIDEOSxLULZ</div>
                <!--head ends-->

                <!--menulinks starts -->
            
                <div class="clear"></div>
            <!--menulinks ends -->
            <!--documentarty starts-->
                <?php
                include_once "connection.php";


                $post_views_upd=mysqli_query($connection, "UPDATE `blog`.`articles` SET `views` = `views`+1 WHERE `articles`.`id` =" . (int) $_GET['id']);
                $post_query=mysqli_query($connection, "SELECT * FROM `articles` WHERE `id`= " . (int) $_GET['id']);

                $art_id=$_GET['id'];
                $post_details=mysqli_fetch_assoc($post_query);
                if (mysqli_num_rows($post_query)==0){
                    $post_details['title']="Статья не найдена";
                }
                if ($_GET['cat']=="Funny pictures"){?>

                                            <div class="document doc-det">

                                                        <div class="dochead">
                                                            <span class="dhead"><?php echo $post_details['title']?></span>
                                                        </div>
                                                        <div>
                                                            <span class="post"><?php echo $_GET['cat'] . ' | ' . $post_details['date']?></span>
                                                        </div>
                                                        <div class="dcontent">
                                                            <img style="width: 100%;" src="<?php echo  $post_details['text'] ?>" alt="">

                                                        </div>
                                                        <div class="bubble-1" align="right">

                                                            <span><?php echo $com_number?></span>
                                                        </div>


                                </div>
                                <div class="com-block">
                                    <?php
                                    $comments=mysqli_query($connection, "SELECT * FROM `comments` WHERE `article_id`= " . (int) $_GET['id']);
                                    $com_number=mysqli_num_rows($comments);
                                    while($comment=mysqli_fetch_assoc($comments)){
                                        ?>


                                        <div class="comments">
                                            <div class="com-date">
                                                <span><?php echo "Date : " . $comment['comment_date'] . ' | ' . "Name : " . $comment['author'] ?></span>
                                            </div>
                                            <div class="message">
                                                <span><?php echo $comment['comment_text']?></span>
                                            </div>

                                        </div>
                                    <?php } ?>

                                </div>

                                            <?php }
                                            else{
                                            ?>




            <div class="document doc-det">

            	<div class="dochead">
                	<span class="dhead"><?php echo $post_details['title']?></span>
                </div>
                <div>
                    <span class="post"><?php echo $_GET['cat'] . '|' . $post_details['date']?></span>
		        </div>
                <div class="dcontent">
                	<?php echo  $post_details['text'] ?>
                    <img class="views_det" src="images/view.svg" alt="">
                    <span class="numb_views_det"><?php echo $post_details['views']?></span>
                </div>
                <div class="bubble-1" align="right">
                    <span><?php echo $com_number?></span>

                </div>

            </div>
             <div>
                 <form id="move-to-form" class="com-form" method="post" action="details.php?id=<?php echo $_GET['id'] ?>#move-to-form">
                     <?php if (isset($_POST['submit'])){
                         $error=array();
                         if ($_POST['name']==""){
                             $error[]="Enter the name!";
                         }
                         if ($_POST['text']==""){
                             $error[]="Enter the email!";
                         }
                         if (empty($error)){
                            $send_comment=mysqli_query($connection,"INSERT INTO `blog`.`comments` (`id`, `author`, `comment_text`, `comment_date`, `article_id`) VALUES 
                        (NULL ,'".$_POST['name']."','".$_POST['text']."',NOW(),'".$_GET['id']."' )");
                             if ($send=true){
                                 ?>
                                 <span class="success">Comment added</span>
                           <?php
                             }
                         }else{
                             ?> <span class="alert" >Comment is not added. <?php echo $error[0]?> </span>
                     <?php
                         }
                     }
                     ?>
                     <span class="sp-name">Name</span>
                     <div class="div-input" >

                         <input class="name-input" type="textarea" name="name">

                     </div>
                     <span class="sp-name">Message</span>
                     <div class="div-textarea">
                         <input class="text-input" type="textarea" name="text">
                     </div>
                     <div class="div-submit">
                         <input class="submit-input" type="submit" name="submit" value="Send">
                     </div>
                 </form>
             </div>

             <div class="com-block">
                            <?php
                                $comments=mysqli_query($connection, 'SELECT * FROM `comments` WHERE `article_id`=' . (int) $_GET['id'] . ' ORDER BY `id` DESC ');
                                $com_number=mysqli_num_rows($comments);

                                while($comment=mysqli_fetch_assoc($comments)){
                            ?>


                        <div class="comments">
                            <div class="com-date">
                                <span><?php echo "Date : " . $comment['comment_date'] . ' | ' . "Name : " . $comment['author'] ?></span>
                            </div>
                            <div class="message">
                                <span><?php echo $comment['comment_text']?></span>
                            </div>

                        </div>
                            <?php } }
                            $close_connection=mysqli_close($connection);
                            ?>

                </div>



            <!--documentary ends-->
           
            
            <!--features ends-->
            <!--footer starts-->
            	<!-- <div id="footer">
                                    <div class="copy">
                                    &copy; 2010 Make Film Work
                                    </div>
                                    <div class="flinks">
                                        <span><a href="#">HOME</a></span><span class="separator"> | </span>
                                        <span><a href="#">ABOUT</a></span><span class="separator"> | </span>
                                        <span><a href="#">REEL</a></span><span class="separator"> | </span>
                                        <span><a href="#">SCREENCASTS</a></span><span class="separator"> | </span>
                                        <span><a href="#">CONTACT</a></span><span class="separator"> | </span>
                                        <span><a href="http://vectorart.org">Design by Vector</a></span>
                                    </div>
                                </div> -->
            <!--footer ends-->
        </div>
    <!--container starts-->
</div>
<!--wrapper ends-->
</body>
</html>
