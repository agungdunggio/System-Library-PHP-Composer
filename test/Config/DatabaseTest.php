<?php 

namespace SystemLibrary\PHP\Config;

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase{
    public function testGetConnection(){
        $connenction = Database::getConnection();
        self::assertNotNull($connenction);
    }

    public function testGetConnectionSingleton(){
        $connection1 = Database::getConnection();
        $connection2 = Database::getConnection();
        self::assertSame($connection1,$connection2);
    }
}