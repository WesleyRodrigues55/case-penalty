
{{-- Change Representative --}}
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Confirm edition') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('customers.update', 'id') }}" method="POST" id="updateForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <p>{{ __('Are you sure you want to change this representative?') }}</p>
                    <label for="exampleInputEmail1" class="form-label">{{ __('Representative*') }}</label>
                    <select name="representante_id" id="representante_id" class="form-control" required>
                        <option value="" defaullt>{{ __('Select another representative') }}</option>
                        @foreach ($data['representantes'] as $representante)
                            <option value="{{ $representante->id }}">{{ $representante->nome }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="representative-id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('Edit') }}</button>

                </div>
            </form>
        </div>
    </div>
</div>