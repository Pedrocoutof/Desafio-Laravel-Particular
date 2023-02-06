@include('components.table', [
    'arraybj' => $arrayObj,

    'titlesTable' => ['#', 'Nome', 'Telefone'],

    'nameAttributes' => ['id', 'name', 'telefone'],

     'primaryKey' => 'id',

     'opcoes' => [
                [
                  'color' => 'primary',
                  'name' => 'Visualizar',
                  'href' => '/funcionario/visualizar/',
                ],
                [
                  'color' => 'warning',
                  'name' => 'Editar',
                  'href' => '/funcionario/editar/',
                ],

                [
                  'color' => 'danger',
                  'name' => 'Excluir',
                  'href' => '/funcionario/excluir/',
                ]
            ]

])
