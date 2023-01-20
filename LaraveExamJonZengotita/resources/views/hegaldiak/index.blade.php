<body>
    @foreach ($hegaldiak as $hegaldi)
        <div class="col-md9 d-flex align-items-center">
            <h1>{{$hegaldi -> id}} 
            {{$hegaldi -> irteera}}
            {{$hegaldi -> helmuga}}
            {{$hegaldi -> irteera_data}}
            {{$hegaldi -> iraupena}}</h1>
        </div>
        <div class="col-md-3 d-flex justify-content-end">
          <form action="{{ route('hegaldiak-update', [$hegaldi->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            
            <input type="text" class="form-control" name="irteera">
            <input type="text" class="form-control" name="helmuga">
            <input type="text" class="form-control" name="irteera_data">
            <input type="text" class="form-control" name="iraupena">

            <button class="btn btn-danger btn-sm">Update</button>
          </form>
        </div>
    @endforeach
</body>

