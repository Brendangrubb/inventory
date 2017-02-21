<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once __DIR__.'/../src/InventoryItem.php';

    $server = 'mysql:host=localhost:8889;dbname=inventory_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class NewClassTest extends PHPUnit_Framework_TestCase
    {
        function test_save()
        {
            $test_InventoryItem = new InventoryItem;
            $input = 'steely dan records';

            $result = $test_InventoryItem->save($input);

            $this->assertEquals($GLOBALS['DB']->query('SELECT name FROM inventory;'), $result);
        }

        function test_getAll()
        {
            $input1 = 'broken guitar';
            $input2 = 'smelly dog';
            $test_InventoryItem1 = new InventoryItem;
            $test_InventoryItem1->save($input1);
            $test_InventoryItem2 = new InventoryItem;
            $test_InventoryItem2->save($input2);


            $result = InventoryItem::getAll();

            $this->assertEquals(['broken guitar', 'smelly dog'], $result);
        }
    }

?>
