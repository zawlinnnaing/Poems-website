@extends('master')
@section('content')
		<div class="container">
			<div class="columns">
				<div class="column is-9">
		<div class="poetry-text">
			<pre class="poem">
<span class="poem-title">The new place</span>
I type at a window that faces the street
on ground level and
if I fall out
the worst that can happen is a dirty shirt
under a tiny banana tree.

as I type people go by
mostly women
and I sit in my shorts
(without top)
and going by they
can't be sure I am not entirely
naked. so
I get these faces
which pretend they don't see
anything
but I think they do:
they see me as I
sweat the poem like beating an
ugly hog to death
as the sun begins to fail over
Sunset Blvd.
over the motel sign
where hot sweaty people from
Arkansas and Iowa
pay too much to sleep while
dreaming of movie stars.
there is a religionist next door
and he plays his radio loud
and it seems to have
very good tubes
so I am getting the
message.
and there's a white cat
chewed-up and neurotic
who calls 2 or 3 times a day
eats and leaves
but just looking at him
lifts the soul a little
like something on strings.
and the same young man from the nudist
magazine phones and we talk
and I get the idea
that we each hang up
mildly thinking each other
somewhat the fool.

now the woman calls me to dinner.
it's good to have food.
when you've starved enough
food always remains a
miracle.
the rent is a little higher here
but so far I've been able to
pay it
and that's a miracle too
like still maybe being sane
while thinking of guns and sidewalks
and old ladies in libraries.
there are still
small things to do
like rip this sheet from the typer
go in and eat
stay alive this way.
there are lots of curtains here
and now the woman has walked in
she's rocking back and forth
in the rocker behind me
a bit angry
the food is getting cold and
I've got to go
she doesn't understand that
I've got to finish this thing
but it's just a poor little neighborhood
not much place for Art,
whatever that is, and
I hear sprinklers
there's a shopping basket
a boy on roller skates.
I quit I quit

for the miracle of food and
maybe nobody ever angry
again, this place and
all the other places.
			</pre>
		</div>
	</div>
		<div class="column poet-info is-3">
			<div class="card">
				<div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-96x96">
          <img src="https://i1.wp.com/www.brainpickings.org/wp-content/uploads/2013/08/buk.jpg?fit=300%2C300&ssl=1" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="is-4">Charles Bukowski</p>
      </div>
    </div>

    <div class="content">
    	Created at:
    	<br>
      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
    </div>
  </div>
			</div>
	</div>
</div>
		<div class="collections">
			<div class="columns">
				<div class="column col-collection">
<!-- 					<img src="{{ asset('demo-scence.jpg') }}" class="collection-img">
 -->
					<div class="card">
				 		 <div class="card-image">
						   	 <figure class="collection-img">
						      <img src="{{ asset('demo-scence.jpg') }}" alt="Placeholder image">
				    		</figure>
				  		</div>
					</div>				
				</div>
				<div class="column col-collection">
					<!-- <img src="{{ asset('demo-scence.jpg') }}" class="collection-img"> -->
										<div class="card">
				 		 <div class="card-image">
						   	 <figure class="collection-img">
						      <img src="{{ asset('demo-scence.jpg') }}" alt="Placeholder image">
				    		</figure>
				  		</div>
					</div>
				</div>
				<div class="column col-collection">
					<!-- <img src="{{ asset('demo-scence.jpg') }}" class="collection-img"> -->
										<div class="card">
				 		 <div class="card-image">
						   	 <figure class="collection-img">
						      <img src="{{ asset('demo-scence.jpg') }}" alt="Placeholder image">
				    		</figure>
				  		</div>
					</div>
				</div>
				<div class="column col-collection">
					<!-- <img src="{{ asset('demo-scence.jpg') }}" class="collection-img"> -->
					<div class="card">
				 		 <div class="card-image">
						   	 <figure class="collection-img">
						      <img src="{{ asset('demo-scence.jpg') }}" alt="Placeholder image">
				    		 </figure>
				  			</div>
				  					<!-- <div class="collection-title">
									Collection Title
									</div>
 -->				</div>
				</div>
				<div class="collection-title">
									Collection Title
				</div>

			</div>
	</div>
	
	</div>
@endsection
@section('style')
<style type="text/css">
/*	.content{
	background: 
    linear-gradient(
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    ),
    url(./poetry-background.jpg);
  	background-size: cover;
  	font-family: 'Source Sans Pro', sans-serif;
	}*/
		.poem{
		font-family: 'Roboto Slab', serif;
		text-align: left;
		font-size: 1em !important;
		height: 15em !important;
		padding-bottom: 1em !important;
		background-color: #EEEEEE !important;
		border: 12px solid #424242 !important;
		border-radius: .5em;
		margin-top: 1.5em;	
	}
	.poem:hover{
		box-shadow: 8px 6px 3px 1px #dbdbdb;
	}
	.poetry-text{
		margin-bottom: 1em ;

	}
	.col-collection {
		padding-left:0em !important;
		padding-right:0em !important; 
	}

  .poem-title{
  	font-size: 1.5em !important;
  	padding: 0em .5em !important;
  	font-weight: bold;
  	text-align: center;
  }
  .collection-img{
  	overflow: hidden;	
  }
  .collection-title{
  	padding: 0.5em 1em;
  	background-color: #757575;
  	float: left !important;
  	position: absolute;
  	right: -20px !important;
  	bottom: 0px !important;
  	color: white;
  }
  .poet-info{
  	margin-top: 1.5em;
  	padding-left: 1em !important;
  }
  .info{
  	text-align: right;
  }
    </style>
@endsection
