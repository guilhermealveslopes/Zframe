var iniciahtml = 
    '<!DOCTYPE html>'+
    '<head>'+
        '<meta charset="utf-8"/>'+
        '<title>Frame</title>'+
        '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>'+
        '<script src="funcoes.js"></script>'+
        '<link rel="stylesheet" href="zpixel.css">'+
        '<link rel="stylesheet" href="style.css">'+
    '</head>'+
    '<body>';


    var terminahtml = 
    '</html>'+
    '</body>';

var header_credi =  '<!-- Cabeçalho -->'+
    '<header class="header_credi">'+
        '<div class="container">'+
            '<div class="logo">'+
                '<img src="img/logo.png" alt="">'+
            '</div>'+
            '<div class="menu">'+
                '<ul>'+
                    '<li>Simulador</li>'+
                    '<li>Produtos</li>'+
                    '<li>Parceiros</li>'+
                    '<li>Blog</li>'+
                    '<li>Contato</li>'+
                    '<li>Sobre</li>'+
                    '<li class="login">Login'+
                        '<i class="icon-user"></i>'+
                        '<div class="submenu">'+
                            '<div class="box">'+
                                '<ul>'+
                                    '<li>Parceiros</li>'+
                                    '<li>Funcionários</li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>'+
                    '</li>'+
                '</ul>'+
            '</div>'+
        '</div>'+
    '</header>';

var simulacao_credi = '<!-- Área de simulação -->'+
    '<div class="simulacao-home">'+
        '<div class="container">'+
            '<div class="coluna chamada">'+
                '<h2>Tire seus plenos do papel</h2>'+
                '<span>Faça agora uma simulacao do seu financiamento</span>'+
            '</div>'+
            '<div class="coluna formulario">'+
                '<form action="">'+
                    '<label for="imovel">Valor do imóvel</label>'+
                    '<input type="text" name="valor-do-imovel">'+
                    '<label for="financiamento">Valor do fincanciamento desejado</label>'+
                    '<input type="text" name="valor-do-financiamento">'+
                    '<input type="submit" value="Fazer Simulação">'+
                '</form>'+
            '</div>'+
        '</div>'+
    '</div>';


    
var relacionados = '<!-- Relacionados -->'+
    '<div class="relacionados">'+
    '<div class="item">'+
        '<div class="img">'+
            '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw4HRPVtZe64zCx5V1M6Y-kDoHZ1TYGawywK0xJ2uER0nqXPvlmg" alt="">'+
        '</div>'+
        '<h1>Agencia inteligente</h1>'+
    '</div>'+
    '<div class="item">'+
    ' <div class="img">'+
        ' <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw4HRPVtZe64zCx5V1M6Y-kDoHZ1TYGawywK0xJ2uER0nqXPvlmg" alt="">'+
        '</div>'+
    ' <h1>Z Pixel, muda-se para o campo</h1>'+
    '</div>'+
    '<div class="item">'+
    '<div class="img">'+
        '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw4HRPVtZe64zCx5V1M6Y-kDoHZ1TYGawywK0xJ2uER0nqXPvlmg" alt="">'+
        '</div>'+
    '<h1>Melhores desenvolvedores optam por trabalhar na Z Pixel</h1>'+
    '</div>'+
    '</div>';


var sobre = '<!-- Sobre -->'+
    '<div class="sobre">'+
    '<div class="container">'+
            '<div class="coluna descricao">'+
                '<div class="heading">'+
                    '<h2>Sobre a CrediPronto</h2>'+
                '</div>'+
                '<div class="info">'+
                    '<p>O itaú, maior intituição financeira do hemisfério sul, e a Lopes, a maior imobiliária do Brasil, se uniram para trazer um conceito inovador: oferecer o <strong>fincanciamento imobiliário que você precisa</strong>. Assim surgiu a CrediPronto. A única empresa especializada em <strong>consultoria de financiamento imobiliário</strong> do país. Conheça todos os benefícios e veja o porquê de fazer o financiamento do seu imível com a CrediPronto.</p>'+
                    '<button class="saiba-mais">'+
                        '<i class="icon-arrow-right"></i> Saiba Mais'+
                    '</button>'+
                '</div>'+
            '</div>'+
            '<div class="coluna video">'+
                '<iframe width="560" height="315" src="https://www.youtube.com/embed/xW2DPUVZttg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'+
            '</div>'+
        '</div>'+
    '</div>';


