
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id" aria-describedby="emailHelp" 
                            value="{{ isset($estudiante->id)?$estudiante->id:" " }}" placeholder="Id Estudiante" {{isset($estudiante->id)?"readonly":" " }}>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" 
                            value="{{ isset($estudiante->apellidos)?$estudiante->apellidos:" " }}" placeholder="Apellidos">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" 
                            value="{{ isset($estudiante->nombres)?$estudiante->nombres:" " }}" placeholder="Nombres">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="id_programa">Programa</label>
                        <input type="text" class="form-control" id="id_programa" name="id_programa" 
                            value="{{ isset($estudiante->id_programa)?$estudiante->id_programa:" " }}" placeholder="Programa">
                    </div>
                    <br>

                    