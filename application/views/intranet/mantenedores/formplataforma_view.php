<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div id="mensaje"></div>
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>

                <h2 class="panel-title">Form Elements</h2>
            </header>
            <form action="<?= site_url('inicio/guardar') ?>" class="form-horizontal form-bordered" enctype="multipart/form-data" method="post">
                <div class="panel-body">                
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="titulo">Título</label>
                        <div class="col-md-6">
                            <input type="hidden" name="id" id="id" value="<?= set_value('titulo', !empty($registro->id) ? $registro->id : 0); ?>">
                            <input type="text" class="form-control" id="titulo" value="<?= set_value('titulo', !empty($registro->titulo) ? $registro->titulo : ''); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="descripcion">Descripción</label>
                        <div class="col-md-6">
                            <textarea id="descripcion" class="form-control" rows="3" ><?= set_value('descripcion', !empty($registro->descripcion) ? $registro->descripcion : ''); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Imagen</label>
                        <div class="col-md-6">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                    <div class="uneditable-input">
                                        <i class="fa fa-file fileupload-exists"></i>
                                        <span class="fileupload-preview"></span>
                                    </div>
                                    <span class="btn btn-default btn-file">
                                        <span class="fileupload-exists">Cambiar</span>
                                        <span class="fileupload-new">Seleccione imagen</span>                                        
                                        <?= form_upload("imagen"); ?>
                                    </span>
                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Quitar</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="chkestado">Estado</label>
                        <div class="col-md-6">
                            <div class="checkbox-custom checkbox-primary">
                                <?=
                                form_checkbox(array('name' => 'estado', 'id' => 'estado', 'value' => '1', 'checked' => (!empty($registro->estado) ? ($registro->estado == 1 ? TRUE : FALSE) : FALSE)));
                                ?>                                
                                <label for="checkboxExample2">&nbsp;</label>
                            </div>
                        </div>
                    </div>                
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-default">Limpiar</button>
                        </div>
                    </div>
                </footer>  
            </form>
        </section>
    </div>
</div>
<?=
!empty($mensaje) ? $mensaje : ''; ?>