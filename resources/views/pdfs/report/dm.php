<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Relatório de Directores Municipais</title>
    <style>
        <?php echo $bootstrap;
        echo $css;
        ?>
    </style>
</head>

<body>

    <img class="logotipo" src="images/logo.png" alt="" srcset="">
    <p class=" republica text-center">REPÚBLICA DE ANGOLA <br> MINISTÉRIO DA EDUCAÇÃO <br>INSTITUTO NACIONAL DE AVALIAÇÃO E DESENVOLVIMENTO DA EDUCAÇÃO<br> <?php echo date("d-m-Y");?></p>
    <div class="text-center">
        <h1 class="text-primary" style="margin-top: 100px; margin-bottom: 50px;" > LISTA DE DIRECTORES MUNICIPAIS</h1>
    </div>
    <table  class=" table">
        <thead >
            <tr >
                <th style="height:30px; width:20px;"  class="text-center" >Nº</th>
                <th  class="text-center" >Nome</th>
                <th  class="text-center" >Email</th>
                <th class="text-center">Telefone</th>
                <th class="text-center">Provincia</th>
                <th class="text-center">Municipio</th>
            </tr>
        </thead>
        <tbody>

            <?php $contador = 1; ?>
            <?php foreach ($users as $test) : ?>

                <tr >
                    <td style="height:25px" class="text-center"><?php echo $contador++; ?></td>
                    <td  class="text-center"><?php echo $test->name ?></td>
                    <td  class="text-center"><?php echo $test->email ?></td>
                    <td  class="text-center"><?php echo $test->telefone ?></td>
                    <td  class="text-center"><?php echo $test->provincia ?></td>
                    <td  class="text-center"><?php echo $test->municipio ?></td>
                </tr>

            <?php endforeach; ?>

            <br>
        </tbody>
    </table>






</body>

</html>
