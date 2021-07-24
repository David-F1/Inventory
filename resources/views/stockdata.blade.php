  
  
  @if($layout=='index')

  
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>DataTables</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <a href="{{ url('/stock/create') }}" class="btn btn-sm btn-info">Add New</a>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">STOCKS</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Designation</th>
                <th>Model</th>
                <th>Quantite</th>
                <th>Categorie</th>
                <th>operation</th>
              </tr>
              </thead>
              <tbody>
              @foreach($stocks as $stock)
              <tr>
                <td>{{ $stock->A_Nom }}</td>
                <td>{{ $stock->A_Model }}</td>
                <td>{{ $stock->A_Quantite }}</td>
                <td>{{ $stock->A_Categorie }}</td> 
                <td>
                    <a href="#" class="btn btn-primary btn-sm">
                    <i class="fas fa-folder">
                          </i>
                          View
                    </a>
                    <a href="{{ url('/stock/edit/'.$stock->id) }} " class="btn btn-info btn-sm">
                    <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                    </a>
                    <a href="#" class="btn btn-danger btn-sm " >
                    <i class="fas fa-trash">
                          </i>
                          Delete
                    </a>
                </td>               
              </tr>
              @endforeach
              </tbody>
              
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

@elseif($layout=='create')


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>General Form</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <a href="{{ url('/stock') }}" class="btn btn-primary">Back</a>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form methode="post" action="{{ url('/stock/store') }}">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Designation</label>
                <input type="text" name="A_Nom" class="form-control"  placeholder="Entrer le Nom d'article">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Categorie</label>
                <input type="text" name="A_Categorie" class="form-control"  placeholder="Categorie">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Model</label>
                <input name="A_Model" type="text" class="form-control"  placeholder="Entrer le model">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Quantite</label>
                <input name="A_Quantite" type="text" class="form-control"  placeholder="Entrer la quantite">
              </div>
              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->



@elseif($layout=='show')


@elseif($layout=='edit')


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Update Form</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <a href="{{ url('/stock') }}" class="btn btn-primary">Back</a>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form methode="post" action="{{ url('/stock/update/'.$stock->id)}}">
          <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Designation</label>
                <input type="text" name="A_Nom" value="{{ $stock->A_Nom }}" class="form-control"  placeholder="Entrer le Nom d'article">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Categorie</label>
                <input type="text" name="A_Categorie" value="{{ $stock->A_Categorie }}" class="form-control"  placeholder="Categorie">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Model</label>
                <input name="A_Model" value="{{ $stock->A_Model }}" type="text" class="form-control"  placeholder="Entrer le model">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Quantite</label>
                <input name="A_Quantite" value="{{ $stock->A_Quantite }}" type="text" class="form-control"  placeholder="Entrer la quantite">
              </div>
              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->



@endif















