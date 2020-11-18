@extends('layouts.app')

@section('content')
<div class="container">
	<h3>What is happening?</h3>
	<h5>Let us tell you a story</h5>
	<hr>

	<article>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			Myanmar loses an average of <strong>13778.33Ha</strong> of forest each year.
		</p>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			As of 2010, <strong>59.701%</strong> of myanmar's total land was covered with forests.
		</p>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			Year 2016 had a <strong>maximum</strong> loss of 362552Ha
		</p>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			The standard deviation between each year is <strong>103086.25Ha</strong>
		</p>
	</article>
	
	<hr>

	<div class="card p-4 mb-3" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<h5>
			Here's a bar graph showing the change in forest cover loss from year 2001 to 2019.
		</h5>
		<hr>
		<img src="/storage/awareness/forestlossnationalbar.png" width="100%">
	</div>

	<hr>

	<article>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			We can clearly see that the forest loss area is increasing annually.
		</p>

		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			What about the regions? Which regions are experience the most forest loss?
		</p>
	</article>

	<hr>

	<div class="card p-4 mb-3" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<h5>
			Here's a bar graph showing the regions with most loss from Year 2001 to 2012.
		</h5>
		<hr>
		<img src="/storage/awareness/top5regionloss.png" width="100%">
	</div>

	<hr>

	<article>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			These are just statistics we have concluded from the datasets we obtained.
		</p>

		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			Based on our findings, Shan region experienced the most forest loss compared to all other regions in Myanmar. 
		</p>

		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			Based on other research papers that we have read, <strong>Naypyitaw, Tanintharyi and Ayeyarwady</strong> regions are also experiencing forest loss significantly.
		</p>

		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			So, we decided to use <a target="_blank"href="https://apps.sentinel-hub.com/eo-browser/?zoom=13&lat=-0.036&lng=-78.48&themeId=DEFAULT-THEME">Sentinel Hub EO Browser</a> and their timelapse feature to look over an area within these regions and create a timelapse showing the progression of forest loss. We have chosen to show these timelapses because we believe it will convey the message to you simply but impactfully. 
		</p>
	</article>

	<hr>

	<div class="card p-4 mb-3" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<h5>
			Have a look at these timelapses.
		</h5>
		<hr>
		<div class="row">
			<div class="col">
				<strong>Naypyitaw</strong>
				<img class="mt-2" src="/storage/awareness/Naypyitaw.gif" width="100%">
			</div>
			<div class="col">
				<strong>Ayeyarwady</strong>
				<img class="mt-2" src="/storage/awareness/Ayerwaddy.gif" width="100%">
			</div>
			<div class="col">
				<strong>Tanintharyi</strong>
				<img class="mt-2" src="/storage/awareness/thanintharyi.gif" width="100%">
			</div>
		</div>
	</div>

	<hr>

	<article>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			We can see that the forest areas are slowly reducing and in some of them, we can see the signs of logging trails. Especially in Naypyitaw and Tanintharyi regions. 
		</p>

		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			We decided to look further into one of those three regions which is Ayeyarwady.
		</p>
	</article>

	<hr>

	<div class="card p-4 mb-3" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<h5>
			Here is a line graph that shows the regions within Ayeyarwady and their corresponding forest loss.
		</h5>
		<hr>
		<div>
			<img class="mt-2" src="/storage/awareness/ayeyarwady_subregion.png" width="100%">
		</div>
	</div>

	<hr>

	<article>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			We can see that Bassein(Pathein) experiences the most forest/tree cover loss.
		</p>
	</article>

	<hr>

	<div class="card p-4 mb-3" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
		<h5>
			Here is a line graph that shows the annual trend of forest loss in Myanmar.
		</h5>
		<hr>
		<div>
			<img class="mt-2" src="/storage/awareness/forest loss annual change.png" width="100%">
		</div>
	</div>

	<hr>

	<h4>
		So, who in this country or internationally is recognized for their efforts for contributing and voicing out for the environmental issues?
	</h4>

	<hr>

	<div class="card-group">
		<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="/storage/awareness/devi.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Devi Thant Sin</h5>
				<p class="card-text">Devi Thant Sin is a Burmese environmentalist, writer and a senior member of the Royal House of Konbaung. She is the leader of the environmental movement in Myanmar and has been called a "green princess".</p>
				<a target="_blank" href="https://en.wikipedia.org/wiki/Devi_Thant_Sin" class="btn btn-primary">Read more about her</a>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<img class="card-img-top" src="/storage/awareness/greta.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Greta Thunberg</h5>
				<p class="card-text">Greta Thunberg is a Swedish environmental activist who is internationally known for challenging world leaders to take immediate action against climate change.</p>
				<a target="_blank" href="https://en.wikipedia.org/wiki/Greta_Thunberg" class="btn btn-primary">Read more about her</a>
			</div>
		</div>
	</div>

	<hr>

	<h4>
		What is happening locally? Who is fighting to tackle these issues? Where can I find a community of like-minded people?
	</h4>

	<hr>

	<article>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			First and foremost, you are already here. Congratulations! Reading about the issues and the statistics and joining the community on our web app is one of the efforts you can do to tackle this issue.
		</p>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			Join our community to see what you can do to help as an individual.
			<br><br>
			@guest
			<a href="{{ route('community') }}" class="btn btn-primary">Join the community now!</a>
			@endguest
		</p>
		<p>
			<svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
			  <path d="M7 13.5h2V16H7v-2.5z"/>
			</svg>
			If you want to get in touch with other individuals and organizations in Myanmar, we have collected a list of them here: 
			<ul>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://www.facebook.com/MyanmarGreenNetwork/">Myanmar Green Network(မြန်မာအစိမ်း​ရောင်ကွန်ယက်)</a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://www.facebook.com/cleanmyanmar.mm/">Clean Myanmar</a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://m.facebook.com/106358487465539">Save The Trees</a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://m.facebook.com/105908041289057">Save tree MC</a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://m.facebook.com/472946186239916">Bye Bye Plastic Bags Myanmar </a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://www.facebook.com/ChuChuYangon/">ChuChu@ကြွပ်ကြွပ်</a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://www.facebook.com/cleanyangon/">Clean Yangon</a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://www.facebook.com/Clean-Mandalay-Campaign-183812978887133/">Clean Mandalay Campaign</a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://www.facebook.com/cleanbagan/">Clean Bagan</a>
				</li>
				<li>
					<a style="text-decoration:none;" target="_blank" href="https://www.facebook.com/Greenness-603819303151049/">Greenness</a>
				</li>				
			</ul>
		</p>
	</article>

	<hr>
	<h3>
		Thank you for reading this far. Now go make a change today!
		@guest
		<a href="{{ route('community') }}" class="btn btn-primary">Join the community now!</a>
		@endguest
	</h3>
	<hr>

</div>
@endsection