var depoimentos = '<!-- Depoimentos -->'+

    '<div class="depoimentos">'+
        '<div class="container">'+
            '<div class="heading">'+
                '<h2>Depoimentos de Cliente e Parceiros</h2>'+
            '</div>'+
        '</div>'+
            '<div class="box-depoimentos">'+
                '<div class="container">'+
                    '<div class="item">'+
                        '<div class="cliente">'+
                            '<img src="img/cliente.jpg" alt="">'+
                            '<h3>Cliente 2</h3>'+
                        '</div>'+
                        '<div class="depoimento">'+
                            '<i class="icon-quote"></i>'+
                            'Realizamos neste último mês a compra do nosso primeiro imóvel através do financiamento junto à Credipronto e ficamos surpreendidos'+
                            'com a qualidade do serviço prestado. A empresa superou nossas expectativas em questões de praticidade e agilidade na análide'+
                            'e rápida aprovação do financiamento, sem burocracia demais e com tacas competitivas que, com toda certeza, fizeram a diferença'+
                            'e viabilizaram o fechamento do negóco e a realização deste grande sonho. No quesito atendimento, não podemos deixar de parabenizar e agradecer à Joana Vitale e Fábio de Azebedo'+
                            'pelo atendimento totalmente diferenciado que nos foi prestado, sempre com muito empenho e seriedade, ambos foram atenciosos e pacientes'+
                            'ao conduzir nossa negociação desde o primeiro contato até a conclusão, nos auxiliando no que foi preciso e posicionando passo a passo sobre como'+
                            'estava o andamento do processo, o que nos deixou tranquilos neste momento tão importante. Estamos muito satisfeitos e recomendamos a credipronto!'+
                            'Parabéns à toda a equipe!'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>'+
    '</div>';

var estatisticas_credi = '<!-- Estatísticas -->'+

     '<div class="estatisticas">'+
         '<div class="container">'+
            '<ul>'+
                '<li>'+
                    '<span class="counter">20000</span>'+
                    '<p>Contatos Emitidos</p>'+
                '</li>'+
                '<li>'+
                    '<span class="counter">7</span>'+
                    '<p>Bilhões em Financiamento</p>'+
                '</li>'+
                '<li>'+
                    '<span class="counter">400</span>'+
                    '<p>Parceiros</p>'+
                '</li>'+
                '<li>'+
                    '<span class="counter">50</span>'+
                    '<p>Cidades em Atuação</p>'+
                '</li>'+
            '</ul>'+
        '</div>'+
     '</div>';

var noticias = '<!-- Últimas notícias -->'+

    '<div class="ultimas-noticias">'+
        '<div class="container">'+
            '<div class="chamada">'+
                '<i class="icon-bars"></i> Confira as nossas últimas notícias'+
            '</div>'+
            '<a href="#">Acesse nosso blog</a>'+
        '</div>'+
    '</div>';

var rodape_credi = '<!-- Rodape -->'+
    '<footer id="rodape">'+
        '<div class="container">'+
        '<div class="info">'+
            '<div class="coluna">'+
                '<div class="heading">'+
                    'A Crediponto'+
                '</div>'+
                '<ul>'+
                    '<li>Quem Somos</li>'+
                    '<li>Parceiros</li>'+
                    '<li>Trabalhe Conosco</li>'+
                    '<li>Política de Privacidade</li>'+
                    '<li>Informativo Bacen - Nº 4571</li>'+
                '</ul>'+
            '</div>'+
            '<div class="coluna">'+
                '<div class="heading">'+
                    'Produtos'+
                '</div>'+
                '<ul>'+
                    '<li>Financiamento</li>'+
                    '<li>Empréstimos</li>'+
                '</ul>'+
            '</div>'+
            '<div class="coluna contato">'+
                '<div class="heading">'+
                    'Contato'+
                '</div>'+
                '<ul>'+
                    '<li>'+
                        '<span>Demais Localidades</span>'+
                        '<div class="numero">'+
                            '<i class="icon-telephone"></i> 3003 1144'+
                        '</div>'+
                    '</li>'+
                    '<li>'+
                        '<span>WhatsApp</span>'+
                        '<div class="numero">'+
                            '<i class="icon-whatsapp"></i> (11)99161 8296'+
                        '</div>'+
                    '</li>'+
                '</ul>'+
            '</div>'+
            '<div class="coluna">'+
                '<div class="heading">'+
                    'Redes Sociais'+
                '</div>'+
                '<ul class="social">'+
                    '<li><i class="icon-facebook"></i></li>'+
                    '<li><i class="icon-youtube-alt"></i></li>'+
                    '<li><i class="icon-linkedin"></i></li>'+
                    '<li><i class="icon-gplus"></i></li>'+
                '</ul>'+
                '<div class="heading">'+
                    'Baixe Nosso Aplicativo'+
                '</div>'+
                '<div class="download">'+
                    '<img src="img/play-store.png" alt="">'+
                    '<img src="img/app-store.png" alt="">'+
                '</div>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '<div class="copyright">'+
        '<div class="container">'+
            '<p>2018. Todos os direitos reservados.</p>'+
        '</div>'+
    '</div>'+
    '</footer>';