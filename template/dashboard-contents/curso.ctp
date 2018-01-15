<section class="content-header">
  <h1><?=$curso['titulo']?></h1>
  <ol class="breadcrumb">
    <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="//">Cursos</a></li>
    <li class="active"><?=$curso['titulo']?></li>
  </ol>
</section>

<section class="content">

  <input type="hidden" name="idcurso" id="curso" value="<?=$inscr['idcurso']?>">
  <input type="hidden" name="idinscr" id="inscr" value="<?=$inscr['idinscricao']?>">
  
  <div class="row">
    <div class="col-md-12">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-blue" <?=$style?>>
          <h3 class="widget-user-name" style="margin-top: 0;"><?=$curso['titulo']?></h3>
          <h6 class="widget-user-desc">Por <a href="//" class="b white"><?=$curso['instrutor']?></a></h6>
          <div class="row">
            <div class="col-md-3">
              <div class="starrr pull-left"  data-rating="<?=$media?>" title="<?=$media?>"></div>&#160;<span>Opnião de <?=$curso['votantes']?> alunos</span>
            </div>
          </div>
          <div class="widget-user-image">
            <img src="<?=$instrutor_foto?>" class="img-circle" alt="<?=$curso['titulo']?> - <?=$curso['instrutor']?>" />
          </div>
        </div>
        <div class="box-footer"></div>

        <div class="box-body">
          <div class="col-md-8">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Conteúdo do curso</h3>
              </div>
              <div class="box-body">
                <div id="course-content">

                  <ul class="timeline" data-children=".aula" id="aulas">
                    <li class="time-label">
                      <span class="bg-yellow">
                        <i class="fa fa-folder-open-o"></i> <?=count($aulas)?> aulas
                      </span>
                    </li>

                    <?php if($aulas): foreach($aulas as $aula): ?>
                    
                    <li class="aula">
                      <i class="fa fa-book bg-green"></i>
                      <div class="timeline-item" >
                        
                        <h3 class="timeline-header">
                          <a><?=$aula['titulo']?></a>
                        </h3>
                        
                          <div class="timeline-body">
                            <?=$aula['objetivos']?>
                          </div>
                          
                          <div class="timeline-footer display-right">
                            <a href="<?=empty($aula['arquivo'])?'//':$aula['arquivo']?>" target="_blank" class="btn btn-default btn-xl" ><i class="fa fa-download"></i> Material de apoio</a>
                          </div>
                          
                      </div>
                    </li>

                    <?php endforeach; endif; ?>

                    <li class="timeline-label ">
                      <i class="fa fa-circle-o bg-yellow"></i>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box box-primary">
              <div class="box-header text-center">
                <h3 class="box-title title-course">Ações</h3>
              </div>
              <div class="course_load text-center"></div>

                <?=$btn?>

              <div class="box-body course_box text-center">
                <button class="btn btn-primary course_get_rate" id="" course="{id co durso}">
                  <i class="fa fa-thermometer-half" aria-hidden="true"></i> Avaliar Curso
                </button>
              </div>

              <div class="box-body course_box text-center">
                <button class="btn btn-warning btn-xs course_get_critical" id="" course="{id co durso}">Enviar crítica ao Tutor</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AVALIAR CURSO SOMENTE SE FOR APROVADO -->
<div class="modal fade" id="modal_avaliar" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height:60%">
      <div class="modal-header">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body" >
        <form  id="FormEnrollRate" action="controller/course.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Nota geral para o Curso</label>
            <div class="user_star_rating_course"></div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Comentários</label>
            <textarea class="form-control" id="FormEnrollRate_comentario" name="FormEnrollRate_comentario" rows="7" placeholder="Descreva o que achou sobre o conteúdo, explicação, entre outros detalhes"></textarea>
          </div>

          <div class="form-group">
            <input id="FormEnrollRate_nota" name="FormEnrollRate_nota"  value="" type="hidden">
            <input id="FormEnrollRate_matricula" name="FormEnrollRate_matricula" value="" type="hidden">
            <input id="" name="operation" value="rate" type="hidden">
            <button type="button" class="btn btn-primary form_send_information_bt">Enviar Avaliação</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>