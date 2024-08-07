<?php

namespace App\Livewire;

use Livewire\Component;

class Survey extends Component
{
    public $instrumens;

    public function mount()
    {
        $this->instrumens = [
            (object) [
                'id' => 1,
                'name' => 'Instrumen Audit Mutu Internal',
                'standar' => (object) [
                    'name' => 'Visi Misi Tujuan dan Sasaran'
                ],
                'tipe' => 'AMI Reguler SPMI',
                'ketua' => (object) [
                    'name' => 'Prof. Dr. Ir. Hasim, M'
                ]
            ],
            (object) [
                'id' => 2,
                'name' => 'Instrumen Audit Keuangan',
                'standar' => (object) [
                    'name' => 'Kepatuhan terhadap Regulasi Keuangan'
                ],
                'tipe' => 'AMI Reguler Keuangan',
                'ketua' => (object) [
                    'name' => 'Dr. Akhmad, SE., M.Si'
                ]
            ],
            (object) [
                'id' => 3,
                'name' => 'Instrumen Audit Teknologi Informasi',
                'standar' => (object) [
                    'name' => 'Keamanan dan Kepatuhan TI'
                ],
                'tipe' => 'AMI Reguler TI',
                'ketua' => (object) [
                    'name' => 'Ir. Rahmat, MT'
                ]
            ],
            (object) [
                'id' => 4,
                'name' => 'Instrumen Audit Sumber Daya Manusia',
                'standar' => (object) [
                    'name' => 'Efektivitas Manajemen SDM'
                ],
                'tipe' => 'AMI Reguler SDM',
                'ketua' => (object) [
                    'name' => 'Dr. Rita, MM'
                ]
            ]
        ];
    }

    public function render()
    {
        return view('livewire.survey');
    }
}
