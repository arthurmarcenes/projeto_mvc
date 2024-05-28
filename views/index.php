<h2> projetos </h2>
<div class="panel panel-default">

<div class="panel-heading text-right">
<div class="pull-right"><a class="btn-primary"
href='?classe=projeto&acao=create'>novo</a></div>
</div>
<br>
<div class="panel-body">
<table id="tabela" class="table table-stripped table-bordered table-hover"
style="width:100%">
<head>
<tr>
<th>nome</th>
<th>duracao</th>
<th width="280px">ações</th>
</tr>
</thread>
<tbody>
<?php foreach ($projetos as $projeto) { <?
    <tr>
    <td><?=projeto->nome?></td>
    <td><?=projeto->duracao_dmY?></td>
    <td>
    <a class='btn btn-primary'
    href'?classe=projeto&acao=update&id=<?=projeto' >alterar</a
    <button type="button" class="btn btn-primary" data toggle= "modal" data-
    target= "#myModal" data-id=" <?=$projeto->id?>" >excluir</button>
    </td>
    </tr>
    <?php} ?>

    </tbody>
    </table>
    </div>
    </div>