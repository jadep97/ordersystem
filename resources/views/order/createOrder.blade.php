<h1>Create Order</h1>

<h1>MENU's</h1>
<form class="form" method="post" action="{{ route('carts.store') }}">
{{ csrf_field() }}
<input type="text" id="input_name" name="input_name" value="input the food name here">
<button type="submit">add to cart</button>
</form>
<table>
    <thead>
        <tr>
            <th> Name</th>
            <th> Price </th>
        </tr>
    </thead>
    <tbody>
         @foreach($items as $item)
          <tr>
              <td> {{$item->item_name}} </td>
              <td> {{$item->price}} </td>
          </tr>

         @endforeach


   </tbody>
</table>

