<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=100">
    <title>Formulário de Avaliação</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="formulario">

        <form action="resultado.php" method="POST">
            <!-- Seção 1: Informações Básicas -->
            <div class="section active" id="section1">
                <h2>Informações Básicas</h2>
                <h2 class="pergunta">Nome completo<span style="color: red;">*</span></h2>
                <input type="text" id="nome" required><br>
                <h2 class="pergunta">Número de celular<span style="color: red;">*</span></h2>
                <input type="text" id="celular" required><br>
                <h2 class="pergunta">Nome da Empresa<span style="color: red;">*</span></h2>
                <input type="text" id="empresa" required><br>
                <h2 class="pergunta">Email<span style="color: red;">*</span></h2>
                <input type="text" id="email" required><br><br>
                <button class="next" type="button" onclick="nextSection(2)">Avançar</button> <br>
            </div>

            <!-- Seção 2: Liderança -->
            <div class="section" id="section2">
                <h2>Liderança</h2>
                <h2 class="pergunta">A missão da empresa está definida e conhecida pelos colaboradores? </h2>
                <label for="missao1">
                    <input type="radio" id="missao1" name="missao" value="25" required> A missão
                    não está definida
                </label><br>

                <label for="missao2">
                    <input type="radio" id="missao2" name="missao" value="50"> A
                    missão está definida informalmente
                </label><br>

                <label for="missao3">
                    <input type="radio" id="missao3" name="missao" value="75"> A missão está
                    definida e registrada, conhecida por alguns colaboradores
                </label><br>

                <label for="missao4">
                    <input type="radio" id="missao4" name="missao" value="100"> A missão está
                    definida e registrada, conhecida por todos os colaboradores
                </label><br>


                <h2 class="pergunta">O comportamento ético é incentivado pelos dirigentes nas relações internas e
                    externas? </h2>
                <label>
                    <input type="radio" name="comportamento_etico" value="25" required>
                    Não existem regras para assegurar comportamento ético
                </label><br>
                <label>
                    <input type="radio" name="comportamento_etico" value="50">
                    O comportamento ético é promovido por meios informais
                </label><br>
                <label>
                    <input type="radio" name="comportamento_etico" value="75">
                    O comportamento ético está definido em regras escritas
                </label><br>
                <label>
                    <input type="radio" name="comportamento_etico" value="100">
                    Definido em regras escritas, conhecidas e praticadas por todos
                </label><br><br>

                <h2 class="pergunta">O desempenho da empresa é analisado pelos dirigentes? </h2>
                <label>
                    <input type="radio" name="desempenho" value="25" required>
                    Não é feita a análise do desempenho da empresa
                </label><br>
                <label>
                    <input type="radio" name="desempenho" value="50">
                    É feita ocasionalmente
                </label><br>
                <label>
                    <input type="radio" name="desempenho" value="75">
                    É feita frequentemente mas de forma restrita
                </label><br>
                <label>
                    <input type="radio" name="desempenho" value="100">
                    É feita frequentemente de forma ampla
                </label><br><br>

                <h2 class="pergunta">Os dirigentes compartilham informações com os colaboradores? </h2>
                <label>
                    <input type="radio" name="compartilhamento_informacao" value="25" required>
                    As informações não são compartilhadas
                </label><br>
                <label>
                    <input type="radio" name="compartilhamento_informacao" value="50">
                    O compartilhamento de informações ocorre esporadicamente
                </label><br>
                <label>
                    <input type="radio" name="compartilhamento_informacao" value="75">
                    O compartilhamento de informações ocorre regularmente com alguns colaboradores
                </label><br>
                <label>
                    <input type="radio" name="compartilhamento_informacao" value="100">
                    O compartilhamento de informações ocorre regularmente com todos colaboradores
                </label><br><br>

                <h2 class="pergunta">Os dirigentes investem em seu desenvolvimento gerencial e aplicam os conhecimentos
                    adquiridos na empresa? </h2>
                <label>
                    <input type="radio" name="desenvolvimento_gerencial" value="25" required>
                    Os dirigentes não investem em seu desenvolvimento gerencial
                </label><br>
                <label>
                    <input type="radio" name="desenvolvimento_gerencial" value="50">
                    Investem esporadicamente mas não aplicam os conhecimentos
                </label><br>
                <label>
                    <input type="radio" name="desenvolvimento_gerencial" value="75">
                    Investem esporadicamente e aplicam os conhecimentos
                </label><br>
                <label>
                    <input type="radio" name="desenvolvimento_gerencial" value="100">
                    Investem regularmente e aplicam os conhecimentos
                </label><br><br>

                <h2 class="pergunta">A busca de informações para identificar oportunidades de inovação inclui as fontes
                    externas e os colaboradores são incentivados a apresentarem ideias que podem se converter em
                    inovações? </h2>
                <label>
                    <input type="radio" name="inovacao" value="25" required>
                    Não há busca de informações externas e nem estímulos para ideias criativas
                </label><br>
                <label>
                    <input type="radio" name="inovacao" value="50">
                    Obtenção de informações e incentivo a ideias informalmente
                </label><br>
                <label>
                    <input type="radio" name="inovacao" value="75">
                    Obtenção de informações regularmente e incentivo formal a ideias
                </label><br>
                <label>
                    <input type="radio" name="inovacao" value="100">
                    Obtenção de informações regularmente e incentivo formal a ideias, com exemplo de inovação
                    implementada
                </label><br><br><br>

                <button type="button" onclick="prevSection(1)">Voltar</button>
                <button class="next" type="button" onclick="nextSection(3)">Avançar</button> <br>
            </div>


            <!-- Seção 3: Estratégias e Planos -->
            <div class="section" id="section3">
                <h2>Estratégias e Planos</h2>

                <h2 class="pergunta">A visão da empresa está definida e é conhecida pelos colaboradores?</h2>
                <label>
                    <input type="radio" name="visao" value="25" required>
                    A visão não está definida
                </label><br>
                <label>
                    <input type="radio" name="visao" value="50">
                    A visão está definida informalmente
                </label><br>
                <label>
                    <input type="radio" name="visao" value="75">
                    Definida e conhecida por alguns colaboradores
                </label><br>
                <label>
                    <input type="radio" name="visao" value="100">
                    Definida e conhecida por todos os colaboradores
                </label><br><br>

                <h2 class="pergunta">As estratégias que permitem alcançar os objetivos da empresa estão definidas?</h2>
                <label>
                    <input type="radio" name="estrategias" value="25" required>
                    As estratégias não estão definidas
                </label><br>
                <label>
                    <input type="radio" name="estrategias" value="50">
                    Definidas informalmente com uso restrito de informações internas e externas
                </label><br>
                <label>
                    <input type="radio" name="estrategias" value="75">
                    Definidas com uso de informações internas e externas
                </label><br>
                <label>
                    <input type="radio" name="estrategias" value="100">
                    Definidas formalmente
                </label><br><br>

                <h2 class="pergunta">Os indicadores e metas relacionados às estratégias estão estabelecidos?</h2>
                <label>
                    <input type="radio" name="indicadores" value="25" required>
                    Não existem indicadores
                </label><br>
                <label>
                    <input type="radio" name="indicadores" value="50">
                    Com alguns indicadores, sem metas
                </label><br>
                <label>
                    <input type="radio" name="indicadores" value="75">
                    Indicadores com metas
                </label><br>
                <label>
                    <input type="radio" name="indicadores" value="100">
                    Indicadores com metas e são comunicados aos colaboradores
                </label><br><br>

                <h2 class="pergunta">Os planos de ação visando alcançar as metas da empresa relacionadas às estratégias
                    estão definidos?</h2>
                <label>
                    <input type="radio" name="planos_acao" value="25" required>
                    Não existem planos de ação
                </label><br>
                <label>
                    <input type="radio" name="planos_acao" value="50">
                    Ações definidas informalmente para algumas metas
                </label><br>
                <label>
                    <input type="radio" name="planos_acao" value="75">
                    Planos de ação para as principais metas
                </label><br>
                <label>
                    <input type="radio" name="planos_acao" value="100">
                    Planos de ação para principais metas e acompanhados regularmente
                </label><br><br>
                <button type="button" onclick="prevSection(2)">Voltar</button>
                <button class="next" type="button" onclick="nextSection(4)">Avançar</button>
            </div>




            <!-- Seção : Clientes -->
            <div class="section" id="section4">
                <h2 class="pergunta">CLIENTES</h2><br>

                <h2 class="pergunta">Os clientes são agrupados e suas necessidades e expectativas são identificadas?
                    (obrigatório)</h2>
                <label>
                    <input type="radio" name="clientes_agrupados" value="25" required>
                    Não há nenhum tipo de agrupamento dos clientes
                </label><br>
                <label>
                    <input type="radio" name="clientes_agrupados" value="50">
                    Os clientes não são agrupados e a identificação das suas necessidades é feita de forma intuitiva
                </label><br>
                <label>
                    <input type="radio" name="clientes_agrupados" value="75">
                    Os clientes são agrupados e a identificação das suas necessidades é feita de forma informal por meio
                    de informações obtidas dos clientes
                </label><br>
                <label>
                    <input type="radio" name="clientes_agrupados" value="100">
                    Os clientes são agrupados e a identificação das suas necessidades é feita de forma formal por meio
                    de informações obtidas dos principais grupos de clientes
                </label><br><br>

                <h2 class="pergunta">Os produtos e serviços são divulgados aos clientes? (obrigatório)</h2>
                <label>
                    <input type="radio" name="divulgacao_produtos" value="25" required>
                    Os produtos e serviços não são divulgados aos clientes
                </label><br>
                <label>
                    <input type="radio" name="divulgacao_produtos" value="50">
                    Divulgados sem considerar os diferentes grupos de clientes
                </label><br>
                <label>
                    <input type="radio" name="divulgacao_produtos" value="75">
                    Divulgados considerando os diferentes grupos de clientes
                </label><br>
                <label>
                    <input type="radio" name="divulgacao_produtos" value="100">
                    Divulgados considerando os diferentes grupos de clientes e utilizando meios adequados para assegurar
                    a efetividade desta comunicação
                </label><br><br>

                <h2 class="pergunta">As reclamações dos clientes são registradas e tratadas? (obrigatório)</h2>
                <label>
                    <input type="radio" name="reclamacoes" value="25" required>
                    Não há canais de comunicação para reclamações
                </label><br>
                <label>
                    <input type="radio" name="reclamacoes" value="50">
                    Reclamações não registradas e tratadas ocasionalmente
                </label><br>
                <label>
                    <input type="radio" name="reclamacoes" value="75">
                    Reclamações registradas e tratadas regularmente
                </label><br>
                <label>
                    <input type="radio" name="reclamacoes" value="100">
                    Reclamações registradas e tratadas regularmente, e o cliente é informado da solução dada à sua
                    reclamação
                </label><br><br>

                <h2 class="pergunta">A satisfação dos clientes é avaliada? (obrigatório)</h2>
                <label>
                    <input type="radio" name="satisfacao_clientes" value="25" required>
                    A satisfação dos clientes não é avaliada
                </label><br>
                <label>
                    <input type="radio" name="satisfacao_clientes" value="50">
                    Avaliada eventualmente e de forma intuitiva
                </label><br>
                <label>
                    <input type="radio" name="satisfacao_clientes" value="75">
                    Avaliada periodicamente por método formal para alguns dos grupos de clientes
                </label><br>
                <label>
                    <input type="radio" name="satisfacao_clientes" value="100">
                    Avaliada periodicamente por método formal para os principais grupos de clientes
                </label><br><br>

                <h2 class="pergunta">As informações obtidas dos clientes são analisadas e utilizadas para intensificar a
                    sua fidelidade e captar novos? (obrigatório)</h2>
                <label>
                    <input type="radio" name="analise_informacoes" value="25" required>
                    Informações não são analisadas
                </label><br>
                <label>
                    <input type="radio" name="analise_informacoes" value="50">
                    Analisadas ocasionalmente para fidelizar clientes atuais
                </label><br>
                <label>
                    <input type="radio" name="analise_informacoes" value="75">
                    Analisadas e usadas regularmente para fidelizar clientes atuais
                </label><br>
                <label>
                    <input type="radio" name="analise_informacoes" value="100">
                    Usadas regularmente na fidelização dos clientes atuais e captação de novos
                </label><br><br>

                <button type="button" onclick="prevSection(3)">Voltar</button>
                <button class="next" type="button" onclick="nextSection(5)">Avançar</button>
            </div>





            <div class="section" id="section5">
                <h2 class="pergunta">SOCIEDADE</h2><br>

                <h2 class="pergunta">As exigências legais necessárias para o funcionamento da empresa são conhecidas e
                    mantidas atualizadas? (obrigatório)</h2>
                <label>
                    <input type="radio" name="exigencias_legais" value="25" required>
                    As exigências legais aplicáveis à empresa não são conhecidas
                </label><br>
                <label>
                    <input type="radio" name="exigencias_legais" value="50">
                    Algumas exigências legais aplicáveis à empresa são conhecidas, mas não são mantidas atualizadas
                </label><br>
                <label>
                    <input type="radio" name="exigencias_legais" value="75">
                    As exigências legais aplicáveis à empresa são conhecidas, mas não são mantidas atualizadas
                </label><br>
                <label>
                    <input type="radio" name="exigencias_legais" value="100">
                    As exigências legais aplicáveis à empresa são conhecidas e mantidas atualizadas
                </label><br><br>

                <h2 class="pergunta">Os impactos negativos causados pela empresa ao meio ambiente são conhecidos e
                    tratados? (obrigatório)</h2>
                <label>
                    <input type="radio" name="impactos_ambientais" value="25" required>
                    Os impactos negativos ao meio ambiente não são conhecidos
                </label><br>
                <label>
                    <input type="radio" name="impactos_ambientais" value="50">
                    Os impactos negativos ao meio ambiente não são conhecidos, mas algumas ações são adotadas de modo a
                    evitar prejuízos ao meio ambiente
                </label><br>
                <label>
                    <input type="radio" name="impactos_ambientais" value="75">
                    Os impactos negativos ao meio ambiente são conhecidos e alguns são tratados por meio de ações
                    adequadas
                </label><br>
                <label>
                    <input type="radio" name="impactos_ambientais" value="100">
                    Os impactos negativos ao meio ambiente são identificados e alguns são tratados de forma planejada
                    por meio de ações adequadas
                </label><br><br>

                <h2 class="pergunta">A empresa demonstra seu comprometimento com a comunidade por meio de ações ou
                    projetos sociais? (obrigatório)</h2>
                <label>
                    <input type="radio" name="comprometimento_social" value="25" required>
                    Não são realizadas ações ou projetos sociais
                </label><br>
                <label>
                    <input type="radio" name="comprometimento_social" value="50">
                    A empresa participa ou realiza ações ou projetos sociais esporadicamente
                </label><br>
                <label>
                    <input type="radio" name="comprometimento_social" value="75">
                    A empresa participa ou realiza ações ou projetos sociais regularmente com envolvimento dos
                    colaboradores
                </label><br>
                <label>
                    <input type="radio" name="comprometimento_social" value="100">
                    A responsabilidade social faz parte das estratégias e planos da empresa e as ações ou projetos
                    contam com envolvimento dos colaboradores
                </label><br><br>

                <button type="button" onclick="prevSection(4)">Voltar</button>
                <button class="next" type="button" onclick="nextSection(6)">Avançar</button>
            </div>



            <div class="section" id="section6">
                <h2 class="pergunta">INFORMAÇÕES E CONHECIMENTO</h2><br>

                <h2 class="pergunta">As informações necessárias para o planejamento, execução, análise das atividades e
                    para a tomada de decisão estão definidas e disponibilizadas aos colaboradores? (obrigatório)</h2>
                <label>
                    <input type="radio" name="informacoes_planejamento" value="25" required>
                    As informações não estão definidas
                </label><br>
                <label>
                    <input type="radio" name="informacoes_planejamento" value="50">
                    Algumas informações para o planejamento, análise e execução das atividades para a tomada de decisão
                    estão definidas
                </label><br>
                <label>
                    <input type="radio" name="informacoes_planejamento" value="75">
                    As principais informações para o planejamento, análise e execução das atividades para a tomada de
                    decisão estão definidas e são disponibilizadas para os colaboradores
                </label><br>
                <label>
                    <input type="radio" name="informacoes_planejamento" value="100">
                    As informações para o planejamento, análise e execução das atividades para a tomada de decisão estão
                    definidas, disponibilizadas para os colaboradores, organizadas em sistemas de informações e são
                    utilizados mecanismos de segurança para proteção das mesmas
                </label><br><br>

                <h2 class="pergunta">O compartilhamento do conhecimento é promovido? (obrigatório)</h2>
                <label>
                    <input type="radio" name="compartilhamento_conhecimento" value="25" required>
                    Não existem ações para promover o compartilhamento do conhecimento
                </label><br>
                <label>
                    <input type="radio" name="compartilhamento_conhecimento" value="50">
                    Os colaboradores são incentivados a compartilhar o conhecimento adquirido
                </label><br>
                <label>
                    <input type="radio" name="compartilhamento_conhecimento" value="75">
                    Os colaboradores compartilham o conhecimento adquirido por meio de métodos formalizados
                </label><br>
                <label>
                    <input type="radio" name="compartilhamento_conhecimento" value="100">
                    Os colaboradores compartilham o conhecimento adquirido, por meio de métodos formalizados, e este
                    conhecimento é registrado
                </label><br><br>

                <h2 class="pergunta">São promovidas melhorias nas práticas de gestão? (obrigatório)</h2>
                <label>
                    <input type="radio" name="melhorias_gestao" value="25" required>
                    As práticas de gestão não demonstram melhorias
                </label><br>
                <label>
                    <input type="radio" name="melhorias_gestao" value="50">
                    Pelo menos uma prática de gestão apresenta melhorias
                </label><br>
                <label>
                    <input type="radio" name="melhorias_gestao" value="75">
                    Algumas práticas de gestão apresentam melhorias
                </label><br>
                <label>
                    <input type="radio" name="melhorias_gestao" value="100">
                    Muitas práticas de gestão apresentam melhorias decorrentes da análise de resultados de diagnóstico
                    da gestão
                </label><br><br>

                <h2 class="pergunta">São obtidas e utilizadas informações comparativas na análise do desempenho e
                    melhoria dos produtos/serviços e processos? (obrigatório)</h2>
                <label>
                    <input type="radio" name="informacoes_comparativas" value="25" required>
                    Não são obtidas informações comparativas externas
                </label><br>
                <label>
                    <input type="radio" name="informacoes_comparativas" value="50">
                    São obtidas informações comparativas externas, mas não são utilizadas na análise do desempenho e
                    melhoria dos produtos/serviços e processos
                </label><br>
                <label>
                    <input type="radio" name="informacoes_comparativas" value="75">
                    São obtidas informações comparativas externas e utilizadas na melhoria dos produtos/serviços e
                    processos
                </label><br>
                <label>
                    <input type="radio" name="informacoes_comparativas" value="100">
                    São obtidas informações comparativas externas e apresenta evidências de utilização na análise do
                    desempenho e melhoria dos produtos/serviços e processos
                </label><br><br>

                <button type="button" onclick="prevSection(5)">Voltar</button>
                <button class="next" type="button" onclick="nextSection(7)">Avançar</button>
            </div>




            <div class="section" id="section7">
                <h2 class="pergunta">PROCESSOS</h2><br>

                <h2 class="pergunta">Os processos principais do negócio são executados de forma padronizada, com padrões
                    documentados? (obrigatório)</h2>
                <label>
                    <input type="radio" name="processos_padronizados" value="25" required>
                    Os processos principais do negócio não são executados de forma padronizada
                </label><br>
                <label>
                    <input type="radio" name="processos_padronizados" value="50">
                    Os processos principais do negócio são executados de forma padronizada, mas os padrões não são
                    documentados
                </label><br>
                <label>
                    <input type="radio" name="processos_padronizados" value="75">
                    Os processos principais do negócio são executados de forma padronizada, com padrões documentados
                </label><br>
                <label>
                    <input type="radio" name="processos_padronizados" value="100">
                    Os processos principais do negócio são executados de forma padronizada, com padrões documentados e
                    definidos a partir de requisitos traduzidos das necessidades dos clientes
                </label><br><br>

                <h2 class="pergunta">Os processos principais do negócio são controlados para garantir a satisfação das
                    necessidades dos clientes? (obrigatório)</h2>
                <label>
                    <input type="radio" name="controle_processos" value="25" required>
                    Os processos principais do negócio não são controlados
                </label><br>
                <label>
                    <input type="radio" name="controle_processos" value="50">
                    Os processos principais do negócio não são controlados, mas são corrigidos quando ocorrem problemas
                    ou reclamações dos clientes
                </label><br>
                <label>
                    <input type="radio" name="controle_processos" value="75">
                    Os processos principais do negócio são controlados com base em padrões de execução definidos e
                    documentados
                </label><br>
                <label>
                    <input type="radio" name="controle_processos" value="100">
                    Os processos principais do negócio são controlados com base em padrões definidos e documentados e
                    também por meio de indicadores e metas
                </label><br><br>

                <h2 class="pergunta">Os fornecedores da empresa são selecionados e avaliados segundo critérios
                    definidos? (obrigatório)</h2>
                <label>
                    <input type="radio" name="fornecedores_criterios" value="25" required>
                    Os fornecedores não são selecionados segundo critérios definidos e não são avaliados quanto ao seu
                    desempenho
                </label><br>
                <label>
                    <input type="radio" name="fornecedores_criterios" value="50">
                    Os fornecedores são selecionados com critérios definidos, mas seu desempenho não é avaliado
                </label><br>
                <label>
                    <input type="radio" name="fornecedores_criterios" value="75">
                    Os fornecedores são selecionados com critérios definidos e seu desempenho é avaliado apenas quando
                    ocorre algum problema
                </label><br>
                <label>
                    <input type="radio" name="fornecedores_criterios" value="100">
                    Os fornecedores são selecionados com critérios definidos e seu desempenho é avaliado periodicamente,
                    gerando ações para melhoria do fornecimento
                </label><br><br>

                <h2 class="pergunta">As finanças da empresa são controladas a fim de otimizar a utilização dos recursos?
                    (obrigatório)</h2>
                <label>
                    <input type="radio" name="controles_financeiros" value="25" required>
                    Não existem controles financeiros
                </label><br>
                <label>
                    <input type="radio" name="controles_financeiros" value="50">
                    Existem controles financeiros, mas não é utilizado fluxo de caixa
                </label><br>
                <label>
                    <input type="radio" name="controles_financeiros" value="75">
                    Existem controles financeiros com utilização de fluxo de caixa
                </label><br>
                <label>
                    <input type="radio" name="controles_financeiros" value="100">
                    Existem controles financeiros com utilização de fluxo de caixa e orçamento com horizonte de pelo
                    menos um ano
                </label><br><br>

                <button type="button" onclick="prevSection(6)">Voltar</button>
                <button class="next" type="button" onclick="nextSection(8)">Avançar</button>
            </div>


            <div class="section" id="section8">
                <h2 class="pergunta">RESULTADOS</h2><br>

                <h2 class="pergunta">Existem resultados relativos à satisfação dos clientes? (obrigatório)</h2>
                <label>
                    <input type="radio" name="satisfacao_clientes" value="25" required>
                    Não existem informações suficientes para avaliar
                </label><br>
                <label>
                    <input type="radio" name="satisfacao_clientes" value="50">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, mas a tendência é
                    desfavorável
                </label><br>
                <label>
                    <input type="radio" name="satisfacao_clientes" value="75">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, sendo que nos dois
                    últimos períodos a tendência é favorável
                </label><br>
                <label>
                    <input type="radio" name="satisfacao_clientes" value="100">
                    Existem informações referentes a três últimos períodos anuais distintos, com tendência favorável
                    considerando os três resultados
                </label><br><br>

                <h2 class="pergunta">Existem resultados relativos a reclamações de clientes? (obrigatório)</h2>
                <label>
                    <input type="radio" name="reclamacoes_clientes" value="25" required>
                    Não existem informações suficientes para avaliar
                </label><br>
                <label>
                    <input type="radio" name="reclamacoes_clientes" value="50">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, mas a tendência é
                    desfavorável
                </label><br>
                <label>
                    <input type="radio" name="reclamacoes_clientes" value="75">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, sendo que nos dois
                    últimos períodos a tendência é favorável
                </label><br>
                <label>
                    <input type="radio" name="reclamacoes_clientes" value="100">
                    Existem informações referentes a três últimos períodos anuais distintos, com tendência favorável
                    considerando os três resultados
                </label><br><br>

                <h2 class="pergunta">Existem resultados relativos às capacitações ministradas para os colaboradores?
                    (obrigatório)</h2>
                <label>
                    <input type="radio" name="capacitacoes_colaboradores" value="25" required>
                    Não existem informações suficientes para avaliar
                </label><br>
                <label>
                    <input type="radio" name="capacitacoes_colaboradores" value="50">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, mas a tendência é
                    desfavorável
                </label><br>
                <label>
                    <input type="radio" name="capacitacoes_colaboradores" value="75">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, sendo que nos dois
                    últimos períodos a tendência é favorável
                </label><br>
                <label>
                    <input type="radio" name="capacitacoes_colaboradores" value="100">
                    Existem informações referentes a três últimos períodos anuais distintos, com tendência favorável
                    considerando os três resultados
                </label><br><br>

                <h2 class="pergunta">Existem resultados relativos a acidentes com colaboradores? (obrigatório)</h2>
                <label>
                    <input type="radio" name="acidentes_colaboradores" value="25" required>
                    Não existem informações suficientes para avaliar
                </label><br>
                <label>
                    <input type="radio" name="acidentes_colaboradores" value="50">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, mas a tendência é
                    desfavorável
                </label><br>
                <label>
                    <input type="radio" name="acidentes_colaboradores" value="75">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, sendo que nos dois
                    últimos períodos a tendência é favorável
                </label><br>
                <label>
                    <input type="radio" name="acidentes_colaboradores" value="100">
                    Existem informações referentes a três últimos períodos anuais distintos, com tendência favorável
                    considerando os três resultados
                </label><br><br>

                <h2 class="pergunta">Existem resultados relativos à produtividade no trabalho? (obrigatório)</h2>
                <label>
                    <input type="radio" name="produtividade_trabalho" value="25" required>
                    Não existem informações suficientes para avaliar
                </label><br>
                <label>
                    <input type="radio" name="produtividade_trabalho" value="50">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, mas a tendência é
                    desfavorável
                </label><br>
                <label>
                    <input type="radio" name="produtividade_trabalho" value="75">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, sendo que nos dois
                    últimos períodos a tendência é favorável
                </label><br>
                <label>
                    <input type="radio" name="produtividade_trabalho" value="100">
                    Existem informações referentes a três últimos períodos anuais distintos, com tendência favorável
                    considerando os três resultados
                </label><br><br>

                <h2 class="pergunta">Existem resultados relativos à margem de lucro? (obrigatório)</h2>
                <label>
                    <input type="radio" name="margem_lucro" value="25" required>
                    Não existem informações suficientes para avaliar
                </label><br>
                <label>
                    <input type="radio" name="margem_lucro" value="50">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, mas a tendência é
                    desfavorável
                </label><br>
                <label>
                    <input type="radio" name="margem_lucro" value="75">
                    Existem informações referentes a dois ou três últimos períodos anuais distintos, sendo que nos dois
                    últimos períodos a tendência é favorável
                </label><br>
                <label>
                    <input type="radio" name="margem_lucro" value="100">
                    Existem informações referentes a três últimos períodos anuais distintos, com tendência favorável
                    considerando os três resultados
                </label><br><br>

                <button type="button" onclick="prevSection(7)">Voltar</button>
                <button class="next" type="button" onclick="nextSection(9)">Avançar</button>
            </div>


            <div class="section" id="section9">
                <h2 class="pergunta">INOVAÇÃO</h2><br>

                <h3 class="pergunta">A empresa realiza esforços para inovar? (obrigatório)</h3>
                <label>
                    <input type="radio" name="esforcos_inovacao" value="25">
                    Não são realizados esforços
                </label><br>
                <label>
                    <input type="radio" name="esforcos_inovacao" value="50">
                    Existem alguns esforços para inovar, mas são esporádicos
                </label><br>
                <label>
                    <input type="radio" name="esforcos_inovacao" value="75">
                    Os esforços para inovar são realizados regularmente, mas não são acompanhados
                </label><br>
                <label>
                    <input type="radio" name="esforcos_inovacao" value="100">
                    Os esforços para inovar são realizados regularmente e são acompanhados e medidos através de
                    indicadores
                </label><br><br>

                <h3 class="pergunta">As informações são obtidas nos ambientes externos para identificar oportunidades de
                    inovação e posteriormente são compartilhadas com os colaboradores? (obrigatório)</h3>
                <label>
                    <input type="radio" name="informacoes_inovacao" value="25">
                    As informações e conhecimentos para identificar oportunidades de inovação não são obtidos nos
                    ambientes externos
                </label><br>
                <label>
                    <input type="radio" name="informacoes_inovacao" value="50">
                    As informações e conhecimentos para identificar oportunidades de inovação são ocasionalmente obtidos
                    nos ambientes externos
                </label><br>
                <label>
                    <input type="radio" name="informacoes_inovacao" value="75">
                    As informações e conhecimentos para identificar oportunidades de inovação são regularmente obtidos
                    nos ambientes externos
                </label><br>
                <label>
                    <input type="radio" name="informacoes_inovacao" value="100">
                    As informações e conhecimentos para identificar oportunidades de inovação são obtidos de forma
                    regular e formalmente nos ambientes externos e são compartilhados com os colaboradores
                </label><br><br>

                <h3 class="pergunta">É promovido um ambiente favorável de estímulo ao surgimento de ideias criativas e
                    da comunicação entre colaboradores para implementar as inovações? (obrigatório)</h3>
                <label>
                    <input type="radio" name="ambiente_inovacao" value="25">
                    Não é promovido um ambiente favorável
                </label><br>
                <label>
                    <input type="radio" name="ambiente_inovacao" value="50">
                    É promovido um ambiente favorável com algumas ações de estímulo predominando a comunicação informal
                    entre colaboradores
                </label><br>
                <label>
                    <input type="radio" name="ambiente_inovacao" value="75">
                    É promovido um ambiente favorável com diversas ações de estímulo predominando a comunicação formal
                    entre colaboradores
                </label><br>
                <label>
                    <input type="radio" name="ambiente_inovacao" value="100">
                    É promovido um ambiente favorável de estímulo permanente com ações formalizadas voltadas ao
                    surgimento de ideias criativas e de comunicação contínua e estruturada entre os colaboradores
                </label><br><br>

                <h3 class="pergunta">São analisadas, avaliadas e selecionadas as ideias ou oportunidades de inovação?
                    (obrigatório)
                    (obrigatório)</h3>
                <label>
                    <input type="radio" name="analise_ideias" value="25">
                    Não é realizada de forma sistemática
                </label><br>
                <label>
                    <input type="radio" name="analise_ideias" value="50">
                    É realizada ocasionalmente sem critérios de avaliação definidos
                </label><br>
                <label>
                    <input type="radio" name="analise_ideias" value="75">
                    É realizada regularmente com critérios de avaliação definidos
                </label><br>
                <label>
                    <input type="radio" name="analise_ideias" value="100">
                    É realizada regularmente com critérios de avaliação definidos, com participação dos colaboradores
                </label><br><br>

                <h3 class="pergunta">Os dirigentes apoiam e estabelecem recursos e condições de experimentação de novas
                    ideias para implementação de inovações? (obrigatório)</h3>
                <label>
                    <input type="radio" name="apoio_dirigentes" value="25">
                    Não apoiam
                </label><br>
                <label>
                    <input type="radio" name="apoio_dirigentes" value="50">
                    Apoiam a realização de novas ideias
                </label><br>
                <label>
                    <input type="radio" name="apoio_dirigentes" value="75">
                    Apoiam a realização de novas ideias e estabelecem condições práticas e recursos organizados para sua
                    implementação
                </label><br>
                <label>
                    <input type="radio" name="apoio_dirigentes" value="100">
                    Apoiam a realização de novas ideias e estabelecem condições práticas, com definição de
                    responsabilidades e recursos para implementação, em alinhamento com as estratégias
                </label><br><br>

                <h3 class="pergunta">A implementação das inovações é acompanhada? (obrigatório)</h3>
                <label>
                    <input type="radio" name="acompanhamento_inovacoes" value="25">
                    A empresa não mantém atividades de acompanhamento da implementação das inovações
                </label><br>
                <label>
                    <input type="radio" name="acompanhamento_inovacoes" value="50">
                    A empresa mantém ocasionalmente atividades de acompanhamento da implementação das inovações
                </label><br>
                <label>
                    <input type="radio" name="acompanhamento_inovacoes" value="75">
                    A empresa mantém regularmente atividades de acompanhamento da implementação das inovações
                </label><br>
                <label>
                    <input type="radio" name="acompanhamento_inovacoes" value="100">
                    A empresa mantém regularmente e controla as atividades de acompanhamento da implementação das
                    inovações com a utilização de algum indicador
                </label><br><br>

                <h3 class="pergunta">É promovido o aprendizado sobre o processo de inovação? (obrigatório)</h3>
                <label>
                    <input type="radio" name="aprendizado_inovacao" value="25">
                    Não é realizado aprendizado sobre o processo de inovação
                </label><br>
                <label>
                    <input type="radio" name="aprendizado_inovacao" value="50">
                    São promovidas reflexões sobre o processo de inovação
                </label><br>
                <label>
                    <input type="radio" name="aprendizado_inovacao" value="75">
                    São registradas as lições aprendidas sobre o processo de inovação e essas lições são compartilhadas
                    eventualmente com os colaboradores
                </label><br>
                <label>
                    <input type="radio" name="aprendizado_inovacao" value="100">
                    São registradas as lições aprendidas sobre o processo de inovação e essas lições são compartilhadas
                    regularmente com os colaboradores
                </label><br><br>

                <h3 class="pergunta">Os colaboradores são reconhecidos por sua contribuição à inovação? (obrigatório)
                </h3>
                <label>
                    <input type="radio" name="reconhecimento_colaboradores" value="25">
                    Não há reconhecimento aos colaboradores pela sua contribuição à inovação
                </label><br>
                <label>
                    <input type="radio" name="reconhecimento_colaboradores" value="50">
                    O reconhecimento da contribuição à inovação é feito esporadicamente e sem critérios definidos
                </label><br>
                <label>
                    <input type="radio" name="reconhecimento_colaboradores" value="75">
                    O reconhecimento da contribuição à inovação é feito regularmente e com critérios definidos
                </label><br>
                <label>
                    <input type="radio" name="reconhecimento_colaboradores" value="100">
                    Existe um programa formal de reconhecimento e recompensa aos colaboradores pela sua contribuição à
                    inovação
                </label><br><br>
                <h3 class="pergunta">Os colaboradores são capacitados para a inovação e para a gestão da inovação?
                    (obrigatório)</h3>
                <label>
                    <input type="radio" name="capacitados_inovacao" value="25">
                    A empresa não capacita seus colaboradores especificamente em inovação e gestão de inovação
                </label><br>
                <label>
                    <input type="radio" name="capacitados_inovacao" value="50">
                    A empresa capacita esporadicamente seus colaboradores especificamente em inovação e gestão de
                    inovação
                </label><br>
                <label>
                    <input type="radio" name="capacitados_inovacao" value="75">
                    A empresa capacita seus colaboradores especificamente em inovação e gestão de inovação com
                    regularidade
                </label><br>
                <label>
                    <input type="radio" name="capacitados_inovacao" value="100">
                    Existe um programa formal de capacitação e desenvolvimento de seus colaboradores em inovação e
                    gestão da inovação
                </label><br><br>

                <h3 class="pergunta">O trabalho em equipe é estimulado para a geração de oportunidades de inovação?
                    (obrigatório)</h3>
                <label>
                    <input type="radio" name="trabalho_equipo" value="25">
                    Não há estímulo para atividades em equipe voltadas para gerar oportunidades de inovações
                </label><br>
                <label>
                    <input type="radio" name="trabalho_equipo" value="50">
                    Há poucos estímulos para atividades em equipe voltadas para gerar oportunidades de inovações
                </label><br>
                <label>
                    <input type="radio" name="trabalho_equipo" value="75">
                    Há frequentes estímulos para atividades em equipe voltadas para gerar oportunidades de inovações
                </label><br>
                <label>
                    <input type="radio" name="trabalho_equipo" value="100">
                    Há um programa formal para o estímulo de atividades em equipe voltadas para gerar oportunidades de
                    inovações
                </label><br><br>

                <h3 class="pergunta">As inovações são divulgadas às partes interessadas? (obrigatório)</h3>
                <label>
                    <input type="radio" name="divulgacao_inovacoes" value="25">
                    Não há divulgação às partes interessadas
                </label><br>
                <label>
                    <input type="radio" name="divulgacao_inovacoes" value="50">
                    A divulgação das inovações restringe-se apenas a um dos grupos interessados (externos ou internos)
                </label><br>
                <label>
                    <input type="radio" name="divulgacao_inovacoes" value="75">
                    A divulgação das inovações abrange todas as partes interessadas, internas e externas
                </label><br>
                <label>
                    <input type="radio" name="divulgacao_inovacoes" value="100">
                    Existe um programa formal de divulgação tanto para os interessados internos à empresa como para os
                    externos
                </label><br><br>

                <h3 class="pergunta">São avaliados os benefícios da implementação das inovações? (obrigatório)</h3>
                <label>
                    <input type="radio" name="avaliacao_beneficios" value="25">
                    Não há identificação dos benefícios da implementação das inovações
                </label><br>
                <label>
                    <input type="radio" name="avaliacao_beneficios" value="50">
                    Os benefícios da implementação das inovações são identificados
                </label><br>
                <label>
                    <input type="radio" name="avaliacao_beneficios" value="75">
                    Os benefícios da implementação das inovações são identificados e avaliados
                </label><br>
                <label>
                    <input type="radio" name="avaliacao_beneficios" value="100">
                    Os benefícios da implementação das inovações são identificados, avaliados, incluindo indicadores de
                    melhoria do desempenho
                </label><br><br>
                <button type="button" onclick="prevSection(8)">Voltar</button>
                <button type="button" onclick="submeterFormulario(); nextSection(10);">Enviar</button>

            </div>

            <div class="section " id="section10">
                <h2>Resultados Totais</h2>
                <canvas id="radarChart" width="400" height="400"></canvas>
                <div id="resultadosSection10">
                    <!-- Os resultados do formulário serão exibidos aqui -->
                </div>
                <script>

