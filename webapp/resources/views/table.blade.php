<table class="table table-hover">
  <thead>
    <tr class="table-info">
      <th>Nama</th>
      <th>Barang</th>
      <th>Tanggal</th>
      <th>Lokasi</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($items as $item)
    <tr class="custom-row">
      <td style="font-weight: bold;">
        <a href="/item-detail/{{ $item->id }}" style="text-decoration: none; color: inherit;">
          @foreach($users as $user)
          @if($user->id === $item->user_id)
            {{ $user->name }}
          @endif
          @endforeach
        </a>
      </td>
      <td>{{ $item->name }}</td>
      <td>{{ date('d-m-Y', strtotime($item->date)) }}</td>
      <td>{{ $item->location }}</td>
      <td>
        @if($item->information)
          Found Item
        @else
          Lost Item
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
