@include('components.table',
    [
        'nameObj' => 'aluno',
        'primaryKey' => 'id',
        'arrayObj' => $arrayObj,

        'titlesTable' => ['#', 'Nome', 'Data matrícula', 'Data Vencimento'],
        'nameAttributes' => ['id', 'nome', 'data_cadastro', 'data_vencimento'],

        'opcoes' => [
                [
                  'color' => 'primary',
                  'name' => 'Visualizar',
                  'href' => '/aluno/visualizar/',
                ],
                [
                  'color' => 'warning',
                  'name' => 'Editar',
                  'href' => '/aluno/editar/',
                ],

                [
                  'color' => 'danger',
                  'name' => 'Excluir',
                  'href' => '/aluno/excluir/',
                ]
            ]
    ]
)
