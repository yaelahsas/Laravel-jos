@section('konten')
nama-nama hewan1:

@if(count($kewan))
<ul>
  @foreach($kewan as tampilan1)
  <li> {{tampilan1}} </li>
  @andforeach
</ul>
@andif
@stop
