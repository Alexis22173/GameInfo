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
                        <label class="col-md-3 control-label" for="txtTitulo">Título</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="txtTitulo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtTitulo">Nombre</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="txtNombre">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtDescripcion">Descripción</label>
                        <div class="col-md-6">
                            <textarea id="txtDescripcion" class="form-control" rows="3" ></textarea>
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
                                        <input type="file" />
                                    </span>
                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Quitar</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="txtDescripcion">Estado</label>
                        <div class="col-md-6">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" checked="" id="checkboxExample2">
                                <label for="checkboxExample2">&nbsp;</label>
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
</div>