<!doctype html>
<html class="no-js" lang="pt" dir="ltr">
  <head>
      
    <title>Clinica Rades - Contato</title>
    <?php include 'head.php'; ?>
    <style>
    .bg-topo-1{ background:url(imgs/banner/bg-contato.png) no-repeat center ;background-size: cover;    height:151px;}
    h2{font-size:21px;font-weight:600;color:#6c195c;}
    .line-criador{margin-bottom: 55px;}
    .box-espec-tipo{background: #6c195c;max-width: 365px;padding: 3px;border-radius: 4px;}
    .box-espec-tipo h1{font-size:28px;color:white;font-weight:600;}
    .box-espec{background: white;max-width: 129px;padding: 3px;border-radius: 4px;}
    .box-espec span{font-size:14px;}
    .box-topo-tipo{margin-top: -53px;z-index: 1;position: relative;}
    .title-itens{font-weight:600;color:#6c195c;display:block;margin-bottom:30px;font-size:16px;}
    .itens li{font-size:14px;line-height: 28px;}
    .line-itens{padding-bottom:28px;}
    .bg-agende{background:url(imgs/banner/banner-interna-itens.jpg) no-repeat center ;background-size: cover;padding-top:36px;padding-bottom:36px;}
    h4{color:white;font-size:28px;font-weight:600;margin-bottom:40px;}
  

    /* Small only */
    @media screen and (max-width: 39.9375em) {


    }
    /* Medium and up */
    @media screen and (min-width: 40em) {

    }

    /* Medium only */
    @media screen and (min-width: 40em) and (max-width: 63.9375em) {
     
    }

    /* Large and up */
    @media screen and (min-width: 64em) {
        .line-itens {max-width: 400px !important;}

    }

    /* Large only */
    @media screen and (min-width: 64em) and (max-width: 74.9375em) {
    }
    </style>
  </head>
  <body>
      
  <?php include 'topo.php'; ?>
  <section class="row expanded bg-topo-1" data-aos="fade-up" data-aos-duration="3000" >
  </section>
  <div id="trava"></div>
  <section class="row expanded bg-agende">
    <article class="row">
        <section class="column large-12 medium-12 small-12 text-center">
            <h4>Contate-nos</h4>
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
            <section class="column large-12 medium-12 small-12 text-center">
                <textarea  name="mensagem" placeholder="Mensagem*" required class="textarea-interna"></textarea>
                <span class="form-error">Por favor preencha o campo.</span>					
            </section>
            <section class="column large-12 medium-12 small-12 text-right">
                <input type="submit"  value="Enviar" name="contato" class="button btn-submit-interna">
            </section>
        </form>
    </article>
 </section>
  <?php include 'footer.php'; ?>

  </body>
</html>
