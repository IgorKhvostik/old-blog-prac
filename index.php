<?php
include_once "connection.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIDEOSxLULZ</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,700i" rel="stylesheet">

    <!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/style6.css" />
<![endif]-->
    <!--[if IE 7]>
        <link href="css/style7.css" rel="stylesheet" type="text/css">
    <![endif]-->
<style type="text/css"> 

 
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
				 <div class="ltgap"></div>
                <!--popular starts-->
                	<!--<div id="mostpop">
                	<div class="lthead"><span>most popular posts</span></div>-->
                    <!--ltposts starts-->
                   <!-- <div class="ltposts">
                    <ul>
                        <li><a href="#">Vero</a></li>
                        <li><a href="#">Harum</a></li>
                        <li><a href="#">Expedia</a></li>
                        <li><a href="#">Omnis</a></li>
                        <li><a href="#">Voluptatum</a></li>
                    </ul>
                    </div>-->
                    <!--ltposts ends-->
                    <!--rtposts starts-->
                    <!--<div class="rtposts">
                    <ul>
                    <li><a href="#">Nauts</a></li>
                    <li><a href="#">Video 3</a></li>
                    <li><a href="#">Adipisci</a></li>
                    <li><a href="#">Numquam</a></li>
                    <li><a href="#">Vel Illium</a></li>
                    </ul>
                    </div>-->
                    <!--rtposts ends-->
                    <!--<div class="clear"></div>
                </div>-->
                <!--popular ends-->  
               <!--  <div class="ltgap"></div>
                 
                 <div class="ltgap"></div>
                
                 <div class="ltgap"></div>-->
                <!--about starts-->

                <!--about ends--> 
            </div>
            <!--ltcontent ends-->
            <!--rtcontent starts-->
            <div id="rtcontent">
           		<!--publish starts-->
                <div class="publish">Blog was made for practice by Ihor Khvostyk</div>
                <!--publish ends-->
                <!--head starts-->
                <div class="head">VIDEOSxLULZ</div>
                <!--head ends-->
                <!--tagln starts-->
                <div class="tagln">
                Right  <span class="italics">Here</span> i can write <span class="italics">something</span> clever<br />
				but still it's not necessary
                </div>
                <!--tagln ends-->
                <!--menulinks starts -->
                <div id="menulinks">

                            <?php
                            $category=mysqli_query($connection,'SELECT * FROM `article_categories`');
                            $arr_cat=array();
                           for ($x=1;$cat=mysqli_fetch_assoc($category);$x++){
                               $arr_cat[$x]=$cat['category_name'];
                               ?> <a class="nav-cat" href="category.php?cat=<?php echo $x ?>"><?php echo $cat['category_name']?></a>
                          <?php } ?>



    	        </div>
                <div class="clear"></div>
            <!--menulinks ends -->
            <!--documentarty starts-->
                <?php
                $art_on_page=5;
                $current_page=1;
                if (isset($_GET['current_page'])){
                    $current_page = (int) $_GET['current_page'];
                }

                $total_count_q=mysqli_query($connection,"SELECT COUNT(`id`) AS `counted` FROM `articles`");
                $counted=mysqli_fetch_assoc($total_count_q);
                $counted=$counted['counted'];
                $max_pages=ceil($counted/$art_on_page);
                if ($current_page<=1 || $current_page>$max_pages){
                    $current_page=1;
                }
                $offset=($current_page*$art_on_page) - $art_on_page;

                if ($counted>$art_on_page){?>
                    <div class="paginator">
                        <?php if ($current_page>1){?>
                            <a class="prev" href="index.php?current_page=<?php echo ($current_page-1);?>">&laquo; Previous</a>
                        <?php }
                        if ($max_pages>$current_page){?>
                            <a class="next" href="index.php?current_page=<?php echo ($current_page+1);?>">Next &raquo;</a>
                        <?php } ?>
                    </div>
                <?php }


                $query=mysqli_query($connection,'SELECT * FROM `articles` GROUP BY `date` DESC LIMIT ' . $offset .','. $art_on_page);
                while ($post=mysqli_fetch_assoc($query)){
                    foreach ($arr_cat as $key=>$value){
                        if ($key==$post['category']){
                            $cat_final=$value;
                        }
                    }

                    ?>
                    <div class="document">

                        <div class="dochead">
                            <a class="title" href="details.php?id=<?php echo $post['id']?>&cat=<?php echo $cat_final?>" target="_blank" ><span class="dhead title"><?php echo strip_tags($post['title']) ?></span></a>
                        </div>
                        <div>
                            <span class="post"><?php echo $cat_final . '|' . $post['date']?></span>
                        </div>
                        <div class="dcontent">
                            <?php if ($post['category']==1 or $post['category']==3) {
                                $text_cut=explode('.',strip_tags($post['text']),5);

                            for ($i=0;$i<2;$i++){
                                echo $text_cut[$i] . '.';
                            }
                            ?><a class="read_more" href="details.php?id=<?php echo $post['id']?>&cat=<?php echo $cat_final?>" target="_blank">Read more</a>
                                <?php
                            }
                            elseif ($post['category']==2){
                                ?>
                                <img style="width: 100%;"  src="<?php echo $post['text'];?>" alt=""/>
                            <?php }
                            else {
                                echo $post['text'];
                            }
                            ?>

                        </div>

                        <div class="bubble" align="right">

                            <?php
                            $comments=mysqli_query($connection, "SELECT * FROM `comments` WHERE `article_id`= " . $post['id']);
                            $com_number=mysqli_num_rows($comments);

                            if ($com_number==1){
                                $word_comment=" comment";
                            }else{
                                $word_comment=" comments";
                            }
                            ?>
                            <span><?php echo $com_number . $word_comment?></span>
                            <img class="views" src="images/view.svg" alt="">
                            <span class="numb_views"><?php echo $post['views']?></span>
                        </div>
                    </div>

               <?php }
                if ($counted>$art_on_page){?>
                    <div class="paginator">
                        <?php if ($current_page>1){?>
                            <a class="prev" href="index.php?current_page=<?php echo ($current_page-1);?>">&laquo; Previous</a>
                        <?php }
                        if ($max_pages>$current_page){?>
                            <a class="next" href="index.php?current_page=<?php echo ($current_page+1);?>">Next &raquo;</a>
                        <?php } ?>
                    </div>
                <?php }
                $close_connection=mysqli_close($connection);
                ?>


            <!--Helping ends-->
            </div>
            <!--rtcontent ends-->
            <div class="clear"></div>
            <br />
            
            <!--footer starts-->
            	<div id="footer">
                	<div class="copy">
                    &copy; VIDEOSxLULZ
                    </div>
                </div>
            <!--footer ends-->
        </div>
    <!--container starts-->
</div>
<!--wrapper ends-->
</body>
</html>
