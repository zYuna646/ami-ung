<?php

namespace App\Livewire;

use Livewire\Component;

class DetailSurvey extends Component
{
    public $instrumen;

    public function mount()
    {
        $this->instrumen = (object) [
            'id' => 1,
            'name' => 'Instrumen Audit Mutu Internal',
            'standar' => (object) [
                'name' => 'Visi Misi Tujuan dan Sasaran'
            ],
            'tipe' => 'AMI Reguler SPMI',
            'ketua' => (object) [
                'name' => 'Prof. Dr. Ir. Hasim, M'
            ],
            'indikator' => [
                (object) [
                    'name' => 'Tersedianya dokumen Visi, Tujuan, Strategi yang sangat jelas, sangat realistis dan memiliki pengesahan',
                    'butir' => [
                        (object) [
                            'kode' => 'VMTS-01',
                            'name' => 'Ketersediaan dokumen pedoman penyusunan VMTS?',
                        ],
                        (object) [
                            'kode' => 'VMTS-02',
                            'name' => 'Keterlibatan pemangku kepentingan dalam penyusunan VMTS?',
                        ],
                        (object) [
                            'kode' => 'VMTS-03',
                            'name' => 'Adanya evaluasi dan revisi berkala terhadap dokumen VMTS?',
                        ]
                    ]
                ],
                (object) [
                    'name' => 'Implementasi Visi, Misi, Tujuan, dan Strategi dalam kegiatan operasional',
                    'butir' => [
                        (object) [
                            'kode' => 'IMPL-01',
                            'name' => 'Keselarasan program kerja dengan VMTS?',
                        ],
                        (object) [
                            'kode' => 'IMPL-02',
                            'name' => 'Ketersediaan bukti pelaksanaan program sesuai VMTS?',
                        ],
                        (object) [
                            'kode' => 'IMPL-03',
                            'name' => 'Monitoring dan evaluasi pelaksanaan program kerja?',
                        ]
                    ]
                ],
                (object) [
                    'name' => 'Sosialisasi Visi, Misi, Tujuan, dan Strategi kepada seluruh pemangku kepentingan',
                    'butir' => [
                        (object) [
                            'kode' => 'SOS-01',
                            'name' => 'Adanya kegiatan sosialisasi VMTS kepada dosen, staf, dan mahasiswa?',
                        ],
                        (object) [
                            'kode' => 'SOS-02',
                            'name' => 'Ketersediaan media informasi tentang VMTS (website, brosur, dll)?',
                        ],
                        (object) [
                            'kode' => 'SOS-03',
                            'name' => 'Tingkat pemahaman pemangku kepentingan terhadap VMTS?',
                        ]
                    ]
                ]
            ]
        ];
    }

    public function render()
    {
        return view('livewire.detail-survey');
    }
}
