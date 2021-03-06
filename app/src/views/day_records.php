<main class="content">
    <?php
        //passando os atributos para a função que renderiza a div de título
        renderTitle(
            'Registrar Ponto',
            'Mantenha seu ponto consistente!',
            'icofont-check-alt'
        );
        
        //incluindo o template de mensagens
        include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="card">
        <div class="card-header">
            <h3><?=
                //imprimindo a data por extenso, variável recebida pelo controller
                $today ?></h3>
            <p class="mb-0">Os batimentos efetuados hoje</p>
        </div>
        <div class="card-body">
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 1: <?=
                                                    //imprimindo a primeira marcação caso exista, ou a string '---'
                                                    //objeto recebido pelo controller
                                                    $workingHours->time1 ?? '---' ?></span>
                                                   
                <span class="record">Saída 1: <?=
                                                    //imprimindo a segunda marcação caso exista, ou a string '---'
                                                    //objeto recebido pelo controller
                                                    $workingHours->time2 ?? '---' ?></span>
            </div>
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 2: <?= 
                                                    //imprimindo a terceira marcação caso exista, ou a string '---'
                                                    //objeto recebido pelo controller
                                                    $workingHours->time3 ?? '---' ?></span>
                                                    
                <span class="record">Saída 2: <?=
                                                    //imprimindo a quarta marcação caso exista, ou a string '---'
                                                    //objeto recebido pelo controller
                                                    $workingHours->time4 ?? '---' ?></span>
            </div>
        </div>
        
        <!-- botão responsável por chamar o controller innout.php -->
        <div class="card-footer d-flex justify-content-center">
            <a href="innout.php" class="btn btn-success btn-lg">
                <i class="icofont-check mr-1"></i>
                Bater o Ponto
            </a>
        </div>
    </div>

    <!-- formulário responsável por simular os batimentos do ponto
         o formato de preenchimento é hh:mm:ss -->
    <form class="mt-5" action="innout.php" method="post">
        <div class="input-group no-border">
            <input type="text" name="forcedTime" class="form-control"
                placeholder="Informe a hora para simular o batimento com o formato hh:mm:ss">
            <button class="btn btn-danger ml-3">
                Simular Ponto
            </button>
        </div>
    </form>

</main>