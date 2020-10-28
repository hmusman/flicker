 <option disabled="" selected="" style="font-weight: bold !important;">Select</option>
 @foreach($storage as $row)
 	<option>{{ $row->storage }}</option>
 @endforeach