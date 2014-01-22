Step 2<br/>

DB Name: {$db_name}<br>
DB Address: {$db_address}<br>
DB User: {$db_user}<br>
DB Password: {$db_password}<br>

Teams: {$teams}<br>

<form method="POST" action="install.php">
    Name <input type="text" name="name"/><br>
    Tag <input type="text" name="tag"/><br>
    Logo <input type="text" name="logo"/><br>
    <input type="hidden" name="db_address" value="{$db_address}"/>
    <input type="hidden" name="db_name" value="{$db_name}"/>
    <input type="hidden" name="db_user" value="{$db_user}"/>
    <input type="hidden" name="db_password" value="{$db_password}"/>
    <input type="hidden" name="step" value="2"/>
    <input type="hidden" name="teams" value="{$teams}"/>
    <input type="submit" value="Add Team"/>
</form>

<br>

<form method="POST" action="install.php">
    <input type="hidden" name="db_address" value="{$db_address}"/>
    <input type="hidden" name="db_name" value="{$db_name}"/>
    <input type="hidden" name="db_user" value="{$db_user}"/>
    <input type="hidden" name="db_password" value="{$db_password}"/>
    <input type="hidden" name="step" value="2"/>
    <input type="hidden" name="teams" value="{$teams}"/>
    <input type="hidden" name="step" value="3"/>
    <input type="submit" value="Next"/>
</form>
