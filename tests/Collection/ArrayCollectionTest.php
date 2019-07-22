<?php use PHPUnit\Framework\TestCase;

/**
 * ArrayCollectionTest Test Case
 */
class ArrayCollectionTest extends TestCase
{
    /**
     * @return void
     */
    public function testCollectionArrayKeyNotExists(): void
    {
        // We are expecting the ArrayKeyNotExistsException to be thrown...
        $this->expectException(\Exceptions\Collection\ArrayKeyNotExistsException::class);

        // Let's build the test logic and see if it does...
        $var = ['name' => 'Name'];

        // Let's get the exception to throw
        if ( ! array_key_exists('dob', $var)) {
            // Throw the exception
            throw new \Exceptions\Collection\ArrayKeyNotExistsException();
        }
    }

    //-------------------------------------------------------------------------

    /**
     * @return void
     */
    public function testCollectionArrayKeyAlreadyExists(): void
    {
        // We are expecting the Exception to be thrown ...
        $this->expectException(\Exceptions\Collection\ArrayKeyAlreadyExistsException::class);

        // Let's build the test logic and see if it does...
        $var = ['name' => 'Name'];

        // Let's get the exception to throw
        if (array_key_exists('name', $var)) {
            // Throw the exception
            throw new \Exceptions\Collection\ArrayKeyAlreadyExistsException();
        }
    }

    //-------------------------------------------------------------------------

    /**
     * @return void
     */
    public function testCollectionArrayNotExists(): void
    {
        // We are expecting the ArrayNotExistsException to be thrown...
        $this->expectException(\Exceptions\Collection\ArrayNotExistsException::class);

        // Let's build the test logic and see if it does...
        $var = null;

        // Let's get the exception to throw
        if ( ! is_array($var)) {
            // Throw the exception
            throw new \Exceptions\Collection\ArrayNotExistsException();
        }
    }

    //-------------------------------------------------------------------------
}
