@extends('site.index')

@section('content')


<!-- Project 1 Section
        ========================================================================= -->
	<section id="project_2" class="container">
		<div class="big_title">
			<div class="big_title_txt montserrat_font">Diagnostic de l’état du <span class="text_color"> patrimoine </span></div>
			<div class="text_und_big_title">
				Trouvez des solutions en <span class="text_color">Gironde</span> pour des problème récurant <span class="text_color"> d’infiltration</span>
			</div>
			<div class="big_title_txt_separ background_color"></div>
		</div>
		<div class="section_content">
			<div class="row">
				<div class="col-md-6 projet_4_right">
					<div class="content_big_title">
						VOS <span class="text_color">PRéOCUPATIONS</span>
					</div>
					<h5>Vous avez ou vous gérez <span class="text_color">un patrimoine immobilier</span> avec des toitures terrasses et balcons, vous avez
régulièrement des problèmes <span class="text_color">d’infiltrations</span>, de <span class="text_color">craquement de peinture</span> sur les murs et plafond,<span class="text_color"> des problèmes
de condensation</span>, d’humidité dans le(s) logement(s).</h5>
<h5>
    Vous vous demandez:</h5>
					<div class="project_2_details">
						<div><span class="project_2_dbg text_color"><h5>Comment réduire ces problèmes ? </h5></span>  </div>
						<div><span class="project_2_dbg text_color"><h5>Comment anticiper ces problèmes ? </h5></span> </div>
						<div><span class="project_2_dbg text_color"><h5>Ai-je assez de budget pour régler ces problèmes ? </h5></span></div>
                        <div><span class="project_2_dbg text_color"><h5>Quels types de travaux prioriser ? </h5></span> </div>
						</div>
<h5>
    <span class="text_color">Le diagnostic </span> permet de répondre à ces questions et permet aussi <span class="text_color"> de mieux connaître son patrimoine </span>(le type
de toiture, l’état) afin de mettre en place <span class="text_color">une stratégie de maintenance</span> qui va vous simplifier votre gestion.</h5>

<h4>Nous vous accompagnons<span class="text_color"> en gironde</span> sur :</h4>
<div class="project_2_details">
						<div><span class="project_2_dbg text_color"><h4> Le diagnostic (l’état des lieux)</h4></span>  </div>
						<div><span class="project_2_dbg text_color"><h4>La budgétisation des travaux</h4> </span> </div>
						<div><span class="project_2_dbg text_color"><h4>La mise en place d’une stratégie de maintenance</h4></span></div>
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
					<a href="{{ route('activite_5') }}" class="white_btn_hover linkz_transition">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="{{ route('accueil') }}#activite" class="white_btn_hover linkz_transition">
						<i class="fa fa-th"></i>
					</a>
					<a href="{{ route('activite_2') }}" class="white_btn_hover linkz_transition">
						<i class="fa fa-angle-right "></i>
					</a>
				</div>

			</div>
		</div>
	</div>



@endsection
