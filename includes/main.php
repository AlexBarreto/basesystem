<div class = "container">
        <div class = "painel">
            <div  id = "acesso" class = "acesso">
                <div id = "relatorio" class = "imgAcesso"></div>
                <p>Relatórios</p>
            </div>
            <div  class = "acesso">
                <div id = "acompanhamento" class = "imgAcesso"></div>
                <p>Acompanhamentos</p>
            </div>
                <div  class = "acesso">
                <div id = "tarefa" class = "imgAcesso"></div>
            <p>Tarefas</p>
            </div>
        </div><!--painel-->
        <div class = "painel-g">
             <div class = "bg">
               <h3>FATURAMENTO X DESPESAS MENSAL</h3>
                <?php
                 include __DIR__.'/../includes/grafico.php';
                ?>
            </div>
        </div>

    </div><!--container-->
    

    <div id = "idDeslogar" class = "deslogar">
      <a href="#"><img src="../img/sair.png"></a>
      <a href="#"><p>Deslogar</p></a>
    </div>
</div>
</div><!--container-max-->