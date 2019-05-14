

<div class="table-responsive">
    <table class="table no-margin">
        <thead>
            <tr>
                <th>Codigo de Barras</th>
                <th>Nomnbre Producto</th>
                <th>Stock Producto</th>
                <th>Vencimiento</th>
                <th>Creado El:</th>
                <th>Modificado El:</th>
                <th> </th>
            </tr>
        </thead>

        <tbody>
        @foreach($StockProductos as $key => $StockProductos)
        <tr>
                <td>{{$StockProductos->Barra}}</td>
                <td>{{$StockProductos->Nombre}}</td>
                <td>{{$StockProductos->Stock}}</td>
                <td>{{$StockProductos->Vencimiento}}</td>
                <td>${{$StockProductos->Creado}}</td>
                <td>{{$StockProductos->Modificado}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>