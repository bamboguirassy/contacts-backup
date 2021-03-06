<?php

namespace App\View\Components;

use App\Models\Contact;
use Illuminate\View\Component;

class ContactItem extends Component
{
    public $contact;
    /**
     *
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-item');
    }
}
