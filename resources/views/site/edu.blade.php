    
    <div class="container">
        <h1 class="display-5">Образование</h1>
        <hr class="my-4">
        <div class="row">
        @if(isset($edu) && is_object($edu))
            @foreach($edu as $v)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-header">{{ $v->name }}</div>
                        <img src="{{ 'img/edu/'. $v->img}}" alt="{{$v->name}}" class="card-img-top">
                        <p class="card-text p-3">{{ $v->desc}}</p>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
    </div>    