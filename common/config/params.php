<?php
return [
        'adminEmail'                    => 'info@smartbus.com.np',
        'supportEmail'                  => 'support@smartbus.com.np',
        'senderEmail'                   => 'noreply@example.com',
        'senderName'                    => 'Smart Bus PVT. LTD.',
        'user.passwordResetTokenExpire' => 3600,

        'user_roles' => [
                '1' => ['role' => 'Customer', 'display' => 'Customer'],
                '2' => ['role' => 'Agent', 'display' => 'Agent'],
                '3' => ['role' => 'Assistant', 'display' => 'Vehicle Assistant'],
                '4' => ['role' => 'Vendor', 'display' => 'Service Provider'],
                '5' => ['role' => 'Operator', 'display' => 'Content Manager'],
                '6' => ['role' => 'Officer', 'display' => 'Officer'],
                '7' => ['role' => 'Admin', 'display' => 'Administrator'],
        ],
        'locations'  => [
                'province' => [
                        1 => [
                                'title'     => 'Province No. 1',
                                'districts' => ['Taplejung', 'Panchthar', 'Ilam', 'Jhapa', 'Morang', 'Sunsari', 'Dhankuta', 'Terhathum', 'Sankhuwasabha', 'Bhojpur', 'Solukhumbu', 'Okhaldhunga', 'Khotang', 'Udayapur']
                        ],
                        2 => [
                                'title'     => 'Province No. 2',
                                'districts' => ['Saptari', 'Siraha', 'Dhanusa', 'Mahottari', 'Sarlahi', 'Bara', 'Parsa', 'Rautahat'
                                ]
                        ],
                        3 => [
                                'title'     => 'Province No. 3',
                                'districts' => ['Sindhuli', 'Ramechhap', 'Dolakha', 'Sindhupalchok', 'Kavrepalanchok', 'Lalitpur', 'Bhaktapur', 'Kathmandu', 'Nuwakot', 'Rasuwa', 'Dhading', 'Makwanpur', 'Chitwan']
                        ],
                        4 => [
                                'title'     => 'Gandaki Pradesh',
                                'districts' => ['Gorkha', 'Lamjung', 'Tanahun', 'Syangja', 'Kaski', 'Manang', 'Mustang', 'Myagdi', 'Nawalpur', 'Parbat', 'Baglung']
                        ],
                        5 => [
                                'title'     => 'Province No. 5',
                                'districts' => ['Gulmi', 'Palpa', 'Parasi', 'Rupandehi', 'Kapilvastu', 'Arghakhanchi', 'Pyuthan', 'Rolpa', 'Eastern Rukum', 'Banke', 'Bardiya', 'Dang']
                        ],
                        6 => [
                                'title'     => 'Karnali Pradesh',
                                'districts' => ['Western Rukum', 'Salyan', 'Surkhet', 'Dailekh', 'Jajarkot', 'Dolpa', 'Jumla', 'Kalikot', 'Mugu', 'Humla']
                        ],
                        7 => [
                                'title'     => 'Sudurpashchim Pradesh',
                                'districts' => ['Bajura District', 'Bajhang District', 'Achham District', 'Doti District', 'Kailali District', 'Kanchanpur District', 'Dadeldhura District', 'Baitadi District']

                        ],
                ],
                'regions'  => [
                        1 => [
                                'title' => 'Far Western',
                                'zones' => ['Mahakali', 'Seti']
                        ],
                        2 => [
                                'title' => 'Mid Western',
                                'zones' => ['Karnali', 'Bheri', 'Rapti']
                        ],
                        3 => [
                                'title' => 'Western',
                                'zones' => ['Dhawalagiri', 'Gandaki', 'Lumbini']
                        ],
                        4 => [
                                'title' => 'Central',
                                'zones' => ['Janakpur', 'Bagmati', 'Narayani']
                        ],
                        5 => [
                                'title' => 'Eastern',
                                'zones' => ['Mechi', 'Koshi', 'Sagarmatha']
                        ],
                ]
        ]
];
