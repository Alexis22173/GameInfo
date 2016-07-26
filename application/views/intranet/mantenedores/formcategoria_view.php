<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>

                <h2 class="panel-title">Form Elements</h2>
            </header>
            <div class="panel-body">
                <form class="form-horizontal form-bordered" method="get">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="titulo">Descripción</label>
                        <div class="col-md-6">
                            <input type="text" id="titulo" name="titulo" class="form-control" value="<?= set_value('titulo', !empty($registro->titulo) ? $registro->titulo : ''); ?>">
                        </div>
                    </div>                       
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="descripcion">Descripción</label>
                        <div class="col-md-6">
                            <textarea id="descripcion" name="descripcion" class="form-control" rows="3" ><?= set_value('descripcion', !empty($registro->descripcion) ? $registro->descripcion : ''); ?></textarea>
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="estado">Estado</label>
                        <div class="col-md-6">
                            <div class="checkbox-custom checkbox-primary">
                                <?= form_checkbox(array('name' => 'estado', 'id' => 'estado', 'value' => '1', 'checked' => (!empty($registro->estado) ? ($registro->estado == 1 ? TRUE : FALSE) : FALSE))); ?>
                                <label>&nbsp;</label>
                            </div>
                        </div>
                    </div>                    
                </form>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button class="btn btn-primary">Guardar</button>
                        <button type="reset" class="btn btn-default">Limpiar</button>
                    </div>
                </div>
            </footer>            
        </section>
    </div>