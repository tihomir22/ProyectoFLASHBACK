<!--PARTE 1 DEL MODAL-->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true" id=cluck2m >
    <div class="modal-dialog modal-lg" role="document" style="width:2000px;">
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
                <form method="POST" action="plataformaN.php" id="rest1">
                    <div class="form-check" id=modalForm>
                        <h4>Cuantos libros te has leido?</h4><br>
                        <input class="form-check-input" type="radio" name="radio1" id="exampleRadios1" value="option1" >

                        <label class="form-check-label" for="exampleRadios1">
                            0-2 libros en mi vida.
                        </label><br>
                        <input class="form-check-input" type="radio" name="radio1" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            2-10 libros en mi vida.
                        </label><br>
                        <input class="form-check-input" type="radio" name="radio1" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Más de 10 ! 
                        </label><br>
                        <input class="form-check-input" type="radio" name="radio1" id="exampleRadios4" value="option4">
                        <label class="form-check-label" for="exampleRadios4">
                            Me leo uno a la semana :D
                        </label><br><br><br>
                    </div>

                    <div class="form-check" id=modalForm2><br>
                        <h4>Te gusta escribir?</h4><br>
                        <input class="form-check-input" type="radio" name="radio2" id="escrituraForm1" value="option1" >

                        <label class="form-check-label" for="escrituraForm1">
                            Lo he intentado pero me cansé.
                        </label><br>
                        <input class="form-check-input" type="radio" name="radio2" id="escrituraForm2" value="option2" >
                        <label class="form-check-label" for="escrituraForm2">
                            Tengo un libro listo para su publicacion.
                        </label><br>
                        <input class="form-check-input" type="radio" name="radio2" id="escrituraForm3" value="option3" >
                        <label class="form-check-label" for="escrituraForm3">
                            He publicado y vendido varios.
                        </label><br>
                        <input class="form-check-input" type="radio" name="radio2" id="escrituraForm4" value="option4" >
                        <label class="form-check-label" for="escrituraForm4">
                            Nunca lo he hecho pero me gustaria empezar.
                        </label><br>


                        <br><br><br>


                    </div><br>
                    <div class="form-check" id=modalForm3>
                        <h4>Como te definirias?</h4><br>
                        <div class="row">
                            <div class="col-md-3"><label id="label1" class="btn btn-primary"><img src="style/iconos/IconPack/128128/tools.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk1[]" id="item4" value="val1" class="hidden" autocomplete="off" style="opacity: 0;"></label><p><strong>Manitas.</strong><br> Persona que destaca en la improvisación y la creatividad</p></div>
                            <div class="col-md-3"><label id="label2" class="btn btn-primary"><img src="style/iconos/IconPack/128128/helmet2.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk1[]" id="item5" value="val2" class="hidden" autocomplete="off" style="opacity: 0;"></label><p><strong>Hereje.</strong><br> Este tipo de persona tiende a mostrarse más receptiva a formas de pensar y de hacer que resultan chocantes e innovadoras,</p></div>
                            <div class="col-md-3"><label id="label3" class="btn btn-primary"><img src="style/iconos/IconPack/128128/armor%202.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk1[]" id="item6" value="val3" class="hidden" autocomplete="off" style="opacity: 0;" ></label><p><strong>Conservador.</strong><br>Tienden a dar por buenas las costumbres y los modos de hacer que han sido practicados durante mucho tiempo.</p></div>

                            <div class="col-md-3"><label id="label4" class="btn btn-primary"><img src="style/iconos/IconPack/128128//axeDouble2.png" alt="..." class="img-thumbnail img-check"><input type="checkbox" name="chk1[]" id="item7" value="val4" class="hidden" autocomplete="off" style="opacity: 0;"></label><p><strong>Astuto.</strong><br> se caracterizan por tener la capacidad de ver las cosas con un distanciamiento que les permite descubrir explicaciones alternativas.</p></div>
                        </div>

                    </div>

                </div>

                <div class="modal-body" id=cuerpoMod2 style="display: none;"> <!--Formulario del Modal 2 -->
                    <div class="alert alert-success" role="alert" style="font-size: 12px;">
                        <strong>Info : </strong> Estas a un paso de terminar el formulario, en este apartado se usará la informacion para completar tu <strong>perfil principal.</strong>

                    </div>
                    <p style="border-bottom: 2px solid gray;margin-left: 30%;margin-right: 30%;"><img style="position: relative;top:25%;left: 40%;width: 20%;" src="style/iconos/ope.png"></p><br>
                    <h4>Que estudios tienes actualmente?</h4><br>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="checkPers[]" class="custom-control-input" id="checkPerson1" value="primaria">
                      <label class="custom-control-label" for="checkPerson1">Educacion primaria</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="checkPers[]" class="custom-control-input" id="checkPerson2" value="secundaria">
                      <label class="custom-control-label" for="checkPerson2">Educacion secundaria</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="checkPers[]" class="custom-control-input" id="checkPerson3" value="nouni">
                      <label class="custom-control-label" for="checkPerson3">Educacion Superior, Estudios no universitarios</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="checkPers[]" class="custom-control-input" id="checkPerson4" value="uni">
                      <label class="custom-control-label" for="checkPerson4">Educacion Superior, Estudios universitarios</label>
                  </div>
                  <p style="border-bottom: 2px solid gray;margin-left: 30%;margin-right: 30%;"><img style="position: relative;top:25%;left: 40%;width: 20%;margin-bottom: 5px;opacity: 0.8" src="style/iconos/university.png"></p><br>
                  <h4>Donde has estudiado por ultima vez?</h4><br>
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class = "ion-chevron-right"></i></span>
                    </div>
                    <input type="text" name="nombreC" class="form-control" placeholder="Ej: Universidad de Miami">
                </div><br>
                <p style="border-bottom: 2px solid gray;margin-left: 30%;margin-right: 30%;"><img style="position: relative;top:25%;left: 40%;width: 20%;margin-bottom: 5px;" src="style/iconos/strong.png"></p><br>
                <h4>Remata la faena,escribenos algo sobre ti!</h4><span class="badge badge-secondary" id="caracteres" style="float:right;"></span><br><b></b>
                <div class="md-form mb-4 pink-textarea active-pink-textarea-2">
                    <textarea type="text" name="textoArea" id="textarea1" class="md-textarea form-control" rows="3" placeholder="Soy una persona alegre y trabajadora, me gusta disfrutar mi tiempo libre de buena compania, pero aveces cuando prefiero relajarme no hay nada que disfrute mas que un libro y un cafe, el libro realmente no me importa, soy un adicto a todo tipo de lectura. Para mi la lectura es el don mas preciado que nos fue concedido y las sensaciones que transmite son increibles. " style="border-bottom: 1px solid cyan;height:150px;width: 100%;"></textarea>
                    
                </div>
            </div>


            <div class="modal-footer" id="botones">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-warning"  id="reinicio" style="color: white;">Reiniciar</button>
                <button type="button" class="btn btn-success" id=sForm>Siguiente</button>

                <input type="submit" class="btn btn-primary" id=sForm2 name="enviarModal" value="Finalizar" style="display:none;"></input>
            </div>
        </div>
    </div>
</div>
</form>