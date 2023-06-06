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
            <div class="col-md-12">  
                <div class="form-group">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-text">
                            <span class="icon-container" id="addon-wrapping">
                                <i class="fa-solid fa-city"></i>
                            </span> 
                        </div>
                        <select id="ciudad" class="form-control @error('ciudad') is-invalid @elseif(strlen($ciudad) > 0) is-valid @enderror" wire:model.lazy="ciudad" required placeholder="CIUDAD">
                            <option value="">CIUDAD</option>
                            <option value="BOGOT&Aacute; D.C">BOGOT&Aacute; D.C.</option>
                            <option value="MEDELL&Iacute;N">MEDELL&Iacute;N</option>
                            <option value="CALI">CALI</option>
                            <option value="BARRANQUILLA">BARRANQUILLA</option>
                            <option value="CARTAGENA">CARTAGENA</option>
                            <option value="SOLEDAD">SOLEDAD</option>
                            <option value="C&Uacute;CUTA">C&Uacute;CUTA</option>
                            <option value="IBAGU&Eacute;">IBAGU&Eacute;</option>
                            <option value="SOACHA">SOACHA</option>
                            <option value="VILLAVICENCIO">VILLAVICENCIO</option>
                            <option value="BUCARAMANGA">BUCARAMANGA</option>
                            <option value="SANTA MARTA">SANTA MARTA</option>
                            <option value="VALLEDUPAR">VALLEDUPAR</option>
                            <option value="BELLO">BELLO</option>
                            <option value="PEREIRA">PEREIRA</option>
                            <option value="PASTO">PASTO</option>
                            <option value="BUENAVENTURA">BUENAVENTURA</option>
                            <option value="MANIZALES">MANIZALES</option>
                            <option value="NEIVA">NEIVA</option>
                            <option value="PALMIRA">PALMIRA</option>
                            <option value="RIOHACHA">RIOHACHA</option>
                            <option value="SINCELEJO">SINCELEJO</option>
                            <option value="POPAY&Aacute;N">POPAY&Aacute;N</option>
                            <option value="ITAGÜ&Iacute;">ITAGÜ&Iacute;</option>
                            <option value="FLORIDABLANCA">FLORIDABLANCA</option>
                            <option value="ENVIGADO">ENVIGADO</option>
                            <option value="TULU&Aacute;">TULU&Aacute;</option>
                            <option value="SAN ANDR&Eacute;S">SAN ANDR&Eacute;S</option>
                            <option value="DOSQUEBRADAS">DOSQUEBRADAS</option>
                            <option value="APARTAD&Oacute;">APARTAD&Oacute;</option>
                            <option value="TUNJA">TUNJA</option>
                            <option value="GIR&Oacute;N">GIR&Oacute;N</option>
                            <option value="URIBIA">URIBIA</option>
                            <option value="BARRANQUILLA">BARRANQUILLA</option>
                            <option value="BARRANCABERMEJA">BARRANCABERMEJA</option>
                            <option value="FLORENCIA">FLORENCIA</option>
                            <option value="TURBO">TURBO</option>
                            <option value="MAICAO">MAICAO</option>
                            <option value="PIEDECUESTA">PIEDECUESTA</option>
                            <option value="YOPAL">YOPAL</option>
                            <option value="CAREPA">CAREPA</option>
                            <option value="CHIGORODO">CHIGOROD&Oacute;</option>
                            <option value="TENJO">TENJO</option>
                            <option value="VILLETA">VILLETA</option>
                            <option value="BUGA">BUGA</option>
                            <option value="YUMBO">YUMBO</option>
                            <option value="ARMENIA">ARMENIA</option>
                            <option value="CARTAGO">CARTAGO</option>
                            <option value="SANTA-ROSA-DE-CABAL">SANTA ROSA DE CABAL</option>
                            <option value="RIONEGRO">RIONEGRO</option>
                            <option value="IPIALES">IPIALES</option>
                            <option value="POPAYAN">POPAYAN</option>
                        </select>
                    </div>
                    @error('ciudad')
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
            <div class="col-md-12 mb-1">
                <div class="form-group"> 
                    <div class="input-group flex-nowrap">
                        <div class="input-group-text">
                            <span class="icon-container" id="addon-wrapping">
                                <i class="fa-solid fa-location-dot" style="padding: 3px;"></i>
                            </span>
                        </div>
                        <input type="text" id="direccion" class="form-control @error('direccion') is-invalid @elseif(strlen($direccion) > 0) is-valid @enderror" wire:model.lazy="direccion" required placeholder="DIRECCION">
                    </div>
                    @error('direccion')
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
                                <i class="fa-solid fa-hashtag" style="padding: 2px;"></i>
                            </span>
                        </div>
                        <input type="text" id="id_evento" class="form-control @error('id_evento') is-invalid @elseif(strlen($id_evento) > 0) is-valid @enderror" wire:model.lazy="id_evento" required placeholder="ID EVENTO">
                    </div>
                    @error('id_evento')
                        <div class="text-white bg-danger">
                            {{ $message }} 
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-1">
                <div class="form-check form-check-inline">
                    <input id="legal" wire:model="legal" class="form-check-input @error('legal') is-invalid @elseif(strlen($legal) > 0) @enderror" type="checkbox" required>
                    <label class="form-check-label" for="legal">He le&iacute;do y acepto los <a href="https://claroleads.com/wp-content/uploads/2023/06/TERMINOS-Y-CONDICIONES-Y-POLITICA-DE-TRATAMIENTO-DE-DATOS-CLARO.pdf" target="_blank">t&eacute;rminos y condiciones</a> y la <a href="https://claroleads.com/wp-content/uploads/2023/06/TERMINOS-Y-CONDICIONES-Y-POLITICA-DE-TRATAMIENTO-DE-DATOS-CLARO.pdf" target="_blank">pol&iacute;tica de tratamiento de datos</a>.</label>
                    @error('legal')
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
