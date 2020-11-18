@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Green Habits - What can I do to help?</h2>
	<hr>
	<h4><strong>You</strong> can make Myanmar greener.</h4>
	<p>The following are some <strong>simple</strong> habits that we can instill in our daily lives to lead a greener, sustainable lifestyle.</p>

	<article>
		<p><strong>Up for a challenge?</strong> You can take some of these tips/habit as a challenge that you can accomplish and score points.</p>		
	</article>
	@guest
	<div>
		<a href="{{ route('community') }}" class="btn btn-primary">Join the community to enter challenges</a>
	</div>
	@else
	<div class="d-flex align-items-center">
		<div>
			<a href="{{ route('green-submission') }}" class="btn btn-primary">
				<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
				</svg>
				Create a challenge submission
			</a>
		</div>

		<div class="ml-3">
			<a href="{{ route('green-leaderboard') }}" class="btn btn-warning">
				<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bar-chart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5h-2v12h2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
				</svg>
				View Leaderboard
			</a>
		</div>
	</div>

	@endguest
	<hr>

	<div class="card mb-2" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
			<h3 class="mt-2">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
				  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg>
				Plant trees!
			</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<img src="/storage/habits/planttrees.jpg" width="100%" style="border-radius: 1.5rem;">
				</div>
				<div class="col">
					<article>
						<p>
							It is as simple as it sounds. If you have some extra space in your home/office, get a plant or grow one on your own from seeds.
							They make for great decor and be a wonderful conversation piece.
						</p>
						<p>
							It can also be a fun activity for kids. You could have each of them plant a seed and then teach them how to nurture and grow the plant.
							Thus, the children are able to understand the importance of trees and what they do for the environment.
						</p>
						<p>
							Even having a tiny plant on your work desk is beneficial to your eye's health. After long hours of staring at the monitor, you could just unwind for a bit and soothe your eye with the green colour of the plant's leaves.
						</p>
					</article>

					<p>Up for a challenge? Create a submission for this challenge and earn points!</p>
					<a href="{{ route('green-submission') }}" class="btn btn-primary">
						<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
						</svg>
						Create a challenge submission
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="card mb-2" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
			<h3 class="mt-2">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
				  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg>
				Recycle!
			</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<article>
						<p>
							It's the oldest trick in the book. The best way to reduce waste and demand for more resouces is to recycle. 
						</p>
						<p>
							Since deforestation is our main focus here, we highly recommend recycling old newspapers and magazines that may be collecting dust in your homes.
						</p>

						<p>
							Recycling is an easy, yet effective strategy to tackle tree loss and also a rewarding one.
						</p>
					</article>

					<p>Up for a challenge? Create a submission for this challenge and earn points!</p>
					<a href="{{ route('green-submission') }}" class="btn btn-primary">
						<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
						</svg>
						Create a challenge submission
					</a>
				</div>
				<div class="col">
					<img src="/storage/habits/recycle.jpg" width="100%" style="border-radius: 1.5rem;">
				</div>
			</div>
		</div>
	</div>

	<div class="card mb-2" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
			<h3 class="mt-2">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
				  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg>
				Use recycled products
			</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<img src="/storage/habits/toothbrush.jpg" width="100%" style="border-radius: 1.5rem;">
				</div>
				<div class="col">
					<article>
						<p>
							When possible, we should always choose the recycled option when purchasing products.
						</p>
						<p>
							They can range from the choice of toothbrush to paper used for your notebooks.
						</p>
						<p>
							Moreover, these products made from recycled materials are usually made by small, family businesses that hand-crafted these items most of the time. By purchasing them, we are also supporting these small businesses to thrive.
						</p>
					</article>

					<p>Up for a challenge? Create a submission for this challenge and earn points!</p>
					<a href="{{ route('green-submission') }}" class="btn btn-primary">
						<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
						</svg>
						Create a challenge submission
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="card mb-2" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
			<h3 class="mt-2">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
				  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg>
				Reduce paper products
			</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<article>
						<p>
							Paper-based products are everywhere in our daily lives. From the notebook your write on to the tissue paper your wiped your mouth with after lunch.
						</p>
						<p>
							To help reduce demand for paper, which ultimately leads to demand for trees, we should reduce the usage of it. It is actually quite simple to pick the alternate route.
						</p>
						<p>
							For instance, instead of using paper notebooks all the time for jotting down minor things such as your to-do lists, quick reminders and your grocery list, you could have them typed and saved on your mobile phone that you carry all the time. This will significantly reduce the paper usage in your daily life by a great amount
						</p>
						<p>
							Moreover, you can also use less tissue by carrying a handkerchief along with you. They cost only as much as one of your daily meals and they are so easy to clean after use. Just water and soap. By reducing the usage of tissue paper, you not only reduce waste/clutter in your daily life, you also reduce the demand for paper. Besides, isn't carrying a handkerchief "gentleman-ly"? Am I right, boys?
						</p>
					</article>

					<p>Up for a challenge? Create a submission for this challenge and earn points!</p>
					<a href="{{ route('green-submission') }}" class="btn btn-primary">
						<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
						</svg>
						Create a challenge submission
					</a>
				</div>
				<div class="col">
					<img src="/storage/habits/tissue.jpg" width="100%" style="border-radius: 1.5rem;">
				</div>
			</div>
		</div>
	</div>

	<div class="card mb-2" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
			<h3 class="mt-2">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
				  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg>
				Reusable water bottles
			</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<img src="/storage/habits/waterbottle.jpg" width="100%" style="border-radius: 1.5rem;">
				</div>
				<div class="col">
					<article>
						<p>
							Water is an essential part of our lives. We would not survive more and a day without drinking water. Unfortunately, single-use plastic bottles had lead to various sorts of pollutions and other environmental issues.
						</p>
						<p>
							Not only plastic bottles but also single-use paper water cups that are readily available near water dispensers in most offices and schools.
							They lead to more waste and, you guessed it, a demand for paper/trees since more resources are needed to make more of these little paper cups.
						</p>
						<p>
							One solution is to recycle them after use instead of tossing them in landfills. A better solution that we can all carry out is to carry our own water bottles. They may be slightly expensive compared to just normal plastic bottles but they are a one-time investment that will benefit you and the environment significantly in the long run.
						</p>
					</article>

					<p>Up for a challenge? Create a submission for this challenge and earn points!</p>
					<a href="{{ route('green-submission') }}" class="btn btn-primary">
						<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
						</svg>
						Create a challenge submission
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="card mb-2" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
			<h3 class="mt-2">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
				  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg>
				Talk to people about the environment!
			</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<article>
						<p>
							This is something <strong>everyone</strong> can do. While actions speak louder than words, words can be a powerful tool if used correctly. The best thing that you could do is to raise awareness about the environmental issues that are happening.
						</p>

						<p>
							By bringing more people into the light about the current issues, especially on deforestation and tree cover loss, they can now become more vigilant and more cautious in their daily actions. Joining local communities that promote green living helps.
						</p>
						<p>
							Another thing that you could do is to tell your friends and family about this web app. By sharing, your friends can now become aware of the issues as well as participate in these challenges. You can even compete with one another to see who is "greener" in their daily lives.
						</p>
						<p>
							There is strength in unity and with unity there is more we can accomplish as a collective. Together, we can all make an impact, no matter how small or big to tackle these issues and make Myanmar greener one day at a time.
						</p>
					</article>
				</div>

				<div class="col">
					<img src="/storage/habits/unity.jpg" width="100%" style="border-radius: 1.5rem;">
				</div>
			</div>
		</div>
	</div>
	@guest
	<div class="card p-5 m-5">
		<p>Have more ideas and tips to make Myanmar greener? Join our community and share your ideas!</p>
		<a href="{{ route('community') }}" class="btn btn-primary">Join the community now!</a>
	</div>
	@endguest

</div>
@endsection