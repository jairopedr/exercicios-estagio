<?php
require_once 'help_helper.php';

echo "<h3>Exercicio 01</h1>";
$exer01 = [
    'Joao' => 25,
    'Maria' => 30,
    'Pedro' => 22
];

pre($exer01);


echo "<h3>Exercicio 02</h3>";
$exer02 = [
    'caneta' => [
        'preco' => 1.50,
        'quantidade' => 100
    ],
    'caderno' => [
        'preco' => 5.00,
        'quantidade' => 50
    ],
    'borracha' => [
        'preco' => 0.75,
        'quantidade' => 200
    ]
];
pre($exer02);


echo "<h3>Exercicio 03</h3>";
$exer03 = [
    'Sao Paulo' => 'SP',
    'Rio de Janeiro' => 'RJ',
    'Salvador' => 'BA'
];
pre($exer03);


echo "<h3>Exercicio 04</h3>";
$exer04 = [5, 10, 15, 20];
pre($exer04);


echo "<h3>Exercicio 05</h3>";
$exer05 = [
    'Segunda' => '', 
    'Terca' => '',
    'Quarta' => ''
];
pre($exer05);


echo "<h3>Exercicio 06</h3>";
$exer06 = [
    [
        'nome' => 'Lucas',
        'cargo' => 'Gerente',
        'salario' => 4500
    ],
    [
        'nome' => 'Fernanda',
        'cargo' => 'Analista',
        'salario' => 3000
    ],
    [   
        'nome' => 'Joao', 
        'cargo' => 'Estagiario',
        'salario' => 1200
    ]
];
pre($exer06);


echo "<h3>Exercicio 07</h3>";
$exer07 = [
    'Celular' => 'Eletronicos',
    'Mesa' => 'Moveis',
    'Livro' => 'Livros'
];
pre($exer07);


echo "<h3>Exercicio 08</h3>";
$exer08 = [
    'Joao' => [7, 8, 9],
    'Maria' => [8, 9, 10],
    'Pedro' => [6, 5, 7]
];
pre($exer08);


echo "<h3>Exercicio 09</h3>";
$exer09 = [
    '001' => '',
    '002' => '',
    '003' => ''
];
pre($exer09);


echo "<h3>Exercicio 10</h3>";
$exer10 = [
    '2024-01-01' => 'Ano Novo',
    '2024-12-25' => 'Natal',
    '2024-11-15' => 'Proclamacao da Republica'
];
pre($exer10);


echo "<h3>Exercicio 11</h3>";
$exer11 = [
    'Brasil' => 'Brasilia',
    'Argentina' => 'Buenos Aires',
    'Uruguai' => 'Montevideu'
];
pre($exer11);


echo "<h3>Exercicio 12</h3>";
$exer12 = [
    'Ana' => [
        'Produtos' => ['Arroz', 'Feijao', 'Cafe']
    ],
    'Carlos' => [
        'Produtos' => ['Leite', 'Acucar', 'Pao']
    ],
    'Helena' => [
        'Produtos' => ['Carne', 'Queijo', 'Suco']
    ]
];
pre($exer12);


echo "<h3>Exercicio 13</h3>";
$exer13 = [
    'Google' => 'California',
    'Amazon' => 'Seattle',
    'Microsoft' => 'Redmond'
];
pre($exer13);


echo "<h3>Exercicio 14</h3>";
$exer14 = [
    'Rafael' => [
        'Nota 1' => 7.5,
        'Nota 2' => 8.0,
        'Nota 3' => 9.0
    ],
    'Julia' => [
        'Nota 1' => 6.0, 
        'Nota 2' => 7.5, 
        'Nota 3' => 8.5
    ],
    'Marcos' => [
        'Nota 1' => 8.0,
        'Nota 2' => 8.5,
        'Nota 3' => 9.5
    ]
];
pre($exer14);


echo "<h3>Exercicio 15</h3>";
$exer15 = [
    'Alice' => [
        'Cargo' => 'Diretora',
        'Departamento' => 'RH'
    ],
    'Gustavo' => [
        'Cargo' => 'Engenheiro',
        'Departamento' => 'Producao'
    ],
    'Camila' => [
        'Cargo' => 'Analista',
        'Departamento' => 'TI'
    ],
];
pre($exer15);


echo "<h3>Exercicio 16</h3>";
$exer16 = [
    'Maca' => 150,
    'Banana' => 100,
    'Laranja' => 200
];
pre($exer16);


