<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="NuevaCategoriaProducto">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

            <form role="form" id="AgregarNuevaCategoria" name="AgregarNuevaCategoria" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="AgregarNuevaCategoria">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group"> 

                    <div class="col-md-4">
                        <label for="NombreCategoriaProducto">Nombre Categoría:</label>
                        <input class="form-control" id="NombreCategoriaProducto" name="NombreCategoriaProducto" placeholder="Ingrese un Nombre">
                    </div>
                    
                    <div class="col-md-4">
                                 <label for="StatusCategoriaProducto" class="control-label">Status:</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="StatusCategoriaProducto" id="StatusCategoriaProducto" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                          <option selected="selected" value="1">Habilitado</option>
                                          <option value="0">Deshabilitado</option>
                                        </select>
                    </div> 
                </div>
              </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">  Guardar   <i class="fa fa-save"></i></button>
              </div>
            </form>
  
            </div>
            </div>
    </div>
</div>