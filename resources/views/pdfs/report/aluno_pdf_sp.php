<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Relatório de Alunos</title>
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
        <h1 class="text-primary" style="margin-top: 100px; margin-bottom: 50px;" > LISTA DE ALUNOS DO CENTRO DE EXAME <span style="text-transform:uppercase;"><?php
        use Illuminate\Support\Facades\Auth;
       echo Auth::user()->instituicao;?></span></h1>
    </div>
    <table  class=" table">
        <thead >
            <tr >
                <th style="height:30px; width:20px;"  class="text-center" >Nº</th>
                <th>Nome</th>
                <th class="text-center">Sexo</th>
                <th class="text-center">Data de nascimento</th>
                <th class="text-center">Turma</th>
                <th class="text-center">Classe</th>
                <th>Escola de Proveniencia</th>
                <th class="text-center">Tipo de Deficiência</th>

            </tr>
        </thead>
        <tbody>

            <?php $contador = 1; ?>
            <?php foreach ($alunos as $test) : ?>

                <tr >
                    <td style="height:25px" class="text-center"><?php echo $contador++; ?></td>
                    <td ><?php echo $test->nome_aluno;?></td>
                    <td class="text-center"><?php echo $test->sexo;?></td>
                    <td class="text-center"><?php echo $test->data_nasc;?></td>
                    <td class="text-center"><?php echo $test->nome_turma;?></td>
                    <td class="text-center"><?php echo $test->nome_classe;?></td>
                    <td ><?php echo $test->escola_proveniencia;?></td>
                    <td class="text-center"><?php echo $test->deficiencia;?></td>

            <?php endforeach; ?>

            <br>
        </tbody>
    </table>





</body>

</html>
