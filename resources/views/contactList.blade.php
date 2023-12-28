@extends('layouts/app')

@section('title', 'App page')
    

@section('content')

<body class="">

  <div class="container mt-5 bg-dark text-white text-center py-2">
    
    <h1> All Contact lists are here </h1>
    {{--  Success data  --}}
@if (session('msg'))
<div class="alert alert-danger">
  {{session('msg')}}
</div>
@endif
    
        <div class="p-5">
            <table class="table text-white p-5">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col"> Subject </th>
                    <th scope="col"> Message </th>
                    <th scope="col"> Action </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $item)
            
                    <tr>
                      <td>  {{$item['id']}}  </td>
                        <td>  @php echo $item['name']  @endphp </td>
                        <td>  {{$item['email']}}  </td>
                        <td>  {{$item['subject']}}  </td>
                        <td>  {{$item['message']}}  </td>
                        <td>  <a href="/allcontacts/delete/{{$item['id']}}"> <button class="btn btn-danger"> Delete </button>   </a>
                          <a href="/allcontacts/edit/{{$item['id']}}"> <button class="btn btn-warning"> Edit </button>   </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

    
    </body>
@endsection



