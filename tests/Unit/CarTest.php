<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testUpdateCarYear2000()
    {
        $data['year'] = 2000;
        $cars = Cars::first();
        $cars->update($data);
        $this->assertInstanceOf(Cars::class, $cars);
    }

    public function testDeleteCar()
    {
        $deleteCars = Cars::first();
        $this->delete($deleteCars);
        $this->assertTrue(true);
    }

    public function testCarCount()
    {
        $rowCount = count(Cars::get());
        $CarsCount = $rowCount;
        $this->countOf($CarsCount);
        $this->assertTrue(true);
    }

    public function testIsString()
    {
        $this->assertIsString('model');
    }

    public function testMakeOfCar()
    {

        $cars = Cars::pluck('make');
        $this->assertContains('honda', $cars);
        $this->assertContains('ford', $cars);
        $this->assertContains('toyota', $cars);
    }

//    public function testIsInteger()
//    {
//        $id = Cars::get('year');
//        //$id = 1;
//        if(is_int($id)){
//            dd('is int' . $id);
//        } else {
//            dd('not int' . $id);
//        }
//        //dd($id->getType());
//        //$this->assertTrue(is_int($id));
//    }
}
