<div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="StockProducto">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Stock Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">

            <form role="form" id="AgregarStockProducto" name="AgregarStockProducto" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="AgregarStockProducto">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group"> 
                    
                    <div class="input-group col-md-6 has-feedback {{ $errors->has('Producto') ? 'has-error' : ''}}">
                                 <label for="Producto" class="control-label">Producto:</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="Producto" id="Producto" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                          <option selected="selected" value="#">Productos</option>
                                          @foreach($Productos as $key => $Productos) 
                                          <option value="{{$Productos->ID}}">{{$Productos->ID." ".$Productos->NombreProducto}}</option>
                                          @endforeach
                                        </select>
                                  {!! $errors->first('Producto','<span class="help-block">:message</span>') !!}
                    </div> 

                    <div class="input-group col-md-6 has-feedback {{ $errors->has('Cantidad') ? 'has-error' : ''}}">
                        <label for="Cantidad">Cantidad:</label>
                        <input class="form-control" id="Cantidad" name="Cantidad" placeholder="Ingrese Cantidad">
                        {!! $errors->first('Cantidad','<span class="help-block">:message</span>') !!}
                    </div>

                    <label for="datepicker">Vencimiento:</label>
                    <div class="input-group date col-md-6  has-feedback {{ $errors->has('datepicker') ? 'has-error' : ''}}" >
                        <div class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" name="fechaVencimiento" placeholder="Ingrese Fecha">
                    </div>      
                        {!! $errors->first('datepicker','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="input-group col-md-6 has-feedback {{ $errors->has('BarraProducto') ? 'has-error' : ''}}">
                        <label for="BarraProducto">Codigo de Barra:</label>
                        <input class="form-control" id="BarraProducto" name="BarraProducto" placeholder="Ingrese Codigo de Barra">
                        {!! $errors->first('BarraProducto','<span class="help-block">:message</span>') !!}
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

<script type="text/javascript">                    
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
        language: 'es',
    });
</script>