<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ __('Name*') }}</label>

            <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror"
                name="nome" value="{{ old('nome') }}" required autocomplete="nome">

            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-6 mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ __('Email*') }}</label>

            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 mb-3">
            <div class="d-flex gap-4 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo_pessoa" id="tipo-pessoa-fisica"
                        value="fisica" checked>
                    <label class="form-check-label" for="tipo-pessoa-fisica">
                        {{ __('Natural person') }}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo_pessoa" id="tipo-pessoa-juridica"
                        value="juridica">
                    <label class="form-check-label" for="tipo-pessoa-juridica">
                        {{ __('Jurídical person') }}
                    </label>
                </div>
            </div>
            <div id="content-pessoa-fisica">
                <div class="row">
                    <div class="col-md-12 col-lg-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{ __('CPF') }}</label>

                        <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror"
                            name="cpf" value="{{ old('cpf') }}" autocomplete="cpf">

                        @error('cpf')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12 col-lg-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{ __('Date of birth') }}</label>

                        <input id="data_nascimento" type="date"
                            class="form-control @error('data_nascimento') is-invalid @enderror"
                            name="data_nascimento" value="{{ old('data_nascimento') }}"
                            autocomplete="data_nascimento">

                        @error('data_nascimento')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div id="content-pessoa-juridica">
                <div class="row">
                    <div class="col-md-12 col-lg-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{ __('CNPJ') }}</label>

                        <input id="cnpj" type="text"
                            class="form-control @error('cnpj') is-invalid @enderror" name="cnpj"
                            value="{{ old('cnpj') }}" autocomplete="cnpj">

                        @error('cnpj')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12 col-lg-6 mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{ __('Fundation date CNPJ') }}</label>

                        <input id="data_fundacao" type="date"
                            class="form-control @error('data_fundacao') is-invalid @enderror" name="data_fundacao"
                            value="{{ old('data_fundacao') }}" autocomplete="data_fundacao">

                        @error('data_fundacao')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-4 mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ __('Phone 1*') }}</label>

            <input id="telefone_1" type="text" class="form-control @error('telefone_1') is-invalid @enderror"
                name="telefone_1" value="{{ old('telefone_1') }}" required autocomplete="telefone_1">

            @error('telefone_1nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-4 mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ __('Phone 2') }}</label>

            <input id="telefone_2" type="text" class="form-control @error('telefone_2') is-invalid @enderror"
                name="telefone_2" value="{{ old('telefone_2') }}" autocomplete="telefone_2">

            @error('telefone_2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-4 mb-3">
            <label for="exampleInputEmail1" class="form-label">{{ __('Representative*') }}</label>

            <select name="representante_id" id="representante_id" class="form-control" required>
                <option value="" defaullt>Selecione</option>
                @foreach ($data['representantes'] as $representante)
                    <option value="{{ $representante->id }}">{{ $representante->nome }}</option>
                @endforeach

            </select>
        </div>

        <div class="col-12 text-start mt-4">
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        </div>
    </div>
</form>