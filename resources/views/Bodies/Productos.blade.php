

<div class="table-responsive">
    <table class="table no-margin">
        <thead>
            <tr>
                <th>ID Producto</th>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Status</th>
                <th>Creado el:</th>
                <th>Modificado el:</th>
                <th> </th>
            </tr>
        </thead>

        <tbody>
        @foreach($Productos as $key => $pr)
            <tr>
                <td>{{$pr->ID}}</td>
                <td>{{$pr->Categoria}}</td>
                <td>{{$pr->Nombre}}</td>
                <td><img src="{{url('Imagenes/Productos')}}/{{$pr->URL}}" width="30px" height="30px"></td>
                <td>{{$pr->Cantidad}}</td>
                <td>${{$pr->Precio}}</td>
                <?php
                        $Status;$Label;
                        if($pr->Status == 0){
                            $Status = "Deshabilitado";
                            $Label = "label label-danger";
                        }
                        elseif($pr->Status == 1){
                            $Status = "Habilitado";
                            $Label = "label label-success";
                        }
                    ?>
                <td><span class="{{$Label}}">{{$Status}}</span></td>
                <td>{{$pr->Creado}}</td>
                <td>{{$pr->Modificado}}</td>
                <td><a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a><a href="#" class="btn btn-warning"><span class="fa fa-copy "></span></a><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>