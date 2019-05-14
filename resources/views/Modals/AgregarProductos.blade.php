<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="NuevoProducto">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">

            <form role="form" id="AgregarProducto" name="AgregarProducto" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="AgregarProducto">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group"> 
                    
                  <div class="has-feedback {{ $errors->has('ImagenProducto') ? 'has-error' : ''}}">
                    <label for="ImagenProducto">Imagen Producto</label>
                    <input type="file" id="ImagenProducto" name="ImagenProducto">
                    <p class="help-block"></p>
                    {!! $errors->first('ImagenProducto','<span class="help-block">:message</span>') !!}
                  </div>  

                    <div class="col-md-3 has-feedback {{ $errors->has('CategoriaProducto') ? 'has-error' : ''}}">
                                 <label for="CategoriaProducto" class="control-label">Categoría:</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="CategoriaProducto" id="CategoriaProducto" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                          <option selected="selected" value="#">Categorías</option>
                                          @foreach($CategoriasProductos as $key => $CategoriasProductos) 
                                          <option value="{{$CategoriasProductos->ID}}">{{$CategoriasProductos->NombreCategoriasProductos}}</option>
                                          @endforeach
                                        </select>
                                  {!! $errors->first('CategoriaProducto','<span class="help-block">:message</span>') !!}
                    </div> 

                    <div class="col-md-3 has-feedback {{ $errors->has('NombreProducto') ? 'has-error' : ''}}">
                        <label for="NombreProducto">Nombre Producto:</label>
                        <input class="form-control" id="NombreProducto" name="NombreProducto" placeholder="Ingrese Nombre">
                        {!! $errors->first('NombreProducto','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="col-md-3 has-feedback {{ $errors->has('CantidadProducto') ? 'has-error' : ''}}">
                        <label for="CantidadProducto">Cantidad Producto:</label>
                        <input class="form-control" id="CantidadProducto" name="CantidadProducto" placeholder="Ingrese Cantidad">
                        {!! $errors->first('CantidadProducto','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="col-md-3 has-feedback {{ $errors->has('PrecioProducto') ? 'has-error' : ''}}">
                        <label for="PrecioProducto">Precio Producto:</label>
                        <input class="form-control" id="PrecioProducto" name="PrecioProducto" placeholder="Ingrese Precio">
                        {!! $errors->first('PrecioProducto','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="col-md-3 has-feedback {{ $errors->has('StatusProducto') ? 'has-error' : ''}}">
                                 <label for="StatusProducto" class="control-label">Status:</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="StatusProducto" id="StatusProducto" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                          <option selected="selected" value="1">Habilitado</option>
                                          <option value="0">Deshabilitado</option>
                                        </select>
                                    {!! $errors->first('StatusProducto','<span class="help-block">:message</span>') !!}
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