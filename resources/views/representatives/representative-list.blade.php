<div>
    <p><b>{{ __('Representatives List ') }}</b></p>

    <form method="GET" action="{{ route('representatives.index') }}">
        @csrf
        @method('GET')
        <div class="row">
            <div class="form-group col-md-12 col-lg-4 mb-2">
                <label for="nome">{{ __('Filter by Name') }}</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ request()->get('nome') }}">
            </div>
            <div class="form-group col-md-12 col-lg-4 mb-2">
                <label for="email">{{ __('Filter by Email') }}</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ request()->get('email') }}">
            </div>
            <div class="col-md-12 col-lg-4 d-flex align-items-end gap-2 mb-2">
                <button type="submit" class="btn btn-primary w-100">{{ __('Filter') }}</button>
                <a href="{{ route('representatives.index') }}" class="btn btn-danger w-100"
                    id="clear-filters">{{ __('Clear filter') }}</a>
            </div>
        </div>

    </form>


    <br><br>
    @if ($representantes->isEmpty())
        <p class="text-center">{{ __('No representatives found.') }}</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('CEP') }}</th>
                        <th>{{ __('Address') }}</th>
                        <th>{{ __('Number') }}</th>
                        <th>{{ __('District') }}</th>
                        <th>{{ __('City') }}</th>
                        <th>{{ __('State') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($representantes as $representante)
                        <tr>
                            <td>{{ $representante->nome }}</td>
                            <td>{{ $representante->email }}</td>
                            <td>{{ $representante->cep }}</td>
                            <td>{{ $representante->logradouro }}</td>
                            <td>{{ $representante->numero }}</td>
                            <td>{{ $representante->bairro }}</td>
                            <td>{{ $representante->cidade }}</td>
                            <td>{{ $representante->uf }}</td>
                            <td><button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-id="{{ $representante->id }}"><i
                                        class="bi bi-trash-fill"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <br>
        {{ $representantes->links('pagination::bootstrap-5') }}
    @endif
</div>