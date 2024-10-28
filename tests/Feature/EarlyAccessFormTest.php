<?php

use Livewire\Volt\Volt;

use function Pest\Laravel\assertDatabaseHas;

it('validates existing email', function () {
    \Database\Factories\BetaUserFactory::new()->create(['email' => 'john.doe@example.com']);

    Volt::test('home.early-access-form')
        ->set('email', 'john.doe@example.com')
        ->call('submit')
        ->assertHasErrors(['email' => 'unique']);
});

it('validates the form fields', function () {
    Volt::test('home.early-access-form')
        ->set('name', '')
        ->set('email', 'not-an-email')
        ->call('submit')
        ->assertHasErrors(['name' => 'required', 'email' => 'email']);
});

it('can submit the early access form', function () {
    Volt::test('home.early-access-form')
        ->set('name', 'John Doe')
        ->set('email', 'john.doe@example.com')
        ->call('submit');

    assertDatabaseHas('beta_users', [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
    ]);
});
