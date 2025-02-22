<?php

namespace Aaran\Core\Livewire\DefaultCompany;

use Illuminate\Support\Str;
use Livewire\Component;


class Index extends Component
{

    public function getDocs(){

        $md = (__DIR__ . '/../../Markdown/overview.md');

        return Str::markdown(file_get_contents($md));
    }

    #region[render]
    public function render()
    {
        return view('core::Tenant.index')->with([
            'policy' => $this->getDocs()
        ]);
    }
    #endregion
}
