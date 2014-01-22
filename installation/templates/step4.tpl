Step 4<br>

Database<br>
Address: {$db_address}<br>
Name: {$db_name}<br>
User: {$db_user}<br>
Password: {$db_password}
<hr>

Teams<br>
{foreach from=$unserialized_teams item=team}
    Name: {$team->get_name()}<br>
    Tag: {$team->get_tag()}<br>
    Logo: {$team->get_logo()}<hr>
{/foreach}

<br>

Maps<br>
{foreach from=$maps item=map_id}
    {$map_id}<br>
{/foreach}


<form method="POST" action="install.php">
    <input type="hidden" name="maps" value="{$serialized_maps}"/>
    <input type="hidden" name="db_address" value="{$db_address}"/>
    <input type="hidden" name="db_name" value="{$db_name}"/>
    <input type="hidden" name="db_user" value="{$db_user}"/>
    <input type="hidden" name="db_password" value="{$db_password}"/>
    <input type="hidden" name="step" value="3"/>
    <input type="hidden" name="teams" value="{$teams}"/>
    <input type="hidden" name="step" value="5"/>
    <input type="submit" value="Install"/>
</form>