function calcularProporcoes(data) {
    // Valores máximos por seção
    const valoresMaximos = {
        totalSection2: 600,
        totalSection3: 400,
        totalSection4: 500,
        totalSection5: 300,
        totalSection6: 400,
        totalSection7: 400,
        totalSection8: 600,
        totalSection9: 1200,
    };

    // Calcula a porcentagem para cada seção
    const proporcoes = {
        section2: (data.totalSection2 / valoresMaximos.totalSection2) * 100,
        section3: (data.totalSection3 / valoresMaximos.totalSection3) * 100,
        section4: (data.totalSection4 / valoresMaximos.totalSection4) * 100,
        section5: (data.totalSection5 / valoresMaximos.totalSection5) * 100,
        section6: (data.totalSection6 / valoresMaximos.totalSection6) * 100,
        section7: (data.totalSection7 / valoresMaximos.totalSection7) * 100,
        section8: (data.totalSection8 / valoresMaximos.totalSection8) * 100,
        section9: (data.totalSection9 / valoresMaximos.totalSection9) * 100,
    };

    return proporcoes;
}


function gerarGraficoRadar(data) {
    const ctx = document.getElementById('radarChart').getContext('2d');
    
    // Calcula as proporções usando a função
    const proporcoes = calcularProporcoes(data);

    const colors = [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(100, 255, 100, 0.2)',
        'rgba(255, 200, 200, 0.2)'
    ];

    const borderColors = colors.map(color => color.replace('0.2', '1'));
    
    // Gera o gráfico radar com os dados calculados
    const radarChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: [
                'Liderança', 
                'Estratégias e Planos', 
                'Clientes', 
                'Sociedade', 
                'Informações e Conhecimento', 
                'Processos', 
                'Resultados', 
                'Inovação'
            ],
            datasets: [{
                label: 'Resultados em %',
                data: [
                    proporcoes.section2,
                    proporcoes.section3,
                    proporcoes.section4,
                    proporcoes.section5,
                    proporcoes.section6,
                    proporcoes.section7,
                    proporcoes.section8,
                    proporcoes.section9
                ],
                backgroundColor: colors,
                borderColor: borderColors,
                borderWidth: 1
            }]
        },
        options: {
            scale: {
                ticks: {
                    beginAtZero: true,
                    max: 100 // Define o valor máximo em 100%
                }
            }
        }
    });
}

                </script>


            </div>
        </form>


    </div>


    <script>
        function calcularTotalSection2() {
            let total = 0;
            const perguntasSection2 = [
                'missao',
                'comportamento_etico',
                'desempenho',
                'compartilhamento_informacao',
                'desenvolvimento_gerencial',
                'inovacao'
            ];
            perguntasSection2.forEach(pergunta => {
                const selecionado = document.querySelector(`input[name="${pergunta}"]:checked`);
                if (selecionado) {
                    total += parseFloat(selecionado.value);
                }
            });
            return total;
        }

        function calcularTotalSection3() {
            let total = 0;
            const perguntasSection3 = [
                'visao',
                'estrategias',
                'indicadores',
                'planos_acao'
            ];
            perguntasSection3.forEach(pergunta => {
                const selecionado = document.querySelector(`input[name="${pergunta}"]:checked`);
                if (selecionado) {
                    total += parseFloat(selecionado.value);
                }
            });
            return total;
        }

        function calcularTotalSection4() {
            let total = 0;
            const perguntasSection4 = [
                'clientes_agrupados',
                'divulgacao_produtos',
                'reclamacoes',
                'satisfacao_clientes',
                'analise_informacoes'
            ];
            perguntasSection4.forEach(pergunta => {
                const selecionado = document.querySelector(`input[name="${pergunta}"]:checked`);
                if (selecionado) {
                    total += parseFloat(selecionado.value);
                }
            });
            return total;
        }

        function calcularTotalSection5() {
            let total = 0;
            const perguntasSection5 = [
                'exigencias_legais',
                'impactos_ambientais',
                'comprometimento_social'
            ];
            perguntasSection5.forEach(pergunta => {
                const selecionado = document.querySelector(`input[name="${pergunta}"]:checked`);
                if (selecionado) {
                    total += parseFloat(selecionado.value);
                }
            });
            return total;
        }

        function calcularTotalSection6() {
            let total = 0;
            const perguntasSection6 = [
                'informacoes_planejamento',
                'compartilhamento_conhecimento',
                'melhorias_gestao',
                'informacoes_comparativas'
            ];
            perguntasSection6.forEach(pergunta => {
                const selecionado = document.querySelector(`input[name="${pergunta}"]:checked`);
                if (selecionado) {
                    total += parseFloat(selecionado.value);
                }
            });
            return total;
        }

        function calcularTotalSection7() {
            let total = 0;
            const perguntasSection7 = [
                'processos_padronizados',
                'controle_processos',
                'fornecedores_criterios',
                'controles_financeiros'
            ];
            perguntasSection7.forEach(pergunta => {
                const selecionado = document.querySelector(`input[name="${pergunta}"]:checked`);
                if (selecionado) {
                    total += parseFloat(selecionado.value);
                }
            });
            return total;
        }

        function calcularTotalSection8() {
            let total = 0;
            const perguntasSection8 = [
                'satisfacao_clientes',
                'reclamacoes_clientes',
                'capacitacoes_colaboradores',
                'acidentes_colaboradores',
                'produtividade_trabalho',
                'margem_lucro'
            ];
            perguntasSection8.forEach(pergunta => {
                const selecionado = document.querySelector(`input[name="${pergunta}"]:checked`);
                if (selecionado) {
                    total += parseFloat(selecionado.value);
                }
            });
            return total;
            return 0; // Exemplo
        }

        function calcularTotalSection9() {
            let total = 0;
            const perguntasSection9 = [
                'esforcos_inovacao',
                'informacoes_inovacao',
                'ambiente_inovacao',
                'analise_ideias',
                'apoio_dirigentes',
                'acompanhamento_inovacoes',
                'aprendizado_inovacao',
                'reconhecimento_colaboradores',
                'capacitados_inovacao',
                'trabalho_equipo',
                'divulgacao_inovacoes',
                'avaliacao_beneficios'
            ];
            perguntasSection9.forEach(pergunta => {
                const selecionado = document.querySelector(`input[name="${pergunta}"]:checked`);
                if (selecionado) {
                    total += parseFloat(selecionado.value);
                }
            });
            return total;
        }

        function submeterFormulario() {
            // Dados da Seção 1
            const nome = document.getElementById('nome') ? document.getElementById('nome').value : '';
            const celular = document.getElementById('celular') ? document.getElementById('celular').value : '';
            const empresa = document.getElementById('empresa') ? document.getElementById('empresa').value : '';
            const email = document.getElementById('email') ? document.getElementById('email').value : '';

            // Cálculo dos totais das demais seções
            const totalSection2 = calcularTotalSection2();
            const totalSection3 = calcularTotalSection3();
            const totalSection4 = calcularTotalSection4();
            const totalSection5 = calcularTotalSection5();
            const totalSection6 = calcularTotalSection6();
            const totalSection7 = calcularTotalSection7();
            const totalSection8 = calcularTotalSection8();
            const totalSection9 = calcularTotalSection9();

            // Envia os dados para o PHP usando fetch
            fetch('salvar_dados.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    nome: nome,
                    celular: celular,
                    empresa: empresa,
                    email: email,
                    totalSection2: totalSection2,
                    totalSection3: totalSection3,
                    totalSection4: totalSection4,
                    totalSection5: totalSection5,
                    totalSection6: totalSection6,
                    totalSection7: totalSection7,
                    totalSection8: totalSection8,
                    totalSection9: totalSection9
                })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Exibe o resultado na Section 10
                        const resultadosDiv = document.getElementById('resultadosSection10');
                        resultadosDiv.innerHTML = `
                <p>Seção 2: ${totalSection2.toFixed(2)}</p>
                <p>Seção 3: ${totalSection3.toFixed(2)}</p>
                <p>Seção 4: ${totalSection4.toFixed(2)}</p>
                <p>Seção 5: ${totalSection5.toFixed(2)}</p>
                <p>Seção 6: ${totalSection6.toFixed(2)}</p>
                <p>Seção 7: ${totalSection7.toFixed(2)}</p>
                <p>Seção 8: ${totalSection8.toFixed(2)}</p>
                <p>Seção 9: ${totalSection9.toFixed(2)}</p>
            `;

                        // Chama a função para gerar o gráfico radar com os dados das seções
                        gerarGraficoRadar({
                            totalSection2: totalSection2,
                            totalSection3: totalSection3,
                            totalSection4: totalSection4,
                            totalSection5: totalSection5,
                            totalSection6: totalSection6,
                            totalSection7: totalSection7,
                            totalSection8: totalSection8,
                            totalSection9: totalSection9
                        });

                        // Avança para a próxima seção após o sucesso no salvamento
                        nextSection(10);
                    } else {
                        alert('Erro ao salvar os dados: ' + (data.error || 'Erro desconhecido.'));
                    }
                })
                .catch(error => {
                    console.error('Erro na requisição:', error);
                    alert('Houve um problema ao processar a requisição.');
                });
        }







        function nextSection(sectionId) {
            // window.scrollTo({ top: 0, behavior: 'smooth' });
            const currentSection = document.querySelector('.section.active');
            currentSection.classList.remove('active');
            const nextSection = document.getElementById('section' + sectionId);
            nextSection.classList.add('active');
        }

        function prevSection(sectionId) {
            // window.scrollTo({ top: 0, behavior: 'smooth' });
            const currentSection = document.querySelector('.section.active');
            currentSection.classList.remove('active');
            const previousSection = document.getElementById('section' + sectionId);
            previousSection.classList.add('active');
        }
    </script>

    <script src="assets/js/chart.js "></script>
</body>

</html>