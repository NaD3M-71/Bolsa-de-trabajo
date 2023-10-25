<form class="formulario" action="enviar-solicitud.php" method="POST" >
                <h3 class="titulo">Ingrese sus Datos para incluir su solicitud</h3>
                <input 
                    class="form-control mb-2" 
                    name="nombre" 
                    type="text" 
                    placeholder="Ingresá tu nombre y apellido"
                    required>
                <input 
                    class="form-control mb-2" 
                    name="telefono" 
                    type="number" 
                    placeholder="Número de telefono"
                    required>
                <input 
                    class="form-control mb-2" 
                    name="email" 
                    type="email" 
                    placeholder="Correo electrónico"
                    required>
                <select 
                    name="rubro" 
                    id="rubro" 
                    class="form-select mb-2"
                    placeholder="Seleccione un Rubro"
                    required>
                        <option disabled hidden selected>Selecciona un Rubro</option>
                        <option value="docencia">Docencia</option>
                        <option value="atencion">Atención al cliente</option>
                        <option value="turismo">Turismo</option>
                        <option value="mecanica">Automotor</option>
                        <option value="informatica">Informática y Tecnología</option>
                        <option value="otro">Otro</option>
                </select>
                <textarea 
                    class="form-control mb-2" 
                    name="solicitud" 
                    placeholder="Ingresa una breve descripción de la solicitud"
                    required></textarea>
                <input class="form-control mb-2" type="submit" value="Enviar">
                
</form>