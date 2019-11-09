<?php


namespace App\tests;


use App\Method;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

/**
 * Test against the original function
 *
 * Class ExplodeTests
 * @package App\tests
 */
class ExplodeTests extends TestCase
{
    /**
     * @var \Faker\Generator $faker
     */
    protected $faker;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->faker = Factory::create();
    }

    public function testExplodingWithASingleCharacterShouldSucceed()
    {
        /**
         * @var string $delimiter
         */
        $haystack = $this->faker->realText();

        /**
         * @var string $delimiter
         */
        $delimiter = $haystack[$this->faker->numberBetween(0, 19)];

        $result = explode($delimiter, $haystack);

        $this->assertEquals($result, Method::explode($haystack, $delimiter));
    }
}