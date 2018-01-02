@extends('Educadora.app')

@section('content')

                <form class="form-horizontal">
                    <fieldset>
                        <legend>Crear Reporte</legend>
                        <div class="form-group">
                            <label for="fecha" class="col-lg-2 control-label">Fecha</label>
                            <div class="col-lg-4">
                                <input class="form-control input-sm" id="fecha" placeholder="Fecha" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="colacion" class="col-lg-2 control-label">Colación</label>
                            <div class="col-lg-10">
                                <select class="form-control input-sm" id="colacion">
                                    <option>Colación y almuerzo todo</option>
                                    <option>Colación todo</option>
                                    <option>Dejó colación</option>
                                    <option>Almuerzo todo</option>
                                    <option>Dejó almuerzo</option>
                                    <option>Dejó almuerzo y colación</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bano" class="col-lg-2 control-label">Baño</label>
                            <div class="col-lg-10">
                                <select class="form-control input-sm" id="bano">
                                    <option>Si, orina y deposición normal</option>
                                    <option>Si, solo orina normal</option>
                                    <option>Si, solo deposición normal</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="actividad" class="col-lg-2 control-label">Actividad del día</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="actividad" placeholder="Actividad del día"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

@endsection
