<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Navbar extends Component
{
    public $menus;

    public function mount()
    {
        $this->menus = [
            (object) [
                'label' => 'Home',
                'route' => route('home'),
            ],
            (object) [
                'label' => 'Survei',
                'route' => route('survey'),
            ],
            (object) [
                'label' => 'Master',
                'subMenu' => [
                    (object) [
                        'label' => 'Fakultas',
                        'route' => '#',
                    ],
                    (object) [
                        'label' => 'Jurusan',
                        'route' => '#',
                    ],
                    (object) [
                        'label' => 'Prodi',
                        'route' => '#',
                    ],
                    (object) [
                        'label' => 'Target',
                        'route' => '#',
                    ],
                    (object) [
                        'label' => 'Jenis',
                        'route' => '#',
                    ]
                ]
            ]
        ];
    }

    public function render()
    {
        return view('livewire.section.navbar');
    }
}
