Step 3<br>
<form method="POST" action="install.php">
    {foreach from=$available_maps item=map}
        <input type="checkbox" name="available_maps[]" value="{$map->get_id()}"/> {$map->get_name()}<br/>
    {/foreach}
    <input type="hidden" name="db_address" value="{$db_address}"/>
    <input type="hidden" name="db_name" value="{$db_name}"/>
    <input type="hidden" name="db_user" value="{$db_user}"/>
    <input type="hidden" name="db_password" value="{$db_password}"/>
    <input type="hidden" name="step" value="3"/>
    <input type="hidden" name="teams" value="{$teams}"/>
    <input type="hidden" name="step" value="4"/>
    <input type="submit" value="Next"/>
</form>
