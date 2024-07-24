<form action="{{ route('representatives.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="row">
        <div class="col-md-12 col-lg-6 mb-2">
            <label for="exampleInputEmail1" class="form-label">{{ __('Name*') }}</label>

            <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror"
                name="nome" value="{{ old('nome') }}" required autocomplete="nome">

            @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-6 mb-2">
            <label for="exampleInputEmail1" class="form-label">{{ __('Email*') }}</label>

            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-6 mb-2">
            <label for="exampleInputEmail1" class="form-label">{{ __('CEP*') }}</label>

            <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror"
                name="cep" value="{{ old('cep') }}" onblur="pesquisacep(this.value);" required
                autocomplete="cep">

            @error('cep')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-6 mb-2">
            <label for="exampleInputEmail1" class="form-label">{{ __('Address*') }}</label>

            <input id="logradouro" type="text" class="form-control @error('logradouro') is-invalid @enderror"
                name="logradouro" value="{{ old('logradouro') }}" required autocomplete="logradouro">

            @error('logradouro')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-4 mb-2">
            <label for="exampleInputEmail1" class="form-label">{{ __('Number*') }}</label>

            <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror"
                name="numero" value="{{ old('numero') }}" required autocomplete="numero">

            @error('numero')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-8 mb-2">
            <label for="exampleInputEmail1" class="form-label">{{ __('District*') }}</label>

            <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror"
                name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro">

            @error('bairro')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-8 mb-2">
            <label for="exampleInputEmail1" class="form-label">{{ __('City*') }}</label>

            <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror"
                name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade">

            @error('cidade')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-12 col-lg-4 mb-2">
            <label for="exampleInputEmail1" class="form-label">{{ __('State*') }}</label>

            <input id="uf" type="text" class="form-control @error('uf') is-invalid @enderror"
                name="uf" value="{{ old('uf') }}" required autocomplete="uf">

            @error('uf')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12 text-start mt-4">
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        </div>
    </div>
</form>