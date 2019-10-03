@extends('layouts.app')

@section('content')


<div class="container-fluid">
	<div class="top">
		
		
		<div class="top-text">
			<div class="top-image">
			   <img src="{{URL::asset('/Images/astronaut.png')}}"></div>
			<h2><span class="down">Créative</span></h2>
			</div>
			<div class="top-text1">
							<div class="rightside">
								  <div class="rocket">
		   	<img src="{{URL::asset('/Images/rocket.png')}}"></div>
			<h2>Developer 
			   </h2>
			   
			</div>

			<div class="inside">	

			<p><i class="fa fa-quote-left"></i> Je développe des sites Web et des applications Web riches en contenu.
			Je développe des sites Web et des applications Web riches en contenu.
		   Je développe des sites Web et des applications Web riches en contenu.
		   <div class="planet">
		   	<img src="{{URL::asset('/Images/saturn.png')}}"></div>
		</p>


		</div>
			</div>
	
	</div>
</div>

<div class="container-fluid">
	<div class="second">
		<div class="border1">
			<div class="frame"></div>
		</div>

	</div>
</div>
 
<div class="jumbotron1 jumbotron-fluid">
  <div class="container">
  	<div class="row">
  		  	<div class="col-md-6"><div class="box">
			<h1 class="mywork-head">Mon travail</h1>
					<p class="mywork-para">Je développe des sites Web et des applications Web riches en contenu.</p>
				</div></div>
  		  	<div class="col-md-3"><div class="box1">
  		  	<div class="image">	
							<img align="center" src="{{URL::asset('/Images/php.png')}}"></div>
							<p class="box1-para"> Je développe des sites Web et des applications Web riches en contenu.</p></div></div>
  		
  		<div class="col-md-3"><div class="box1">	
  			  	<div class="image">	
							<img src="{{URL::asset('/Images/programming.png')}}"></div>
							<p class="box1-para">Je développe des sites Web et des applications Web riches en contenu.</p></div></div>

							<div class="col-md-3"><div class="box1">
							  	<div class="image">		
							<img src="{{URL::asset('/Images/database.png')}}"></div>
							<p class="box1-para">Je développe des sites Web et des applications Web riches en contenu.</p></div></div>

							<div class="col-md-3"><div class="box1">
							  	<div class="image">		
							<img src="{{URL::asset('/Images/c-logo.png')}}"></div>
							<p class="box1-para">Je développe des sites Web et des applications Web riches en contenu.</p></div></div>

							<div class="col-md-3"><div class="box1">
							  	<div class="image">		
							<img src="{{URL::asset('/Images/referral.png')}}"></div>
							<p class="box1-para">Je développe des sites Web et des applications Web riches en contenu.</p></div></div>

							<div class="col-md-3"><div class="box1">
							  	<div class="image">		
							<img src="{{URL::asset('/Images/design.png')}}"></div>
							<p class="box1-para">Je développe des sites Web et des applications Web riches en contenu.</p></div></div>

  			
 
    	</div>
</div>
</div>


@endsection
