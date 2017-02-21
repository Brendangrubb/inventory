<?php
    class InventoryItem
    {
        public $name;

        function save($name)
        {
            $GLOBALS['DB']->exec('INSERT INTO inventory (name) VALUES ("$name");');
        }

        static function getAll()
        {
            $all_inventory = array();
            $inventory_query = $GLOBALS['DB']->query('SELECT * FROM inventory_items;');
            foreach ($inventory_query as $inventory_item) {
                array_push($all_inventroy, $inventory_item);
            }
            var_dump($all_inventory);
            return $all_inventory;
        }
    }




?>
