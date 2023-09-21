<form class="formulario" action="enviar-servicio.php" method="POST" >
                <h3 class="titulo">Ingrese sus Datos</h3>
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
                        <option value="atencion">Atencion al cliente</option>
                        <option value="mecanica">Automotor</option>
                        <option value="informatica">Informatica y Tecnologia</option>
                        <option value="otro">Otro</option>
                </select>
                <textarea 
                    class="form-control mb-2" 
                    name="servicio" 
                    id="" 
                    placeholder="Ingresa una breve descripción del servicio"
                    required></textarea>
                <input class="form-control mb-2" type="submit" value="Enviar">
                
</form>