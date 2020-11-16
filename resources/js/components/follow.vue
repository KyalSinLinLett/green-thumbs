<template>
	<div>
		<div style="text-align: center;">
			<table class="table">
			  <thead class="thead">
			    <tr>
			      <th scope="col">Followers</th>
			      <th scope="col">Following</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>{{follower}}</td>
			      <td>{{following}}</td>
			    </tr>
			  </tbody>
			</table>			
		</div>	

		<button class="btn btn-success" @click="follow" v-text="followStatusText"></button>
	</div>
</template>

<script>
	export default {
		props: [
			'uid',
			'follows',
		],

		data() {
			return {
				status: this.follows,
				follower: null,
				following: null,
			}
		},

		mounted() {
			this.getFollowers();
			this.getFollowing();
		},

		methods: {
			follow() {
				axios.post('/profile/follow/' + this.uid)
					.then(response => {
						this.status = !this.status;
					})

				this.getFollowers();
				this.getFollowing();
			}, 

			getFollowers() {
				axios.get('/profile/getFollowers/' + this.uid)
					.then(response => {
						this.follower = response.data.follower_count;
					})
			},

			getFollowing() {
				axios.get('/profile/getFollowing/' + this.uid)
					.then(response => {
						this.following = response.data.following_count;
					})
			}
		},

		computed: {
			followStatusText() {
				return (this.status) ? 'Unfollow' : 'Follow'
			}
		}


	}
</script>