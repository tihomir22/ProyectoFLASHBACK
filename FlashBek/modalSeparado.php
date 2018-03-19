<!--PARTE 1 DEL MODAL-->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="stepwizard" style="margin-left: 5%;">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle" data-dismiss="modal" id=boton1F>1</button>
                            <p>Basico</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle" id=boton2F>2</button>
                            <p>Belleza</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle" disabled="disabled" id=boton3F>3</button>
                            <p>Utopia</p>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="modal-body" id=cuerpoMod> <!--Formulario del Modal 1 -->
                <div class="alert alert-info" role="alert" style="font-size: 12px;">
                    <strong>Aviso!</strong> Esta parte del formulario no es obligatoria, pero se usará para calcular el perfil del usuario.
                </div>
                <div class="form-check" id=modalForm>
                    <h4>Cuantos libros te has leido?</h4><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>

                    <label class="form-check-label" for="exampleRadios1">
                        0-2 libros en mi vida.
                    </label><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios2">
                        2-10 libros en mi vida.
                    </label><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios3">
                        Más de 10 ! 
                    </label><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios4">
                        Me leo uno a la semana :D
                    </label><br><br><br>
                </div>

                <div class="form-check" id=modalForm2><br>
                    <h4>Te gusta escribir?</h4><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="escrituraForm1" value="option1" >

                    <label class="form-check-label" for="escrituraForm1">
                        Lo he intentado pero me cansé.
                    </label><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="escrituraForm2" value="option1" >
                    <label class="form-check-label" for="escrituraForm2">
                        Tengo un libro listo para su publicacion.
                    </label><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="escrituraForm3" value="option1" >
                    <label class="form-check-label" for="escrituraForm3">
                        He publicado y vendido varios.
                    </label><br>
                    <input class="form-check-input" type="radio" name="exampleRadios" id="escrituraForm4" value="option1" >
                    <label class="form-check-label" for="escrituraForm4">
                        Nunca lo he hecho pero me gustaria empezar.
                    </label><br>
                    <input class="form-check-input" type="text" name="exampleRadios" id="escrituraForm5" value="" placeholder="Otros">

                    <br><br><br>


                </div><br>
                <div class="form-check" id=modalForm3>
                    <h4>Como te definirias?</h4><br>
                    <div class="col-md-3"><label id="label1" class="btn btn-primary"><img src="style/iconos/IconPack/128128/tools.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk1" id="item4" value="val1" class="hidden" autocomplete="off"></label><p><strong>Manitas.</strong><br> Persona que destaca en la improvisación y la creatividad</p></div>
                    <div class="col-md-3"><label id="label2" class="btn btn-primary"><img src="style/iconos/IconPack/128128/helmet2.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk2" id="item5" value="val1" class="hidden" autocomplete="off"></label><p><strong>Hereje.</strong><br> Este tipo de persona tiende a mostrarse más receptiva a formas de pensar y de hacer que resultan chocantes e innovadoras,</p></div>
                    <div class="col-md-3"><label id="label3" class="btn btn-primary"><img src="style/iconos/IconPack/128128/armor%202.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk2" id="item6" value="val1" class="hidden" autocomplete="off"></label><p><strong>Conservador.</strong><br>Tienden a dar por buenas las costumbres y los modos de hacer que han sido practicados durante mucho tiempo.</p></div>

                    <div class="col-md-3"><label id="label4" class="btn btn-primary"><img src="style/iconos/IconPack/128128//axeDouble2.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk2" id="item7" value="val1" class="hidden" autocomplete="off"></label><p><strong>Astuto.</strong><br> se caracterizan por tener la capacidad de ver las cosas con un distanciamiento que les permite descubrir explicaciones alternativas.</p></div>


                </div>

            </div>

            <div class="modal-body" id=cuerpoMod2 style="display: none;"> <!--Formulario del Modal 2 -->
                <div class="alert alert-info" role="alert" style="font-size: 12px;">
                    <strong>Aviso!</strong> EH!
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Reiniciar</button>
                <button type="button" class="btn btn-success" id=sForm>Siguiente</button>
            </div>
        </div>
    </div>
</div>