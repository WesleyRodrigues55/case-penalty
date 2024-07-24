<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('Confirm Deletion') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ __('Are you sure you want to delete this representative?') }}</p>

                <p><i>{{ __('ALL customers linked to that rep will be deleted!') }}</i></p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('representatives.destroy', 'id') }}" method="POST" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" id="representative-id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>