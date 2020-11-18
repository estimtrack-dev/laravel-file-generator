<?php

namespace Tests;

use PHPUnit_Framework_TestCase;
use Skyronic\FileGenerator\Estimtrack\GetListOfFilesToCreateService;
use Skyronic\FileGenerator\Format;

class CrudGenTest extends PHPUnit_Framework_TestCase
{
    public function testFolderName () {

            $service = new GetListOfFilesToCreateService();
            $arrayOfNames = $service->execute('Estimtrack','Episode');
            var_dump($arrayOfNames);




    }

    public function testNamespace () {
        $this->assertEquals("App\\Tmp", Format::getNamespace("app/Tmp/Foo.php"));
        $this->assertEquals("Test\\Unit\\Tmp", Format::getNamespace("test/Tmp/Foo.php", "test", "Test\\Unit"));

        $this->assertEquals("App\\Tmp", Format::getNamespace("app\\Tmp\\Foo.php"));
        $this->assertEquals("Test\\Unit\\Tmp", Format::getNamespace("test\\Tmp\\Foo.php", "test", "Test\\Unit"));
    }

}
