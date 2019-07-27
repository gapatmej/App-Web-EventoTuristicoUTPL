
<link href="<?php echo ESTILOS ?>agenda.css" rel="stylesheet">

<div class="container-fluid" style="padding-top: 130px">
    <div class="table-title">
        <h3> Agenda </h3>
    </div>
    <table class="table-fill">
        <thead>
            <tr>
                <th class="text-left" style="width:5%"> Fecha </th>
                <th class="text-left" style="width:18%"> 8:00H - 10:00H</th>
                <th class="text-left" style="width:18%"> 10:00H - 12:00H</th>
                <th class="text-left" style="width:18%"> 12:00H - 14:00H</th>
                <th class="text-left" style="width:18%"> 14:00H - 16:00H</th>
                <th class="text-left" style="width:18%"> 16:00H - 18:00H</th>
            </tr>
        </thead>
        <tbody class="table-hover">
            <?php foreach ($rsAgenda as $dia) { ?>
            <tr>
                <td class="text-left" style="font-size: 15px; color:black"><strong><?php echo $dia["fecha_actividad"] ?></strong></td>
                <td class="text-left"><?php echo $dia["actividad1"] ?></td>
                <td class="text-left"><?php echo $dia["actividad2"] ?></td>
                <td class="text-left"><?php echo $dia["actividad3"] ?></td>
                <td class="text-left"><?php echo $dia["actividad4"] ?></td>
                <td class="text-left"><?php echo $dia["actividad5"] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>