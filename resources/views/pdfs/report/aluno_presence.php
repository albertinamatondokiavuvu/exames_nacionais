<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <title>Lista de presença</title>
    <style>
        <?php echo $bootstrap;
        echo $css;
        ?>
    </style>
</head>

<body>
<div class="row">
    <img src="images/logo.png" width="50" alt="" srcset="">
    <img src="images/transferir.jpeg" width="200" alt="" srcset="">
    <p style="margin-top: -40px; margin-left:78%; font-size:10pt;" >Exames Nacionais Piloto <br>Data: <?php echo date("d/m/Y"); ?></p>
</div>
<div style="background-color:#C0C0C0;padding-top:9px; margin-top:10px;" >
    <p style="text-align: center;">LISTA DE PRESENÇA</p>
</div>

<div>
<table  class=" table">
        <tbody >
            <tr >

                <td style="text-transform:uppercase;">
                 PROVÍNCIA: <span style="font-weight: bold;"><?php echo $first->provincia;?></span>
            <br>
            MUNICÍPIO: <span style="font-weight: bold;"><?php echo $first->municipio;?></span>
            <br>
            CENTRO DE EXAMES: <span style="font-weight: bold;" ><?php echo $first->centroexame;?></span>
            <br>
            CLASSE: <span style="font-weight: bold;"> <?php echo $first->nome_classe;?></span>
            <br>
            TURMA: <span style="font-weight: bold;"><?php echo $first->nome_turma;?></span>
            <br>
            N.º DE ALUNOS: <span style="font-weight: bold;"> <?php echo $quantidade;?></span>
        </td>
        <td style="text-transform:uppercase;">
            Prof. Vigilante______________________________________________
            <br>
            <br>
            Prof. Vigilante______________________________________________
            <br><br>
            Prof. Vigilante Suplente__________________________________
        </td>
            </tr>
        </tbody>

    </table>
    <small style="font-size: 11px; margin-top:-4%;">Prezado (a) vigilante, assinale obrigatoriamenete a presença dos alunos
        ao exame, e solicite sua assinatura, nos campos abaixo identificados. </small>
</div>

<div>
<table  class=" table" >
        <thead >
            <tr style="text-transform:uppercase;">
                <th style="height:30px; width:20px;"  class="text-center" >Nº</th>
                <th class="text-center">Nome do aluno</th>
                <th class="text-center">Sexo</th>
                <th class="text-center">Presente</th>
                <th class="text-center">Falta</th>
                <th class="text-center">Assinatura do Aluno</th>


            </tr>
        </thead>
        <tbody>

            <?php $contador = 1; ?>
            <?php foreach ($alunos as $test) : ?>

                <tr >
                    <td style="height:25px" class="text-center"><?php echo $contador++; ?></td>
                    <td style="text-transform:uppercase;" class="text-left;"><?php echo $test->nome_aluno;?></td>
                    <td class="text-center">
                        <?php
                        if($test->sexo == 'Masculino')
                        {
                            echo 'M';
                        }
                        else
                        {
                            echo 'F';
                        }
                        ?>
                </td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>


            <?php endforeach; ?>

            <br>
        </tbody>
    </table>

</div>
</body>

</html>