echo "<h3>Exercicio 17</h3>";
$exer17 = [
    'Equipe A' => 35,
    'Equipe B' => 42,
    'Equipe C' => 28
];
pre($exer17);


echo "<h3>Exercicio 18</h3>";
$exer18 = [
    'Jose' => [
        'Disciplina' => 'Matematica',
        'Nota' => 8.5
    ],
    'Maria' => [
        'Disciplina' => 'Portugues',
        'Nota' => 9.0
    ],
    'Pedro' => [
        'Disciplina' => 'Historia',
        'Nota' => 7.5
    ]
];
pre($exer18);


echo "<h3>Exercicio 19</h3>";
$exer19 = [
    'Japao' => 'Iene',
    'Estados Unidos' => 'Dolar',
    'Reino Unido' => 'Libra'
];
pre($exer19);


echo "<h3>Exercicio 20</h3>";
$exer20 = [
    [
        'Modelo' => 'Corolla',
        'Ano' => '2020',
        'Preço' => 80000
    ],
    [
        'Modelo' => 'Civic',
        'Ano' => '2021',
        'Preço' => 90000
    ],
    [
        'Modelo' => 'Gol',
        'Ano' => '2019',
        'Preco' => 50000
    ]
];
pre($exer20);


echo "<h3>Exercicio 21</h3>";
$exer21 = [
    'Joao' => [
        'Endereco' => 'Rua A, 123, SP',
        'Pedidos' => [
            [
                'Produto' => 'Caneta',
                'Quantidade' => 10
            ],
            [
                'Produto' => 'Lapis',
                'Quantidade' => 5
            ]
        ]
    ],
    'Maria' => [
        'Endereco' => 'Av.B, 456, RJ',
        'Pedidos' => [
            [
                'Produto' => 'Borracha',
                'Quantidade' => 2,
            ],
            [
                'Produto' => 'Caderno',
                'Quantidade' => 3
            ]
        ]
    ],
    'Pedro' => [
        'Endereco' => 'Rua C, 789, MG',
        'Pedidos' => [
            [
                'Produto' => 'Livro',
                'Quantidade' => '1'
            ],
            [
                'Produto' => 'Regua',
                'Quantidade' => 2
            ]
        ]
    ]

];
pre($exer21);
// pre($exer21['Pedro']['Pedidos']);


echo "<h3>Exercicio 22</h3>";
$exer22 = [
    'Ana' => [
        'Equipe' => 'Desenvolvimento',
        'Projetos' => [
            'Projeto' => 'App',
            'Status' => 'Ativo'
        ]
    ],
    'Lucas' => [
        'Equipe' => 'Marketing',
        'Projetos' => [
            'Projeto' => 'Campanha',
            'Status' => 'Em andamento'
        ]
    ],
    'Carla' => [
        'Equipe' => 'Financas',
        'Projetos' => [
            'Projeto' => 'Relatorio',
            'Status' => 'Concluido'
        ]
    ]
];
pre($exer22);


echo "<h3>Exercicio 23</h3>";
$exer23 = [
    'Brasil' => [
        'Estados' => ['SP', 'RJ', 'MG'],
        'Cidades' => ['Sao Paulo', 'Rio de Janeiro', 'Belo Horizonte']
    ],
    'EUA' => [
        'Estados' => ['CA', 'NY', 'TX'],
        'Cidades' => ['Los Angeles', 'Nova York', 'Houston']
    ],
    'Alemanha' => [
        'Estados' => ['Baviera', 'Berlim', 'Renania do Norte-Vestfalia'],
        'Cidades' => ['Munique', 'Berlim', 'Colonia']
    ]
];
pre($exer23);


echo "<h3>Exercicio 24</h3>";
$exer24 = [
    'Engenharia' => [
        'Alunos' => ['Joao', 'Pedro', 'Maria'],
        'Modulos' => [
            [   
                'Modulo'=> 'Matematica',
                'Duracao' => '6 meses'
            ]  
        ] 
    ],
    'Administracao' => [
        'Alunos' => ['Ana', 'Carlos'],
        'Modulos' => [
            [
                'Modulo' => 'Economia',
                'Duracao' => '4 meses'
            ]
        ]
    ],
    'Direito' => [
        'Alunos' => ['Julia', 'Fernanda'],
        'Modulos' => [
            [
                'Modulo' => 'Direito Civil',
                'Duracao' => '5 meses'
            ]
        ]
    ]
];
pre($exer24);


