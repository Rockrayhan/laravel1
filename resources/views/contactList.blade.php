@extends('layouts/app')

@section('title', 'App page')
    

@section('content')

<body>

    <div class="container mt-5">

    
        <h1> All Contact lists are here </h1>
        <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
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
                        <th scope="row">1</th>
                        <td>  @php echo $item['name']  @endphp </td>
                        <td>  {{$item['email']}}  </td>
                        <td>  {{$item['subject']}}  </td>
                        <td>  {{$item['message']}}  </td>
                        <td>  <button class="btn">  </button>  </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

    
    </body>
@endsection



