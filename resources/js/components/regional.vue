<template>
	<!-- Regional information -->
	<div id='regional' class="card mt-3" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
	  <div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
	    <h3 class="mt-2">
	      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	        <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
	        <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	      </svg>
	      Regional Information
	    </h3>
	  </div>
	  <div class="card-body">
	    <input type="text" 
	           name="region name" 
	           class="form-control"
	           placeholder="Enter a region in myanmar"
	           v-model='region'
	           @keyup="typed">
	    <div class="row">
	      <div class="col-4">
	        Region map
	        <div class="google-maps">
	            <iframe width="100%" id="gmap_canvas" :src="`https://maps.google.com/maps?q=${ region },Myanmar&t=&z=13&ie=UTF8&iwloc=&output=embed`" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
	            </iframe>
	        </div>
	      </div>
	      <div class="col-8">
	      	<div class="row">
	      		<div class="card">
	      			<ul>
	      				<li>{{ chosen_region_info.total }}</li>
	      				<li>{{ chosen_region_info.loss01_12 }}</li>
	      				<li>{{ chosen_region_info.gain_00_12 }}</li>
	      			</ul>
	      		</div>
	      	</div>
	      	<div class="row">
	      		<div class="col-4">
	      			<ul>
	      				<li class="mr-4">{{ chosen_region['2001'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2002'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2003'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2004'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2005'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2006'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2007'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2008'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2009'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2010'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2011'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2012'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2013'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2014'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2015'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2016'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2017'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2018'] }}</li>
	      				<li class="mr-4">{{ chosen_region['2019'] }}</li>
	      			</ul>
	      		</div>
	      		<div class="col-4">
	      			<div>
	      				<p>{{ chosen_subregion.keys }}</p>
	      			</div>
	      		</div>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end ofRegional information -->
</template>

<script>
	
	import {regional_loss} from './data/regional-loss.js'
	import {regional_info} from './data/regional-info.js'
	import {subregion_yearly} from './data/subregion_yearly.js'

	export default {	
		
		data() {
			return {
				regional_loss: regional_loss,
				region: null,
				chosen_region: [],

				regional_info: regional_info,
				chosen_region_info: [],

				subregion_yearly: subregion_yearly,
				chosen_subregion: [],
			}
		},

		methods: {
			typed() {
				this.chosen_region = this.regional_loss[this.region.toLowerCase()]
				this.chosen_region_info = this.regional_info[this.region.toLowerCase()]
				this.chosen_subregion = this.subregion_yearly[this.region.toLowerCase()]
			}
		}

	}
</script>

<style scoped>
	#regional {
		font-family: monospace;
	}
	#gmap_canvas {
		max-height: 600px;
	}
</style>