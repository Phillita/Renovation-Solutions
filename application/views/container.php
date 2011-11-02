<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Renovation Solutions</title>
        <script src="http://code.jquery.com/jquery-1.6.2.js"></script>       
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url("js/jquery.layout.js"); ?>"></script> 
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("css/main.css"); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("js/css/jquery-ui-1.8.16.custom.css"); ?>"/>
</head>
<body>
    <div id="wrap">
        <div id="banner">
            <div id ="title" class="floatleft">
                <h1>Renovation Solutions</h1>
            </div>
            <div id="login" class="floatright"/>
                <form action="<?php echo site_url() ?>/main/login" method="post"  <?php if(isset($disable)) echo $disable;?> >
                    <label class="loginlabel">Username</label><input type="text" id="user" name="user"/>
                    <label class="loginlabel">Password</label><input type="password" id="password" name="password"/>
                    <input type="submit" id="submit" name="submit" class="inputbtn" style="padding:1px 5px" value="Login"/>   
                </form>
                <?php if(isset($disable) && isset($fname) && isset($lname)) echo "Welcome ".$fname.' '.$lname?>
            </div>
        </div>
        <div id="content">
            <?php $this->load->view($page); ?>
        </div>
        <div id="footer">&copy 2011 Renovation Solutions</div>
    </div>
</body>
</html>