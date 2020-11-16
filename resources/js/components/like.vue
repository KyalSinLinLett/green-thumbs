<template>
	<div class="d-flex justify-content-between">
		<i><strong>Green thumbs:</strong> {{ reac_num_likes }}</i>
		<button class="btn btn-warning" @click="likePost" v-text="buttonText"></button>
	</div>
</template>

<script>
	export default {	
		props: [
			'pid',
			'likes', // verb
		], 

		data() {
			return {
				status: this.likes,
				reac_num_likes: null,
			}
		},

		mounted() {	
			this.getlike();
		},

		methods: {
			likePost() {
				axios.post('/post/like/' + this.pid)
					.then(response => {
						this.status = !this.status;
					})
					.catch(errors => {
						if (errors.response.status == 401) {
							window.location = '/login';
						}
					});

				this.getlike();
			},

			getlike() {
				axios.get('/post/getlike/' + this.pid)
					.then(response => {
						// console.log(response.data.num_likes);
						this.reac_num_likes = response.data.num_likes;
					})
			}
		}, 

		computed: {	
			buttonText() {
				return (this.status) ? 'Unlike' : 'Like';
			},
		}
	}
</script>