@extends('site.index')

@section('content')


<!-- Project 1 Section
        ========================================================================= -->
	<section id="project_2" class="container">
		<div class="big_title">
			<div class="big_title_txt montserrat_font">Sécurisation des  <span class="text_color"> toitures et balcons  </span></div>
			<div class="text_und_big_title">
				Trouvez des solutions en <span class="text_color">Gironde</span> pour la mise en place d'une  <span class="text_color"> sécurité collective et individuelle</span>
			</div>
			<div class="big_title_txt_separ background_color"></div>
		</div>
		<div class="section_content">
			<div class="row">
				<div class="col-md-6 projet_4_right">
					<div class="content_big_title">
						VOS <span class="text_color">PRéOCUPATIONS</span>
					</div>
					<h5>Vous avez ou vous gérez un patrimoine immobilier avec des toitures terrasses et balcons, vous avez des
<span class="text_color">entreprises</span> qui interviennent régulièrement sur vos toitures pour l’entretien de celle-ci, pour<span class="text_color">la maintenance
des VMC</span></h5>
<h5>
    Vous vous demandez:</h5>
					<div class="project_2_details">
						<div><span class="project_2_dbg text_color"><h5>Si vous êtes conforme à la règlementation ?</h5></span>  </div>
						<div><span class="project_2_dbg text_color"><h5>Si une entreprise peut faire valoir son droit de retrait ? </h5></span> </div>
						<div><span class="project_2_dbg text_color"><h5>Si les entreprises sont en sécurité sur vos toitures ? </h5></span></div>
                        <div><span class="project_2_dbg text_color"><h5>Si votre sécurité est conforme ? </h5></span> </div>

                    </div>
<h5>
   <span class="text_color"> La sécurité </span> dite <span class="text_color"> collective</span> prime sur la <span class="text_color"> sécurité individuelle</span>, elle est spécifique à chaque toiture terrasse ou
balcon afin qu’elle s’intègre dans le complexe d’étanchéité de la toiture et pérenniser votre ouvrage.</h5>

<h4>Nous vous accompagnons en gironde sur tous types de <span class="text_color">sécurité </span> en toiture ou balcon  :</h4>
<div class="project_2_details">
						<div><span class="project_2_dbg text_color"><h4>Garde-corps</h4></span>  </div>
						<div><span class="project_2_dbg text_color"><h4>Ligne de vie</h4> </span> </div>
						<div><span class="project_2_dbg text_color"><h4>Point d’ancrage</h4></span>  </div>
						<div><span class="project_2_dbg text_color"><h4>Echelle à crinoline</h4> </span> </div>
					          				</div>
					<div class="project_2_action">
						<a href="{{ route('devis') }}" class="project_2_btn white_btn_hover">Demander un Devis</a>
					</div>
				</div>
				<div class="col-md-6 text-center projet_4_left">
					<div class="vimeo_video">
					<li><img class="img_act" src="img/bxslider4.jpg" /></li>
                		</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row text-center">
			<div class="backto_portfolio">
				<i class="top_sep"></i>
				<div class="portfolio-nav">
					<a href="{{ route('activite_4') }}" class="white_btn_hover linkz_transition">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="{{ route('accueil') }}#activite" class="white_btn_hover linkz_transition">
						<i class="fa fa-th"></i>
					</a>
					<a href="{{ route('activite_1') }}" class="white_btn_hover linkz_transition">
						<i class="fa fa-angle-right "></i>
					</a>
				</div>

			</div>
		</div>
	</div>



@endsection
