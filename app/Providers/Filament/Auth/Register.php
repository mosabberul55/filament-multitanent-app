<?php

namespace App\Providers\Filament\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class Register extends \Filament\Pages\Auth\Register
{
    public function form(Form $form): Form
    {
        return $form->schema([
            $this->getNameFormComponent(),
            $this->getPhoneFormComponent(),
            $this->getEmailFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),
        ]);
    }

    protected function getPhoneFormComponent(): TextInput
    {
        return TextInput::make('phone')->required();
    }

    protected function handleRegistration(array $data): \Illuminate\Database\Eloquent\Model
    {
        return parent::handleRegistration($data);
    }

}
