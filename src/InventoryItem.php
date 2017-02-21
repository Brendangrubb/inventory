<?php
    class InventoryItem
    {
        function save()
        {
            $GLOBALS['DB']->exec('INSERT INTO inventory (name) VALUES ("$input");');
        }
    }




?>
