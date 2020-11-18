<template>
  <div id="map">
    <!-- Start of map -->
    <div class="card" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">

      <div class="card-header text-light" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
        <strong>
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tree-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z"/>
            <path d="M7 13.5h2V16H7v-2.5z"/>
          </svg>
          Forest loss as of {{ curr_year }} 
          <small v-if="curr_year > 2019">*Prediction</small>
        </strong>
      </div>

      <div class="card-body">
        <p id="information">
          Myanmar lost a total of <strong>{{ areaLossByYear }} ha</strong> in year <strong>{{ curr_year }}</strong>.<br>
        </p>


        <h6 class="mb-3" style="font-style: italic;">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
          </svg>
          <strong>Main</strong> drivers for <strong>forest loss</strong> in <strong>{{ curr_year }}</strong>
        </h6>

        <ul class="list-group list-group-horizontal-md mb-3">
          <li class="list-group-item">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-tree" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0zM5.934 4.5H6a.5.5 0 0 1 .424.765L4.402 8.5H4.5a.5.5 0 0 1 .447.724L3.31 12.5h9.382l-1.638-3.276A.5.5 0 0 1 11.5 8.5h.098L9.576 5.265A.5.5 0 0 1 10 4.5h.066L8 1.401 5.934 4.5z"/>
              <path d="M7 13.5h2V16H7v-2.5z"/>
            </svg>
            <strong id="drvr">
              Forestry:
            </strong> {{ yearly_driver.Forestry }}
            <strong>%</strong>
          </li>
          <li class="list-group-item">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-grid-3x3-gap-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
            </svg>
            <strong id="drvr">
              Agricultural:
            </strong> {{ yearly_driver['Shifting agriculture'] }}
            <strong>%</strong>
          </li>
          <li class="list-group-item">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
            </svg>
            <strong id="drvr">
              Deforestation for commodity:
            </strong> {{ yearly_driver['Commodity driven deforestation'] }}
            <strong>%</strong>
          </li>
          <li class="list-group-item">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
              <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
            </svg>
            <strong id="drvr">
              Urbanization:
            </strong> {{ yearly_driver.Urbanization }}
            <strong>%</strong>
          </li>
        </ul>

        <div class="mb-3">
          <l-map :center="[21.9162, 95.9560]" :zoom="6" style="height: 470px; border-radius: 1.5rem; padding: 20px;" :options="mapOptions">
            <l-choropleth-layer :data="mmRegionData" titleKey="ST" idKey="region_id" :value="value" geojsonIdKey="OBJECTID" :geojson="mmGeoJson" :colorScale="colorScale">
              <template slot-scope="props">
                <l-info-control :item="props.currentItem" :unit="props.unit" title="Region (forest loss)" placeholder="Hover over a region"/>
                <l-reference-chart title="Forest loss" :colorScale="colorScale" :min="props.min" :max="props.max" position="topright"/>
              </template>
            </l-choropleth-layer>
          </l-map>
        </div>
        
        <h4>Current year: <strong>{{ curr_year }}</strong></h4>
        <small class="mt-3">Scroll to see the annual changes throughout the years</small class="mt-3"><br>
          <div class="slidecontainer">
            <input v-model="curr_year" 
            @change="changeYear" 
            type="range" 
            min="2010" max="2019" 
            step="1" 
            value="curr_year" 
            class="slider" 
            id="myRange" 
            data-toggle="tooltip" 
            :title="curr_year">
          </div>

        </div>
      </div>
      <!-- End of map -->
    </div>

  </template>

<script>
  import { InfoControl, ReferenceChart, ChoroplethLayer } from 'vue-choropleth'
  import { geojson } from './data/mm-region-geojson'
  import mmGeoJson from './data/myanmar.json'
  import {yearly_loss} from './data/yearly-loss.js'
  import {LMap} from 'vue2-leaflet'

  import {y_drivers} from './data/y_drivers.js'



// import { mmRegionData22 } from './data/mm-region-data'
// import { mmRegionData21 } from './data/mm-region-data'
// import { mmRegionData20 } from './data/mm-region-data'
import { mmRegionData19 } from './data/mm-region-data'
import { mmRegionData18 } from './data/mm-region-data'
import { mmRegionData17 } from './data/mm-region-data'
import { mmRegionData16 } from './data/mm-region-data'
import { mmRegionData15 } from './data/mm-region-data'
import { mmRegionData14 } from './data/mm-region-data'
import { mmRegionData13 } from './data/mm-region-data'
import { mmRegionData12 } from './data/mm-region-data'
import { mmRegionData11 } from './data/mm-region-data'
import { mmRegionData10 } from './data/mm-region-data'


export default {
  name: "app",
  components: { 
    LMap,
    'l-info-control': InfoControl, 
    'l-reference-chart': ReferenceChart, 
    'l-choropleth-layer': ChoroplethLayer 
  },

  created() {
    this.mmRegionData = mmRegionData19;
    this.areaLossByYear = this.yearly_loss[this.curr_year];
    this.yearly_driver = this.y_drivers[this.curr_year];
  },


  data() {
    return {
      mmRegionData: null,
      mmGeoJson,
      yearly_loss,
      areaLossByYear: null,
      yearly_driver: [],
      colorScale: ["497c08", "cbeca0", "f49a83", "993921"],
      value: {
        key: "loss_area",
        metric: "Hectare"
      },
      mapOptions: {
        attributionControl: true
      },
      currentStrokeColor: '3d3213',
      curr_year: "2015",
      y_drivers,
    }
  },

  methods: {  
    changeYear() {
      this.curr_year = document.getElementById('myRange').value;

      // Sorry for such a bad code quality and practise, didnt have enough time to implement DRY methods,
      // if in the future we had a chance to improve on this app with more resources, 
      // we plan to create an API that is made specifically to handle these requests
      // but now we are just hard coding in the data. Sorry once again :(
      // if (this.curr_year == 2022)
      //   this.mmRegionData = mmRegionData22;
      // if (this.curr_year == 2021)
      //   this.mmRegionData = mmRegionData21;
      // if (this.curr_year == 2020)
      //   this.mmRegionData = mmRegionData19;
      if (this.curr_year == 2019){
        this.mmRegionData = mmRegionData19;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2018){
        this.mmRegionData = mmRegionData18;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2017){
        this.mmRegionData = mmRegionData17;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2016){
        this.mmRegionData = mmRegionData16;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2015){
        this.mmRegionData = mmRegionData15;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2014){
        this.mmRegionData = mmRegionData14;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2013){
        this.mmRegionData = mmRegionData13;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2012){
        this.mmRegionData = mmRegionData12;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2011){
        this.mmRegionData = mmRegionData11;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      else if (this.curr_year == 2010){
        this.mmRegionData = mmRegionData10;
        this.areaLossByYear = this.yearly_loss[this.curr_year];
        this.yearly_driver = this.y_drivers[this.curr_year];
        // console.log(this.areaLossByYear);
      }
      
    }
  }
}
</script>

<style>

body {
  background-color: #ffffff;
}

#map {
  font-family: monospace;
}

#information {
  font-style: italic;
  font-size: 15px;  
}

#national {
  overflow: scroll;
  max-height: 670px;
  padding-right: 20px;
  padding-top: 20px;
  padding-left: 3px;
}

#drvr {
  font-size: 13px;
  font-style: italic;
}

.slidecontainer {
  width: 100%; /* Width of the outside container */
}

/* The slider itself */
.slider {
  -webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 100%; /* Full-width */
  height: 25px; /* Specified height */
  background: #d3d3d3; /* Grey background */
  outline: none; /* Remove outline */
  opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #497c08; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}
</style>
