<html>
    <!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
          
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="main-content">



  @if(count($childs)>0)
  


  <h1 class="text-center">Informations</h1>
   <hr />


 
  <div class="section__content section__content--p40">
    <div class="container-fluid">
      <div class="row">
        <div class="table-responsive">
         <table class="table table-borderless table-striped">
          
                <thead class="bg-dark" style="color:white">
                <tr>
                <th class="column1">Action</th>
                <th class="column2">Child First Name</th>
                <th class="column3">Child Middle Name</th>
                <th class="column4">Child Last Name</th>
                <th class="column5">Child Age</th>
                <th class="column6">Gender</th>
                <th class="column7">Child Address</th>
                <th class="column8">Child City</th>
                <th class="column9">Child State</th>
                <th class="column10">Country</th>
                <th class="column10">Child Zipcode</th>

                </tr>
                </thead>
            @foreach($childs as $child)
            <tbody>
            
                <tr>
                    <td class="column1">  <a href="{{ route('delete', ['id' => $child->id]) }}"><button class="btn-danger">Delete</button></a></td>
                    <td class="column2">{{ $child->firstname }}</td>
                    <td class="column3">{{ $child->middlename }}</td>
                    <td class="column4">{{ $child->lastname  }}</td>
                    <td class="column5">{{ $child->age }}</td>
                    <td class="column6">{{ $child->gender }}</td>
                    <td class="column7">{{ $child->address }}</td>
                    <td class="column8">{{ $child->city }}</td>
                    <td class="column9">{{ $child->state }}</td>
                    <td class="column10">{{ $child->country }}</td>
                    <td class="column10">{{ $child->zipcode }}</td>
                    
                </tr>
            </tbody>
    @endforeach
</table>

</div>
</div>
</div>
</div>
</div>

  
@else
  <div class="text-center">
  <h1>No Informations to show!!!</h1>
  <div>
  
@endif

  <br />
  <div class="text-center">
  <a href="{{ url('/form') }}" > <button class="btn-success" >Add New </Button></a>
  </div>
</html>