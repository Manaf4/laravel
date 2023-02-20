<div class="card-body">
                        <br> <br>
                        <div class="table-responsive">
                        @foreach ($formations_par_type as $result)
                         <p>{{ $result->type }} : {{ $result->count }}</p>
                        @endforeach
                        
                        </div>
                    </div>