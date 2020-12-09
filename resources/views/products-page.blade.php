@extends('layouts.main')

@section('content')
 <div class="container">
    <table class="table">
       <thead>
       <th>ID</th>
       <th>სახელი</th>
       <th>კატეგორია</th>
       <th>ფასი</th>
       <th>სტოკი</th>
       <th>აქცია</th>
       <th>დამატების თარიღი</th>
       </thead>

    <tbody>
    <form action="/product/save" method="post">
    @csrf
    <tr>
    <td colspan="2"><input type="text" name="name" class="form-control" /></td>
    <td><input type="text" name="category" class="form-control" /></td>
    <td><input type="number" name="price" class="form-control" /></td>
    <td><input type="number" name="stock" class="form-control" /></td>
    <td><input type="number" name="sale" class="form-control" /></td>
    <td><button class="btn btn-success">ADD</button></td>

    </tr>
    </form>
    @foreach($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->სახელი }}</td>
      <td>{{ $product->კატეგორია }}</td>
      <td>{{ $product->ფასი }}</td>
      <td>{{ $product->სტოკი }}</td>
      <td>{{ $product->აქცია }}</td>
      <td>{{ $product->შეიქმნა }}</td>

    </tr>
    @endforeach
    </tbody>
    </table>

 </div>
@endsection
