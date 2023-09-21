  <tr>
      <td scope="row">
        <div class="h-12 w-12 rounded-full overflow-hidden">
               
            <img src="{{$contact->getImageUrl()}}" alt="" class="w-full object-cover">
        </div>
      </td>
      <td>{{$contact->name}}</td>
      <td>{{$contact->phone}}</td>
      <td>{{$contact->email}}</td>
     <td>
        <a href="{{route('contacts.show',$contact->id)}}">
            <div class="flex items-center space-x-3">
              <p>View</p>
        <iconify-icon icon="carbon:view"></iconify-icon>
        </div>
        </a>
     </td>
    </tr>
