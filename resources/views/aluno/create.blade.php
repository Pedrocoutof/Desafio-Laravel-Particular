@include('components.create', [
    'array' => [
        [
            'label' => 'Nome',
            'type' => 'text',
            'name' => 'nome',
        ],
        [
            'label' => 'E-mail',
            'type' => 'email',
            'name' => 'email',
        ],
        [
            'label' => 'Telefone de contato',
            'type' => 'number',
            'name' => 'telefone',
        ],
        [
            'label' => 'Data de nascimento',
            'type' => 'date',
            'name' => 'data_nascimento',
        ],


        [
            'label' => 'Cidade',
            'type' => 'text',
            'name' => 'cidade',
        ],
        [
            'label' => 'Bairro',
            'type' => 'text',
            'name' => 'bairro',
        ],

        [
            'label' => 'Rua',
            'type' => 'text',
            'name' => 'rua',
        ],

        [
            'label' => 'Número',
            'type' => 'number',
            'name' => 'numero',
        ],

        [
            'label' => 'Data de pagamento',
            'type' => 'date',
            'name' => 'data_pagamento',
        ],
        [
            'label' => 'Data de vencimento',
            'type' => 'date',
            'name' => 'data_vencimento',
        ],


    ],
    'hidden' => [
        [
            'name' => 'data_cadastro',
            'value' => \Carbon\Carbon::now(),
        ]
    ],
])
