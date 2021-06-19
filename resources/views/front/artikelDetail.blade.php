@extends('front.template')

@section('main')
	<section>
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li><a href="/artikel">Artikel</a></li>
			    <li class="is-active"><a aria-current="page">Ini alasan mengapa kamu harus mengunjungi pantai lamaru</a></li>
			  </ul>
			</nav>
		</div>
	</section>

	<div class="container">
		<section id="dispar-artikel-detail" class="my-6">
			<div class="columns is-centered is-multiline">
				<div class="column is-8">
					<p class="title is-size-2 is-capitalize has-text-weight-bold">Ini alasan mengapa kamu harus mengunjungi pantai lamaru</p>
					<p class="subtitle is-size-5">
						<span>Admin - </span>Diposting 1 hari lalu
					</p>
				</div>
				<div class="column is-12">
					<img src="{{ asset('img/artikel1.jpg') }}" alt="" width="100%">
				</div>
				<div class="column is-8">
					<div class="content">
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, veritatis debitis quidem, ex nihil alias fuga, eius quas impedit totam aliquid blanditiis in! Deserunt, optio ratione vel incidunt totam enim. lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi laudantium adipisci repellendus, nihil fugiat commodi, ut deleniti voluptatibus optio veritatis rem harum at, dolor tenetur omnis labore quam, dolore odit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat consequatur sunt delectus beatae repellendus officia in perferendis quae excepturi perspiciatis corrupti incidunt saepe numquam, minus cum voluptatem nobis repudiandae aliquam! Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Voluptatum dolor dignissimos consectetur enim quas dolore tempore ut perspiciatis autem. Odit corporis nemo iusto! Officia, tempora veritatis neque similique cumque quam.
						
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection