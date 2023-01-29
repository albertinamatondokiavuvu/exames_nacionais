<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Relatório de processos dados saída</title>
    <style>
        <?php echo $bootstrap;
        echo $css;
        ?>
    </style>
</head>

<body>

    <img class="logotipo" src="images/logo.png" alt="" srcset="">
    <p class=" republica text-center">REPÚBLICA DE ANGOLA <br> MINISTÉRIO DA EDUCAÇÃO <br>INSTITUTO NACIONAL DE AVALIAÇÃO E DESENVOLVIMENTO DA EDUCAÇÃO</p>
    <div class="text-center">
        <h1 class="text-primary" style="margin-top: 100px; margin-bottom: 50px;" > LISTA DE TOTAL DE SAÍDA DE PROCESSOS</h1>
    </div>
    <table  class=" table">
        <thead >
            <tr >
                <th style="height:30px; width:20px;"  class="text-center" >Nº</th>
                <th  class="text-center" >Quantidade</th>
                <th class="text-center">Ano</th>

            </tr>
        </thead>
        <tbody>

            <?php $contador = 1; ?>
            <?php foreach ($docs as $test) : ?>

                <tr >
                    <td style="height:25px" class="text-center"><?php echo $contador++; ?></td>
                    <td  class="text-left"><?php echo $test->count ?></td>
                    <td  class="text-center"><?php echo $test->year ?></td>
                </tr>

            <?php endforeach; ?>

            <br>
        </tbody>
    </table>




    <div style="margin-top:57%; margin-left:50%;">
    <p style="text-align:center;padding-top:20px;">O Director Geral<br>______________________________</p>
    <p style="text-align:center;">Diassala Jacinto André</p>
    </div>
    <p style="text-align:center;">Luanda <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    echo strftime(' %d de %B de %Y', strtotime('today')); ?></p>
</body>

</html>
