<h1>Cart List</h1>
<form class="form" method="POST" action="{{ route('orders.store') }}">
  {{ csrf_field() }}

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

<td><button type="button">confirm order</button></td>
   </tbody>
</table>



</form>
