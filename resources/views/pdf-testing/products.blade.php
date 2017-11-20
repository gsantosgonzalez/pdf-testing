<table width="100%">
    <caption>Productos</caption>
    <thead>
        <tr>
            <th>Index</th>
            <th>Product</th>
            <th>Description</th>
            <th>Product</th>
            <th>Product</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < $ProdNum; $i++)
            <tr>
                <td align="center">{{$i + 1}}</td>
                <td align="center">Product</td>
                <td align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore alias quas explicabo officiis tempora iste at illo velit maxime est, architecto, fugiat consectetur pariatur quo, maiores similique voluptatibus et eligendi!</td>
                <td align="center">Product</td>
                <td align="center">Product</td>
            </tr>
        @endfor
    </tbody>
</table>