echo "<h3>Exercicio 25</h3>";
$exer25 = [
    'Restaurante A' => [
        'Localizacao' => 'SP',
        'Pratos' => [
            [   
                'Prato'=> 'Feijoada',
                'Preco' => 30
            ],  
            [   
                'Prato'=> 'Lasanha',
                'Preco' => 25
            ]  
        ],
        'Avaliacao' => 4.5
    ],
    'Restaurante B' => [
        'Localizacao' => 'RJ',
        'Pratos' => [
            [   
                'Prato'=> 'Pizza',
                'Preco' => 40
            ],  
            [   
                'Prato'=> 'Pastel',
                'Preco' => 10
            ]  
        ],
        'Avaliacao' => 4.0 
    ],
    'Restaurante C' => [
        'Localizacao' => 'MG',
        'Pratos' => [
            [
                'Prato' => 'Tutu',
                'Preco' => 20
            ],
            [
                'Prato' => 'Pao de Queijo',
                'Preco' => 5
            ]
        ],
        'Avaliacao' => 4.7
    ]
];
pre($exer25);


echo "<h3>Exercicio 26</h3>";
$exer26 = [
    'PHP Avancado' => [
        'Autor' => 'Joao Silva',
        'Capitulos' => [
            [   
                'Capitulo'=> 'Introducao',
                'Paginas' => 10
            ],  
            [   
                'Capitulo'=> 'Arrays',
                'Paginas' => 30
            ]  
        ],
    ],
    'Javascript' => [
        'Autor' => 'Maria Oliveira',
        'Capitulos' => [
            [   
                'Capitulo'=> 'Basico',
                'Paginas' => 20
            ],  
            [   
                'Capitulo'=> 'Funcoes',
                'Paginas' => 40
            ]  
        ],
    ],
    'Python' => [
        'Autor' => 'Pedro Souza',
        'Capitulos' => [
            [
                'Capitulo' => 'Fundamentos',
                'Paginas' => 25
            ],
            [
                'Capitulo' => 'Classes',
                'Pagina' => 35
            ]
        ],
    ]
];
pre($exer26);


echo "<h3>Exercicio 27</h3>";
$exer27 = [
    'Empresa X' => [
        'Departamentos' => ['RH', 'TI', 'Marketing'],
        'Funcionarios' => [
            [
                'Nome' => 'Ana',
                'Cargo' => 'Gerente'
            ],
            [
                'Nome' => 'Carlos',
                'Cargo' => 'Analista'
            ]
        ]
    ],
    'Empresa Y' => [
        'Departamentos' => ['Comercial', 'Fnanceiro'],
        'Funcionarios' => [
            [
                'Nome' => 'Pedro',
                'Cargo' => 'Vendedor'
            ],
            [
                'Nome' => 'Fernanda',
                'Cargo' => 'Contadora'
            ]
        ]
    ],
    'Empresa Z' => [
        'Departamentos' => ['Producao', 'Logistica'],
        'Funcionarios' => [
            [
                'Nome' => 'Joao',
                'Cargo' => 'Supervisor'
            ],
            [
                'Nome' => 'Julia',
                'Cargo' => 'Coordenadora'
            ]
        ]
    ]
];
pre($exer27);


echo "<h3>Exercicio 28</h3>";
$exer28 = [
    [
        'Data' => '2024-01-01',
        'Categoria' => 'Alimentacao',
        'Despesas' => [
            [
                'Descricao' => 'Supermercado',
                'Valor' => 150
            ],
            [
                'Descricao' => 'Restaurante',
                'Valor' => 80
            ]
        ]
    ],
    [
        'Data' => '2024-02-15',
        'Categoria' => 'Transporte',
        'Despesas' => [
            [
                'Descricao' => 'Uber',
                'Valor' => 40
            ],
            [
                'Descricao' => 'Combustivel',
                'Valor' => 120
            ]
        ]
    ],
    [
        'Data' => 20240310,
        'Categoria' => 'Educacao',
        'Despesas' => [
            [
                'Descricao' => 'Curso Online',
                'Valor' => 200
            ],
            [
                'Descricao' => 'Livros',
                'Valor' => 100
            ]
        ]
    ]
];
pre($exer28);


