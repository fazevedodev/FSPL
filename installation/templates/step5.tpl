Step 5

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

{foreach from=$maps|unserialize item=map}
    {$map}
{/foreach}