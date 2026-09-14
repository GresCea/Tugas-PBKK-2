<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_profile_route_accepts_only_ten_digit_nrp(): void
    {
        $this->get('/dashboard/mahasiswa/5025241106')->assertOk();
        $this->get('/dashboard/mahasiswa/502524110')->assertNotFound();
    }

    public function test_gpa_calculator_returns_total_and_average(): void
    {
        $this->get('/dashboard/hitung-ipk/3.50/3.75')
            ->assertOk()
            ->assertSee('7.25')
            ->assertSee('3.63');
    }

    public function test_unknown_route_uses_fallback_page(): void
    {
        $this->get('/alamat-tidak-tersedia')
            ->assertNotFound()
            ->assertSee('Halaman tidak ditemukan.');
    }
}
