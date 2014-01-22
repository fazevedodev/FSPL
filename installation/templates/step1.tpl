Step 1
<form method="POST" action="install.php">
    Address <input type="text" name="db_address"/><br>
    Name <input type="text" name="db_name"/><br>
    User <input type="text" name="db_user"/><br/>
    Password <input type="text" name="db_password"/><br/>
    <input type="hidden" name="step" value="2"/>
    <input type="submit" value="Next">
</form>