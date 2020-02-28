<section class="row expanded bg-agende">
    <article class="row">
        <section class="column large-12 medium-12 small-12 text-center">
            <h4>Agende sua Consulta</h4>
        </section>
        <form action="envia-contato.php" method="POST" data-abide novalidate>
            <section class="column large-4 medium-12 small-12 text-center">
                <input type="text" name="nome" placeholder="Nome*" required class="input-interna">
                <span class="form-error">Por favor preencha o campo.</span>					
            </section>
            <section class="column large-4 medium-12 small-12 text-center">
                <input type="email" name="email" placeholder="E-mail*" required class="input-interna" pattern="email" >
                <span class="form-error">Por favor preencha o campo ou verifique o endereço digitado.</span>
            </section>
            <section class="column large-4 medium-12 small-12 text-center">
                <input type="text" name="telefone" placeholder="Telefone/Celular*" required class="input-interna" pattern="integer">
                <span class="form-error">Por favor preencha o campo com apenas números.</span>
            </section>
            <section class="column large-4 medium-12 small-12 text-center">
                <select name="especialidade" required class="input-interna">
                    <option value="">
                        Especialidade
                    </option>
                    <option value="Ginecologia e Obstetricia">
                        Ginecologia e Obstetricia
                    </option>
                    <option value="Medicina Fetal">
                        Medicina Fetal
                    </option>
                    <option value="Pediatria">
                        Pediatria
                    </option>
                    <option value="Nutrição">
                        Nutrição
                    </option>
                    <option value="Psicologia">
                        Psicologia
                    </option>
                    <option value="Medicina do Adolescente">
                        Medicina do Adolescente
                    </option>
                    <option value="Psicologia">
                        Ultrassonografia Geral e Pediátrica
                    </option>
                </select>
                <span class="form-error">Por favor preencha o campo.</span>					
            </section>
            <section class="column large-4 medium-12 small-12 text-center">
                <input type="date" name="data" placeholder="Data*" required class="input-interna">
                <span class="form-error">Por favor preencha o campo.</span>					
            </section>
            <section class="column large-4 medium-12 small-12 text-center">
                <input type="text" name="horario" placeholder="Horário*" required class="input-interna">
                <span class="form-error">Por favor preencha o campo.</span>					
            </section>
            <section class="column large-12 medium-12 small-12 text-center">
                <textarea  name="mensagem" placeholder="Mensagem*" required class="textarea-interna"></textarea>
                <span class="form-error">Por favor preencha o campo.</span>					
            </section>
            <section class="column large-12 medium-12 small-12 text-right">
                <input type="submit"   value="Enviar" name="agende" class="button btn-submit-interna">
            </section>
        </form>
    </article>
 </section>