<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Livewire\Component;


class LanguageComponent extends Component
{
    const SUPPORTED_LANGUAGES = [
        'english' => 'en',
        'spanish' => 'es'
    ];
    public function render()
    {
        return view('livewire.language-component', [
            'languages' => array_keys(__('languages')),
        ]);
    }

    public function setLanguage($lang)
    {
        Session::put('locale', self::SUPPORTED_LANGUAGES[$lang]);
        return redirect()->to(request()->header('Referer'));
    }
}
