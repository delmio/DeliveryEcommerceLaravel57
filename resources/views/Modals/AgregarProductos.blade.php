<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="NuevoProducto">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

            <form role="form" id="AgregarProductoStep1" name="AgregarProductoStep1" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="AgregarProductoStep1">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group"> 
      <!--
                    <label for="ImagenProducto">Imagen Producto</label>
                    <input type="file" id="ImagenProducto" name="ImagenProducto">
                    <p class="help-block">Seleccione una imagen.</p>
      -->
                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Nombre Producto:</label>
                        <input class="form-control" id="NombreProducto" name="NombreProducto" placeholder="Ingrese Nombre">
                    </div>

                    
                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Cantidad Producto:</label>
                        <input class="form-control" id="CantidadProducto" name="CantidadProducto" placeholder="Ingrese Cantidad">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Valor Unitario Sin Iva($):</label>
                        <input class="form-control" id="ValorUnitarioSinIvaProducto" name="ValorUnitarioSinIvaProducto" placeholder="Ingrese Valor">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Margen de Ganancia(%):</label>
                        <input class="form-control" id="MargenDeGanancia" name="MargenDeGanancia" placeholder="Ingrese Margen">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Ajuste($):</label>
                        <input class="form-control" id="AjusteProducto" name="AjusteProducto" placeholder="Ingrese Ajuste">
                    </div>
                    
                    <div class="col-md-3">
                                 <label for="CategoriaProducto" class="control-label">Categoría:</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="CategoriaProducto" id="CategoriaProducto" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                          <option selected="selected" value="#">Categorías</option>
                                          @foreach($CategoriasProductos as $key => $CategoriasProductos) 
                                          <option value="{{$CategoriasProductos->ID}}">{{$CategoriasProductos->NombreCategoriasProductos}}</option>
                                          @endforeach
                                        </select>
                    </div> 
                </div>
              </div>


              <div class="box-footer">
                <button type="submit" class="btn btn-primary">  Siguiente   <i class="fa fa-angle-double-right"></i></button>
              </div>
            </form>
  
            </div>
            </div>
    </div>
</div>