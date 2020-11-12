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


			<div class="row" v-if='region'>
				<div class="col-4">
					<div class="google-maps mt-4">
						<p>
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-map" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
							</svg>
							Map of <strong>{{ region.toUpperCase() }}</strong>
						</p>
						<iframe width="100%" height="600" id="gmap_canvas" :src="`https://maps.google.com/maps?q=${ region },Myanmar&t=&z=13&ie=UTF8&iwloc=&output=embed`" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
						</iframe>
					</div>
				</div>
				<div class="col-8">
					<div class="row mt-3">
						<div class="col-lg">
							<div class="card" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
								<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);background-color: #436e44">
									<h5 style="text-align: center" class="mt-2">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
										</svg>
										{{ region.toUpperCase() }}
									</h5>
								</div>
								<div class="card-body">
									<p>
										Total area of <strong>{{ region.toUpperCase() }}:</strong> <i>{{ chosen_region_info.total }}</i><strong> ha</strong>
									</p>
									<p>
										<strong>Forest cover loss</strong> from <strong>2001-2012:</strong> <i>{{ chosen_region_info.loss01_12 }}</i><strong> ha</strong>
									</p>
									<p>
										<strong>Forest gain</strong> from <strong>2000-2012:</strong> <i>{{ chosen_region_info.gain_00_12 }}</i><strong> ha</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-lg">
							<div class="card" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
								<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);background-color: #436e44">
									<h5 style="text-align: center" class="mt-2">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
										</svg>
										{{ region.toUpperCase() }} regional loss throughout the years
									</h5>
								</div>

								<div class="card-body">
									<canvas :id="`${region}`"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div v-else>
				<p class="p-2">Such empty...</p>
			</div>
		</div>
	</div>
	<!-- end ofRegional information -->
</template>

<script>
	
	import Chart from 'chart.js'
	import {ayerChartData} from './data/regional-data.js'
	import {bagoChartData} from './data/regional-data.js'
	import {chinChartData} from './data/regional-data.js'
	import {kachinChartData} from './data/regional-data.js'
	import {kayahChartData} from './data/regional-data.js'
	import {kayinChartData} from './data/regional-data.js'
	import {shanChartData} from './data/regional-data.js'
	import {sagaingChartData} from './data/regional-data.js'
	import {rakhineChartData} from './data/regional-data.js'
	import {magwayChartData} from './data/regional-data.js'
	import {monChartData} from './data/regional-data.js'
	import {mandalayChartData} from './data/regional-data.js'
	import {naypyitawChartData} from './data/regional-data.js'
	import {tanintharyiChartData} from './data/regional-data.js'
	import {yangonChartData} from './data/regional-data.js'

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

				ayerChartData: ayerChartData,
				bagoChartData: bagoChartData,
				chinChartData: chinChartData,
				kachinChartData: kachinChartData,
				kayahChartData: kayahChartData,
				kayinChartData: kayinChartData,
				magwayChartData: magwayChartData,
				mandalayChartData: mandalayChartData,
				monChartData: monChartData,
				rakhineChartData: rakhineChartData,
				sagaingChartData: sagaingChartData,
				shanChartData: shanChartData,
				tanintharyiChartData: tanintharyiChartData,
				yangonChartData: yangonChartData,
				naypyitawChartData: naypyitawChartData,
			}
		},

		methods: {
			typed() {
				this.chosen_region = this.regional_loss[this.region.toLowerCase()]
				this.chosen_region_info = this.regional_info[this.region.toLowerCase()]
				this.chosen_subregion = this.subregion_yearly[this.region.toLowerCase()]

				var chartData = null;

				if (this.region.toLowerCase() == 'ayeyarwady') {
					chartData = this.ayerChartData;
				}else if (this.region.toLowerCase() == 'bago') {
					chartData = this.bagoChartData;
				}else if (this.region.toLowerCase() == 'chin') {
					chartData = this.chinChartData;
				}else if (this.region.toLowerCase() == 'kayin') {
					chartData = this.kayinChartData;
				}else if (this.region.toLowerCase() == 'kayah') {
					chartData = this.kayahChartData;
				}else if (this.region.toLowerCase() == 'kachin') {
					chartData = this.kachinChartData;
				}else if (this.region.toLowerCase() == 'rakhine') {
					chartData = this.rakhineChartData;
				}else if (this.region.toLowerCase() == 'mon') {
					chartData = this.monChartData;
				}else if (this.region.toLowerCase() == 'mandalay') {
					chartData = this.mandalayChartData;
				}else if (this.region.toLowerCase() == 'naypyitaw') {
					chartData = this.naypyitawChartData;
				}else if (this.region.toLowerCase() == 'shan') {
					chartData = this.shanChartData;
				}else if (this.region.toLowerCase() == 'sagaing') {
					chartData = this.sagaingChartData;
				}else if (this.region.toLowerCase() == 'tanintharyi') {
					chartData = this.tanintharyiChartData;
				}else if (this.region.toLowerCase() == 'yangon') {
					chartData = this.yangonChartData;
				}

				this.createChart(this.region, chartData)
			},

			createChart(chartId, chartData){
				const ctx = document.getElementById(chartId);
				const myChart = new Chart(ctx, {
					type: 'bar',
					data: chartData.data,
					options: {
						responsive: true,
						lineTension: 1,
						scales: { yAxes: [{ ticks: {beginAtZero: true,padding: 25,}}]}
					},
				})
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