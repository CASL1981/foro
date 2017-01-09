<?php



class ExampleTest extends TestCase
{

    

    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Carlos Sibaja',
            'email' => 'admin@casl.net'
            ]);

        $this
            ->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Carlos Sibaja')
            ->see('admin@casl.net');
    }
}
