<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    /** @test*/
    function test_it_user_page()
    {
        $response=$this->get('/usuarios');

               $response->assertStatus(200);
                $response->assertSee('Listado de usuarios');

    }

    /** @test*/
    function test_it_user_detail_page()
    {
        $this->get('/usuarios/5')
               ->assertStatus(200)
                ->assertSee('Mostramos detalles del usuario:5');

    }

    /** @test*/
    function test_it_user_new_page()
    {
        $this->get('/usuarios/nuevo')
               ->assertStatus(200)
                ->assertSee('Crear nuevo usuario');

    }



}
