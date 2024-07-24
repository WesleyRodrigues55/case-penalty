<div>
    <p><b>Customer List</b></p>

    @if ($data['clientes']->isEmpty())
        <p class="text-center">{{ __('No customers found.') }}</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('CNPJ') }}</th>
                        <th>{{ __('CPF') }}</th>
                        <th>{{ __('Phone 1') }}</th>
                        <th>{{ __('Representative') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['clientes'] as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->cnpj ?? 'NULO' }}</td>
                            <td>{{ $cliente->cpf ?? 'NULO' }}</td>
                            <td>{{ $cliente->telefone_1 }}</td>
                            <td>{{ $cliente->representante_nome }}</td>
                            <td>
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#updateModal" data-id="{{ $cliente->id }}">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <br>
        {{ $data['clientes']->links('pagination::bootstrap-5') }}
    @endif
</div>