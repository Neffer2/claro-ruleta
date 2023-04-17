<div class="form-container"> 
    <div class="form-header"> 
        <h2>INGRESA AQU&Iacute;</h2> 
    </div> 
    <form wire:submit.prevent="registrar"> 
        <div class="row gy-4 p-4">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-text">
                            <span class="icon-container user" id="addon-wrapping">
                                <i class="fa-solid fa-user"></i>
                            </span>
                        </div>
                        <input type="text" id="nombre" class="form-control @error('nombre') is-invalid @elseif(strlen($nombre) > 0) is-valid @enderror" wire:model.lazy="nombre" required placeholder="NOMBRE">
                    </div>
                    @error('nombre')
                        <div class="text-white bg-danger">
                            {{ $message }} 
                        </div>
                    @enderror
                </div> 
            </div>  
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-text">
                            <span class="icon-container" id="addon-wrapping">
                                <i class="fa-solid fa-id-card"></i>
                            </span>
                        </div>
                        <input type="text" id="documento" class="form-control @error('documento') is-invalid @elseif(strlen($documento) > 0) is-valid @enderror" wire:model.lazy="documento" required placeholder="CEDULA">
                    </div>
                    @error('documento')
                        <div class="text-white bg-danger">
                            {{ $message }} 
                        </div>        
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-text">
                            <span class="icon-container" id="addon-wrapping">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @elseif(strlen($email) > 0) is-valid @enderror" wire:model.lazy="email" required placeholder="CORREO ELECTR&Oacute;NICO">
                    </div>
                    @error('email')
                        <div class="text-white bg-danger">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-1">
                <div class="form-group">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-text">
                            <span class="icon-container" id="addon-wrapping">
                                <i class="fa-solid fa-phone fa-rotate-180"></i>
                            </span>
                        </div>
                        <input type="text" id="tel" class="form-control @error('tel') is-invalid @elseif(strlen($tel) > 0) is-valid @enderror" wire:model.lazy="tel" required placeholder="CELULAR">
                    </div>
                    @error('tel')
                        <div class="text-white bg-danger">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <button class="btn btn-primary">REGISTRAR</button>
            </div>
        </div>        
    </form>
</div>
