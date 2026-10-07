<div class="alert alert-{{ $type === 'error' ? 'danger' : 'success' }} alert-dismissible fade show my-3" role="alert">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>