<x-header />

<table class="border-separate font-khmer text-left">
    <thead>
      <tr class="bg-blue-200 font-black">
        <th class="px-6 py-2 text-xs">Name</th>
        <th class="px-6 py-2 text-xs">Phone</th>
        <th class="px-6 py-2 text-xs">Team</th>
        <th class="px-6 py-2 text-xs">Logo</th>
        <th class="px-6 py-2 text-xs">Player 1</th>
        <th class="px-6 py-2 text-xs">Player 2</th>
        <th class="px-6 py-2 text-xs">Player 3</th>
        <th class="px-6 py-2 text-xs">Player 4</th>
        <th class="px-6 py-2 text-xs">Player 5</th>
      </tr>
    </thead>
    <tbody>
        @foreach($freefires as $freefire)
      <tr class="bg-blue-50 font-gray-500">
        <td class="px-6 py-2 text-xs">{{$freefire['name']}}</td>
        <td class="px-6 py-2 text-xs">{{$freefire['phone']}}</td>
        <td class="px-6 py-2 text-xs">{{$freefire['team']}}</td>
        <td class="px-6 py-2 text-xs"><img src="http://127.0.0.1:8000/storage/{{$freefire['logo']}}" class="w-8"></td>
        <td class="px-6 py-2 text-xs">{{$freefire['id1']}}</td>
        <td class="px-6 py-2 text-xs">{{$freefire['id2']}}</td>
        <td class="px-6 py-2 text-xs">{{$freefire['id3']}}</td>
        <td class="px-6 py-2 text-xs">{{$freefire['id4']}}</td>
        <td class="px-6 py-2 text-xs">{{$freefire['id5']}}</td>
      </tr>
      
    @endforeach
    </tbody>
  </table>

