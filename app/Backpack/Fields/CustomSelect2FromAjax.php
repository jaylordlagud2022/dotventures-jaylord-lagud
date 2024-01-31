<?php

namespace App\Backpack\Fields;

use Backpack\CRUD\app\Library\CrudPanel\CrudField;

class CustomSelect2FromAjax extends CrudField
{
    protected $view_namespace = 'backpack::fields';

    public function build()
    {
        // Customize this method based on your needs
        // You may want to add custom JavaScript or configure AJAX settings here
        // Example:
        $this->attributes['data-ajax--url'] = route('your.ajax.endpoint');

        return parent::build();
    }
}
