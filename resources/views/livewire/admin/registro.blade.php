<div> 
    <form wire:submit.prevent="registrar"> 
        <div class="row gy-2">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nombre">Nombre: </label> 
                    <input type="text" id="nombre" class="form-control @error('nombre') is-invalid @elseif(strlen($nombre) > 0) is-valid @enderror" wire:model.lazy="nombre" required>
                    @error('nombre')
                        <div id="nombre" class="invalid-feedback">
                            {{ $message }} 
                        </div>
                    @enderror
                </div> 
            </div>  
            <div class="col-md-12">
                <div class="form-group">
                    <label for="documento">Documento: </label>
                    <input type="text" id="documento" class="form-control @error('documento') is-invalid @elseif(strlen($documento) > 0) is-valid @enderror" wire:model.lazy="documento" required>
                    @error('documento')
                        <div id="documento" class="invalid-feedback">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">Correo: </label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @elseif(strlen($email) > 0) is-valid @enderror" wire:model.lazy="email" required>
                    @error('email')
                        <div id="email" class="invalid-feedback">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-1">
                <div class="form-group">
                    <label for="tel">Tel&eacute;fono: </label>
                    <input type="text" id="tel" class="form-control @error('tel') is-invalid @elseif(strlen($tel) > 0) is-valid @enderror" wire:model.lazy="tel" required>
                    @error('tel')
                        <div id="tel" class="invalid-feedback">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary">Registrar</button>
            </div>
        </div>        
    </form>
</div>
