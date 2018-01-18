<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    // public function testTitlesModelCount()
    // {
    //   //$value = 1;
    //   //$this->assertTrue(1 === $value, " 1 is not equal to the variable");
    //
    //   $titles = new Title;
    //   $this->assertTrue(count($titles->all()) === 6, "Titles should be equal to 6 " );
    // }
    //
    // public function testLastTitleShouldBeProfessor()
    // {
    //   $titles = new Title;
    //   $titles_array = $titles->all();
    //
    //   $this->assertEquals('Professor' , array_pop($titles_array), "Titles last element should be professor");
    //
    // }
}
