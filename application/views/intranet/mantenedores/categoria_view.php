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
                <div class="row paddingbottom">
                    <div class="col-sm-12">
                        <a href="<?= site_url('inicio/formplataforma/0') ?>" class="btn btn-primary">Nuevo</a>
                    </div>
                </div>
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($registros)) :
                            foreach ($registros as $fila):
                                ?>
                                <tr>
                                    <td><?= $fila->titulo; ?></td>
                                    <td><?= $fila->descripcion; ?></td>
                                    <td><?= $fila->estado == 1 ? '<i title="Activo" class="fa fa-check-square-o"></i>' : '<i title="Inactivo" class="fa fa-square-o"></i>'; ?></td>
                                    <td class="center">
                                        <a title="Editar" href="<?= site_url('inicio/formcategoria/' . $fila->id) ?>" class="btn btn-xs btn-default"><i class="fa fa-edit"></i></a>
                                        <a title="Eliminar" href="<?= site_url('inicio/formcategoria/' . $fila->id) ?>" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <?php
                            endforeach;
                        endif;
                        ?>       
                    </tbody>
                </table>
            </div>       
        </section>
    </div>
</div>
<script>
    $(function (){
       $('#datatable-default').dataTable();
    });
</script>