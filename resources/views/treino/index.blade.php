@include('components.table',
    [
        'nameObj' => 'treino',
        'primaryKey' => 'id',
        'arrayObj' => $arrayObj,

        'titlesTable' => ['#', 'Aluno', 'Instrutor', 'Data'],
        'nameAttributes' => ['id', 'aluno', 'instrutor', 'data'],

        'opcoes' => [
                [
                  'color' => 'primary',
                  'name' => 'Visualizar',
                  'href' => '/treino/visualizar/',
                ],
                [
                  'color' => 'warning',
                  'name' => 'Editar',
                  'href' => '/treino/editar/',
                ],

                [
                  'color' => 'danger',
                  'name' => 'Excluir',
                  'href' => '/treino/excluir/',
                ]
            ]
    ]
)
