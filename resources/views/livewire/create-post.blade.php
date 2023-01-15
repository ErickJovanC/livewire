<div>
    {{-- Boton --}}
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPost">Crear Nuevo Articulo</button>
    </div>
    {{-- <!-- Modal --> --}}
    <div wire:ignore.self class="modal fade" id="addPost"  data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addPostLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addPostLabel">Add New Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.defer="title">
                            @error('title')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea type="password" class="form-control @error('content') is-invalid @enderror" id="content" rows="10" wire:model.defer="content">
                            </textarea>
                            @error('content')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <button wire:click="save" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End modal --}}
</div>