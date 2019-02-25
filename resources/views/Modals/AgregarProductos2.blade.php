<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="NuevoProducto2">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

            <form role="form" id="AgregarProductoStep1" name="AgregarProductoStep1" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group"> 

                    <label for="ImagenProducto">Imagen Producto</label>
                    <input type="file" id="ImagenProducto" name="ImagenProducto">
                    <p class="help-block">Seleccione una imagen.</p>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Nombre Producto:</label>
                        <input disabled class="form-control" id="NombreProducto" name="NombreProducto" value="{{$ProductosCalculo1->NombreProducto}}">
                    </div>

                    
                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Cantidad Producto:</label>
                        <input disabled class="form-control" id="CantidadProducto" name="CantidadProducto" value="{{$ProductosCalculo1->CantidadConjunto}}">
                    </div>
                
                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Categoría:</label>
                        <input disabled class="form-control" id="CategoriaProducto" name="CategoriaProducto" value="{{$CategoriasSeleccionada->NombreCategoriasProductos}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Valor Unitario Sin Iva($):</label>
                        <input disabled class="form-control" id="ValorUnitarioSinIvaProducto" name="ValorUnitarioSinIvaProducto" value="{{$ProductosCalculo1->PrecioUnitarioSinIva}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Margen de Ganancia(%):</label>
                        <input disabled class="form-control" id="MargenDeGanancia" name="MargenDeGanancia" value="{{$ProductosCalculo1->MargenGanancia}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Ajuste($):</label>
                        <input disabled class="form-control" id="AjusteProducto" name="AjusteProducto" value="{{$ProductosCalculo1->Ajuste}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Precio Unitario Con iva($):</label>
                        <input disabled class="form-control" id="PUCIVA" name="PUCIVA" value="{{$ProductosCalculo1->PrecioUnitarioConIva}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Precio Conjunto Con iva($):</label>
                        <input disabled class="form-control" id="PCCIVA" name="PCCIVA" value="{{$ProductosCalculo1->PrecioConjuntoConIva}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Presio Conjunto Sin iva($):</label>
                        <input disabled class="form-control" id="PCSIVA" name="PCSIVA" value="{{$ProductosCalculo1->PrecioConjuntoSinIva}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Iva Unitario($):</label>
                        <input disabled class="form-control" id="IVAU" name="IVAU" value="{{$ProductosCalculo1->IvaUnitario}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Iva Conjunto($):</label>
                        <input disabled class="form-control" id="IVAC" name="IVAC" value="{{$ProductosCalculo1->IvaConjunto}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Precio Final Sin iva($):</label>
                        <input disabled class="form-control" id="PFSIVA" name="PFSIVA" value="{{$ProductosCalculo1->PrecioFinalSinIva}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Precio Final Con iva($):</label>
                        <input disabled class="form-control" id="PFCIVA" name="PFCIVA" value="{{$ProductosCalculo1->PrecioFinalConIva}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Total Sin iva($):</label>
                        <input disabled class="form-control" id="TSIVA" name="TSIVA" value="{{$ProductosCalculo1->TotalSinIva}}">
                    </div>

                    <div class="col-md-3">
                        <label for="NombreCategoriaProducto">Total Con iva($):</label>
                        <input disabled class="form-control" id="TCIVA" name="TCIVA" value="{{$ProductosCalculo1->TotalConIva}}">
                    </div>

                    <input type="hidden" name="CategoriaValor" value="{{$ProductosCalculo1->CategoriaProducto}}">

                    <div class="col-md-3">
                                 <label for="StatusProducto" class="control-label">Status:</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="StatusProducto" id="StatusProducto" style="width: 100%;" tabindex="-1" aria-hidden="true">
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