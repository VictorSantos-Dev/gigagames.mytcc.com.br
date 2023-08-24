<?php
    // Initialize the session
    session_start();
    
    // Unset all of the session variables
    $_SESSION = array();
    
    // Destroy the session.
    session_destroy();
    
    // Redirect to login page
    // header("location: telas/indexHome.php");
    // exit;
?>


<html>
    <head>
        <title>Logoff Cakeboss</title>
    </head>
    <body onLoad="centralizeWindow()">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
        <tr><td class="loginMensagens">Aguarde ... realizando logoff.<br></td></tr>
        </table>
        
        <form name="frmLogOut" method="post" action="../home/">
            <input name="logout" type="hidden" id="logout" value="TRUE">
        </form>    
    </body>
</html>

<script language="JavaScript">
    function centralizeWindow() {
        var topPos = (screen.height - 200) / 2;
        var leftPos = (screen.width - 300) / 2;
        window.moveTo(leftPos, topPos);
        setTimeout(() => {parent.window.location.href='../home/'})
    }
</script>

    