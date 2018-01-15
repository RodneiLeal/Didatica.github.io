  <section class="content-header">
    <h1>Meus Cursos</h1>
    <ol class="breadcrumb">
      <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Meus Cursos</li>
    </ol>
  </section>


  <section class="content">
    <div class="row">

      <?php
        
        if($meusCursos):
          foreach($meusCursos as $meuCurso):
            $imagem = empty($meuCurso['imagem'])?'img/curso/no-image.png':$meuCurso['imagem'];
            $media  = number_format($meuCurso['media'], 2, '.', ' ');
      ?>
       
      <div class="col-md-3">
        <div class="box box-primary">
          <div class="box-header with-border">
              <h3 class="box-title"><a href="curso/<?=$meuCurso['idcurso']?>/<?=Main::preparaURL($meuCurso['categoria'])?>/<?=Main::preparaURL($meuCurso['titulo'])?>"><?=$meuCurso['titulo']?></a></h3>
              <div class="starrr" data-rating="<?=$media?>" title="Média entre <?=$meuCurso['votantes']?> Opiniões de alunos"><span><?=$media?> </span></div>
              <img class="img-responsive  course_list" src="<?=$imagem?>" alt="">
          </div>
          <div class="box-footer">
            
            <a href="Dashboard?p=editar-curso&curso=<?=$meuCurso['idcurso']?>" class="btn btn-default btn-xs editar-curso"><i class="fa fa-edit"></i> Editar</a>

              <?php if(false):?>
            <button class="btn btn-default btn-xs"><i class="fa fa-globe"></i> Enviar para Análise</button>
            <button class="btn btn-default btn-xs"><i class="fa fa-ban"></i> Remover</button>
              <?php endif?>

          </div><!-- /.box-footer -->
        </div>
      </div>
      
      <?php
          endforeach;
        endif;
      ?>

    </div>
  </section>