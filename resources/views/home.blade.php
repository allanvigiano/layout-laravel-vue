@exeção de conhecimentos introdutórios desta disciplintends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <example-component></example-component>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
