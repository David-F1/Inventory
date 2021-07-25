  
  
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
                    <a href="{{ url('/stock/show/'.$stock->id) }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-folder">
                          </i>
                          View
                    </a>
                    <a href="{{ url('/stock/edit/'.$stock->id) }} " class="btn btn-info btn-sm">
                    <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                    </a>
                    <a href="#" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modal-danger" >
                    <i class="fas fa-trash">
                          </i>
                          Delete
                    </a>
                </td>               
              </tr>

         <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Danger </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you wanna delete this Article ? &hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="{{url('/stock/delete/'.$stock->id)}}" type="button" class="btn btn-outline-light">Confirm</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
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
<div class="col-md-3">
  <div class="card card-primary">
              <div class="card-header">
                <strong><h1 class="card-title">About {{ $stock->A_Nom }}</h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong> Designation</strong>

                <p class="text-muted">
                {{ $stock->A_Nom }}
                </p>

                <hr>

                <strong> Model</strong>

                <p class="text-muted">{{ $stock->A_Model }}</p>

                <hr>

                <strong> Quantite</strong>

                <p class="text-muted">
                {{ $stock->A_Quantite }}
                </p>

                <hr>

                <strong> Categorie</strong>

                <p class="text-muted">{{ $stock->A_Categorie }}</p>
              </div>
              <!-- /.card-body -->
            </div>
            </div>

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
          <form methode="post" action="{{ url('/stock/update/'.$stockt->id)}}">
          <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Designation</label>
                <input type="text" name="A_Nom" value="{{ $stockt->A_Nom }}" class="form-control"  placeholder="Entrer le Nom d'article">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Categorie</label>
                <input type="text" name="A_Categorie" value="{{ $stockt->A_Categorie }}" class="form-control"  placeholder="Categorie">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Model</label>
                <input name="A_Model" value="{{ $stockt->A_Model }}" type="text" class="form-control"  placeholder="Entrer le model">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Quantite</label>
                <input name="A_Quantite" value="{{ $stockt->A_Quantite }}" type="text" class="form-control"  placeholder="Entrer la quantite">
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















