<?php

namespace Tests\Feature\Livewire;

use Livewire\Livewire;
use Tests\TestCase;
class ContactFormTest extends TestCase
{
    public function name_and_email_fields_are_required_for_saving_a_contact()

    {

        Livewire::test('contact-form')

            ->set('name', '')

            ->set('email', '')

            ->assertHasErrors(['name', 'email']);

    }
}
