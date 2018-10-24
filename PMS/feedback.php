<html>
<head>
    <?php
    echo"<link rel='stylesheet' type='text/css' href='feedback.css' />";
   ?>
</head>
<body>
    
        <div class="container" >
            <form action="" >
                <table align="center" cellpadding="10">
                    <tr>
                        <td colspan="2" align="center"><h2>Feedback</h2></td></tr>
                    <tr><td>
        <label>Reg ID</label></td>
        <td><input type="text"  name="User ID" maxlength="30"  disabled="1" /></td>
        </tr>
        <tr><td>
        <label>Enter Your Name</label></td>
        <td><input type="text"  name="Name" maxlength="30" placeholder="Your Name"  /></td></tr>
        <tr><td>
        <label for="Feedback">Feedback</label></td>
       <td> <textarea id="Feedback" name="Feedback" placeholder="write Something..."  style="height: 200px">
        </textarea></td>
        <tr><td></td>
       <td> <input type="Submit" value="Submit"> </td></tr>
    </table>
    </form>
</div></body></html>
        