echo "<h3>Exercicio 29</h3>";
$exer29 = [
    'Jogo 1' => [
        'Flamengo' => [
            'Estatisticas' => [
                'Posse' => '60%',
                'Chutes a gol' => 8
            ]
        ],
        'Palmeiras' => [
            'Estatisticas' => [
                'Posse' => '40%',
                'Chutes a gol' => 6
            ]
        ]
    ],
    'Jogo 2' => [
        'Corinthians' => [
            'Estatisticas' => [
                'Posse' => '55%',
                'Chutes a gol' => 10
            ]
        ],
        'Sao Paulo' => [
            'Estatisticas' => [
                'Posse' => '45%',
                'Chutes a gol' => 7
            ]
        ]
    ],
    'Jogo 3' => [
        'Gremio' => [
            'Estatisticas' => [
                'Posse' => '50%',
                'Chutes a jogos' => 5
            ]
        ],
        'Internacional' => [
            'Estatisticas' => [
                'Posse' => '50%',
                'Chutes a jogos' => 5
            ]
        ]
    ]
];
pre($exer29);


echo "<h3>Exercicio 30</h3>";
$exer30 = [
    'Casamento' => [
        'Data' => '2024-05-15',
        'Convidados' => [
            [
                'Nome' => 'Ana',
                'Idade' => 30
            ],
            [
                'Nome' => 'Joao',
                'Idade' => 35
            ]
        ],
        'Local' => 'Chacara X'
    ],
    'Aniversario' => [
        'Data' => '2024-08-10',
        'Convidados' => [
            [
                'Nome' => 'Pedro',
                'Idade' => 20
            ],
            [
                'Nome' => 'Maria',
                'Idade' => 25
            ]
        ],
        'Local' => 'Salao Y'
    ],
    'Conferencia' => [
        'Data' => '2024-09-25',
        'Convidados' => [
            [
                'Nome' => 'Julia',
                'Idade' => 30
            ],
            [
                'Nome' => 'Lucas',
                'Idade' => 32
            ]
        ],
        'Local' => 'Centro Z'
    ],
];
pre($exer30);



echo "<h3>Exercicio 31</h3>";
$exer31 = [
    'Eletronicos' => [
        'Produtos' => [
            [
                'Produto' => 'TV',
                'Preco' => 1500
            ],
            [
                'Produto' => 'Celular',
                'Preco' => 1200
            ]
        ],
        'Fornecedores' => [
            [
                'Nome' => 'Tech Corp',
                'Cidade' => 'SP'
            ],
            [
                'Nome' => 'Digital Ltda',
                'Cidade' => 'RJ'
            ]
        ]
    ],
    'Moveis' => [
        'Produtos' => [
            [
                'Produto' => 'Mesa',
                'Preco' => 300
            ],
            [
                'Produto' => 'Cadeira',
                'Preco' => 100
            ]
        ],
        'Fornecedores' => [
            [
                'Nome' => 'Moveis BR',
                'Cidade' => 'MG'
            ],
            [
                'Nome' => 'Casa Forte',
                'Cidade' => 'SC'
            ]
        ]
    ],
    'Vestuario' => [
        'Produtos' => [
            [
                'Produto' => 'Camisa',
                'Preco' => 50
            ],
            [
                'Produto' => 'Calca',
                'Preco' => 80
            ]
        ],
        'Fornecedores' => [
            [
                'Nome' => 'Fashion Co',
                'Cidade' => 'RJ'
            ],
            [
                'Nome' => 'Style Ltda',
                'Cidade' => 'SP'
            ]
        ]
    ]
];
pre($exer31);


echo "<h3>Exercicio 32</h3>";
$exer32 = [
    'Inception' => [
        'Genero' => 'Ficcao',
        'Elenco' => [
            [
                'Ator' => 'Leonardo DiCaprio',
                'Personagem' => 'Cobb'
            ],
            [
                'Ator' => 'Joseph Gordon-Levitt',
                'Personagem' => 'Arthur'
            ]
        ],
        'Avaliacao' => 9.0
    ],
    'Matrix' => [
        'Genero' => 'Acao',
        'Elenco' => [
            [
                'Ator' => 'Keanu Reeves',
                'Personagem' => 'Neo'
            ],
            [
                'Ator' => 'Laurence Fishburne',
                'Personagem' => 'Morpheus'
            ]
        ],
        'Avaliacao' => 8.5
    ],
    'Titanic' => [
        'Genero' => 'Romance',
        'Elenco' => [
            [
                'Ator' => 'Leonardo DiCaprio',
                'Personagem' => 'Jack'
            ],
            [
                'Ator' => 'Kate Winslet',
                'Personagem' => 'Rose'
            ]
        ],
        'Avaliacao' => 9.5
    ]
];
pre($exer32);