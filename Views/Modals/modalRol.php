<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <h4 class="title title-up">Nuevo Rol</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="" class="control-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre del rol" require class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Descripción</label>
                        <textarea name="descripcion" id="descripcion" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Estado</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0">Seleccione Un Estado</option>
                            <option value="1">activo</option>
                            <option value="2">Inactivo</option>

                        </select>
                    </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </form>

        </div>
    </div>
</div>