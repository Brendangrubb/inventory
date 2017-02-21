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

            $result = $test_InventoryItem->save();

            $this->assertEquals($GLOBALS['DB']->query('SELECT name FROM inventory;'), $result);
        }
    }

?>
