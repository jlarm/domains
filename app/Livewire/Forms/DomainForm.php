<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class DomainForm extends Form
{
    #[Validate('required', 'max:255', 'string', message: 'The domain name is required.')]
    #[Validate('unique:domains,name', message: 'The domain name has already been taken.')]
    public $name;

    #[Validate('required', 'max:255', 'string')]
    public $registrar;

    #[Validate('required', 'url')]
    public $registrar_url;

    #[Validate('required', 'date')]
    public $expiration;

    #[Validate('required', 'boolean')]
    public $status = 1;
}
