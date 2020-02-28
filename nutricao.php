<!doctype html>
<html class="no-js" lang="pt" dir="ltr">
  <head>
      
    <title>Clinica Rades - Nutrição</title>
    <?php include 'head.php'; ?>
    <style>
    .bg-topo-1{ background:url(imgs/banner/bg-nutricao.jpg) no-repeat center ;background-size: cover;    height:151px;}
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
  <div class="box-topo-tipo text-center">
      <div class="box-espec float-center">
          <span>Especialidades</span>
      </div>
      <div class="box-espec-tipo float-center">
          <h1>Nutrição</h1>
      </div>
  </div>
  <div id="trava"></div>
 <div class="btn-whats-internas">
     <a href="https://api.whatsapp.com/send?phone=5511982458018&text=Ol%C3%A1" target="_blank"><img src="imgs/icons/btn-whats-int.png" ></a>
 </div>
 <section class="row line-criador">
   <article class="column large-3 medium-3 small-12">
      <figure>
        <img src="imgs/fernanda-rizzo.jpg" class="thumbnail">
      </figure>
   </article>
   <article class="column large-9 medium-9 small-12">
     <div class="row">
       <div class="column large-9 medium-12 small-12">
        <figure>
          <h2>Drª. Fernanda Rizzo<span class="crm-criador"> - CRN 6041</span></h2>
          <span class="descri-habilidades">Nutrição.</span>
        </figure>
       </div>
       <div class="column large-3 medium-12 small-12">
        <figure>
          <a href="#"><img src="imgs/btn-lattes.jpg" class="btn-latters"></a>  
        </figure>
       </div>
       <div class="column large-12 medium-12 small-12 txt-criador">
            <p>Possui graduação em Nutrição pelo União Social Camiliana(1994).</p>
       </div>
     </div>
   </article>
 </section>
 <section class="row small-up-1 medium-up-1 large-up-1 line-itens   ">
    <article class="column column-block float-center">
        <img src="imgs/item-nutricao-1.jpg" class="thumbnail" alt="">
        <h3 class="title-itens">Consultas em Nutrição</h3>
        <ul class="no-bullet itens">
            <li>- Criar uma rotina saudável e descomplicada;</li>
            <li>- Cuidados com a alimentação na Saúde da Mulher nas diferentes fases da vida (TPM , SOP, Menopausa) e emagrecimento;</li>
            <li>- Acompanhamento durante a gestação e pós parto;</li>
            <li>- Avaliação Nutricional;</li>
            <li>- Bioimpedância.</li>
        </ul>
    </article>
 </section>
  <?php include 'form-agende.php';?>
  <?php include 'footer.php'; ?>

  </body>
</html>
