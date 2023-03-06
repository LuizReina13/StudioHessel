//Carrega a primeira pagina
$("#container").load("assets/html/dashboard.php");

//Mudanca de layout e responsividade
$(".sidebar ul li").on('click' , function(){
    $(".sidebar ul li.active").removeClass('active');
    $(this).addClass('active');
});

$('.open-btn').on('click', function(){
    $('.sidebar').addClass('active');
});

$('.close-btn').on('click', function(){
    $('.sidebar').removeClass('active');
});

//Botao de fechar e sair
$("#close_btn").on('click' , function(){
    alert("btn sair clicado");
    window.close();
});

// Funcoes dos botoes do sidebar
$("#dashboard_btn").on('click' , function(){
    $("#container").load("assets/html/dashboard.php"); 
});

$("#alunos_btn").on('click' , function(){
    $('#container').load("assets/html/alunos.php");
});

$("#fichas_btn").on('click' , function(){
    $("#container").load("assets/html/fichas.php");
});

$("#avaliacoes_btn").on('click' , function(){
    $("#container").load("assets/html/avaliacoes.php");
});

$("#contatos_btn").on('click' , function(){
    $("#container").load("assets/html/contatos.php");
});

$("#notificacoes_btn").on('click' , function(){
    $("#container").load("assets/html/notificacoes.php");
});