

<div class="table-responsive">
    <table class="table no-margin">
        <thead>
            <tr>
                <th>ID Categoría</th>
                <th>Nombre Categoría</th>
                <th>Status Categoría</th>
                <th>Creado el</th>
                <th>Última Modificación el</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
        @foreach($CategoriasProductos as $key => $CategoriasProductos) 
            <tr>
                <td>{{$CategoriasProductos->ID}}</td>
                <td>{{$CategoriasProductos->NombreCategoriasProductos}}</td>
                <?php
                    $Status;$Label;
                    if($CategoriasProductos->Status == 0){
                        $Status = "Deshabilitado";
                        $Label = "label label-danger";
                    }
                    elseif($CategoriasProductos->Status == 1){
                        $Status = "Habilitado";
                        $Label = "label label-success";
                    }
                ?>
                <td><span class="{{$Label}}">{{$Status}}</span></td>
                <td>{{$CategoriasProductos->CreatedAT}}</td>
                <td>{{$CategoriasProductos->UpdatedAT}}</td>
                <td><a href="{{route('EditarCategoriaStep1',$CategoriasProductos->ID)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></a></td>            
            </tr>
        @endforeach
        </tbody>  <!-- <a href="#" class="btn btn-warning"><span class="fa fa-copy "></span></a> -->
    </table>
</div>






